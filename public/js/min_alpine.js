( ()=> {
    var De=!1,
    Pe=!1,
    Q=[];
    function gt(e)
    {
        Nr(e)
    }
    function Nr(e)
    {
        Q.includes(e)||Q.push(e),Mr()
    }
    function Mr()
    {
        !Pe&&!De&&(De=!0,queueMicrotask(Cr))
    }
    function Cr()
    {
        De=!1,Pe=!0;
        for(let e=0;e<Q.length;e++)
            Q[e]();
        Q.length=0,Pe=!1
    }
    var b,R,j,Ie,Le=!0;
    function _t(e)
    {
        Le=!1,e(),Le=!0
    }
    function yt(e)
    {
        b=e.reactive,j=e.release,R=t=>e.effect(t,{scheduler:r=>{Le?gt(r):r()}}),Ie=e.raw
    }
    function Fe(e)
    {
        R=e
    }
    function xt(e)
    {
        let t=()=>{};
        return[n=>
            {
            let i=R(n);e._x_effects||(e._x_effects=new Set,e._x_runEffects=()=>{
                e._x_effects.forEach(o=>o())
            }),e._x_effects.add(i),t=()=>{i!==void 0&&(e._x_effects.delete(i),j(i))}},()=>{t()}]}var v=new WeakMap,bt=[],V=new WeakMap,vt=[],wt=[];function Et(e){wt.push(e)}
    function St(e,t)
    {
        typeof e=="function"&&t===void 0?vt.push(e):(V.has(e)||V.set(e,[]),V.get(e).push(t))
    }
    function At(e)
    {
        bt.push(e)}function Tt(e,t,r){v.has(e)||v.set(e,{}),v.get(e)[t]||(v.get(e)[t]=[]),v.get(e)[t].push(r)
    }
    var $e=new MutationObserver(Ot),Ke=!1;
    function ze()
    {
        $e.observe(document,{subtree:!0,childList:!0,attributes:!0,attributeOldValue:!0}),Ke=!0
    }
    function kr()
    {
        $e.disconnect(),Ke=!1
    }var Z=[],je=!1;

	function Pr(){Z=Z.concat($e.takeRecords()),Z.length&&!je&&(je=!0,queueMicrotask(()=>{Dr(),je=!1}))}
    function Dr(){Ot(Z),Z.length=0}
	function _(e){if(!Ke)return e();Pr(),kr();let t=e();return ze(),t}
	function Ot(e){let t=[],r=[],n=new Map,i=new Map;for(let o=0;o<e.length;o++)if(!e[o].target._x_ignoreMutationObserver&&(e[o].type==="childList"&&(e[o].addedNodes.forEach(s=>s.nodeType===1&&t.push(s)),e[o].removedNodes.forEach(s=>s.nodeType===1&&r.push(s))),e[o].type==="attributes")){let s=e[o].target,a=e[o].attributeName,c=e[o].oldValue,l=()=>{n.has(s)||n.set(s,[]),n.get(s).push({name:a,value:s.getAttribute(a)})},u=()=>{i.has(s)||i.set(s,[]),i.get(s).push(a)};s.hasAttribute(a)&&c===null?l():s.hasAttribute(a)?(u(),l()):u()}i.forEach((o,s)=>{v.get(s)&&o.forEach(a=>{v.get(s)[a]&&v.get(s)[a].forEach(c=>c())})}),n.forEach((o,s)=>{bt.forEach(a=>a(s,o))});for(let o of t)r.includes(o)||wt.forEach(s=>s(o));for(let o of r)t.includes(o)||(v.has(o)&&(Object.entries(v.get(o)).forEach(([s,a])=>{a.forEach(c=>c())}),v.delete(o)),V.has(o)&&(V.get(o).forEach(s=>s()),V.delete(o)),vt.forEach(s=>s(o)));t=null,r=null,n=null,i=null}
	function de(e,t,r){return e._x_dataStack=[t,...X(r||e)],()=>{e._x_dataStack=e._x_dataStack.filter(n=>n!==t)}}
	function Ve(e,t){let r=e._x_dataStack[0];Object.entries(t).forEach(([n,i])=>{r[n]=i})}
	function X(e){return e._x_dataStack?e._x_dataStack:e instanceof ShadowRoot?X(e.host):e.parentNode?X(e.parentNode):[]}function Be(e){return new Proxy({},{ownKeys:()=>Array.from(new Set(e.flatMap(t=>Object.keys(t)))),has:(t,r)=>e.some(n=>n.hasOwnProperty(r)),get:(t,r)=>(e.find(n=>n.hasOwnProperty(r))||{})[r],set:(t,r,n)=>{let i=e.find(o=>o.hasOwnProperty(r));return i?i[r]=n:e[e.length-1][r]=n,!0}})}
	function Rt(e){let t=n=>typeof n=="object"&&!Array.isArray(n)&&n!==null,r=(n,i="")=>{Object.entries(n).forEach(([o,s])=>{let a=i===""?o:`${i}.${o}`;typeof s=="object"&&s!==null&&s._x_interceptor?n[o]=s.initialize(e,a,o):t(s)&&s!==n&&!(s instanceof Element)&&r(s,a)})};return r(e)}
	function pe(e,t=()=>{}){let r={initialValue:void 0,_x_interceptor:!0,initialize(n,i,o){return e(this.initialValue,()=>Ir(n,i),s=>He(n,i,s),i,o)}};return t(r),n=>{if(typeof n=="object"&&n!==null&&n._x_interceptor){let i=r.initialize.bind(r);r.initialize=(o,s,a)=>{let c=n.initialize(o,s,a);return r.initialValue=c,i(o,s,a)}}else r.initialValue=n;return r}}
	function Ir(e,t)
    {
        return t.split(".").reduce((r,n)=>r[n],e)
    }
	function He(e,t,r)
    {
        if(typeof t=="string"&&(t=t.split(".")),t.length===1)e[t[0]]=r;
        else
        {
            if(t.length===0)
                throw error;
            return e[t[0]]||(e[t[0]]={}),He(e[t[0]],t.slice(1),r)
        }
    }
    var Nt={};
	function x(e,t)
    {
        Nt[e]=t
    }
	function ee(e,t)
    {
        return Object.entries(Nt).forEach(([r,n])=>
        {
            Object.defineProperty(e,`$${r}`,
            {
                get()
                {
                    return n(t,{Alpine:S,interceptor:pe})
                },enumerable:!1
            })
        }),e
    }
	function N(e,t,r={})
    {
        let n;
        return m(e,t)(i=>n=i,r),n
    }
	function m(...e)
    {
        return Mt(...e)
    }
    var Mt=We;
	function Ct(e)
    {
        Mt=e
    }
	function We(e,t)
    {
        let r={};
        ee(r,e);
        let n=[r,...X(e)];
        if(typeof t=="function")
            return Lr(n,t);
        let i=Fr(n,t);
        return $r.bind(null,e,t,i)
    }
	function Lr(e,t)
    {
        return(r=()=>{},
        {
            scope:n={},params:i=[]}={})=>{
                let o=t.apply(Be([n,...e]),i);
                me(r,o)
        }
    }
    var Ue={};
	function Kr(e)
    {
        if(Ue[e])
            return Ue[e];
        let t = Object.getPrototypeOf(async function(){}).constructor,
            r = /^[\n\s]*if.*\(.*\)/
                .test(e)
            ||
                /^(let|const)/
                .test(e)
                ?
                    `(() => { ${e} })()`
                :
                    e,n=new t(["__self","scope"],
                    `with (scope) { __self.result = ${r} }; __self.finished = true; return __self.result;`
        );
        return Ue[e]=n,n
    }
	function Fr(e,t)
    {
        let r=Kr(t);
        return(n=()=>{},
        {
            scope:i={},params:o=[]
        }={})=>{r.result=void 0,r.finished=!1;
            let s=Be([i,...e]),a=r(r,s);r.finished?me(n,r.result,s,o):a.then(c=>{me(n,c,s,o)})}}
    function me(e,t,r,n)
    {
        if(typeof t=="function")
        {
            let i=t.apply(r,n);
            i instanceof Promise ? i.then(o=>me(e,o,r,n)) : e(i)
        }
        else e(t)
    }
    function $r(e,t,r,...n)
    {
        try{
            return r(...n)
        }
        catch(i)
        {
            throw console.warn(`Alpine Expression Error: ${i.message}Expression: "${t}"`,e),i
        }
    }
    var qe="x-";
    function A(e="")
    {
        return qe+e
    }
    function kt(e)
    {
        qe=e
    }
    var Dt={};
    function p(e,t)
    {
        Dt[e]=t
    }
    function te(e,t,r)
    {
        let n={};
        return Array.from(t).map(jr((o,s)=>n[o]=s)).filter(Vr).map(Br(n,r)).sort(Hr).map(o=>zr(e,o))
    }
    var Ge=!1,Ye=[];
    function Pt(e)
    {
        Ge=!0;
        let t=()=>
        {
            for(;Ye.length;)Ye.shift()()
        },r=()=>
        {
            Ge=!1,t()
        };
        e(t),r()
    }
    function zr(e,t)
    {
        let r=()=>{},n=Dt[t.type]||r,i=[],o=d=>i.push(d),[s,a]=xt(e);i.push(a);
        let c=
        {
            Alpine:S,effect:s,cleanup:o,evaluateLater:m.bind(m,e),evaluate:N.bind(N,e)
        },l=()=>i.forEach(d=>d());Tt(e,t.original,l);
        let u=()=>
        {
            e._x_ignore||e._x_ignoreSelf||(n.inline&&n.inline(e,t,c),n=n.bind(n,e,t,c),Ge?Ye.push(n):n())
        };
        return u.runCleanups=l,u
    }
    var he=(e,t)=>(
        {
            name:r,value:n
        })=>(r.startsWith(e)&&(r=r.replace(e,t)),
        {
            name:r,value:n
        }),ge=e=>e;
        function jr(e)
        {
            return({name:t,value:r})=>
            {
                let{name:n,value:i}=It.reduce((o,s)=>s(o),{name:t,value:r});
                return n!==t&&e(n,t),{name:n,value:i}}}
                var It=[];
                function B(e)
                {
                    It.push(e)
                }
                function Vr({name:e})
                {
                    return Lt().test(e)
                }
                var Lt=()=>new RegExp(`^${qe}([^:^.]+)\\b`);
                function Br(e,t)
                {
                    return({name:r,value:n})=>{let i=r.match(Lt()),o=r.match(/:([a-zA-Z0-9\-:]+)/),s=r.match(/\.[^.\]]+(?=[^\]]*$)/g)||[],a=t||e[r]||r;return{type:i?i[1]:null,value:o?o[1]:null,modifiers:s.map(c=>c.replace(".","")),expression:n,original:a}}
                }
                var Je="DEFAULT",_e=["ignore","ref","data","bind","init","for","model","transition","show","if",Je,"element"];
                function Hr(e,t){let r=_e.indexOf(e.type)===-1?Je:e.type,n=_e.indexOf(t.type)===-1?Je:t.type;return _e.indexOf(r)-_e.indexOf(n)}
                function $(e,t,r={}){e.dispatchEvent(new CustomEvent(t,{detail:r,bubbles:!0,composed:!0,cancelable:!0}))}var Qe=[],Ze=!1;
                function k(e){Qe.push(e),queueMicrotask(()=>{Ze||setTimeout(()=>{ye()})})}
                function ye(){for(Ze=!1;Qe.length;)Qe.shift()()}
                function Ft(){Ze=!0}
                function D(e,t){if(e instanceof ShadowRoot){Array.from(e.children).forEach(i=>D(i,t));return}
                let r=!1;
                if(t(e,()=>r=!0),r)
                    return;
                let n=e.firstElementChild;for(;n;)D(n,t,!1),n=n.nextElementSibling}
                function $t(e,...t){console.warn(`Alpine Warning: ${e}`,...t)}
                function Kt(){document.body||$t("Unable to initialize. Trying to load Alpine before `<body>` is available. Did you forget to add `defer` in Alpine's `<script>` tag?"),$(document,"alpine:init"),$(document,"alpine:initializing"),ze(),Et(t=>H(t,D)),St(t=>k(()=>Wr(t))),At((t,r)=>{te(t,r).forEach(n=>n())});let e=t=>!M(t.parentNode||M(t));Array.from(document.querySelectorAll(Xe())).filter(e).forEach(t=>{H(t)}),$(document,"alpine:initialized")}var zt=[];function Xe(){return zt.map(e=>e())}
        function W(e)
        {
            zt.push(e)
        }
        function M(e)
        {
            if(Xe().some(t=>e.matches(t)))
                return e;
            if(!!e.parentElement)
                return M(e.parentElement)
        }
        function jt(e)
        {
            return Xe().some(t=>e.matches(t))
        }
        function H(e,t=D)
        {
            Pt(()=>{t(e,(r,n)=>
                {
                    te(r,r.attributes).forEach(i=>i()),r._x_ignore&&n()
                })
            })
        }
        var Vt=new WeakMap;
        function Wr(e)
        {
            D(e,t=>
                {
                    let r=Vt.get(t);
                    r&&r.forEach(n=>n()),Vt.delete(t)
                }
            )
        }
        function Bt(e)
        {
            e(S)
        }
        var U={},Ht=!1;
        function Wt(e,t)
        {
            if(Ht||(U=b(U),Ht=!0),t===void 0)
                return U[e];
            U[e]=t,typeof t=="object"&&t!==null&&t.hasOwnProperty("init")&&typeof t.init=="function"&&U[e].init()
        }
        function Ut(){return U}var et=!1;
        function q(e){return(...t)=>et||e(...t)}
        function qt(e,t){t._x_dataStack=e._x_dataStack,et=!0,qr(()=>{Ur(t)}),et=!1}
        function Ur(e){let t=!1;H(e,(n,i)=>{D(n,(o,s)=>{if(t&&jt(o))return s();t=!0,i(o,s)})})}
        function qr(e){let t=R;Fe((r,n)=>{let i=t(r);return j(i),()=>{}}),e(),Fe(t)}var Gt={};
        function Yt(e,t){Gt[e]=t}
        function Jt(e){return Gt[e]}
        var Gr={get reactive(){return b},get release(){return j},get effect(){return R},get raw(){return Ie},version:"3.0.7",disableEffectScheduling:_t,setReactivityEngine:yt,addRootSelector:W,mapAttributes:B,evaluateLater:m,setEvaluator:Ct,closestRoot:M,interceptor:pe,mutateDom:_,directive:p,evaluate:N,nextTick:k,prefix:kt,plugin:Bt,magic:x,store:Wt,start:Kt,clone:qt,data:Yt},S=Gr;
        function tt(e,t)
        {
            let r=Object.create(null),n=e.split(",");
            for(let i=0;i<n.length;i++)
                r[n[i]]=!0;
            return t?i=>!!r[i.toLowerCase()]:i=>!!r[i]
        }
        var Qi={[1]:"TEXT",[2]:"CLASS",[4]:"STYLE",[8]:"PROPS",[16]:"FULL_PROPS",[32]:"HYDRATE_EVENTS",[64]:"STABLE_FRAGMENT",[128]:"KEYED_FRAGMENT",[256]:"UNKEYED_FRAGMENT",[512]:"NEED_PATCH",[1024]:"DYNAMIC_SLOTS",[2048]:"DEV_ROOT_FRAGMENT",[-1]:"HOISTED",[-2]:"BAIL"},Zi={[1]:"STABLE",[2]:"DYNAMIC",[3]:"FORWARDED"};var Yr="itemscope,allowfullscreen,formnovalidate,ismap,nomodule,novalidate,readonly";var Xi=tt(Yr+",async,autofocus,autoplay,controls,default,defer,disabled,hidden,loop,open,required,reversed,scoped,seamless,checked,muted,multiple,selected");
        var Qt=Object.freeze({}),eo=Object.freeze([]);
        var rt=Object.assign;var Jr=Object.prototype.hasOwnProperty,re=(e,t)=>Jr.call(e,t),P=Array.isArray,G=e=>Zt(e)==="[object Map]";
        var Qr=e=>typeof e=="string",xe=e=>typeof e=="symbol",ne=e=>e!==null&&typeof e=="object";
        var Zr=Object.prototype.toString,Zt=e=>Zr.call(e),nt=e=>Zt(e).slice(8,-1);
        var be=e=>Qr(e)&&e!=="NaN"&&e[0]!=="-"&&""+parseInt(e,10)===e;
        var ve=e=>{let t=Object.create(null);
        return r=>t[r]||(t[r]=e(r))},Xr=/-(\w)/g,to=ve(e=>e.replace(Xr,(t,r)=>r?r.toUpperCase():"")),en=/\B([A-Z])/g,ro=ve(e=>e.replace(en,"-$1").toLowerCase()),it=ve(e=>e.charAt(0).toUpperCase()+e.slice(1)),no=ve(e=>e?`on${it(e)}`:""),ot=(e,t)=>e!==t&&(e===e||t===t);var st=new WeakMap,ie=[],T,K=Symbol("iterate"),at=Symbol("Map key iterate");function tn(e){return e&&e._isEffect===!0}function Xt(e,t=Qt){tn(e)&&(e=e.raw);let r=rn(e,t);return t.lazy||r(),r}function tr(e){e.active&&(er(e),e.options.onStop&&e.options.onStop(),e.active=!1)}var nn=0;function rn(e,t){let r=function(){if(!r.active)return e();if(!ie.includes(r)){er(r);try{return on(),ie.push(r),T=r,e()}finally{ie.pop(),rr(),T=ie[ie.length-1]}}};return r.id=nn++,r.allowRecurse=!!t.allowRecurse,r._isEffect=!0,r.active=!0,r.raw=e,r.deps=[],r.options=t,r}function er(e){let{deps:t}=e;if(t.length){for(let r=0;r<t.length;r++)t[r].delete(e);t.length=0}}var Y=!0,ct=[];function sn(){ct.push(Y),Y=!1}function on(){ct.push(Y),Y=!0}function rr(){let e=ct.pop();Y=e===void 0?!0:e}function w(e,t,r){if(!Y||T===void 0)return;let n=st.get(e);n||st.set(e,n=new Map);let i=n.get(r);i||n.set(r,i=new Set),i.has(T)||(i.add(T),T.deps.push(i),T.options.onTrack&&T.options.onTrack({effect:T,target:e,type:t,key:r}))}function I(e,t,r,n,i,o){let s=st.get(e);if(!s)return;let a=new Set,c=u=>{u&&u.forEach(d=>{(d!==T||d.allowRecurse)&&a.add(d)})};if(t==="clear")s.forEach(c);else if(r==="length"&&P(e))s.forEach((u,d)=>{(d==="length"||d>=n)&&c(u)});else switch(r!==void 0&&c(s.get(r)),t){case"add":P(e)?be(r)&&c(s.get("length")):(c(s.get(K)),G(e)&&c(s.get(at)));break;case"delete":P(e)||(c(s.get(K)),G(e)&&c(s.get(at)));break;case"set":G(e)&&c(s.get(K));break}let l=u=>{u.options.onTrigger&&u.options.onTrigger({effect:u,target:e,key:r,type:t,newValue:n,oldValue:i,oldTarget:o}),u.options.scheduler?u.options.scheduler(u):u()};a.forEach(l)}var an=tt("__proto__,__v_isRef,__isVue"),nr=new Set(Object.getOwnPropertyNames(Symbol).map(e=>Symbol[e]).filter(xe)),cn=we(),ln=we(!1,!0),un=we(!0),fn=we(!0,!0),Ee={};["includes","indexOf","lastIndexOf"].forEach(e=>{let t=Array.prototype[e];Ee[e]=function(...r){let n=h(this);for(let o=0,s=this.length;o<s;o++)w(n,"get",o+"");let i=t.apply(n,r);return i===-1||i===!1?t.apply(n,r.map(h)):i}});["push","pop","shift","unshift","splice"].forEach(e=>{let t=Array.prototype[e];Ee[e]=function(...r){sn();let n=t.apply(this,r);return rr(),n}});function we(e=!1,t=!1){return function(n,i,o){if(i==="__v_isReactive")return!e;if(i==="__v_isReadonly")return e;if(i==="__v_raw"&&o===(e?t?pn:or:t?dn:ir).get(n))return n;let s=P(n);if(!e&&s&&re(Ee,i))return Reflect.get(Ee,i,o);let a=Reflect.get(n,i,o);return(xe(i)?nr.has(i):an(i))||(e||w(n,"get",i),t)?a:lt(a)?!s||!be(i)?a.value:a:ne(a)?e?sr(a):Se(a):a}}var mn=ar(),hn=ar(!0);function ar(e=!1){return function(r,n,i,o){let s=r[n];if(!e&&(i=h(i),s=h(s),!P(r)&&lt(s)&&!lt(i)))return s.value=i,!0;let a=P(r)&&be(n)?Number(n)<r.length:re(r,n),c=Reflect.set(r,n,i,o);return r===h(o)&&(a?ot(i,s)&&I(r,"set",n,i,s):I(r,"add",n,i)),c}}function gn(e,t){let r=re(e,t),n=e[t],i=Reflect.deleteProperty(e,t);return i&&r&&I(e,"delete",t,void 0,n),i}function _n(e,t){let r=Reflect.has(e,t);return(!xe(t)||!nr.has(t))&&w(e,"has",t),r}function yn(e){return w(e,"iterate",P(e)?"length":K),Reflect.ownKeys(e)}var cr={get:cn,set:mn,deleteProperty:gn,has:_n,ownKeys:yn},lr={get:un,set(e,t){return console.warn(`Set operation on key "${String(t)}" failed: target is readonly.`,e),!0},deleteProperty(e,t){return console.warn(`Delete operation on key "${String(t)}" failed: target is readonly.`,e),!0}},lo=rt({},cr,{get:ln,set:hn}),uo=rt({},lr,{get:fn}),ut=e=>ne(e)?Se(e):e,ft=e=>ne(e)?sr(e):e,dt=e=>e,Ae=e=>Reflect.getPrototypeOf(e);function Te(e,t,r=!1,n=!1){e=e.__v_raw;let i=h(e),o=h(t);t!==o&&!r&&w(i,"get",t),!r&&w(i,"get",o);let{has:s}=Ae(i),a=n?dt:r?ft:ut;if(s.call(i,t))return a(e.get(t));if(s.call(i,o))return a(e.get(o));e!==i&&e.get(t)}function Oe(e,t=!1){let r=this.__v_raw,n=h(r),i=h(e);return e!==i&&!t&&w(n,"has",e),!t&&w(n,"has",i),e===i?r.has(e):r.has(e)||r.has(i)}function Re(e,t=!1){return e=e.__v_raw,!t&&w(h(e),"iterate",K),Reflect.get(e,"size",e)}function ur(e){e=h(e);let t=h(this);return Ae(t).has.call(t,e)||(t.add(e),I(t,"add",e,e)),this}function dr(e,t){t=h(t);let r=h(this),{has:n,get:i}=Ae(r),o=n.call(r,e);o?fr(r,n,e):(e=h(e),o=n.call(r,e));let s=i.call(r,e);return r.set(e,t),o?ot(t,s)&&I(r,"set",e,t,s):I(r,"add",e,t),this}function pr(e){let t=h(this),{has:r,get:n}=Ae(t),i=r.call(t,e);i?fr(t,r,e):(e=h(e),i=r.call(t,e));let o=n?n.call(t,e):void 0,s=t.delete(e);return i&&I(t,"delete",e,void 0,o),s}function mr(){let e=h(this),t=e.size!==0,r=G(e)?new Map(e):new Set(e),n=e.clear();return t&&I(e,"clear",void 0,void 0,r),n}function Ne(e,t){return function(n,i){let o=this,s=o.__v_raw,a=h(s),c=t?dt:e?ft:ut;return!e&&w(a,"iterate",K),s.forEach((l,u)=>n.call(i,c(l),c(u),o))}}function Me(e,t,r){return function(...n){let i=this.__v_raw,o=h(i),s=G(o),a=e==="entries"||e===Symbol.iterator&&s,c=e==="keys"&&s,l=i[e](...n),u=r?dt:t?ft:ut;return!t&&w(o,"iterate",c?at:K),{next(){let{value:d,done:E}=l.next();return E?{value:d,done:E}:{value:a?[u(d[0]),u(d[1])]:u(d),done:E}},[Symbol.iterator](){return this}}}}function L(e){return function(...t){{let r=t[0]?`on key "${t[0]}" `:"";console.warn(`${it(e)} operation ${r}failed: target is readonly.`,h(this))}return e==="delete"?!1:this}}var hr={get(e){return Te(this,e)},get size(){return Re(this)},has:Oe,add:ur,set:dr,delete:pr,clear:mr,forEach:Ne(!1,!1)},gr={get(e){return Te(this,e,!1,!0)},get size(){return Re(this)},has:Oe,add:ur,set:dr,delete:pr,clear:mr,forEach:Ne(!1,!0)},_r={get(e){return Te(this,e,!0)},get size(){return Re(this,!0)},has(e){return Oe.call(this,e,!0)},add:L("add"),set:L("set"),delete:L("delete"),clear:L("clear"),forEach:Ne(!0,!1)},yr={get(e){return Te(this,e,!0,!0)},get size(){return Re(this,!0)},has(e){return Oe.call(this,e,!0)},add:L("add"),set:L("set"),delete:L("delete"),clear:L("clear"),forEach:Ne(!0,!0)},xn=["keys","values","entries",Symbol.iterator];xn.forEach(e=>{hr[e]=Me(e,!1,!1),_r[e]=Me(e,!0,!1),gr[e]=Me(e,!1,!0),yr[e]=Me(e,!0,!0)});function Ce(e,t){let r=t?e?yr:gr:e?_r:hr;return(n,i,o)=>i==="__v_isReactive"?!e:i==="__v_isReadonly"?e:i==="__v_raw"?n:Reflect.get(re(r,i)&&i in n?r:n,i,o)}var bn={get:Ce(!1,!1)},fo={get:Ce(!1,!0)},vn={get:Ce(!0,!1)},po={get:Ce(!0,!0)};function fr(e,t,r){let n=h(r);if(n!==r&&t.call(e,n)){let i=nt(e);console.warn(`Reactive ${i} contains both the raw and reactive versions of the same object${i==="Map"?" as keys":""}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`)}}var ir=new WeakMap,dn=new WeakMap,or=new WeakMap,pn=new WeakMap;function wn(e){switch(e){case"Object":case"Array":return 1;case"Map":case"Set":case"WeakMap":case"WeakSet":return 2;default:return 0}}function En(e){return e.__v_skip||!Object.isExtensible(e)?0:wn(nt(e))}function Se(e){return e&&e.__v_isReadonly?e:xr(e,!1,cr,bn,ir)}function sr(e){return xr(e,!0,lr,vn,or)}function xr(e,t,r,n,i){if(!ne(e))return console.warn(`value cannot be made reactive: ${String(e)}`),e;if(e.__v_raw&&!(t&&e.__v_isReactive))return e;let o=i.get(e);if(o)return o;let s=En(e);if(s===0)return e;let a=new Proxy(e,s===2?n:r);return i.set(e,a),a}function h(e){return e&&h(e.__v_raw)||e}function lt(e){return Boolean(e&&e.__v_isRef===!0)}x("nextTick",()=>k);x("dispatch",e=>$.bind($,e));x("watch",e=>(t,r)=>{let n=m(e,t),i=!0,o;R(()=>n(s=>{let a=document.createElement("div");a.dataset.throwAway=s,i||r(s,o),o=s,i=!1}))});x("store",Ut);x("refs",e=>M(e)._x_refs||{});x("el",e=>e);function ke(e,t){return Array.isArray(t)?br(e,t.join(" ")):typeof t=="object"&&t!==null?Sn(e,t):br(e,t)}function br(e,t){let r=o=>o.split(" ").filter(Boolean),n=o=>o.split(" ").filter(s=>!e.classList.contains(s)).filter(Boolean),i=o=>(e.classList.add(...o),()=>{e.classList.remove(...o)});return t=t===!0?t="":t||"",i(n(t))}function Sn(e,t){let r=a=>a.split(" ").filter(Boolean),n=Object.entries(t).flatMap(([a,c])=>c?r(a):!1).filter(Boolean),i=Object.entries(t).flatMap(([a,c])=>c?!1:r(a)).filter(Boolean),o=[],s=[];return i.forEach(a=>{e.classList.contains(a)&&(e.classList.remove(a),s.push(a))}),n.forEach(a=>{e.classList.contains(a)||(e.classList.add(a),o.push(a))}),()=>{s.forEach(a=>e.classList.add(a)),o.forEach(a=>e.classList.remove(a))}}function oe(e,t){return typeof t=="object"&&t!==null?An(e,t):Tn(e,t)}function An(e,t){let r={};return Object.entries(t).forEach(([n,i])=>{r[n]=e.style[n],e.style[n]=i}),setTimeout(()=>{e.style.length===0&&e.removeAttribute("style")}),()=>{oe(e,r)}}function Tn(e,t){let r=e.getAttribute("style",t);return e.setAttribute("style",t),()=>{e.setAttribute("style",r)}}function se(e,t=()=>{}){let r=!1;return function(){r?t.apply(this,arguments):(r=!0,e.apply(this,arguments))}}p("transition",(e,{value:t,modifiers:r,expression:n})=>{n?On(e,n,t):Rn(e,r,t)});function On(e,t,r){vr(e,ke,""),{enter:i=>{e._x_transition.enter.during=i},"enter-start":i=>{e._x_transition.enter.start=i},"enter-end":i=>{e._x_transition.enter.end=i},leave:i=>{e._x_transition.leave.during=i},"leave-start":i=>{e._x_transition.leave.start=i},"leave-end":i=>{e._x_transition.leave.end=i}}[r](t)}function Rn(e,t,r){vr(e,oe);let n=!t.includes("in")&&!t.includes("out")&&!r,i=n||t.includes("in")||["enter"].includes(r),o=n||t.includes("out")||["leave"].includes(r);t.includes("in")&&!n&&(t=t.filter((g,y)=>y<t.indexOf("out"))),t.includes("out")&&!n&&(t=t.filter((g,y)=>y>t.indexOf("out")));let s=!t.includes("opacity")&&!t.includes("scale"),a=s||t.includes("opacity"),c=s||t.includes("scale"),l=a?0:1,u=c?ae(t,"scale",95)/100:1,d=ae(t,"delay",0),E=ae(t,"origin","center"),F="opacity, transform",z=ae(t,"duration",150)/1e3,ue=ae(t,"duration",75)/1e3,f="cubic-bezier(0.4, 0.0, 0.2, 1)";i&&(e._x_transition.enter.during={transformOrigin:E,transitionDelay:d,transitionProperty:F,transitionDuration:`${z}s`,transitionTimingFunction:f},e._x_transition.enter.start={opacity:l,transform:`scale(${u})`},e._x_transition.enter.end={opacity:1,transform:"scale(1)"}),o&&(e._x_transition.leave.during={transformOrigin:E,transitionDelay:d,transitionProperty:F,transitionDuration:`${ue}s`,transitionTimingFunction:f},e._x_transition.leave.start={opacity:1,transform:"scale(1)"},e._x_transition.leave.end={opacity:l,transform:`scale(${u})`})}function vr(e,t,r={}){e._x_transition||(e._x_transition={enter:{during:r,start:r,end:r},leave:{during:r,start:r,end:r},in(n=()=>{},i=()=>{}){return wr(e,t,{during:this.enter.during,start:this.enter.start,end:this.enter.end,entering:!0},n,i)},out(n=()=>{},i=()=>{}){return wr(e,t,{during:this.leave.during,start:this.leave.start,end:this.leave.end,entering:!1},n,i)}})}window.Element.prototype._x_toggleAndCascadeWithTransitions=function(e,t,r,n){let i=()=>requestAnimationFrame(r);if(t){e._x_transition?e._x_transition.in(r):i();return}e._x_hidePromise=e._x_transition?new Promise((o,s)=>{e._x_transition.out(()=>{},()=>o(n)),e._x_transitioning.beforeCancel(()=>s({isFromCancelledTransition:!0}))}):Promise.resolve(n),queueMicrotask(()=>{let o=Er(e);o?(o._x_hideChildren||(o._x_hideChildren=[]),o._x_hideChildren.push(e)):queueMicrotask(()=>{let s=a=>{let c=Promise.all([a._x_hidePromise,...(a._x_hideChildren||[]).map(s)]).then(([l])=>l());return delete a._x_hidePromise,delete a._x_hideChildren,c};s(e).catch(a=>{if(!a.isFromCancelledTransition)throw a})})})};function Er(e){let t=e.parentNode;if(!!t)return t._x_hidePromise?t:Er(t)}function wr(e,t,{during:r,start:n,end:i,entering:o}={},s=()=>{},a=()=>{}){e._x_transitioning&&e._x_transitioning.cancel();let c,l,u;Nn(e,{start(){c=t(e,n)},during(){l=t(e,r)},before:s,end(){c(),u=t(e,i)},after:a,cleanup(){l(),u()}},o)}function Nn(e,t,r){let n,i,o,s=se(()=>{_(()=>{n=!0,i||t.before(),o||(t.end(),ye()),t.after(),e.isConnected&&t.cleanup(),delete e._x_transitioning})});e._x_transitioning={beforeCancels:[],beforeCancel(a){this.beforeCancels.push(a)},cancel:se(function(){for(;this.beforeCancels.length;)this.beforeCancels.shift()();s()}),finish:s,entering:r},_(()=>{t.start(),t.during()}),Ft(),requestAnimationFrame(()=>{if(n)return;let a=Number(getComputedStyle(e).transitionDuration.replace(/,.*/,"").replace("s",""))*1e3,c=Number(getComputedStyle(e).transitionDelay.replace(/,.*/,"").replace("s",""))*1e3;a===0&&(a=Number(getComputedStyle(e).animationDuration.replace("s",""))*1e3),_(()=>{t.before()}),i=!0,requestAnimationFrame(()=>{n||(_(()=>{t.end()}),ye(),setTimeout(e._x_transitioning.finish,a+c),o=!0)})})}function ae(e,t,r){if(e.indexOf(t)===-1)return r;let n=e[e.indexOf(t)+1];if(!n||t==="scale"&&isNaN(n))return r;if(t==="duration"){let i=n.match(/([0-9]+)ms/);if(i)return i[1]}return t==="origin"&&["top","right","left","center","bottom"].includes(e[e.indexOf(t)+2])?[n,e[e.indexOf(t)+2]].join(" "):n}var Sr=()=>{};Sr.inline=(e,{modifiers:t},{cleanup:r})=>{t.includes("self")?e._x_ignoreSelf=!0:e._x_ignore=!0,r(()=>{t.includes("self")?delete e._x_ignoreSelf:delete e._x_ignore})};p("ignore",Sr);p("effect",(e,{expression:t},{effect:r})=>r(m(e,t)));function ce(e,t,r,n=[]){switch(e._x_bindings||(e._x_bindings=b({})),e._x_bindings[t]=r,t=n.includes("camel")?Pn(t):t,t){case"value":Mn(e,r);break;case"style":kn(e,r);break;case"class":Cn(e,r);break;default:Dn(e,t,r);break}}function Mn(e,t){if(e.type==="radio")e.attributes.value===void 0&&(e.value=t),window.fromModel&&(e.checked=Ar(e.value,t));else if(e.type==="checkbox")Number.isInteger(t)?e.value=t:!Number.isInteger(t)&&!Array.isArray(t)&&typeof t!="boolean"&&![null,void 0].includes(t)?e.value=String(t):Array.isArray(t)?e.checked=t.some(r=>Ar(r,e.value)):e.checked=!!t;else if(e.tagName==="SELECT")In(e,t);else{if(e.value===t)return;e.value=t}}function Cn(e,t){e._x_undoAddedClasses&&e._x_undoAddedClasses(),e._x_undoAddedClasses=ke(e,t)}function kn(e,t){e._x_undoAddedStyles&&e._x_undoAddedStyles(),e._x_undoAddedStyles=oe(e,t)}function Dn(e,t,r){[null,void 0,!1].includes(r)&&$n(t)?e.removeAttribute(t):(Fn(t)&&(r=t),Ln(e,t,r))}function Ln(e,t,r){e.getAttribute(t)!=r&&e.setAttribute(t,r)}function In(e,t){let r=[].concat(t).map(n=>n+"");Array.from(e.options).forEach(n=>{n.selected=r.includes(n.value)})}function Pn(e){return e.toLowerCase().replace(/-(\w)/g,(t,r)=>r.toUpperCase())}function Ar(e,t){return e==t}function Fn(e){return["disabled","checked","required","readonly","hidden","open","selected","autofocus","itemscope","multiple","novalidate","allowfullscreen","allowpaymentrequest","formnovalidate","autoplay","controls","loop","muted","playsinline","default","ismap","reversed","async","defer","nomodule"].includes(e)}function $n(e){return!["aria-pressed","aria-checked"].includes(e)}function le(e,t,r,n){let i=e,o=c=>n(c),s={},a=(c,l)=>u=>l(c,u);if(r.includes("camel")&&(t=Kn(t)),r.includes("passive")&&(s.passive=!0),r.includes("window")&&(i=window),r.includes("document")&&(i=document),r.includes("prevent")&&(o=a(o,(c,l)=>{l.preventDefault(),c(l)})),r.includes("stop")&&(o=a(o,(c,l)=>{l.stopPropagation(),c(l)})),r.includes("self")&&(o=a(o,(c,l)=>{l.target===e&&c(l)})),(r.includes("away")||r.includes("outside"))&&(i=document,o=a(o,(c,l)=>{e.contains(l.target)||e.offsetWidth<1&&e.offsetHeight<1||c(l)})),o=a(o,(c,l)=>{Vn(t)&&Bn(l,r)||c(l)}),r.includes("debounce")){let c=r[r.indexOf("debounce")+1]||"invalid-wait",l=pt(c.split("ms")[0])?Number(c.split("ms")[0]):250;o=zn(o,l,this)}if(r.includes("throttle")){let c=r[r.indexOf("throttle")+1]||"invalid-wait",l=pt(c.split("ms")[0])?Number(c.split("ms")[0]):250;o=jn(o,l,this)}return r.includes("once")&&(o=a(o,(c,l)=>{c(l),i.removeEventListener(t,o,s)})),i.addEventListener(t,o,s),()=>{i.removeEventListener(t,o,s)}}function Kn(e){return e.toLowerCase().replace(/-(\w)/g,(t,r)=>r.toUpperCase())}function zn(e,t){var r;return function(){var n=this,i=arguments,o=function(){r=null,e.apply(n,i)};clearTimeout(r),r=setTimeout(o,t)}}function jn(e,t){let r;return function(){let n=this,i=arguments;r||(e.apply(n,i),r=!0,setTimeout(()=>r=!1,t))}}function pt(e){return!Array.isArray(e)&&!isNaN(e)}function Hn(e){return e.replace(/([a-z])([A-Z])/g,"$1-$2").replace(/[_\s]/,"-").toLowerCase()}function Vn(e){return["keydown","keyup"].includes(e)}function Bn(e,t){let r=t.filter(o=>!["window","document","prevent","stop","once"].includes(o));if(r.includes("debounce")){let o=r.indexOf("debounce");r.splice(o,pt((r[o+1]||"invalid-wait").split("ms")[0])?2:1)}if(r.length===0||r.length===1&&r[0]===Tr(e.key))return!1;let i=["ctrl","shift","alt","meta","cmd","super"].filter(o=>r.includes(o));return r=r.filter(o=>!i.includes(o)),!(i.length>0&&i.filter(s=>((s==="cmd"||s==="super")&&(s="meta"),e[`${s}Key`])).length===i.length&&r[0]===Tr(e.key))}function Tr(e){switch(e){case"/":return"slash";case" ":case"Spacebar":return"space";default:return e&&Hn(e)}}p("model",(e,{modifiers:t,expression:r},{effect:n,cleanup:i})=>{let o=m(e,r),s=`${r} = rightSideOfExpression($event, ${r})`,a=m(e,s);var c=e.tagName.toLowerCase()==="select"||["checkbox","radio"].includes(e.type)||t.includes("lazy")?"change":"input";let l=Wn(e,t,r),u=le(e,c,t,d=>{a(()=>{},{scope:{$event:d,rightSideOfExpression:l}})});i(()=>u()),e._x_forceModelUpdate=()=>{o(d=>{d===void 0&&r.match(/\./)&&(d=""),window.fromModel=!0,_(()=>ce(e,"value",d)),delete window.fromModel})},n(()=>{t.includes("unintrusive")&&document.activeElement.isSameNode(e)||e._x_forceModelUpdate()})});function Wn(e,t,r){return e.type==="radio"&&_(()=>{e.hasAttribute("name")||e.setAttribute("name",r)}),(n,i)=>_(()=>{if(n instanceof CustomEvent&&n.detail!==void 0)return n.detail;if(e.type==="checkbox")if(Array.isArray(i)){let o=t.includes("number")?mt(n.target.value):n.target.value;return n.target.checked?i.concat([o]):i.filter(s=>!Un(s,o))}else return n.target.checked;else{if(e.tagName.toLowerCase()==="select"&&e.multiple)return t.includes("number")?Array.from(n.target.selectedOptions).map(o=>{let s=o.value||o.text;return mt(s)}):Array.from(n.target.selectedOptions).map(o=>o.value||o.text);{let o=n.target.value;return t.includes("number")?mt(o):t.includes("trim")?o.trim():o}}})}function mt(e){let t=e?parseFloat(e):null;return qn(t)?t:e}function Un(e,t){return e==t}function qn(e){return!Array.isArray(e)&&!isNaN(e)}p("cloak",e=>k(()=>_(()=>e.removeAttribute(A("cloak")))));W(()=>`[${A("init")}]`);p("init",q((e,{expression:t})=>N(e,t,{},!1)));p("text",(e,{expression:t},{effect:r})=>{let n=m(e,t);r(()=>{n(i=>{_(()=>{e.textContent=i})})})});B(he(":",ge(A("bind:"))));p("bind",(e,{value:t,modifiers:r,expression:n,original:i},{effect:o})=>{if(!t)return Gn(e,n,i,o);if(t==="key")return Yn(e,n);let s=m(e,n);o(()=>s(a=>{a===void 0&&n.match(/\./)&&(a=""),_(()=>ce(e,t,a,r))}))});function Gn(e,t,r,n){let i=m(e,t),o=[];n(()=>{for(;o.length;)o.pop()();i(s=>{let a=Object.entries(s).map(([c,l])=>({name:c,value:l}));te(e,a,r).map(c=>{o.push(c.runCleanups),c()})})})}function Yn(e,t){e._x_keyExpression=t}W(()=>`[${A("data")}]`);p("data",q((e,{expression:t},{cleanup:r})=>{t=t===""?"{}":t;let n=Jt(t),i={};if(n){let a=ee({},e);i=n.bind(a)()}else i=N(e,t);ee(i,e);let o=b(i);Rt(o);let s=de(e,o);o.init&&o.init(),r(()=>{s(),o.destroy&&o.destroy()})}));p("show",(e,{modifiers:t,expression:r},{effect:n})=>{let i=m(e,r),o=()=>_(()=>{e.style.display="none",e._x_isShown=!1}),s=()=>_(()=>{e.style.length===1&&e.style.display==="none"?e.removeAttribute("style"):e.style.removeProperty("display"),e._x_isShown=!0}),a=()=>setTimeout(s),c=se(d=>d?s():o(),d=>{typeof e._x_toggleAndCascadeWithTransitions=="function"?e._x_toggleAndCascadeWithTransitions(e,d,s,o):d?a():o()}),l,u=!0;n(()=>i(d=>{!u&&d===l||(t.includes("immediate")&&(d?a():o()),c(d),l=d,u=!1)}))});p("for",(e,{expression:t},{effect:r,cleanup:n})=>{let i=Qn(t),o=m(e,i.items),s=m(e,e._x_keyExpression||"index");e._x_prevKeys=[],e._x_lookup={},r(()=>Jn(e,i,o,s)),n(()=>{Object.values(e._x_lookup).forEach(a=>a.remove()),delete e._x_prevKeys,delete e._x_lookup})});function Jn(e,t,r,n){let i=s=>typeof s=="object"&&!Array.isArray(s),o=e;r(s=>{Zn(s)&&s>=0&&(s=Array.from(Array(s).keys(),f=>f+1));let a=e._x_lookup,c=e._x_prevKeys,l=[],u=[];if(i(s))s=Object.entries(s).map(([f,g])=>{let y=Or(t,g,f,s);n(O=>u.push(O),{scope:{index:f,...y}}),l.push(y)});else for(let f=0;f<s.length;f++){let g=Or(t,s[f],f,s);n(y=>u.push(y),{scope:{index:f,...g}}),l.push(g)}let d=[],E=[],F=[],z=[];for(let f=0;f<c.length;f++){let g=c[f];u.indexOf(g)===-1&&F.push(g)}c=c.filter(f=>!F.includes(f));let ue="template";for(let f=0;f<u.length;f++){let g=u[f],y=c.indexOf(g);if(y===-1)c.splice(f,0,g),d.push([ue,f]);else if(y!==f){let O=c.splice(f,1)[0],C=c.splice(y-1,1)[0];c.splice(f,0,C),c.splice(y,0,O),E.push([O,C])}else z.push(g);ue=g}for(let f=0;f<F.length;f++){let g=F[f];a[g].remove(),a[g]=null,delete a[g]}for(let f=0;f<E.length;f++){let[g,y]=E[f],O=a[g],C=a[y],J=document.createElement("div");_(()=>{C.after(J),O.after(C),J.before(O),J.remove()}),Ve(C,l[u.indexOf(y)])}for(let f=0;f<d.length;f++){let[g,y]=d[f],O=g==="template"?o:a[g],C=l[y],J=u[y],fe=document.importNode(o.content,!0).firstElementChild;de(fe,b(C),o),H(fe),_(()=>{O.after(fe)}),a[J]=fe}for(let f=0;f<z.length;f++)Ve(a[z[f]],l[u.indexOf(z[f])]);o._x_prevKeys=u})}function Qn(e){let t=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,r=/^\(|\)$/g,n=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,i=e.match(n);if(!i)return;let o={};o.items=i[2].trim();let s=i[1].trim().replace(r,""),a=s.match(t);return a?(o.item=s.replace(t,"").trim(),o.index=a[1].trim(),a[2]&&(o.collection=a[2].trim())):o.item=s,o}function Or(e,t,r,n){let i={};return/^\[.*\]$/.test(e.item)&&Array.isArray(t)?e.item.replace("[","").replace("]","").split(",").map(s=>s.trim()).forEach((s,a)=>{i[s]=t[a]}):i[e.item]=t,e.index&&(i[e.index]=r),e.collection&&(i[e.collection]=n),i}function Zn(e){return!Array.isArray(e)&&!isNaN(e)}function Rr(){}Rr.inline=(e,{expression:t},{cleanup:r})=>{let n=M(e);n._x_refs||(n._x_refs={}),n._x_refs[t]=e,r(()=>delete n._x_refs[t])};p("ref",Rr);p("if",(e,{modifiers:t,expression:r},{effect:n,cleanup:i})=>{let o=m(e,r),s=()=>{if(e._x_currentIfEl)return e._x_currentIfEl;let c=e.content.cloneNode(!0).firstElementChild;return e.after(c),e._x_currentIfEl=c,e._x_undoIf=()=>{c.remove(),delete e._x_currentIfEl},c},a=()=>e._x_undoIf?.()||delete e._x_undoIf;n(()=>o(c=>{c?s():a()})),i(()=>e._x_undoIf&&e._x_undoIf())});B(he("@",ge(A("on:"))));p("on",q((e,{value:t,modifiers:r,expression:n},{cleanup:i})=>{let o=n?m(e,n):()=>{},s=le(e,t,r,a=>{o(()=>{},{scope:{$event:a},params:[a]})});i(()=>s())}));S.setEvaluator(We);S.setReactivityEngine({reactive:Se,effect:Xt,release:tr,raw:h});var ht=S;window.Alpine=ht;queueMicrotask(()=>{ht.start()});})();