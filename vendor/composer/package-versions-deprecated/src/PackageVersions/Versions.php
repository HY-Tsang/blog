<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'baijunyao/laravel-bjyblog';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'algolia/algoliasearch-client-php' => '2.6.1@dd7eb942ff15c45179043b4cce51e53b4cf10112',
  'aliyuncs/oss-sdk-php' => 'v2.3.1@053d7ba9e798e4c09b9c5c1edab153d25ea9643a',
  'appstract/laravel-opcache' => '3.2.1@0807d573459ff8b5d209d35e7ebe459f64bfd6f3',
  'appstract/lush-http' => '0.5.5@5e363176ba54751b58bcbcd821bae1912cc8fe7c',
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'baidu/aip-sdk' => '2.2.12.0@17c7a72411d0fa5e31adb1cd08d1a07e179ffdea',
  'baijunyao/laravel-flash' => 'v2.0.0@5c6676c210cff43e86bce3656ac6f22db5efff63',
  'baijunyao/laravel-jquery' => 'v1.0.2@ad16b415e6c923197f4f722107470d6c87b19bff',
  'baijunyao/laravel-plugin-manager' => 'v3.0.1@1d2f75619912d3063eaf25574f8e61cadc357ec3',
  'baijunyao/laravel-print' => 'v3.0.6@c2a8e0473634e6a19637d6ebc6c06b022ef62eaa',
  'baijunyao/laravel-restful' => 'v2.3.0@1e5cf4f325a2b711cc8467d436e33c80c83e3f96',
  'baijunyao/laravel-scout-elasticsearch' => 'v5.1.0@efd6678d872d3f2764db97e0db096c85c3162ae7',
  'baijunyao/laravel-support' => 'v1.3.0@15770446fa2fe6b09a0477e47517780363512a2f',
  'baijunyao/laravel-toastr' => 'v1.1.0@80f9dfd2bdaa719d5a99cd9c767a3b5177b2bd27',
  'baijunyao/laravel-upload' => 'v2.0.0@c62e3e5651f7e445cc284ced8a7f74278a4af73f',
  'brick/math' => '0.8.15@9b08d412b9da9455b210459ff71414de7e6241cd',
  'caouecs/laravel-lang' => '4.0.11@134e1cbf9be14d97fc7937d7df784eae2d4bfa3c',
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'composer/package-versions-deprecated' => '1.8.0@98df7f1b293c0550bd5b1ce6b60b59bdda23aa47',
  'composer/semver' => '1.5.1@c6bea70230ef4dd483e6bbcab6005f682ed3a8de',
  'davejamesmiller/laravel-breadcrumbs' => '5.3.2@99f92a706faefb5e1816caa96e877a0184509e5b',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/cache' => '1.10.1@35a4a70cd94e09e2259dfae7488afc6b474ecbd3',
  'doctrine/dbal' => '2.10.2@aab745e7b6b2de3b47019da81e7225e14dcfdac8',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dragonmantank/cron-expression' => 'v2.3.0@72b6fbf76adb3cf5bc0db68559b33d41219aba27',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'elasticsearch/elasticsearch' => 'v6.7.2@9ba89f905ebf699e72dacffa410331c7fecc8255',
  'ezyang/htmlpurifier' => 'v4.12.0@a617e55bc62a87eec73bd456d146d134ad716f03',
  'facade/ignition-contracts' => '1.0.0@f445db0fb86f48e205787b2592840dd9c80ded28',
  'fideloper/proxy' => '4.3.0@ec38ad69ee378a1eec04fb0e417a97cfaf7ed11a',
  'firebase/php-jwt' => 'v5.2.0@feb0e820b8436873675fd3aca04f3728eb2185cb',
  'fruitcake/laravel-cors' => 'v1.0.6@1d127dbec313e2e227d65e0c483765d8d7559bf6',
  'fukuball/jieba-php' => '0.33@a5980dc88ae98a261a0bdb1130be14d0136b373f',
  'genealabs/laravel-model-caching' => '0.8.6@6ebe855e5ae9a9a9c3c7b43764d12f2b7cf261d2',
  'genealabs/laravel-pivot-events' => '0.3.0@7f35d5af019558474c0afc437bfa49ee161b658b',
  'graham-campbell/markdown' => 'v11.2.1@7ead48c43098b562707a30650843d4279786b0d9',
  'guzzlehttp/guzzle' => '6.5.4@a4a1b6930528a8f7ee03518e6442ec7a44155d9d',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'iidestiny/flysystem-oss' => '1.4.0@62974d7fe2db288a3a131d4094d2358f072ae9b6',
  'iidestiny/laravel-filesystem-oss' => '1.3.0@f412871b62888c624a864c68f8130476adfa37d4',
  'intervention/image' => '2.5.1@abbf18d5ab8367f96b3205ca3c89fb2fa598c69e',
  'jaybizzle/crawler-detect' => 'v1.2.95@a7936c4b60c78f8ae9024eeecf7e8d4cf470b730',
  'jean85/pretty-package-versions' => '1.3.0@e3517fb11b67e798239354fe8213927d012ad8f9',
  'jenssegers/agent' => 'v2.6.3@bcb895395e460478e101f41cdab139c48dc721ce',
  'kalnoy/nestedset' => 'v5.0.1@d4fe17f9abd3414014bda32a5612c9ed24246f99',
  'laminas/laminas-diactoros' => '2.3.0@5ab185dba63ec655a2380c97711b09adc7061f89',
  'laminas/laminas-zendframework-bridge' => '1.0.4@fcd87520e4943d968557803919523772475e8ea3',
  'laravel/framework' => 'v7.13.0@6fa69bfbd57744a5bbec5538ce483919b3fd625f',
  'laravel/passport' => 'v8.5.0@6affa6ed600c5f8909385fbae7cf6f8af3db2d39',
  'laravel/scout' => 'v8.0.1@85e018b752088057881f780e05a85c8657ff8e95',
  'laravel/socialite' => 'v4.3.2@4bd66ee416fea04398dee5b8c32d65719a075db4',
  'laravel/tinker' => 'v2.4.0@cde90a7335a2130a4488beb68f4b2141869241db',
  'laravel/ui' => 'v2.0.3@15368c5328efb7ce94f35ca750acde9b496ab1b1',
  'laravelium/feed' => 'v7.0.1@e7f108f49abec3a3c836636a5c8fb1d3b8d3d1d7',
  'lcobucci/jwt' => '3.3.2@56f10808089e38623345e28af2f2d5e4eb579455',
  'league/commonmark' => '1.4.3@412639f7cfbc0b31ad2455b2fe965095f66ae505',
  'league/commonmark-ext-strikethrough' => 'v1.1.0@1a7d8f3a519da0b3cf2e965273615d4dba9d22e1',
  'league/commonmark-ext-table' => 'v2.1.0@3228888ea69636e855efcf6636ff8e6316933fe7',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.0.69@7106f78428a344bc4f643c233a94e48795f10967',
  'league/html-to-markdown' => '4.9.1@1dcd0f85de786f46a7f224a27cc3d709ddd2a68c',
  'league/oauth1-client' => '1.7.0@fca5f160650cb74d23fc11aa570dd61f86dcf647',
  'league/oauth2-server' => '8.1.0@b53d324f774eb782250f7d8973811a33a75ecdef',
  'mews/purifier' => '3.2.2@75e4d9a0553b31c1fd31aef65f9561c30dbe5e5e',
  'mobiledetect/mobiledetectlib' => '2.8.34@6f8113f57a508494ca36acbcfa2dc2d923c7ed5b',
  'monolog/monolog' => '2.1.0@38914429aac460e8e4616c8cb486ecb40ec90bb1',
  'nesbot/carbon' => '2.35.0@4b9bd835261ef23d36397a46a76b496a458305e5',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'nyholm/psr7' => '1.3.0@c17f4f73985f62054a331cbc4ffdf9868c4ef256',
  'opis/closure' => '3.5.3@cac47092144043d5d676e2e7cf8d0d2f83fc89ca',
  'overtrue/laravel-follow' => '1.1.16@3f32a9570f6277d7f74c9bf94e8eb01434b84a3a',
  'overtrue/laravel-lang' => '3.0.18@d69824be235f6142e3e4226d9918da76e4727774',
  'paquettg/php-html-parser' => '2.2.1@668c770fc5724ea3f15b8791435f054835be8d5e',
  'paquettg/string-encode' => '1.0.1@a8708e9fac9d5ddfc8fc2aac6004e2cd05d80fee',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'php-http/client-common' => '2.1.0@a8b29678d61556f45d6236b1667db16d998ceec5',
  'php-http/discovery' => '1.7.4@82dbef649ccffd8e4f22e1953c3a5265992b83c0',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/message' => '1.8.0@ce8f43ac1e294b54aabf5808515c3554a19c1e1c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => 'v1.0.0@dc494cdc9d7160b9a09bd5573272195242ce7980',
  'phpoption/phpoption' => '1.7.3@4acfd6a4b33a509d8c88f50e5222f734b6aeebae',
  'phpseclib/phpseclib' => '2.0.27@34620af4df7d1988d8f0d7e91f6c8a3bf931d8dc',
  'predis/predis' => 'v1.1.1@f0210e38881631afeafb56ab43405a92cafd9fd1',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.0@496a823ef742b632934724bf769560c2a5c7c44e',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.4@a8aec1b2981ab66882a01cce36a49b6317dc3560',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.0.1@925ad8cf55ba7a3fc92e332c58fd0478ace3e1ca',
  'ramsey/uuid' => '4.0.1@ba8fff1d3abb8bb4d35a135ed22a31c6ef3ede3d',
  'react/promise' => 'v2.8.0@f3cff96a19736714524ca0dd1d4130de73dbbbc4',
  'sentry/sdk' => '2.1.0@18921af9c2777517ef9fb480845c22a98554d6af',
  'sentry/sentry' => '2.4.0@e44561875e0d724bac3d9cdb705bf58847acd425',
  'sentry/sentry-laravel' => '1.7.0@72684758f15aae4562149460b70fea81e9a06a25',
  'socialiteproviders/manager' => 'v3.5@7a5872d9e4b22bb26ecd0c69ea9ddbaad8c0f570',
  'socialiteproviders/qq' => 'v3.0.1@fc338245c348189880911827c162ef73f651ba44',
  'socialiteproviders/vkontakte' => 'v4.1.0@81f4b79c47c4c6aba8f1f2685dddeb0505f1e71a',
  'socialiteproviders/weibo' => 'v3.0.0@9df4737ad28f220cc97ac5590ab78c8de46825ee',
  'spatie/db-dumper' => '2.16.1@56448e8f41d4e8e83babf701d5708b1e597e8ec6',
  'spatie/laravel-backup' => '6.10.0@ac45933316893ec89883ebb9d9a51e9c6f13ebaa',
  'spatie/temporary-directory' => '1.2.2@fcb127e615700751dac2aefee0ea2808ff3f5bb1',
  'stichoza/google-translate-php' => 'v4.1.0@f5b8be4f573d53a52190651de27f16c679d84990',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/console' => 'v5.0.8@5fa1caadc8cdaa17bcfb25219f3b53fe294a9935',
  'symfony/css-selector' => 'v5.0.8@5f8d5271303dad260692ba73dfa21777d38e124e',
  'symfony/error-handler' => 'v5.0.8@949ffc17c3ac3a9f8e6232220e2da33913c04ea4',
  'symfony/event-dispatcher' => 'v5.0.8@24f40d95385774ed5c71dbf014edd047e2f2f3dc',
  'symfony/event-dispatcher-contracts' => 'v2.1.2@405952c4e90941a17e52ef7489a2bd94870bb290',
  'symfony/finder' => 'v5.0.8@600a52c29afc0d1caa74acbec8d3095ca7e9910d',
  'symfony/http-foundation' => 'v5.0.8@e47fdf8b24edc12022ba52923150ec6484d7f57d',
  'symfony/http-kernel' => 'v5.0.8@3565e51eecd06106304baba5ccb7ba89db2d7d2b',
  'symfony/mime' => 'v5.0.8@5d6c81c39225a750f3f43bee15f03093fb9aaa0b',
  'symfony/options-resolver' => 'v5.0.8@3707e3caeff2b797c0bfaadd5eba723dd44e6bf1',
  'symfony/polyfill-ctype' => 'v1.17.0@e94c8b1bbe2bc77507a1056cdb06451c75b427f9',
  'symfony/polyfill-iconv' => 'v1.17.0@c4de7601eefbf25f9d47190abe07f79fe0a27424',
  'symfony/polyfill-intl-idn' => 'v1.17.0@3bff59ea7047e925be6b7f2059d60af31bb46d6a',
  'symfony/polyfill-mbstring' => 'v1.17.0@fa79b11539418b02fc5e1897267673ba2c19419c',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php73' => 'v1.17.0@a760d8964ff79ab9bf057613a5808284ec852ccc',
  'symfony/polyfill-uuid' => 'v1.17.0@6dbf0269e8aeab8253a5059c51c1760fb4034e87',
  'symfony/process' => 'v5.0.8@3179f68dff5bad14d38c4114a1dab98030801fd7',
  'symfony/psr-http-message-bridge' => 'v2.0.0@ce709cd9c90872c08c2427b45739d5f3c781ab4f',
  'symfony/routing' => 'v5.0.8@9b18480a6e101f8d9ab7c483ace7c19441be5111',
  'symfony/service-contracts' => 'v2.1.2@66a8f0957a3ca54e4f724e49028ab19d75a8918b',
  'symfony/translation' => 'v5.0.8@c3879db7a68fe3e12b41263b05879412c87b27fd',
  'symfony/translation-contracts' => 'v2.1.2@e5ca07c8f817f865f618aa072c2fe8e0e637340e',
  'symfony/var-dumper' => 'v5.0.8@09de28632f16f81058a85fcf318397218272a07b',
  'tijsverkoyen/css-to-inline-styles' => '2.2.2@dda2ee426acd6d801d5b7fd1001cde9b5f790e15',
  'vlucas/phpdotenv' => 'v4.1.6@0b32505d67c1abbfa829283c86bfc0642a661bf6',
  'voku/portable-ascii' => '1.5.1@e7f9bd5deff09a57318f9b900ab33a05acfcf4d3',
  'baijunyao/laravel-test-support' => 'v4.2.0@5786b38b42a4784b2cfa2d7967fecf839b5a5f2e',
  'barryvdh/laravel-ide-helper' => 'v2.7.0@5f677edc14bdcfdcac36633e6eea71b2728a4dbc',
  'barryvdh/reflection-docblock' => 'v2.0.6@6b69015d83d3daf9004a71a89f26e27d27ef6a16',
  'beyondcode/laravel-dump-server' => '1.4.0@1f1d18a2e43f96fd67c9f0269c53f8c3814867d9',
  'composer/ca-bundle' => '1.2.7@95c63ab2117a72f48f5a55da9740a3273d45b7fd',
  'composer/composer' => '1.10.6@be81b9c4735362c26876bdbfd3b5bc7e7f711c88',
  'composer/spdx-licenses' => '1.5.3@0c3e51e1880ca149682332770e25977c70cf9dae',
  'composer/xdebug-handler' => '1.4.1@1ab9842d69e64fb3a01be6b656501032d1b78cb7',
  'doctrine/annotations' => '1.10.3@5db60a4969eba0e0c197a19c077780aadbc43c5d',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'facade/flare-client-php' => '1.3.2@db1e03426e7f9472c9ecd1092aff00f56aa6c004',
  'facade/ignition' => '2.0.5@38e1b180544bfefebe37e0f65980792ea78a534a',
  'filp/whoops' => '2.7.2@17d0d3f266c8f925ebd035cd36f83cf802b47d4a',
  'friendsofphp/php-cs-fixer' => 'v2.16.3@83baf823a33a1cbd5416c8626935cf3f843c10b0',
  'fzaninotto/faker' => 'v1.9.1@fc10d778e4b84d5bd315dad194661e091d307c6f',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'itsgoingd/clockwork' => 'v4.1.5@cd9fcb65e70954f65d50c98a5e8d5782240cbe4e',
  'justinrainbow/json-schema' => '5.2.10@2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
  'laravel/dusk' => 'v5.11.0@e07cc46a1e39767739e8197189780b4c2639806d',
  'mockery/mockery' => '1.3.1@f69bbde7d7a75d6b2862d9ca8fab1cd28014b4be',
  'myclabs/deep-copy' => '1.9.5@b2c28789e80a97badd14145fda39b545d83ca3ef',
  'nunomaduro/collision' => 'v4.2.0@d50490417eded97be300a92cd7df7badc37a9018',
  'nunomaduro/larastan' => 'v0.5.5@0a24d9c809185b04d00d8b8c1b58a6581cae6c40',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'php-webdriver/webdriver' => '1.8.2@3308a70be084d6d7fd1ee5787b4c2e6eb4b70aab',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '5.1.0@cd72d394ca794d3466a3b2fc09d5a6c1dc86b47e',
  'phpdocumentor/type-resolver' => '1.1.0@7462d5f123dfc080dfdf26897032a6513644fc95',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpstan/phpstan' => '0.12.19@054f6d76b12ba9a6c13a5a8d5fcdf51219615f4d',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.5@63dda3b212a0025d380a745f91bdb4d8c985adb7',
  'scrivo/highlight.php' => 'v9.18.1.1@52fc21c99fd888e33aed4879e55a3646f8d40558',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'seld/jsonlint' => '1.8.0@ff2aa5420bfbc296cf6a0bc785fa5b35736de7c1',
  'seld/phar-utils' => '1.1.0@8800503d56b9867d43d9c303b9cbcc26016e82f0',
  'symfony/filesystem' => 'v5.0.8@7cd0dafc4353a0f62e307df90b48466379c8cc91',
  'symfony/polyfill-php70' => 'v1.17.0@82225c2d7d23d7e70515496d249c0152679b468e',
  'symfony/stopwatch' => 'v5.0.8@a1d86d30d4522423afc998f32404efa34fcf5a73',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.8.0@ab2cb0b3b559010b75981b1bdce728da3ee90ad6',
  'baijunyao/laravel-bjyblog' => 'dev-master@b5a4c024c56408c5eec5233e687d7e99c7d1e11f',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
