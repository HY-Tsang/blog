(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([[28],{QDV1:function(e,t,a){"use strict";var n=a("g09b");Object.defineProperty(t,"__esModule",{value:!0}),t.queryRule=d,t.addRule=s,t.updateRule=p,t.removeRule=f,t.forceDeleteRule=w,t.restoreRule=v;var r=n(a("d6i3")),u=n(a("1l/V")),c=n(a("sy1d"));function d(e){return l.apply(this,arguments)}function l(){return l=(0,u.default)(r.default.mark(function e(t){return r.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",(0,c.default)("/api/notes",{params:t}));case 1:case"end":return e.stop()}},e)})),l.apply(this,arguments)}function s(e){return i.apply(this,arguments)}function i(){return i=(0,u.default)(r.default.mark(function e(t){return r.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",(0,c.default)("/api/notes",{method:"POST",data:t}));case 1:case"end":return e.stop()}},e)})),i.apply(this,arguments)}function p(e){return o.apply(this,arguments)}function o(){return o=(0,u.default)(r.default.mark(function e(t){return r.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",(0,c.default)("/api/notes/".concat(t.id),{method:"PUT",data:t}));case 1:case"end":return e.stop()}},e)})),o.apply(this,arguments)}function f(e){return h.apply(this,arguments)}function h(){return h=(0,u.default)(r.default.mark(function e(t){return r.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",(0,c.default)("/api/notes/".concat(t.id),{method:"DELETE",data:t}));case 1:case"end":return e.stop()}},e)})),h.apply(this,arguments)}function w(e){return y.apply(this,arguments)}function y(){return y=(0,u.default)(r.default.mark(function e(t){return r.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",(0,c.default)("/api/notes/".concat(t.id,"/forceDelete"),{method:"DELETE",data:t}));case 1:case"end":return e.stop()}},e)})),y.apply(this,arguments)}function v(e){return x.apply(this,arguments)}function x(){return x=(0,u.default)(r.default.mark(function e(t){return r.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",(0,c.default)("/api/notes/".concat(t.id,"/restore"),{method:"PATCH",data:t}));case 1:case"end":return e.stop()}},e)})),x.apply(this,arguments)}},bYhT:function(e,t,a){"use strict";var n=a("g09b");Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=n(a("p0pE")),u=n(a("d6i3")),c=a("QDV1"),d={namespace:"adminAndnoteAndindex",state:{data:{list:[],pagination:{}}},effects:{fetch:u.default.mark(function e(t,a){var n,r,d,l;return u.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return n=t.payload,r=a.call,d=a.put,e.next=4,r(c.queryRule,n);case 4:return l=e.sent,e.next=7,d({type:"save",payload:l});case 7:case"end":return e.stop()}},e)}),add:u.default.mark(function e(t,a){var n,r,d,l,s;return u.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return n=t.payload,r=t.callback,d=a.call,l=a.put,e.next=4,d(c.addRule,n);case 4:return s=e.sent,e.next=7,l({type:"new",payload:s});case 7:r&&r();case 8:case"end":return e.stop()}},e)}),update:u.default.mark(function e(t,a){var n,r,d,l,s;return u.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return n=t.payload,r=t.callback,d=a.call,l=a.put,e.next=4,d(c.updateRule,n);case 4:return s=e.sent,e.next=7,l({type:"edit",payload:s});case 7:r&&r();case 8:case"end":return e.stop()}},e)}),destroy:u.default.mark(function e(t,a){var n,r,d,l,s;return u.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return n=t.payload,r=t.callback,d=a.call,l=a.put,e.next=4,d(c.removeRule,n);case 4:return s=e.sent,e.next=7,l({type:"edit",payload:s});case 7:r&&r();case 8:case"end":return e.stop()}},e)}),forceDelete:u.default.mark(function e(t,a){var n,r,d,l;return u.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return n=t.payload,r=t.callback,d=a.call,l=a.put,e.next=4,d(c.forceDeleteRule,n);case 4:return e.next=6,l({type:"remove",payload:n.id});case 6:r&&r();case 7:case"end":return e.stop()}},e)}),restore:u.default.mark(function e(t,a){var n,r,d,l,s;return u.default.wrap(function(e){while(1)switch(e.prev=e.next){case 0:return n=t.payload,r=t.callback,d=a.call,l=a.put,e.next=4,d(c.restoreRule,n);case 4:return s=e.sent,e.next=7,l({type:"edit",payload:s});case 7:r&&r();case 8:case"end":return e.stop()}},e)})},reducers:{save:function(e,t){return(0,r.default)({},e,{data:t.payload})},new:function(e,t){return void 0!==e&&e.data.list.push(t.payload.data),(0,r.default)({data:t.payload},e)},edit:function(e,t){return void 0!==e&&e.data.list.forEach(function(a,n){a.id===t.payload.data.id&&(e.data.list[n]=t.payload.data)}),(0,r.default)({data:t.payload},e)},remove:function(e,t){return void 0!==e&&e.data.list.forEach(function(a,n){a.id===t.payload&&e.data.list.splice(n,1)}),(0,r.default)({data:t.payload},e)}}},l=d;t.default=l}}]);