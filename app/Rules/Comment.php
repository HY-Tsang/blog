<?php

declare(strict_types=1);

namespace App\Rules;

use App\Models\Comment as CommentModel;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Date;

class Comment implements Rule
{
    private $message;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (in_array($value, ['test', '测试'])) {
            $this->message = '禁止无意义评论';

            return false;
        }

        $commentModel = new CommentModel();
        if (empty($commentModel->imageToUbb($value))) {
            $this->message = '内容不能为空';

            return false;
        }

        /** @var \App\Models\SocialiteUser $socialiteUser */
        $socialiteUser = auth()->guard('socialite')->user();

        /** @var \Illuminate\Support\Carbon|null $lastCommentDate */
        $lastCommentDate = $commentModel->where('socialite_user_id', $socialiteUser->id)
            ->orderBy('created_at', 'desc')
            ->value('created_at');

        if ($socialiteUser->is_admin !== 1 && $lastCommentDate !== null && $lastCommentDate->diffInMinutes() === 0) {
            $this->message = '评论太过频繁,请稍后再试.';

            return false;
        }

        $count = $commentModel
            ->where('socialite_user_id', $socialiteUser->id)
            ->whereDate('created_at', '=', Date::today())
            ->count();

        if ($socialiteUser->is_admin !== 1 && $count > 10) {
            $this->message = '评论已被限制.';

            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
