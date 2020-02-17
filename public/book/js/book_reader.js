!function (e) {
    function t(r) {
        if (n[r])
            return n[r].exports;
        var i = n[r] = {
            i: r,
            l: !1,
            exports: {}
        };
        return e[r].call(i.exports, i, i.exports, t),
            i.l = !0,
            i.exports
    }
    var n = {};
    t.m = e,
        t.c = n,
        t.i = function (e) {
            return e
        }
        ,
        t.d = function (e, n, r) {
            t.o(e, n) || Object.defineProperty(e, n, {
                configurable: !1,
                enumerable: !0,
                get: r
            })
        }
        ,
        t.n = function (e) {
            var n = e && e.__esModule ? function () {
                return e.default
            }
                : function () {
                    return e
                }
                ;
            return t.d(n, "a", n),
                n
        }
        ,
        t.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }
        ,
        t.p = "",
        t(t.s = 810)
}({
    0: function (e, t, n) {
        var r, i;
        /*!
    * jQuery JavaScript Library v3.2.1
    * https://jquery.com/
    *
    * Includes Sizzle.js
    * https://sizzlejs.com/
    *
    * Copyright JS Foundation and other contributors
    * Released under the MIT license
    * https://jquery.org/license
    *
    * Date: 2017-03-20T18:59Z
    */
        !function (t, n) {
            "use strict";
            "object" == typeof e && "object" == typeof e.exports ? e.exports = t.document ? n(t, !0) : function (e) {
                if (!e.document)
                    throw new Error("jQuery requires a window with a document");
                return n(e)
            }
                : n(t)
        }("undefined" != typeof window ? window : this, function (n, o) {
            "use strict";
            function a(e, t) {
                t = t || ae;
                var n = t.createElement("script");
                n.text = e,
                    t.head.appendChild(n).parentNode.removeChild(n)
            }
            function s(e) {
                var t = !!e && "length" in e && e.length
                    , n = ye.type(e);
                return "function" !== n && !ye.isWindow(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
            }
            function c(e, t) {
                return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
            }
            function l(e, t, n) {
                return ye.isFunction(t) ? ye.grep(e, function (e, r) {
                    return !!t.call(e, r, e) !== n
                }) : t.nodeType ? ye.grep(e, function (e) {
                    return e === t !== n
                }) : "string" != typeof t ? ye.grep(e, function (e) {
                    return fe.call(t, e) > -1 !== n
                }) : Oe.test(t) ? ye.filter(t, e, n) : (t = ye.filter(t, e),
                    ye.grep(e, function (e) {
                        return fe.call(t, e) > -1 !== n && 1 === e.nodeType
                    }))
            }
            function u(e, t) {
                for (; (e = e[t]) && 1 !== e.nodeType;)
                    ;
                return e
            }
            function f(e) {
                var t = {};
                return ye.each(e.match(He) || [], function (e, n) {
                    t[n] = !0
                }),
                    t
            }
            function d(e) {
                return e
            }
            function p(e) {
                throw e
            }
            function h(e, t, n, r) {
                var i;
                try {
                    e && ye.isFunction(i = e.promise) ? i.call(e).done(t).fail(n) : e && ye.isFunction(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
                } catch (e) {
                    n.apply(void 0, [e])
                }
            }
            function g() {
                ae.removeEventListener("DOMContentLoaded", g),
                    n.removeEventListener("load", g),
                    ye.ready()
            }
            function v() {
                this.expando = ye.expando + v.uid++
            }
            function m(e) {
                return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Fe.test(e) ? JSON.parse(e) : e)
            }
            function y(e, t, n) {
                var r;
                if (void 0 === n && 1 === e.nodeType)
                    if (r = "data-" + t.replace(qe, "-$&").toLowerCase(),
                        "string" == typeof (n = e.getAttribute(r))) {
                        try {
                            n = m(n)
                        } catch (e) { }
                        Ie.set(e, t, n)
                    } else
                        n = void 0;
                return n
            }
            function b(e, t, n, r) {
                var i, o = 1, a = 20, s = r ? function () {
                    return r.cur()
                }
                    : function () {
                        return ye.css(e, t, "")
                    }
                    , c = s(), l = n && n[3] || (ye.cssNumber[t] ? "" : "px"), u = (ye.cssNumber[t] || "px" !== l && +c) && Xe.exec(ye.css(e, t));
                if (u && u[3] !== l) {
                    l = l || u[3],
                        n = n || [],
                        u = +c || 1;
                    do {
                        o = o || ".5",
                            u /= o,
                            ye.style(e, t, u + l)
                    } while (o !== (o = s() / c) && 1 !== o && --a)
                }
                return n && (u = +u || +c || 0,
                    i = n[1] ? u + (n[1] + 1) * n[2] : +n[2],
                    r && (r.unit = l,
                        r.start = u,
                        r.end = i)),
                    i
            }
            function w(e) {
                var t, n = e.ownerDocument, r = e.nodeName, i = Je[r];
                return i || (t = n.body.appendChild(n.createElement(r)),
                    i = ye.css(t, "display"),
                    t.parentNode.removeChild(t),
                    "none" === i && (i = "block"),
                    Je[r] = i,
                    i)
            }
            function x(e, t) {
                for (var n, r, i = [], o = 0, a = e.length; o < a; o++)
                    r = e[o],
                        r.style && (n = r.style.display,
                            t ? ("none" === n && (i[o] = Le.get(r, "display") || null,
                                i[o] || (r.style.display = "")),
                                "" === r.style.display && Ue(r) && (i[o] = w(r))) : "none" !== n && (i[o] = "none",
                                    Le.set(r, "display", n)));
                for (o = 0; o < a; o++)
                    null != i[o] && (e[o].style.display = i[o]);
                return e
            }
            function k(e, t) {
                var n;
                return n = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [],
                    void 0 === t || t && c(e, t) ? ye.merge([e], n) : n
            }
            function S(e, t) {
                for (var n = 0, r = e.length; n < r; n++)
                    Le.set(e[n], "globalEval", !t || Le.get(t[n], "globalEval"))
            }
            function _(e, t, n, r, i) {
                for (var o, a, s, c, l, u, f = t.createDocumentFragment(), d = [], p = 0, h = e.length; p < h; p++)
                    if ((o = e[p]) || 0 === o)
                        if ("object" === ye.type(o))
                            ye.merge(d, o.nodeType ? [o] : o);
                        else if (Qe.test(o)) {
                            for (a = a || f.appendChild(t.createElement("div")),
                                s = (Ke.exec(o) || ["", ""])[1].toLowerCase(),
                                c = Ge[s] || Ge._default,
                                a.innerHTML = c[1] + ye.htmlPrefilter(o) + c[2],
                                u = c[0]; u--;)
                                a = a.lastChild;
                            ye.merge(d, a.childNodes),
                                a = f.firstChild,
                                a.textContent = ""
                        } else
                            d.push(t.createTextNode(o));
                for (f.textContent = "",
                    p = 0; o = d[p++];)
                    if (r && ye.inArray(o, r) > -1)
                        i && i.push(o);
                    else if (l = ye.contains(o.ownerDocument, o),
                        a = k(f.appendChild(o), "script"),
                        l && S(a),
                        n)
                        for (u = 0; o = a[u++];)
                            Ye.test(o.type || "") && n.push(o);
                return f
            }
            function C() {
                return !0
            }
            function T() {
                return !1
            }
            function E() {
                try {
                    return ae.activeElement
                } catch (e) { }
            }
            function O(e, t, n, r, i, o) {
                var a, s;
                if ("object" == typeof t) {
                    "string" != typeof n && (r = r || n,
                        n = void 0);
                    for (s in t)
                        O(e, s, n, r, t[s], o);
                    return e
                }
                if (null == r && null == i ? (i = n,
                    r = n = void 0) : null == i && ("string" == typeof n ? (i = r,
                        r = void 0) : (i = r,
                            r = n,
                            n = void 0)),
                    !1 === i)
                    i = T;
                else if (!i)
                    return e;
                return 1 === o && (a = i,
                    i = function (e) {
                        return ye().off(e),
                            a.apply(this, arguments)
                    }
                    ,
                    i.guid = a.guid || (a.guid = ye.guid++)),
                    e.each(function () {
                        ye.event.add(this, t, i, r, n)
                    })
            }
            function N(e, t) {
                return c(e, "table") && c(11 !== t.nodeType ? t : t.firstChild, "tr") ? ye(">tbody", e)[0] || e : e
            }
            function P(e) {
                return e.type = (null !== e.getAttribute("type")) + "/" + e.type,
                    e
            }
            function j(e) {
                var t = at.exec(e.type);
                return t ? e.type = t[1] : e.removeAttribute("type"),
                    e
            }
            function A(e, t) {
                var n, r, i, o, a, s, c, l;
                if (1 === t.nodeType) {
                    if (Le.hasData(e) && (o = Le.access(e),
                        a = Le.set(t, o),
                        l = o.events)) {
                        delete a.handle,
                            a.events = {};
                        for (i in l)
                            for (n = 0,
                                r = l[i].length; n < r; n++)
                                ye.event.add(t, i, l[i][n])
                    }
                    Ie.hasData(e) && (s = Ie.access(e),
                        c = ye.extend({}, s),
                        Ie.set(t, c))
                }
            }
            function H(e, t) {
                var n = t.nodeName.toLowerCase();
                "input" === n && Ve.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue)
            }
            function R(e, t, n, r) {
                t = le.apply([], t);
                var i, o, s, c, l, u, f = 0, d = e.length, p = d - 1, h = t[0], g = ye.isFunction(h);
                if (g || d > 1 && "string" == typeof h && !me.checkClone && ot.test(h))
                    return e.each(function (i) {
                        var o = e.eq(i);
                        g && (t[0] = h.call(this, i, o.html())),
                            R(o, t, n, r)
                    });
                if (d && (i = _(t, e[0].ownerDocument, !1, e, r),
                    o = i.firstChild,
                    1 === i.childNodes.length && (i = o),
                    o || r)) {
                    for (s = ye.map(k(i, "script"), P),
                        c = s.length; f < d; f++)
                        l = i,
                            f !== p && (l = ye.clone(l, !0, !0),
                                c && ye.merge(s, k(l, "script"))),
                            n.call(e[f], l, f);
                    if (c)
                        for (u = s[s.length - 1].ownerDocument,
                            ye.map(s, j),
                            f = 0; f < c; f++)
                            l = s[f],
                                Ye.test(l.type || "") && !Le.access(l, "globalEval") && ye.contains(u, l) && (l.src ? ye._evalUrl && ye._evalUrl(l.src) : a(l.textContent.replace(st, ""), u))
                }
                return e
            }
            function M(e, t, n) {
                for (var r, i = t ? ye.filter(t, e) : e, o = 0; null != (r = i[o]); o++)
                    n || 1 !== r.nodeType || ye.cleanData(k(r)),
                        r.parentNode && (n && ye.contains(r.ownerDocument, r) && S(k(r, "script")),
                            r.parentNode.removeChild(r));
                return e
            }
            function B(e, t, n) {
                var r, i, o, a, s = e.style;
                return n = n || ut(e),
                    n && (a = n.getPropertyValue(t) || n[t],
                        "" !== a || ye.contains(e.ownerDocument, e) || (a = ye.style(e, t)),
                        !me.pixelMarginRight() && lt.test(a) && ct.test(t) && (r = s.width,
                            i = s.minWidth,
                            o = s.maxWidth,
                            s.minWidth = s.maxWidth = s.width = a,
                            a = n.width,
                            s.width = r,
                            s.minWidth = i,
                            s.maxWidth = o)),
                    void 0 !== a ? a + "" : a
            }
            function D(e, t) {
                return {
                    get: function () {
                        return e() ? void delete this.get : (this.get = t).apply(this, arguments)
                    }
                }
            }
            function L(e) {
                if (e in vt)
                    return e;
                for (var t = e[0].toUpperCase() + e.slice(1), n = gt.length; n--;)
                    if ((e = gt[n] + t) in vt)
                        return e
            }
            function I(e) {
                var t = ye.cssProps[e];
                return t || (t = ye.cssProps[e] = L(e) || e),
                    t
            }
            function F(e, t, n) {
                var r = Xe.exec(t);
                return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
            }
            function q(e, t, n, r, i) {
                var o, a = 0;
                for (o = n === (r ? "border" : "content") ? 4 : "width" === t ? 1 : 0; o < 4; o += 2)
                    "margin" === n && (a += ye.css(e, n + ze[o], !0, i)),
                        r ? ("content" === n && (a -= ye.css(e, "padding" + ze[o], !0, i)),
                            "margin" !== n && (a -= ye.css(e, "border" + ze[o] + "Width", !0, i))) : (a += ye.css(e, "padding" + ze[o], !0, i),
                                "padding" !== n && (a += ye.css(e, "border" + ze[o] + "Width", !0, i)));
                return a
            }
            function W(e, t, n) {
                var r, i = ut(e), o = B(e, t, i), a = "border-box" === ye.css(e, "boxSizing", !1, i);
                return lt.test(o) ? o : (r = a && (me.boxSizingReliable() || o === e.style[t]),
                    "auto" === o && (o = e["offset" + t[0].toUpperCase() + t.slice(1)]),
                    (o = parseFloat(o) || 0) + q(e, t, n || (a ? "border" : "content"), r, i) + "px")
            }
            function X(e, t, n, r, i) {
                return new X.prototype.init(e, t, n, r, i)
            }
            function z() {
                yt && (!1 === ae.hidden && n.requestAnimationFrame ? n.requestAnimationFrame(z) : n.setTimeout(z, ye.fx.interval),
                    ye.fx.tick())
            }
            function U() {
                return n.setTimeout(function () {
                    mt = void 0
                }),
                    mt = ye.now()
            }
            function $(e, t) {
                var n, r = 0, i = {
                    height: e
                };
                for (t = t ? 1 : 0; r < 4; r += 2 - t)
                    n = ze[r],
                        i["margin" + n] = i["padding" + n] = e;
                return t && (i.opacity = i.width = e),
                    i
            }
            function J(e, t, n) {
                for (var r, i = (Y.tweeners[t] || []).concat(Y.tweeners["*"]), o = 0, a = i.length; o < a; o++)
                    if (r = i[o].call(n, t, e))
                        return r
            }
            function V(e, t, n) {
                var r, i, o, a, s, c, l, u, f = "width" in t || "height" in t, d = this, p = {}, h = e.style, g = e.nodeType && Ue(e), v = Le.get(e, "fxshow");
                n.queue || (a = ye._queueHooks(e, "fx"),
                    null == a.unqueued && (a.unqueued = 0,
                        s = a.empty.fire,
                        a.empty.fire = function () {
                            a.unqueued || s()
                        }
                    ),
                    a.unqueued++ ,
                    d.always(function () {
                        d.always(function () {
                            a.unqueued-- ,
                                ye.queue(e, "fx").length || a.empty.fire()
                        })
                    }));
                for (r in t)
                    if (i = t[r],
                        bt.test(i)) {
                        if (delete t[r],
                            o = o || "toggle" === i,
                            i === (g ? "hide" : "show")) {
                            if ("show" !== i || !v || void 0 === v[r])
                                continue;
                            g = !0
                        }
                        p[r] = v && v[r] || ye.style(e, r)
                    }
                if ((c = !ye.isEmptyObject(t)) || !ye.isEmptyObject(p)) {
                    f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY],
                        l = v && v.display,
                        null == l && (l = Le.get(e, "display")),
                        u = ye.css(e, "display"),
                        "none" === u && (l ? u = l : (x([e], !0),
                            l = e.style.display || l,
                            u = ye.css(e, "display"),
                            x([e]))),
                        ("inline" === u || "inline-block" === u && null != l) && "none" === ye.css(e, "float") && (c || (d.done(function () {
                            h.display = l
                        }),
                            null == l && (u = h.display,
                                l = "none" === u ? "" : u)),
                            h.display = "inline-block")),
                        n.overflow && (h.overflow = "hidden",
                            d.always(function () {
                                h.overflow = n.overflow[0],
                                    h.overflowX = n.overflow[1],
                                    h.overflowY = n.overflow[2]
                            })),
                        c = !1;
                    for (r in p)
                        c || (v ? "hidden" in v && (g = v.hidden) : v = Le.access(e, "fxshow", {
                            display: l
                        }),
                            o && (v.hidden = !g),
                            g && x([e], !0),
                            d.done(function () {
                                g || x([e]),
                                    Le.remove(e, "fxshow");
                                for (r in p)
                                    ye.style(e, r, p[r])
                            })),
                            c = J(g ? v[r] : 0, r, d),
                            r in v || (v[r] = c.start,
                                g && (c.end = c.start,
                                    c.start = 0))
                }
            }
            function K(e, t) {
                var n, r, i, o, a;
                for (n in e)
                    if (r = ye.camelCase(n),
                        i = t[r],
                        o = e[n],
                        Array.isArray(o) && (i = o[1],
                            o = e[n] = o[0]),
                        n !== r && (e[r] = o,
                            delete e[n]),
                        (a = ye.cssHooks[r]) && "expand" in a) {
                        o = a.expand(o),
                            delete e[r];
                        for (n in o)
                            n in e || (e[n] = o[n],
                                t[n] = i)
                    } else
                        t[r] = i
            }
            function Y(e, t, n) {
                var r, i, o = 0, a = Y.prefilters.length, s = ye.Deferred().always(function () {
                    delete c.elem
                }), c = function () {
                    if (i)
                        return !1;
                    for (var t = mt || U(), n = Math.max(0, l.startTime + l.duration - t), r = n / l.duration || 0, o = 1 - r, a = 0, c = l.tweens.length; a < c; a++)
                        l.tweens[a].run(o);
                    return s.notifyWith(e, [l, o, n]),
                        o < 1 && c ? n : (c || s.notifyWith(e, [l, 1, 0]),
                            s.resolveWith(e, [l]),
                            !1)
                }, l = s.promise({
                    elem: e,
                    props: ye.extend({}, t),
                    opts: ye.extend(!0, {
                        specialEasing: {},
                        easing: ye.easing._default
                    }, n),
                    originalProperties: t,
                    originalOptions: n,
                    startTime: mt || U(),
                    duration: n.duration,
                    tweens: [],
                    createTween: function (t, n) {
                        var r = ye.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
                        return l.tweens.push(r),
                            r
                    },
                    stop: function (t) {
                        var n = 0
                            , r = t ? l.tweens.length : 0;
                        if (i)
                            return this;
                        for (i = !0; n < r; n++)
                            l.tweens[n].run(1);
                        return t ? (s.notifyWith(e, [l, 1, 0]),
                            s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]),
                            this
                    }
                }), u = l.props;
                for (K(u, l.opts.specialEasing); o < a; o++)
                    if (r = Y.prefilters[o].call(l, e, u, l.opts))
                        return ye.isFunction(r.stop) && (ye._queueHooks(l.elem, l.opts.queue).stop = ye.proxy(r.stop, r)),
                            r;
                return ye.map(u, J, l),
                    ye.isFunction(l.opts.start) && l.opts.start.call(e, l),
                    l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always),
                    ye.fx.timer(ye.extend(c, {
                        elem: e,
                        anim: l,
                        queue: l.opts.queue
                    })),
                    l
            }
            function G(e) {
                return (e.match(He) || []).join(" ")
            }
            function Q(e) {
                return e.getAttribute && e.getAttribute("class") || ""
            }
            function Z(e, t, n, r) {
                var i;
                if (Array.isArray(t))
                    ye.each(t, function (t, i) {
                        n || Pt.test(e) ? r(e, i) : Z(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r)
                    });
                else if (n || "object" !== ye.type(t))
                    r(e, t);
                else
                    for (i in t)
                        Z(e + "[" + i + "]", t[i], n, r)
            }
            function ee(e) {
                return function (t, n) {
                    "string" != typeof t && (n = t,
                        t = "*");
                    var r, i = 0, o = t.toLowerCase().match(He) || [];
                    if (ye.isFunction(n))
                        for (; r = o[i++];)
                            "+" === r[0] ? (r = r.slice(1) || "*",
                                (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
                }
            }
            function te(e, t, n, r) {
                function i(s) {
                    var c;
                    return o[s] = !0,
                        ye.each(e[s] || [], function (e, s) {
                            var l = s(t, n, r);
                            return "string" != typeof l || a || o[l] ? a ? !(c = l) : void 0 : (t.dataTypes.unshift(l),
                                i(l),
                                !1)
                        }),
                        c
                }
                var o = {}
                    , a = e === Wt;
                return i(t.dataTypes[0]) || !o["*"] && i("*")
            }
            function ne(e, t) {
                var n, r, i = ye.ajaxSettings.flatOptions || {};
                for (n in t)
                    void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
                return r && ye.extend(!0, e, r),
                    e
            }
            function re(e, t, n) {
                for (var r, i, o, a, s = e.contents, c = e.dataTypes; "*" === c[0];)
                    c.shift(),
                        void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
                if (r)
                    for (i in s)
                        if (s[i] && s[i].test(r)) {
                            c.unshift(i);
                            break
                        }
                if (c[0] in n)
                    o = c[0];
                else {
                    for (i in n) {
                        if (!c[0] || e.converters[i + " " + c[0]]) {
                            o = i;
                            break
                        }
                        a || (a = i)
                    }
                    o = o || a
                }
                if (o)
                    return o !== c[0] && c.unshift(o),
                        n[o]
            }
            function ie(e, t, n, r) {
                var i, o, a, s, c, l = {}, u = e.dataTypes.slice();
                if (u[1])
                    for (a in e.converters)
                        l[a.toLowerCase()] = e.converters[a];
                for (o = u.shift(); o;)
                    if (e.responseFields[o] && (n[e.responseFields[o]] = t),
                        !c && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)),
                        c = o,
                        o = u.shift())
                        if ("*" === o)
                            o = c;
                        else if ("*" !== c && c !== o) {
                            if (!(a = l[c + " " + o] || l["* " + o]))
                                for (i in l)
                                    if (s = i.split(" "),
                                        s[1] === o && (a = l[c + " " + s[0]] || l["* " + s[0]])) {
                                        !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0],
                                            u.unshift(s[1]));
                                        break
                                    }
                            if (!0 !== a)
                                if (a && e.throws)
                                    t = a(t);
                                else
                                    try {
                                        t = a(t)
                                    } catch (e) {
                                        return {
                                            state: "parsererror",
                                            error: a ? e : "No conversion from " + c + " to " + o
                                        }
                                    }
                        }
                return {
                    state: "success",
                    data: t
                }
            }
            var oe = []
                , ae = n.document
                , se = Object.getPrototypeOf
                , ce = oe.slice
                , le = oe.concat
                , ue = oe.push
                , fe = oe.indexOf
                , de = {}
                , pe = de.toString
                , he = de.hasOwnProperty
                , ge = he.toString
                , ve = ge.call(Object)
                , me = {}
                , ye = function (e, t) {
                    return new ye.fn.init(e, t)
                }
                , be = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g
                , we = /^-ms-/
                , xe = /-([a-z])/g
                , ke = function (e, t) {
                    return t.toUpperCase()
                };
            ye.fn = ye.prototype = {
                jquery: "3.2.1",
                constructor: ye,
                length: 0,
                toArray: function () {
                    return ce.call(this)
                },
                get: function (e) {
                    return null == e ? ce.call(this) : e < 0 ? this[e + this.length] : this[e]
                },
                pushStack: function (e) {
                    var t = ye.merge(this.constructor(), e);
                    return t.prevObject = this,
                        t
                },
                each: function (e) {
                    return ye.each(this, e)
                },
                map: function (e) {
                    return this.pushStack(ye.map(this, function (t, n) {
                        return e.call(t, n, t)
                    }))
                },
                slice: function () {
                    return this.pushStack(ce.apply(this, arguments))
                },
                first: function () {
                    return this.eq(0)
                },
                last: function () {
                    return this.eq(-1)
                },
                eq: function (e) {
                    var t = this.length
                        , n = +e + (e < 0 ? t : 0);
                    return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
                },
                end: function () {
                    return this.prevObject || this.constructor()
                },
                push: ue,
                sort: oe.sort,
                splice: oe.splice
            },
                ye.extend = ye.fn.extend = function () {
                    var e, t, n, r, i, o, a = arguments[0] || {}, s = 1, c = arguments.length, l = !1;
                    for ("boolean" == typeof a && (l = a,
                        a = arguments[s] || {},
                        s++),
                        "object" == typeof a || ye.isFunction(a) || (a = {}),
                        s === c && (a = this,
                            s--); s < c; s++)
                        if (null != (e = arguments[s]))
                            for (t in e)
                                n = a[t],
                                    r = e[t],
                                    a !== r && (l && r && (ye.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1,
                                        o = n && Array.isArray(n) ? n : []) : o = n && ye.isPlainObject(n) ? n : {},
                                        a[t] = ye.extend(l, o, r)) : void 0 !== r && (a[t] = r));
                    return a
                }
                ,
                ye.extend({
                    expando: "jQuery" + ("3.2.1" + Math.random()).replace(/\D/g, ""),
                    isReady: !0,
                    error: function (e) {
                        throw new Error(e)
                    },
                    noop: function () { },
                    isFunction: function (e) {
                        return "function" === ye.type(e)
                    },
                    isWindow: function (e) {
                        return null != e && e === e.window
                    },
                    isNumeric: function (e) {
                        var t = ye.type(e);
                        return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
                    },
                    isPlainObject: function (e) {
                        var t, n;
                        return !(!e || "[object Object]" !== pe.call(e)) && (!(t = se(e)) || "function" == typeof (n = he.call(t, "constructor") && t.constructor) && ge.call(n) === ve)
                    },
                    isEmptyObject: function (e) {
                        var t;
                        for (t in e)
                            return !1;
                        return !0
                    },
                    type: function (e) {
                        return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? de[pe.call(e)] || "object" : typeof e
                    },
                    globalEval: function (e) {
                        a(e)
                    },
                    camelCase: function (e) {
                        return e.replace(we, "ms-").replace(xe, ke)
                    },
                    each: function (e, t) {
                        var n, r = 0;
                        if (s(e))
                            for (n = e.length; r < n && !1 !== t.call(e[r], r, e[r]); r++)
                                ;
                        else
                            for (r in e)
                                if (!1 === t.call(e[r], r, e[r]))
                                    break;
                        return e
                    },
                    trim: function (e) {
                        return null == e ? "" : (e + "").replace(be, "")
                    },
                    makeArray: function (e, t) {
                        var n = t || [];
                        return null != e && (s(Object(e)) ? ye.merge(n, "string" == typeof e ? [e] : e) : ue.call(n, e)),
                            n
                    },
                    inArray: function (e, t, n) {
                        return null == t ? -1 : fe.call(t, e, n)
                    },
                    merge: function (e, t) {
                        for (var n = +t.length, r = 0, i = e.length; r < n; r++)
                            e[i++] = t[r];
                        return e.length = i,
                            e
                    },
                    grep: function (e, t, n) {
                        for (var r = [], i = 0, o = e.length, a = !n; i < o; i++)
                            !t(e[i], i) !== a && r.push(e[i]);
                        return r
                    },
                    map: function (e, t, n) {
                        var r, i, o = 0, a = [];
                        if (s(e))
                            for (r = e.length; o < r; o++)
                                null != (i = t(e[o], o, n)) && a.push(i);
                        else
                            for (o in e)
                                null != (i = t(e[o], o, n)) && a.push(i);
                        return le.apply([], a)
                    },
                    guid: 1,
                    proxy: function (e, t) {
                        var n, r, i;
                        if ("string" == typeof t && (n = e[t],
                            t = e,
                            e = n),
                            ye.isFunction(e))
                            return r = ce.call(arguments, 2),
                                i = function () {
                                    return e.apply(t || this, r.concat(ce.call(arguments)))
                                }
                                ,
                                i.guid = e.guid = e.guid || ye.guid++ ,
                                i
                    },
                    now: Date.now,
                    support: me
                }),
                "function" == typeof Symbol && (ye.fn[Symbol.iterator] = oe[Symbol.iterator]),
                ye.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
                    de["[object " + t + "]"] = t.toLowerCase()
                });
            var Se = /*!
    * Sizzle CSS Selector Engine v2.3.3
    * https://sizzlejs.com/
    *
    * Copyright jQuery Foundation and other contributors
    * Released under the MIT license
    * http://jquery.org/license
    *
    * Date: 2016-08-08
    */
                function (e) {
                    function t(e, t, n, r) {
                        var i, o, a, s, c, u, d, p = t && t.ownerDocument, h = t ? t.nodeType : 9;
                        if (n = n || [],
                            "string" != typeof e || !e || 1 !== h && 9 !== h && 11 !== h)
                            return n;
                        if (!r && ((t ? t.ownerDocument || t : I) !== j && P(t),
                            t = t || j,
                            H)) {
                            if (11 !== h && (c = ge.exec(e)))
                                if (i = c[1]) {
                                    if (9 === h) {
                                        if (!(a = t.getElementById(i)))
                                            return n;
                                        if (a.id === i)
                                            return n.push(a),
                                                n
                                    } else if (p && (a = p.getElementById(i)) && D(t, a) && a.id === i)
                                        return n.push(a),
                                            n
                                } else {
                                    if (c[2])
                                        return Y.apply(n, t.getElementsByTagName(e)),
                                            n;
                                    if ((i = c[3]) && w.getElementsByClassName && t.getElementsByClassName)
                                        return Y.apply(n, t.getElementsByClassName(i)),
                                            n
                                }
                            if (w.qsa && !z[e + " "] && (!R || !R.test(e))) {
                                if (1 !== h)
                                    p = t,
                                        d = e;
                                else if ("object" !== t.nodeName.toLowerCase()) {
                                    for ((s = t.getAttribute("id")) ? s = s.replace(be, we) : t.setAttribute("id", s = L),
                                        u = _(e),
                                        o = u.length; o--;)
                                        u[o] = "#" + s + " " + f(u[o]);
                                    d = u.join(","),
                                        p = ve.test(e) && l(t.parentNode) || t
                                }
                                if (d)
                                    try {
                                        return Y.apply(n, p.querySelectorAll(d)),
                                            n
                                    } catch (e) { } finally {
                                        s === L && t.removeAttribute("id")
                                    }
                            }
                        }
                        return T(e.replace(oe, "$1"), t, n, r)
                    }
                    function n() {
                        function e(n, r) {
                            return t.push(n + " ") > x.cacheLength && delete e[t.shift()],
                                e[n + " "] = r
                        }
                        var t = [];
                        return e
                    }
                    function r(e) {
                        return e[L] = !0,
                            e
                    }
                    function i(e) {
                        var t = j.createElement("fieldset");
                        try {
                            return !!e(t)
                        } catch (e) {
                            return !1
                        } finally {
                            t.parentNode && t.parentNode.removeChild(t),
                                t = null
                        }
                    }
                    function o(e, t) {
                        for (var n = e.split("|"), r = n.length; r--;)
                            x.attrHandle[n[r]] = t
                    }
                    function a(e, t) {
                        var n = t && e
                            , r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
                        if (r)
                            return r;
                        if (n)
                            for (; n = n.nextSibling;)
                                if (n === t)
                                    return -1;
                        return e ? 1 : -1
                    }
                    function s(e) {
                        return function (t) {
                            return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ke(t) === e : t.disabled === e : "label" in t && t.disabled === e
                        }
                    }
                    function c(e) {
                        return r(function (t) {
                            return t = +t,
                                r(function (n, r) {
                                    for (var i, o = e([], n.length, t), a = o.length; a--;)
                                        n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                                })
                        })
                    }
                    function l(e) {
                        return e && void 0 !== e.getElementsByTagName && e
                    }
                    function u() { }
                    function f(e) {
                        for (var t = 0, n = e.length, r = ""; t < n; t++)
                            r += e[t].value;
                        return r
                    }
                    function d(e, t, n) {
                        var r = t.dir
                            , i = t.next
                            , o = i || r
                            , a = n && "parentNode" === o
                            , s = q++;
                        return t.first ? function (t, n, i) {
                            for (; t = t[r];)
                                if (1 === t.nodeType || a)
                                    return e(t, n, i);
                            return !1
                        }
                            : function (t, n, c) {
                                var l, u, f, d = [F, s];
                                if (c) {
                                    for (; t = t[r];)
                                        if ((1 === t.nodeType || a) && e(t, n, c))
                                            return !0
                                } else
                                    for (; t = t[r];)
                                        if (1 === t.nodeType || a)
                                            if (f = t[L] || (t[L] = {}),
                                                u = f[t.uniqueID] || (f[t.uniqueID] = {}),
                                                i && i === t.nodeName.toLowerCase())
                                                t = t[r] || t;
                                            else {
                                                if ((l = u[o]) && l[0] === F && l[1] === s)
                                                    return d[2] = l[2];
                                                if (u[o] = d,
                                                    d[2] = e(t, n, c))
                                                    return !0
                                            }
                                return !1
                            }
                    }
                    function p(e) {
                        return e.length > 1 ? function (t, n, r) {
                            for (var i = e.length; i--;)
                                if (!e[i](t, n, r))
                                    return !1;
                            return !0
                        }
                            : e[0]
                    }
                    function h(e, n, r) {
                        for (var i = 0, o = n.length; i < o; i++)
                            t(e, n[i], r);
                        return r
                    }
                    function g(e, t, n, r, i) {
                        for (var o, a = [], s = 0, c = e.length, l = null != t; s < c; s++)
                            (o = e[s]) && (n && !n(o, r, i) || (a.push(o),
                                l && t.push(s)));
                        return a
                    }
                    function v(e, t, n, i, o, a) {
                        return i && !i[L] && (i = v(i)),
                            o && !o[L] && (o = v(o, a)),
                            r(function (r, a, s, c) {
                                var l, u, f, d = [], p = [], v = a.length, m = r || h(t || "*", s.nodeType ? [s] : s, []), y = !e || !r && t ? m : g(m, d, e, s, c), b = n ? o || (r ? e : v || i) ? [] : a : y;
                                if (n && n(y, b, s, c),
                                    i)
                                    for (l = g(b, p),
                                        i(l, [], s, c),
                                        u = l.length; u--;)
                                        (f = l[u]) && (b[p[u]] = !(y[p[u]] = f));
                                if (r) {
                                    if (o || e) {
                                        if (o) {
                                            for (l = [],
                                                u = b.length; u--;)
                                                (f = b[u]) && l.push(y[u] = f);
                                            o(null, b = [], l, c)
                                        }
                                        for (u = b.length; u--;)
                                            (f = b[u]) && (l = o ? Q(r, f) : d[u]) > -1 && (r[l] = !(a[l] = f))
                                    }
                                } else
                                    b = g(b === a ? b.splice(v, b.length) : b),
                                        o ? o(null, a, b, c) : Y.apply(a, b)
                            })
                    }
                    function m(e) {
                        for (var t, n, r, i = e.length, o = x.relative[e[0].type], a = o || x.relative[" "], s = o ? 1 : 0, c = d(function (e) {
                            return e === t
                        }, a, !0), l = d(function (e) {
                            return Q(t, e) > -1
                        }, a, !0), u = [function (e, n, r) {
                            var i = !o && (r || n !== E) || ((t = n).nodeType ? c(e, n, r) : l(e, n, r));
                            return t = null,
                                i
                        }
                        ]; s < i; s++)
                            if (n = x.relative[e[s].type])
                                u = [d(p(u), n)];
                            else {
                                if (n = x.filter[e[s].type].apply(null, e[s].matches),
                                    n[L]) {
                                    for (r = ++s; r < i && !x.relative[e[r].type]; r++)
                                        ;
                                    return v(s > 1 && p(u), s > 1 && f(e.slice(0, s - 1).concat({
                                        value: " " === e[s - 2].type ? "*" : ""
                                    })).replace(oe, "$1"), n, s < r && m(e.slice(s, r)), r < i && m(e = e.slice(r)), r < i && f(e))
                                }
                                u.push(n)
                            }
                        return p(u)
                    }
                    function y(e, n) {
                        var i = n.length > 0
                            , o = e.length > 0
                            , a = function (r, a, s, c, l) {
                                var u, f, d, p = 0, h = "0", v = r && [], m = [], y = E, b = r || o && x.find.TAG("*", l), w = F += null == y ? 1 : Math.random() || .1, k = b.length;
                                for (l && (E = a === j || a || l); h !== k && null != (u = b[h]); h++) {
                                    if (o && u) {
                                        for (f = 0,
                                            a || u.ownerDocument === j || (P(u),
                                                s = !H); d = e[f++];)
                                            if (d(u, a || j, s)) {
                                                c.push(u);
                                                break
                                            }
                                        l && (F = w)
                                    }
                                    i && ((u = !d && u) && p-- ,
                                        r && v.push(u))
                                }
                                if (p += h,
                                    i && h !== p) {
                                    for (f = 0; d = n[f++];)
                                        d(v, m, a, s);
                                    if (r) {
                                        if (p > 0)
                                            for (; h--;)
                                                v[h] || m[h] || (m[h] = V.call(c));
                                        m = g(m)
                                    }
                                    Y.apply(c, m),
                                        l && !r && m.length > 0 && p + n.length > 1 && t.uniqueSort(c)
                                }
                                return l && (F = w,
                                    E = y),
                                    v
                            };
                        return i ? r(a) : a
                    }
                    var b, w, x, k, S, _, C, T, E, O, N, P, j, A, H, R, M, B, D, L = "sizzle" + 1 * new Date, I = e.document, F = 0, q = 0, W = n(), X = n(), z = n(), U = function (e, t) {
                        return e === t && (N = !0),
                            0
                    }, $ = {}.hasOwnProperty, J = [], V = J.pop, K = J.push, Y = J.push, G = J.slice, Q = function (e, t) {
                        for (var n = 0, r = e.length; n < r; n++)
                            if (e[n] === t)
                                return n;
                        return -1
                    }, Z = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", ee = "[\\x20\\t\\r\\n\\f]", te = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+", ne = "\\[" + ee + "*(" + te + ")(?:" + ee + "*([*^$|!~]?=)" + ee + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + te + "))|)" + ee + "*\\]", re = ":(" + te + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ne + ")*)|.*)\\)|)", ie = new RegExp(ee + "+", "g"), oe = new RegExp("^" + ee + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ee + "+$", "g"), ae = new RegExp("^" + ee + "*," + ee + "*"), se = new RegExp("^" + ee + "*([>+~]|" + ee + ")" + ee + "*"), ce = new RegExp("=" + ee + "*([^\\]'\"]*?)" + ee + "*\\]", "g"), le = new RegExp(re), ue = new RegExp("^" + te + "$"), fe = {
                        ID: new RegExp("^#(" + te + ")"),
                        CLASS: new RegExp("^\\.(" + te + ")"),
                        TAG: new RegExp("^(" + te + "|[*])"),
                        ATTR: new RegExp("^" + ne),
                        PSEUDO: new RegExp("^" + re),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + ee + "*(even|odd|(([+-]|)(\\d*)n|)" + ee + "*(?:([+-]|)" + ee + "*(\\d+)|))" + ee + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + Z + ")$", "i"),
                        needsContext: new RegExp("^" + ee + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + ee + "*((?:-\\d)?\\d*)" + ee + "*\\)|)(?=[^-]|$)", "i")
                    }, de = /^(?:input|select|textarea|button)$/i, pe = /^h\d$/i, he = /^[^{]+\{\s*\[native \w/, ge = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, ve = /[+~]/, me = new RegExp("\\\\([\\da-f]{1,6}" + ee + "?|(" + ee + ")|.)", "ig"), ye = function (e, t, n) {
                        var r = "0x" + t - 65536;
                        return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
                    }, be = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, we = function (e, t) {
                        return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
                    }, xe = function () {
                        P()
                    }, ke = d(function (e) {
                        return !0 === e.disabled && ("form" in e || "label" in e)
                    }, {
                        dir: "parentNode",
                        next: "legend"
                    });
                    try {
                        Y.apply(J = G.call(I.childNodes), I.childNodes),
                            J[I.childNodes.length].nodeType
                    } catch (e) {
                        Y = {
                            apply: J.length ? function (e, t) {
                                K.apply(e, G.call(t))
                            }
                                : function (e, t) {
                                    for (var n = e.length, r = 0; e[n++] = t[r++];)
                                        ;
                                    e.length = n - 1
                                }
                        }
                    }
                    w = t.support = {},
                        S = t.isXML = function (e) {
                            var t = e && (e.ownerDocument || e).documentElement;
                            return !!t && "HTML" !== t.nodeName
                        }
                        ,
                        P = t.setDocument = function (e) {
                            var t, n, r = e ? e.ownerDocument || e : I;
                            return r !== j && 9 === r.nodeType && r.documentElement ? (j = r,
                                A = j.documentElement,
                                H = !S(j),
                                I !== j && (n = j.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", xe, !1) : n.attachEvent && n.attachEvent("onunload", xe)),
                                w.attributes = i(function (e) {
                                    return e.className = "i",
                                        !e.getAttribute("className")
                                }),
                                w.getElementsByTagName = i(function (e) {
                                    return e.appendChild(j.createComment("")),
                                        !e.getElementsByTagName("*").length
                                }),
                                w.getElementsByClassName = he.test(j.getElementsByClassName),
                                w.getById = i(function (e) {
                                    return A.appendChild(e).id = L,
                                        !j.getElementsByName || !j.getElementsByName(L).length
                                }),
                                w.getById ? (x.filter.ID = function (e) {
                                    var t = e.replace(me, ye);
                                    return function (e) {
                                        return e.getAttribute("id") === t
                                    }
                                }
                                    ,
                                    x.find.ID = function (e, t) {
                                        if (void 0 !== t.getElementById && H) {
                                            var n = t.getElementById(e);
                                            return n ? [n] : []
                                        }
                                    }
                                ) : (x.filter.ID = function (e) {
                                    var t = e.replace(me, ye);
                                    return function (e) {
                                        var n = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
                                        return n && n.value === t
                                    }
                                }
                                    ,
                                    x.find.ID = function (e, t) {
                                        if (void 0 !== t.getElementById && H) {
                                            var n, r, i, o = t.getElementById(e);
                                            if (o) {
                                                if ((n = o.getAttributeNode("id")) && n.value === e)
                                                    return [o];
                                                for (i = t.getElementsByName(e),
                                                    r = 0; o = i[r++];)
                                                    if ((n = o.getAttributeNode("id")) && n.value === e)
                                                        return [o]
                                            }
                                            return []
                                        }
                                    }
                                    ),
                                x.find.TAG = w.getElementsByTagName ? function (e, t) {
                                    return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : w.qsa ? t.querySelectorAll(e) : void 0
                                }
                                    : function (e, t) {
                                        var n, r = [], i = 0, o = t.getElementsByTagName(e);
                                        if ("*" === e) {
                                            for (; n = o[i++];)
                                                1 === n.nodeType && r.push(n);
                                            return r
                                        }
                                        return o
                                    }
                                ,
                                x.find.CLASS = w.getElementsByClassName && function (e, t) {
                                    if (void 0 !== t.getElementsByClassName && H)
                                        return t.getElementsByClassName(e)
                                }
                                ,
                                M = [],
                                R = [],
                                (w.qsa = he.test(j.querySelectorAll)) && (i(function (e) {
                                    A.appendChild(e).innerHTML = "<a id='" + L + "'></a><select id='" + L + "-\r\\' msallowcapture=''><option selected=''></option></select>",
                                        e.querySelectorAll("[msallowcapture^='']").length && R.push("[*^$]=" + ee + "*(?:''|\"\")"),
                                        e.querySelectorAll("[selected]").length || R.push("\\[" + ee + "*(?:value|" + Z + ")"),
                                        e.querySelectorAll("[id~=" + L + "-]").length || R.push("~="),
                                        e.querySelectorAll(":checked").length || R.push(":checked"),
                                        e.querySelectorAll("a#" + L + "+*").length || R.push(".#.+[+~]")
                                }),
                                    i(function (e) {
                                        e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                                        var t = j.createElement("input");
                                        t.setAttribute("type", "hidden"),
                                            e.appendChild(t).setAttribute("name", "D"),
                                            e.querySelectorAll("[name=d]").length && R.push("name" + ee + "*[*^$|!~]?="),
                                            2 !== e.querySelectorAll(":enabled").length && R.push(":enabled", ":disabled"),
                                            A.appendChild(e).disabled = !0,
                                            2 !== e.querySelectorAll(":disabled").length && R.push(":enabled", ":disabled"),
                                            e.querySelectorAll("*,:x"),
                                            R.push(",.*:")
                                    })),
                                (w.matchesSelector = he.test(B = A.matches || A.webkitMatchesSelector || A.mozMatchesSelector || A.oMatchesSelector || A.msMatchesSelector)) && i(function (e) {
                                    w.disconnectedMatch = B.call(e, "*"),
                                        B.call(e, "[s!='']:x"),
                                        M.push("!=", re)
                                }),
                                R = R.length && new RegExp(R.join("|")),
                                M = M.length && new RegExp(M.join("|")),
                                t = he.test(A.compareDocumentPosition),
                                D = t || he.test(A.contains) ? function (e, t) {
                                    var n = 9 === e.nodeType ? e.documentElement : e
                                        , r = t && t.parentNode;
                                    return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
                                }
                                    : function (e, t) {
                                        if (t)
                                            for (; t = t.parentNode;)
                                                if (t === e)
                                                    return !0;
                                        return !1
                                    }
                                ,
                                U = t ? function (e, t) {
                                    if (e === t)
                                        return N = !0,
                                            0;
                                    var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                                    return n || (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1,
                                        1 & n || !w.sortDetached && t.compareDocumentPosition(e) === n ? e === j || e.ownerDocument === I && D(I, e) ? -1 : t === j || t.ownerDocument === I && D(I, t) ? 1 : O ? Q(O, e) - Q(O, t) : 0 : 4 & n ? -1 : 1)
                                }
                                    : function (e, t) {
                                        if (e === t)
                                            return N = !0,
                                                0;
                                        var n, r = 0, i = e.parentNode, o = t.parentNode, s = [e], c = [t];
                                        if (!i || !o)
                                            return e === j ? -1 : t === j ? 1 : i ? -1 : o ? 1 : O ? Q(O, e) - Q(O, t) : 0;
                                        if (i === o)
                                            return a(e, t);
                                        for (n = e; n = n.parentNode;)
                                            s.unshift(n);
                                        for (n = t; n = n.parentNode;)
                                            c.unshift(n);
                                        for (; s[r] === c[r];)
                                            r++;
                                        return r ? a(s[r], c[r]) : s[r] === I ? -1 : c[r] === I ? 1 : 0
                                    }
                                ,
                                j) : j
                        }
                        ,
                        t.matches = function (e, n) {
                            return t(e, null, null, n)
                        }
                        ,
                        t.matchesSelector = function (e, n) {
                            if ((e.ownerDocument || e) !== j && P(e),
                                n = n.replace(ce, "='$1']"),
                                w.matchesSelector && H && !z[n + " "] && (!M || !M.test(n)) && (!R || !R.test(n)))
                                try {
                                    var r = B.call(e, n);
                                    if (r || w.disconnectedMatch || e.document && 11 !== e.document.nodeType)
                                        return r
                                } catch (e) { }
                            return t(n, j, null, [e]).length > 0
                        }
                        ,
                        t.contains = function (e, t) {
                            return (e.ownerDocument || e) !== j && P(e),
                                D(e, t)
                        }
                        ,
                        t.attr = function (e, t) {
                            (e.ownerDocument || e) !== j && P(e);
                            var n = x.attrHandle[t.toLowerCase()]
                                , r = n && $.call(x.attrHandle, t.toLowerCase()) ? n(e, t, !H) : void 0;
                            return void 0 !== r ? r : w.attributes || !H ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
                        }
                        ,
                        t.escape = function (e) {
                            return (e + "").replace(be, we)
                        }
                        ,
                        t.error = function (e) {
                            throw new Error("Syntax error, unrecognized expression: " + e)
                        }
                        ,
                        t.uniqueSort = function (e) {
                            var t, n = [], r = 0, i = 0;
                            if (N = !w.detectDuplicates,
                                O = !w.sortStable && e.slice(0),
                                e.sort(U),
                                N) {
                                for (; t = e[i++];)
                                    t === e[i] && (r = n.push(i));
                                for (; r--;)
                                    e.splice(n[r], 1)
                            }
                            return O = null,
                                e
                        }
                        ,
                        k = t.getText = function (e) {
                            var t, n = "", r = 0, i = e.nodeType;
                            if (i) {
                                if (1 === i || 9 === i || 11 === i) {
                                    if ("string" == typeof e.textContent)
                                        return e.textContent;
                                    for (e = e.firstChild; e; e = e.nextSibling)
                                        n += k(e)
                                } else if (3 === i || 4 === i)
                                    return e.nodeValue
                            } else
                                for (; t = e[r++];)
                                    n += k(t);
                            return n
                        }
                        ,
                        x = t.selectors = {
                            cacheLength: 50,
                            createPseudo: r,
                            match: fe,
                            attrHandle: {},
                            find: {},
                            relative: {
                                ">": {
                                    dir: "parentNode",
                                    first: !0
                                },
                                " ": {
                                    dir: "parentNode"
                                },
                                "+": {
                                    dir: "previousSibling",
                                    first: !0
                                },
                                "~": {
                                    dir: "previousSibling"
                                }
                            },
                            preFilter: {
                                ATTR: function (e) {
                                    return e[1] = e[1].replace(me, ye),
                                        e[3] = (e[3] || e[4] || e[5] || "").replace(me, ye),
                                        "~=" === e[2] && (e[3] = " " + e[3] + " "),
                                        e.slice(0, 4)
                                },
                                CHILD: function (e) {
                                    return e[1] = e[1].toLowerCase(),
                                        "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]),
                                            e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])),
                                            e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]),
                                        e
                                },
                                PSEUDO: function (e) {
                                    var t, n = !e[6] && e[2];
                                    return fe.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && le.test(n) && (t = _(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t),
                                        e[2] = n.slice(0, t)),
                                        e.slice(0, 3))
                                }
                            },
                            filter: {
                                TAG: function (e) {
                                    var t = e.replace(me, ye).toLowerCase();
                                    return "*" === e ? function () {
                                        return !0
                                    }
                                        : function (e) {
                                            return e.nodeName && e.nodeName.toLowerCase() === t
                                        }
                                },
                                CLASS: function (e) {
                                    var t = W[e + " "];
                                    return t || (t = new RegExp("(^|" + ee + ")" + e + "(" + ee + "|$)")) && W(e, function (e) {
                                        return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
                                    })
                                },
                                ATTR: function (e, n, r) {
                                    return function (i) {
                                        var o = t.attr(i, e);
                                        return null == o ? "!=" === n : !n || (o += "",
                                            "=" === n ? o === r : "!=" === n ? o !== r : "^=" === n ? r && 0 === o.indexOf(r) : "*=" === n ? r && o.indexOf(r) > -1 : "$=" === n ? r && o.slice(-r.length) === r : "~=" === n ? (" " + o.replace(ie, " ") + " ").indexOf(r) > -1 : "|=" === n && (o === r || o.slice(0, r.length + 1) === r + "-"))
                                    }
                                },
                                CHILD: function (e, t, n, r, i) {
                                    var o = "nth" !== e.slice(0, 3)
                                        , a = "last" !== e.slice(-4)
                                        , s = "of-type" === t;
                                    return 1 === r && 0 === i ? function (e) {
                                        return !!e.parentNode
                                    }
                                        : function (t, n, c) {
                                            var l, u, f, d, p, h, g = o !== a ? "nextSibling" : "previousSibling", v = t.parentNode, m = s && t.nodeName.toLowerCase(), y = !c && !s, b = !1;
                                            if (v) {
                                                if (o) {
                                                    for (; g;) {
                                                        for (d = t; d = d[g];)
                                                            if (s ? d.nodeName.toLowerCase() === m : 1 === d.nodeType)
                                                                return !1;
                                                        h = g = "only" === e && !h && "nextSibling"
                                                    }
                                                    return !0
                                                }
                                                if (h = [a ? v.firstChild : v.lastChild],
                                                    a && y) {
                                                    for (d = v,
                                                        f = d[L] || (d[L] = {}),
                                                        u = f[d.uniqueID] || (f[d.uniqueID] = {}),
                                                        l = u[e] || [],
                                                        p = l[0] === F && l[1],
                                                        b = p && l[2],
                                                        d = p && v.childNodes[p]; d = ++p && d && d[g] || (b = p = 0) || h.pop();)
                                                        if (1 === d.nodeType && ++b && d === t) {
                                                            u[e] = [F, p, b];
                                                            break
                                                        }
                                                } else if (y && (d = t,
                                                    f = d[L] || (d[L] = {}),
                                                    u = f[d.uniqueID] || (f[d.uniqueID] = {}),
                                                    l = u[e] || [],
                                                    p = l[0] === F && l[1],
                                                    b = p),
                                                    !1 === b)
                                                    for (; (d = ++p && d && d[g] || (b = p = 0) || h.pop()) && ((s ? d.nodeName.toLowerCase() !== m : 1 !== d.nodeType) || !++b || (y && (f = d[L] || (d[L] = {}),
                                                        u = f[d.uniqueID] || (f[d.uniqueID] = {}),
                                                        u[e] = [F, b]),
                                                        d !== t));)
                                                        ;
                                                return (b -= i) === r || b % r == 0 && b / r >= 0
                                            }
                                        }
                                },
                                PSEUDO: function (e, n) {
                                    var i, o = x.pseudos[e] || x.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);
                                    return o[L] ? o(n) : o.length > 1 ? (i = [e, e, "", n],
                                        x.setFilters.hasOwnProperty(e.toLowerCase()) ? r(function (e, t) {
                                            for (var r, i = o(e, n), a = i.length; a--;)
                                                r = Q(e, i[a]),
                                                    e[r] = !(t[r] = i[a])
                                        }) : function (e) {
                                            return o(e, 0, i)
                                        }
                                    ) : o
                                }
                            },
                            pseudos: {
                                not: r(function (e) {
                                    var t = []
                                        , n = []
                                        , i = C(e.replace(oe, "$1"));
                                    return i[L] ? r(function (e, t, n, r) {
                                        for (var o, a = i(e, null, r, []), s = e.length; s--;)
                                            (o = a[s]) && (e[s] = !(t[s] = o))
                                    }) : function (e, r, o) {
                                        return t[0] = e,
                                            i(t, null, o, n),
                                            t[0] = null,
                                            !n.pop()
                                    }
                                }),
                                has: r(function (e) {
                                    return function (n) {
                                        return t(e, n).length > 0
                                    }
                                }),
                                contains: r(function (e) {
                                    return e = e.replace(me, ye),
                                        function (t) {
                                            return (t.textContent || t.innerText || k(t)).indexOf(e) > -1
                                        }
                                }),
                                lang: r(function (e) {
                                    return ue.test(e || "") || t.error("unsupported lang: " + e),
                                        e = e.replace(me, ye).toLowerCase(),
                                        function (t) {
                                            var n;
                                            do {
                                                if (n = H ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang"))
                                                    return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                                            } while ((t = t.parentNode) && 1 === t.nodeType); return !1
                                        }
                                }),
                                target: function (t) {
                                    var n = e.location && e.location.hash;
                                    return n && n.slice(1) === t.id
                                },
                                root: function (e) {
                                    return e === A
                                },
                                focus: function (e) {
                                    return e === j.activeElement && (!j.hasFocus || j.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                                },
                                enabled: s(!1),
                                disabled: s(!0),
                                checked: function (e) {
                                    var t = e.nodeName.toLowerCase();
                                    return "input" === t && !!e.checked || "option" === t && !!e.selected
                                },
                                selected: function (e) {
                                    return e.parentNode && e.parentNode.selectedIndex,
                                        !0 === e.selected
                                },
                                empty: function (e) {
                                    for (e = e.firstChild; e; e = e.nextSibling)
                                        if (e.nodeType < 6)
                                            return !1;
                                    return !0
                                },
                                parent: function (e) {
                                    return !x.pseudos.empty(e)
                                },
                                header: function (e) {
                                    return pe.test(e.nodeName)
                                },
                                input: function (e) {
                                    return de.test(e.nodeName)
                                },
                                button: function (e) {
                                    var t = e.nodeName.toLowerCase();
                                    return "input" === t && "button" === e.type || "button" === t
                                },
                                text: function (e) {
                                    var t;
                                    return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                                },
                                first: c(function () {
                                    return [0]
                                }),
                                last: c(function (e, t) {
                                    return [t - 1]
                                }),
                                eq: c(function (e, t, n) {
                                    return [n < 0 ? n + t : n]
                                }),
                                even: c(function (e, t) {
                                    for (var n = 0; n < t; n += 2)
                                        e.push(n);
                                    return e
                                }),
                                odd: c(function (e, t) {
                                    for (var n = 1; n < t; n += 2)
                                        e.push(n);
                                    return e
                                }),
                                lt: c(function (e, t, n) {
                                    for (var r = n < 0 ? n + t : n; --r >= 0;)
                                        e.push(r);
                                    return e
                                }),
                                gt: c(function (e, t, n) {
                                    for (var r = n < 0 ? n + t : n; ++r < t;)
                                        e.push(r);
                                    return e
                                })
                            }
                        },
                        x.pseudos.nth = x.pseudos.eq;
                    for (b in {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    })
                        x.pseudos[b] = function (e) {
                            return function (t) {
                                return "input" === t.nodeName.toLowerCase() && t.type === e
                            }
                        }(b);
                    for (b in {
                        submit: !0,
                        reset: !0
                    })
                        x.pseudos[b] = function (e) {
                            return function (t) {
                                var n = t.nodeName.toLowerCase();
                                return ("input" === n || "button" === n) && t.type === e
                            }
                        }(b);
                    return u.prototype = x.filters = x.pseudos,
                        x.setFilters = new u,
                        _ = t.tokenize = function (e, n) {
                            var r, i, o, a, s, c, l, u = X[e + " "];
                            if (u)
                                return n ? 0 : u.slice(0);
                            for (s = e,
                                c = [],
                                l = x.preFilter; s;) {
                                r && !(i = ae.exec(s)) || (i && (s = s.slice(i[0].length) || s),
                                    c.push(o = [])),
                                    r = !1,
                                    (i = se.exec(s)) && (r = i.shift(),
                                        o.push({
                                            value: r,
                                            type: i[0].replace(oe, " ")
                                        }),
                                        s = s.slice(r.length));
                                for (a in x.filter)
                                    !(i = fe[a].exec(s)) || l[a] && !(i = l[a](i)) || (r = i.shift(),
                                        o.push({
                                            value: r,
                                            type: a,
                                            matches: i
                                        }),
                                        s = s.slice(r.length));
                                if (!r)
                                    break
                            }
                            return n ? s.length : s ? t.error(e) : X(e, c).slice(0)
                        }
                        ,
                        C = t.compile = function (e, t) {
                            var n, r = [], i = [], o = z[e + " "];
                            if (!o) {
                                for (t || (t = _(e)),
                                    n = t.length; n--;)
                                    o = m(t[n]),
                                        o[L] ? r.push(o) : i.push(o);
                                o = z(e, y(i, r)),
                                    o.selector = e
                            }
                            return o
                        }
                        ,
                        T = t.select = function (e, t, n, r) {
                            var i, o, a, s, c, u = "function" == typeof e && e, d = !r && _(e = u.selector || e);
                            if (n = n || [],
                                1 === d.length) {
                                if (o = d[0] = d[0].slice(0),
                                    o.length > 2 && "ID" === (a = o[0]).type && 9 === t.nodeType && H && x.relative[o[1].type]) {
                                    if (!(t = (x.find.ID(a.matches[0].replace(me, ye), t) || [])[0]))
                                        return n;
                                    u && (t = t.parentNode),
                                        e = e.slice(o.shift().value.length)
                                }
                                for (i = fe.needsContext.test(e) ? 0 : o.length; i-- && (a = o[i],
                                    !x.relative[s = a.type]);)
                                    if ((c = x.find[s]) && (r = c(a.matches[0].replace(me, ye), ve.test(o[0].type) && l(t.parentNode) || t))) {
                                        if (o.splice(i, 1),
                                            !(e = r.length && f(o)))
                                            return Y.apply(n, r),
                                                n;
                                        break
                                    }
                            }
                            return (u || C(e, d))(r, t, !H, n, !t || ve.test(e) && l(t.parentNode) || t),
                                n
                        }
                        ,
                        w.sortStable = L.split("").sort(U).join("") === L,
                        w.detectDuplicates = !!N,
                        P(),
                        w.sortDetached = i(function (e) {
                            return 1 & e.compareDocumentPosition(j.createElement("fieldset"))
                        }),
                        i(function (e) {
                            return e.innerHTML = "<a href='#'></a>",
                                "#" === e.firstChild.getAttribute("href")
                        }) || o("type|href|height|width", function (e, t, n) {
                            if (!n)
                                return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
                        }),
                        w.attributes && i(function (e) {
                            return e.innerHTML = "<input/>",
                                e.firstChild.setAttribute("value", ""),
                                "" === e.firstChild.getAttribute("value")
                        }) || o("value", function (e, t, n) {
                            if (!n && "input" === e.nodeName.toLowerCase())
                                return e.defaultValue
                        }),
                        i(function (e) {
                            return null == e.getAttribute("disabled")
                        }) || o(Z, function (e, t, n) {
                            var r;
                            if (!n)
                                return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
                        }),
                        t
                }(n);
            ye.find = Se,
                ye.expr = Se.selectors,
                ye.expr[":"] = ye.expr.pseudos,
                ye.uniqueSort = ye.unique = Se.uniqueSort,
                ye.text = Se.getText,
                ye.isXMLDoc = Se.isXML,
                ye.contains = Se.contains,
                ye.escapeSelector = Se.escape;
            var _e = function (e, t, n) {
                for (var r = [], i = void 0 !== n; (e = e[t]) && 9 !== e.nodeType;)
                    if (1 === e.nodeType) {
                        if (i && ye(e).is(n))
                            break;
                        r.push(e)
                    }
                return r
            }
                , Ce = function (e, t) {
                    for (var n = []; e; e = e.nextSibling)
                        1 === e.nodeType && e !== t && n.push(e);
                    return n
                }
                , Te = ye.expr.match.needsContext
                , Ee = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i
                , Oe = /^.[^:#\[\.,]*$/;
            ye.filter = function (e, t, n) {
                var r = t[0];
                return n && (e = ":not(" + e + ")"),
                    1 === t.length && 1 === r.nodeType ? ye.find.matchesSelector(r, e) ? [r] : [] : ye.find.matches(e, ye.grep(t, function (e) {
                        return 1 === e.nodeType
                    }))
            }
                ,
                ye.fn.extend({
                    find: function (e) {
                        var t, n, r = this.length, i = this;
                        if ("string" != typeof e)
                            return this.pushStack(ye(e).filter(function () {
                                for (t = 0; t < r; t++)
                                    if (ye.contains(i[t], this))
                                        return !0
                            }));
                        for (n = this.pushStack([]),
                            t = 0; t < r; t++)
                            ye.find(e, i[t], n);
                        return r > 1 ? ye.uniqueSort(n) : n
                    },
                    filter: function (e) {
                        return this.pushStack(l(this, e || [], !1))
                    },
                    not: function (e) {
                        return this.pushStack(l(this, e || [], !0))
                    },
                    is: function (e) {
                        return !!l(this, "string" == typeof e && Te.test(e) ? ye(e) : e || [], !1).length
                    }
                });
            var Ne, Pe = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
            (ye.fn.init = function (e, t, n) {
                var r, i;
                if (!e)
                    return this;
                if (n = n || Ne,
                    "string" == typeof e) {
                    if (!(r = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : Pe.exec(e)) || !r[1] && t)
                        return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
                    if (r[1]) {
                        if (t = t instanceof ye ? t[0] : t,
                            ye.merge(this, ye.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : ae, !0)),
                            Ee.test(r[1]) && ye.isPlainObject(t))
                            for (r in t)
                                ye.isFunction(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                        return this
                    }
                    return i = ae.getElementById(r[2]),
                        i && (this[0] = i,
                            this.length = 1),
                        this
                }
                return e.nodeType ? (this[0] = e,
                    this.length = 1,
                    this) : ye.isFunction(e) ? void 0 !== n.ready ? n.ready(e) : e(ye) : ye.makeArray(e, this)
            }
            ).prototype = ye.fn,
                Ne = ye(ae);
            var je = /^(?:parents|prev(?:Until|All))/
                , Ae = {
                    children: !0,
                    contents: !0,
                    next: !0,
                    prev: !0
                };
            ye.fn.extend({
                has: function (e) {
                    var t = ye(e, this)
                        , n = t.length;
                    return this.filter(function () {
                        for (var e = 0; e < n; e++)
                            if (ye.contains(this, t[e]))
                                return !0
                    })
                },
                closest: function (e, t) {
                    var n, r = 0, i = this.length, o = [], a = "string" != typeof e && ye(e);
                    if (!Te.test(e))
                        for (; r < i; r++)
                            for (n = this[r]; n && n !== t; n = n.parentNode)
                                if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && ye.find.matchesSelector(n, e))) {
                                    o.push(n);
                                    break
                                }
                    return this.pushStack(o.length > 1 ? ye.uniqueSort(o) : o)
                },
                index: function (e) {
                    return e ? "string" == typeof e ? fe.call(ye(e), this[0]) : fe.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
                },
                add: function (e, t) {
                    return this.pushStack(ye.uniqueSort(ye.merge(this.get(), ye(e, t))))
                },
                addBack: function (e) {
                    return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
                }
            }),
                ye.each({
                    parent: function (e) {
                        var t = e.parentNode;
                        return t && 11 !== t.nodeType ? t : null
                    },
                    parents: function (e) {
                        return _e(e, "parentNode")
                    },
                    parentsUntil: function (e, t, n) {
                        return _e(e, "parentNode", n)
                    },
                    next: function (e) {
                        return u(e, "nextSibling")
                    },
                    prev: function (e) {
                        return u(e, "previousSibling")
                    },
                    nextAll: function (e) {
                        return _e(e, "nextSibling")
                    },
                    prevAll: function (e) {
                        return _e(e, "previousSibling")
                    },
                    nextUntil: function (e, t, n) {
                        return _e(e, "nextSibling", n)
                    },
                    prevUntil: function (e, t, n) {
                        return _e(e, "previousSibling", n)
                    },
                    siblings: function (e) {
                        return Ce((e.parentNode || {}).firstChild, e)
                    },
                    children: function (e) {
                        return Ce(e.firstChild)
                    },
                    contents: function (e) {
                        return c(e, "iframe") ? e.contentDocument : (c(e, "template") && (e = e.content || e),
                            ye.merge([], e.childNodes))
                    }
                }, function (e, t) {
                    ye.fn[e] = function (n, r) {
                        var i = ye.map(this, t, n);
                        return "Until" !== e.slice(-5) && (r = n),
                            r && "string" == typeof r && (i = ye.filter(r, i)),
                            this.length > 1 && (Ae[e] || ye.uniqueSort(i),
                                je.test(e) && i.reverse()),
                            this.pushStack(i)
                    }
                });
            var He = /[^\x20\t\r\n\f]+/g;
            ye.Callbacks = function (e) {
                e = "string" == typeof e ? f(e) : ye.extend({}, e);
                var t, n, r, i, o = [], a = [], s = -1, c = function () {
                    for (i = i || e.once,
                        r = t = !0; a.length; s = -1)
                        for (n = a.shift(); ++s < o.length;)
                            !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && (s = o.length,
                                n = !1);
                    e.memory || (n = !1),
                        t = !1,
                        i && (o = n ? [] : "")
                }, l = {
                    add: function () {
                        return o && (n && !t && (s = o.length - 1,
                            a.push(n)),
                            function t(n) {
                                ye.each(n, function (n, r) {
                                    ye.isFunction(r) ? e.unique && l.has(r) || o.push(r) : r && r.length && "string" !== ye.type(r) && t(r)
                                })
                            }(arguments),
                            n && !t && c()),
                            this
                    },
                    remove: function () {
                        return ye.each(arguments, function (e, t) {
                            for (var n; (n = ye.inArray(t, o, n)) > -1;)
                                o.splice(n, 1),
                                    n <= s && s--
                        }),
                            this
                    },
                    has: function (e) {
                        return e ? ye.inArray(e, o) > -1 : o.length > 0
                    },
                    empty: function () {
                        return o && (o = []),
                            this
                    },
                    disable: function () {
                        return i = a = [],
                            o = n = "",
                            this
                    },
                    disabled: function () {
                        return !o
                    },
                    lock: function () {
                        return i = a = [],
                            n || t || (o = n = ""),
                            this
                    },
                    locked: function () {
                        return !!i
                    },
                    fireWith: function (e, n) {
                        return i || (n = n || [],
                            n = [e, n.slice ? n.slice() : n],
                            a.push(n),
                            t || c()),
                            this
                    },
                    fire: function () {
                        return l.fireWith(this, arguments),
                            this
                    },
                    fired: function () {
                        return !!r
                    }
                };
                return l
            }
                ,
                ye.extend({
                    Deferred: function (e) {
                        var t = [["notify", "progress", ye.Callbacks("memory"), ye.Callbacks("memory"), 2], ["resolve", "done", ye.Callbacks("once memory"), ye.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", ye.Callbacks("once memory"), ye.Callbacks("once memory"), 1, "rejected"]]
                            , r = "pending"
                            , i = {
                                state: function () {
                                    return r
                                },
                                always: function () {
                                    return o.done(arguments).fail(arguments),
                                        this
                                },
                                catch: function (e) {
                                    return i.then(null, e)
                                },
                                pipe: function () {
                                    var e = arguments;
                                    return ye.Deferred(function (n) {
                                        ye.each(t, function (t, r) {
                                            var i = ye.isFunction(e[r[4]]) && e[r[4]];
                                            o[r[1]](function () {
                                                var e = i && i.apply(this, arguments);
                                                e && ye.isFunction(e.promise) ? e.promise().progress(n.notify).done(n.resolve).fail(n.reject) : n[r[0] + "With"](this, i ? [e] : arguments)
                                            })
                                        }),
                                            e = null
                                    }).promise()
                                },
                                then: function (e, r, i) {
                                    function o(e, t, r, i) {
                                        return function () {
                                            var s = this
                                                , c = arguments
                                                , l = function () {
                                                    var n, l;
                                                    if (!(e < a)) {
                                                        if ((n = r.apply(s, c)) === t.promise())
                                                            throw new TypeError("Thenable self-resolution");
                                                        l = n && ("object" == typeof n || "function" == typeof n) && n.then,
                                                            ye.isFunction(l) ? i ? l.call(n, o(a, t, d, i), o(a, t, p, i)) : (a++ ,
                                                                l.call(n, o(a, t, d, i), o(a, t, p, i), o(a, t, d, t.notifyWith))) : (r !== d && (s = void 0,
                                                                    c = [n]),
                                                                    (i || t.resolveWith)(s, c))
                                                    }
                                                }
                                                , u = i ? l : function () {
                                                    try {
                                                        l()
                                                    } catch (n) {
                                                        ye.Deferred.exceptionHook && ye.Deferred.exceptionHook(n, u.stackTrace),
                                                            e + 1 >= a && (r !== p && (s = void 0,
                                                                c = [n]),
                                                                t.rejectWith(s, c))
                                                    }
                                                }
                                                ;
                                            e ? u() : (ye.Deferred.getStackHook && (u.stackTrace = ye.Deferred.getStackHook()),
                                                n.setTimeout(u))
                                        }
                                    }
                                    var a = 0;
                                    return ye.Deferred(function (n) {
                                        t[0][3].add(o(0, n, ye.isFunction(i) ? i : d, n.notifyWith)),
                                            t[1][3].add(o(0, n, ye.isFunction(e) ? e : d)),
                                            t[2][3].add(o(0, n, ye.isFunction(r) ? r : p))
                                    }).promise()
                                },
                                promise: function (e) {
                                    return null != e ? ye.extend(e, i) : i
                                }
                            }
                            , o = {};
                        return ye.each(t, function (e, n) {
                            var a = n[2]
                                , s = n[5];
                            i[n[1]] = a.add,
                                s && a.add(function () {
                                    r = s
                                }, t[3 - e][2].disable, t[0][2].lock),
                                a.add(n[3].fire),
                                o[n[0]] = function () {
                                    return o[n[0] + "With"](this === o ? void 0 : this, arguments),
                                        this
                                }
                                ,
                                o[n[0] + "With"] = a.fireWith
                        }),
                            i.promise(o),
                            e && e.call(o, o),
                            o
                    },
                    when: function (e) {
                        var t = arguments.length
                            , n = t
                            , r = Array(n)
                            , i = ce.call(arguments)
                            , o = ye.Deferred()
                            , a = function (e) {
                                return function (n) {
                                    r[e] = this,
                                        i[e] = arguments.length > 1 ? ce.call(arguments) : n,
                                        --t || o.resolveWith(r, i)
                                }
                            };
                        if (t <= 1 && (h(e, o.done(a(n)).resolve, o.reject, !t),
                            "pending" === o.state() || ye.isFunction(i[n] && i[n].then)))
                            return o.then();
                        for (; n--;)
                            h(i[n], a(n), o.reject);
                        return o.promise()
                    }
                });
            var Re = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
            ye.Deferred.exceptionHook = function (e, t) {
                n.console && n.console.warn && e && Re.test(e.name) && n.console.warn("jQuery.Deferred exception: " + e.message, e.stack, t)
            }
                ,
                ye.readyException = function (e) {
                    n.setTimeout(function () {
                        throw e
                    })
                }
                ;
            var Me = ye.Deferred();
            ye.fn.ready = function (e) {
                return Me.then(e).catch(function (e) {
                    ye.readyException(e)
                }),
                    this
            }
                ,
                ye.extend({
                    isReady: !1,
                    readyWait: 1,
                    ready: function (e) {
                        (!0 === e ? --ye.readyWait : ye.isReady) || (ye.isReady = !0,
                            !0 !== e && --ye.readyWait > 0 || Me.resolveWith(ae, [ye]))
                    }
                }),
                ye.ready.then = Me.then,
                "complete" === ae.readyState || "loading" !== ae.readyState && !ae.documentElement.doScroll ? n.setTimeout(ye.ready) : (ae.addEventListener("DOMContentLoaded", g),
                    n.addEventListener("load", g));
            var Be = function (e, t, n, r, i, o, a) {
                var s = 0
                    , c = e.length
                    , l = null == n;
                if ("object" === ye.type(n)) {
                    i = !0;
                    for (s in n)
                        Be(e, t, s, n[s], !0, o, a)
                } else if (void 0 !== r && (i = !0,
                    ye.isFunction(r) || (a = !0),
                    l && (a ? (t.call(e, r),
                        t = null) : (l = t,
                            t = function (e, t, n) {
                                return l.call(ye(e), n)
                            }
                        )),
                    t))
                    for (; s < c; s++)
                        t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
                return i ? e : l ? t.call(e) : c ? t(e[0], n) : o
            }
                , De = function (e) {
                    return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
                };
            v.uid = 1,
                v.prototype = {
                    cache: function (e) {
                        var t = e[this.expando];
                        return t || (t = {},
                            De(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                                value: t,
                                configurable: !0
                            }))),
                            t
                    },
                    set: function (e, t, n) {
                        var r, i = this.cache(e);
                        if ("string" == typeof t)
                            i[ye.camelCase(t)] = n;
                        else
                            for (r in t)
                                i[ye.camelCase(r)] = t[r];
                        return i
                    },
                    get: function (e, t) {
                        return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][ye.camelCase(t)]
                    },
                    access: function (e, t, n) {
                        return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n),
                            void 0 !== n ? n : t)
                    },
                    remove: function (e, t) {
                        var n, r = e[this.expando];
                        if (void 0 !== r) {
                            if (void 0 !== t) {
                                Array.isArray(t) ? t = t.map(ye.camelCase) : (t = ye.camelCase(t),
                                    t = t in r ? [t] : t.match(He) || []),
                                    n = t.length;
                                for (; n--;)
                                    delete r[t[n]]
                            }
                            (void 0 === t || ye.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
                        }
                    },
                    hasData: function (e) {
                        var t = e[this.expando];
                        return void 0 !== t && !ye.isEmptyObject(t)
                    }
                };
            var Le = new v
                , Ie = new v
                , Fe = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/
                , qe = /[A-Z]/g;
            ye.extend({
                hasData: function (e) {
                    return Ie.hasData(e) || Le.hasData(e)
                },
                data: function (e, t, n) {
                    return Ie.access(e, t, n)
                },
                removeData: function (e, t) {
                    Ie.remove(e, t)
                },
                _data: function (e, t, n) {
                    return Le.access(e, t, n)
                },
                _removeData: function (e, t) {
                    Le.remove(e, t)
                }
            }),
                ye.fn.extend({
                    data: function (e, t) {
                        var n, r, i, o = this[0], a = o && o.attributes;
                        if (void 0 === e) {
                            if (this.length && (i = Ie.get(o),
                                1 === o.nodeType && !Le.get(o, "hasDataAttrs"))) {
                                for (n = a.length; n--;)
                                    a[n] && (r = a[n].name,
                                        0 === r.indexOf("data-") && (r = ye.camelCase(r.slice(5)),
                                            y(o, r, i[r])));
                                Le.set(o, "hasDataAttrs", !0)
                            }
                            return i
                        }
                        return "object" == typeof e ? this.each(function () {
                            Ie.set(this, e)
                        }) : Be(this, function (t) {
                            var n;
                            if (o && void 0 === t) {
                                if (void 0 !== (n = Ie.get(o, e)))
                                    return n;
                                if (void 0 !== (n = y(o, e)))
                                    return n
                            } else
                                this.each(function () {
                                    Ie.set(this, e, t)
                                })
                        }, null, t, arguments.length > 1, null, !0)
                    },
                    removeData: function (e) {
                        return this.each(function () {
                            Ie.remove(this, e)
                        })
                    }
                }),
                ye.extend({
                    queue: function (e, t, n) {
                        var r;
                        if (e)
                            return t = (t || "fx") + "queue",
                                r = Le.get(e, t),
                                n && (!r || Array.isArray(n) ? r = Le.access(e, t, ye.makeArray(n)) : r.push(n)),
                                r || []
                    },
                    dequeue: function (e, t) {
                        t = t || "fx";
                        var n = ye.queue(e, t)
                            , r = n.length
                            , i = n.shift()
                            , o = ye._queueHooks(e, t)
                            , a = function () {
                                ye.dequeue(e, t)
                            };
                        "inprogress" === i && (i = n.shift(),
                            r--),
                            i && ("fx" === t && n.unshift("inprogress"),
                                delete o.stop,
                                i.call(e, a, o)),
                            !r && o && o.empty.fire()
                    },
                    _queueHooks: function (e, t) {
                        var n = t + "queueHooks";
                        return Le.get(e, n) || Le.access(e, n, {
                            empty: ye.Callbacks("once memory").add(function () {
                                Le.remove(e, [t + "queue", n])
                            })
                        })
                    }
                }),
                ye.fn.extend({
                    queue: function (e, t) {
                        var n = 2;
                        return "string" != typeof e && (t = e,
                            e = "fx",
                            n--),
                            arguments.length < n ? ye.queue(this[0], e) : void 0 === t ? this : this.each(function () {
                                var n = ye.queue(this, e, t);
                                ye._queueHooks(this, e),
                                    "fx" === e && "inprogress" !== n[0] && ye.dequeue(this, e)
                            })
                    },
                    dequeue: function (e) {
                        return this.each(function () {
                            ye.dequeue(this, e)
                        })
                    },
                    clearQueue: function (e) {
                        return this.queue(e || "fx", [])
                    },
                    promise: function (e, t) {
                        var n, r = 1, i = ye.Deferred(), o = this, a = this.length, s = function () {
                            --r || i.resolveWith(o, [o])
                        };
                        for ("string" != typeof e && (t = e,
                            e = void 0),
                            e = e || "fx"; a--;)
                            (n = Le.get(o[a], e + "queueHooks")) && n.empty && (r++ ,
                                n.empty.add(s));
                        return s(),
                            i.promise(t)
                    }
                });
            var We = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source
                , Xe = new RegExp("^(?:([+-])=|)(" + We + ")([a-z%]*)$", "i")
                , ze = ["Top", "Right", "Bottom", "Left"]
                , Ue = function (e, t) {
                    return e = t || e,
                        "none" === e.style.display || "" === e.style.display && ye.contains(e.ownerDocument, e) && "none" === ye.css(e, "display")
                }
                , $e = function (e, t, n, r) {
                    var i, o, a = {};
                    for (o in t)
                        a[o] = e.style[o],
                            e.style[o] = t[o];
                    i = n.apply(e, r || []);
                    for (o in t)
                        e.style[o] = a[o];
                    return i
                }
                , Je = {};
            ye.fn.extend({
                show: function () {
                    return x(this, !0)
                },
                hide: function () {
                    return x(this)
                },
                toggle: function (e) {
                    return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
                        Ue(this) ? ye(this).show() : ye(this).hide()
                    })
                }
            });
            var Ve = /^(?:checkbox|radio)$/i
                , Ke = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i
                , Ye = /^$|\/(?:java|ecma)script/i
                , Ge = {
                    option: [1, "<select multiple='multiple'>", "</select>"],
                    thead: [1, "<table>", "</table>"],
                    col: [2, "<table><colgroup>", "</colgroup></table>"],
                    tr: [2, "<table><tbody>", "</tbody></table>"],
                    td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                    _default: [0, "", ""]
                };
            Ge.optgroup = Ge.option,
                Ge.tbody = Ge.tfoot = Ge.colgroup = Ge.caption = Ge.thead,
                Ge.th = Ge.td;
            var Qe = /<|&#?\w+;/;
            !function () {
                var e = ae.createDocumentFragment()
                    , t = e.appendChild(ae.createElement("div"))
                    , n = ae.createElement("input");
                n.setAttribute("type", "radio"),
                    n.setAttribute("checked", "checked"),
                    n.setAttribute("name", "t"),
                    t.appendChild(n),
                    me.checkClone = t.cloneNode(!0).cloneNode(!0).lastChild.checked,
                    t.innerHTML = "<textarea>x</textarea>",
                    me.noCloneChecked = !!t.cloneNode(!0).lastChild.defaultValue
            }();
            var Ze = ae.documentElement
                , et = /^key/
                , tt = /^(?:mouse|pointer|contextmenu|drag|drop)|click/
                , nt = /^([^.]*)(?:\.(.+)|)/;
            ye.event = {
                global: {},
                add: function (e, t, n, r, i) {
                    var o, a, s, c, l, u, f, d, p, h, g, v = Le.get(e);
                    if (v)
                        for (n.handler && (o = n,
                            n = o.handler,
                            i = o.selector),
                            i && ye.find.matchesSelector(Ze, i),
                            n.guid || (n.guid = ye.guid++),
                            (c = v.events) || (c = v.events = {}),
                            (a = v.handle) || (a = v.handle = function (t) {
                                return void 0 !== ye && ye.event.triggered !== t.type ? ye.event.dispatch.apply(e, arguments) : void 0
                            }
                            ),
                            t = (t || "").match(He) || [""],
                            l = t.length; l--;)
                            s = nt.exec(t[l]) || [],
                                p = g = s[1],
                                h = (s[2] || "").split(".").sort(),
                                p && (f = ye.event.special[p] || {},
                                    p = (i ? f.delegateType : f.bindType) || p,
                                    f = ye.event.special[p] || {},
                                    u = ye.extend({
                                        type: p,
                                        origType: g,
                                        data: r,
                                        handler: n,
                                        guid: n.guid,
                                        selector: i,
                                        needsContext: i && ye.expr.match.needsContext.test(i),
                                        namespace: h.join(".")
                                    }, o),
                                    (d = c[p]) || (d = c[p] = [],
                                        d.delegateCount = 0,
                                        f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(p, a)),
                                    f.add && (f.add.call(e, u),
                                        u.handler.guid || (u.handler.guid = n.guid)),
                                    i ? d.splice(d.delegateCount++, 0, u) : d.push(u),
                                    ye.event.global[p] = !0)
                },
                remove: function (e, t, n, r, i) {
                    var o, a, s, c, l, u, f, d, p, h, g, v = Le.hasData(e) && Le.get(e);
                    if (v && (c = v.events)) {
                        for (t = (t || "").match(He) || [""],
                            l = t.length; l--;)
                            if (s = nt.exec(t[l]) || [],
                                p = g = s[1],
                                h = (s[2] || "").split(".").sort(),
                                p) {
                                for (f = ye.event.special[p] || {},
                                    p = (r ? f.delegateType : f.bindType) || p,
                                    d = c[p] || [],
                                    s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"),
                                    a = o = d.length; o--;)
                                    u = d[o],
                                        !i && g !== u.origType || n && n.guid !== u.guid || s && !s.test(u.namespace) || r && r !== u.selector && ("**" !== r || !u.selector) || (d.splice(o, 1),
                                            u.selector && d.delegateCount-- ,
                                            f.remove && f.remove.call(e, u));
                                a && !d.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || ye.removeEvent(e, p, v.handle),
                                    delete c[p])
                            } else
                                for (p in c)
                                    ye.event.remove(e, p + t[l], n, r, !0);
                        ye.isEmptyObject(c) && Le.remove(e, "handle events")
                    }
                },
                dispatch: function (e) {
                    var t, n, r, i, o, a, s = ye.event.fix(e), c = new Array(arguments.length), l = (Le.get(this, "events") || {})[s.type] || [], u = ye.event.special[s.type] || {};
                    for (c[0] = s,
                        t = 1; t < arguments.length; t++)
                        c[t] = arguments[t];
                    if (s.delegateTarget = this,
                        !u.preDispatch || !1 !== u.preDispatch.call(this, s)) {
                        for (a = ye.event.handlers.call(this, s, l),
                            t = 0; (i = a[t++]) && !s.isPropagationStopped();)
                            for (s.currentTarget = i.elem,
                                n = 0; (o = i.handlers[n++]) && !s.isImmediatePropagationStopped();)
                                s.rnamespace && !s.rnamespace.test(o.namespace) || (s.handleObj = o,
                                    s.data = o.data,
                                    void 0 !== (r = ((ye.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, c)) && !1 === (s.result = r) && (s.preventDefault(),
                                        s.stopPropagation()));
                        return u.postDispatch && u.postDispatch.call(this, s),
                            s.result
                    }
                },
                handlers: function (e, t) {
                    var n, r, i, o, a, s = [], c = t.delegateCount, l = e.target;
                    if (c && l.nodeType && !("click" === e.type && e.button >= 1))
                        for (; l !== this; l = l.parentNode || this)
                            if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                                for (o = [],
                                    a = {},
                                    n = 0; n < c; n++)
                                    r = t[n],
                                        i = r.selector + " ",
                                        void 0 === a[i] && (a[i] = r.needsContext ? ye(i, this).index(l) > -1 : ye.find(i, this, null, [l]).length),
                                        a[i] && o.push(r);
                                o.length && s.push({
                                    elem: l,
                                    handlers: o
                                })
                            }
                    return l = this,
                        c < t.length && s.push({
                            elem: l,
                            handlers: t.slice(c)
                        }),
                        s
                },
                addProp: function (e, t) {
                    Object.defineProperty(ye.Event.prototype, e, {
                        enumerable: !0,
                        configurable: !0,
                        get: ye.isFunction(t) ? function () {
                            if (this.originalEvent)
                                return t(this.originalEvent)
                        }
                            : function () {
                                if (this.originalEvent)
                                    return this.originalEvent[e]
                            }
                        ,
                        set: function (t) {
                            Object.defineProperty(this, e, {
                                enumerable: !0,
                                configurable: !0,
                                writable: !0,
                                value: t
                            })
                        }
                    })
                },
                fix: function (e) {
                    return e[ye.expando] ? e : new ye.Event(e)
                },
                special: {
                    load: {
                        noBubble: !0
                    },
                    focus: {
                        trigger: function () {
                            if (this !== E() && this.focus)
                                return this.focus(),
                                    !1
                        },
                        delegateType: "focusin"
                    },
                    blur: {
                        trigger: function () {
                            if (this === E() && this.blur)
                                return this.blur(),
                                    !1
                        },
                        delegateType: "focusout"
                    },
                    click: {
                        trigger: function () {
                            if ("checkbox" === this.type && this.click && c(this, "input"))
                                return this.click(),
                                    !1
                        },
                        _default: function (e) {
                            return c(e.target, "a")
                        }
                    },
                    beforeunload: {
                        postDispatch: function (e) {
                            void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                        }
                    }
                }
            },
                ye.removeEvent = function (e, t, n) {
                    e.removeEventListener && e.removeEventListener(t, n)
                }
                ,
                ye.Event = function (e, t) {
                    if (!(this instanceof ye.Event))
                        return new ye.Event(e, t);
                    e && e.type ? (this.originalEvent = e,
                        this.type = e.type,
                        this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? C : T,
                        this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target,
                        this.currentTarget = e.currentTarget,
                        this.relatedTarget = e.relatedTarget) : this.type = e,
                        t && ye.extend(this, t),
                        this.timeStamp = e && e.timeStamp || ye.now(),
                        this[ye.expando] = !0
                }
                ,
                ye.Event.prototype = {
                    constructor: ye.Event,
                    isDefaultPrevented: T,
                    isPropagationStopped: T,
                    isImmediatePropagationStopped: T,
                    isSimulated: !1,
                    preventDefault: function () {
                        var e = this.originalEvent;
                        this.isDefaultPrevented = C,
                            e && !this.isSimulated && e.preventDefault()
                    },
                    stopPropagation: function () {
                        var e = this.originalEvent;
                        this.isPropagationStopped = C,
                            e && !this.isSimulated && e.stopPropagation()
                    },
                    stopImmediatePropagation: function () {
                        var e = this.originalEvent;
                        this.isImmediatePropagationStopped = C,
                            e && !this.isSimulated && e.stopImmediatePropagation(),
                            this.stopPropagation()
                    }
                },
                ye.each({
                    altKey: !0,
                    bubbles: !0,
                    cancelable: !0,
                    changedTouches: !0,
                    ctrlKey: !0,
                    detail: !0,
                    eventPhase: !0,
                    metaKey: !0,
                    pageX: !0,
                    pageY: !0,
                    shiftKey: !0,
                    view: !0,
                    char: !0,
                    charCode: !0,
                    key: !0,
                    keyCode: !0,
                    button: !0,
                    buttons: !0,
                    clientX: !0,
                    clientY: !0,
                    offsetX: !0,
                    offsetY: !0,
                    pointerId: !0,
                    pointerType: !0,
                    screenX: !0,
                    screenY: !0,
                    targetTouches: !0,
                    toElement: !0,
                    touches: !0,
                    which: function (e) {
                        var t = e.button;
                        return null == e.which && et.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && tt.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
                    }
                }, ye.event.addProp),
                ye.each({
                    mouseenter: "mouseover",
                    mouseleave: "mouseout",
                    pointerenter: "pointerover",
                    pointerleave: "pointerout"
                }, function (e, t) {
                    ye.event.special[e] = {
                        delegateType: t,
                        bindType: t,
                        handle: function (e) {
                            var n, r = this, i = e.relatedTarget, o = e.handleObj;
                            return i && (i === r || ye.contains(r, i)) || (e.type = o.origType,
                                n = o.handler.apply(this, arguments),
                                e.type = t),
                                n
                        }
                    }
                }),
                ye.fn.extend({
                    on: function (e, t, n, r) {
                        return O(this, e, t, n, r)
                    },
                    one: function (e, t, n, r) {
                        return O(this, e, t, n, r, 1)
                    },
                    off: function (e, t, n) {
                        var r, i;
                        if (e && e.preventDefault && e.handleObj)
                            return r = e.handleObj,
                                ye(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler),
                                this;
                        if ("object" == typeof e) {
                            for (i in e)
                                this.off(i, t, e[i]);
                            return this
                        }
                        return !1 !== t && "function" != typeof t || (n = t,
                            t = void 0),
                            !1 === n && (n = T),
                            this.each(function () {
                                ye.event.remove(this, e, n, t)
                            })
                    }
                });
            var rt = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi
                , it = /<script|<style|<link/i
                , ot = /checked\s*(?:[^=]|=\s*.checked.)/i
                , at = /^true\/(.*)/
                , st = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
            ye.extend({
                htmlPrefilter: function (e) {
                    return e.replace(rt, "<$1></$2>")
                },
                clone: function (e, t, n) {
                    var r, i, o, a, s = e.cloneNode(!0), c = ye.contains(e.ownerDocument, e);
                    if (!(me.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || ye.isXMLDoc(e)))
                        for (a = k(s),
                            o = k(e),
                            r = 0,
                            i = o.length; r < i; r++)
                            H(o[r], a[r]);
                    if (t)
                        if (n)
                            for (o = o || k(e),
                                a = a || k(s),
                                r = 0,
                                i = o.length; r < i; r++)
                                A(o[r], a[r]);
                        else
                            A(e, s);
                    return a = k(s, "script"),
                        a.length > 0 && S(a, !c && k(e, "script")),
                        s
                },
                cleanData: function (e) {
                    for (var t, n, r, i = ye.event.special, o = 0; void 0 !== (n = e[o]); o++)
                        if (De(n)) {
                            if (t = n[Le.expando]) {
                                if (t.events)
                                    for (r in t.events)
                                        i[r] ? ye.event.remove(n, r) : ye.removeEvent(n, r, t.handle);
                                n[Le.expando] = void 0
                            }
                            n[Ie.expando] && (n[Ie.expando] = void 0)
                        }
                }
            }),
                ye.fn.extend({
                    detach: function (e) {
                        return M(this, e, !0)
                    },
                    remove: function (e) {
                        return M(this, e)
                    },
                    text: function (e) {
                        return Be(this, function (e) {
                            return void 0 === e ? ye.text(this) : this.empty().each(function () {
                                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                            })
                        }, null, e, arguments.length)
                    },
                    append: function () {
                        return R(this, arguments, function (e) {
                            if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                                N(this, e).appendChild(e)
                            }
                        })
                    },
                    prepend: function () {
                        return R(this, arguments, function (e) {
                            if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                                var t = N(this, e);
                                t.insertBefore(e, t.firstChild)
                            }
                        })
                    },
                    before: function () {
                        return R(this, arguments, function (e) {
                            this.parentNode && this.parentNode.insertBefore(e, this)
                        })
                    },
                    after: function () {
                        return R(this, arguments, function (e) {
                            this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
                        })
                    },
                    empty: function () {
                        for (var e, t = 0; null != (e = this[t]); t++)
                            1 === e.nodeType && (ye.cleanData(k(e, !1)),
                                e.textContent = "");
                        return this
                    },
                    clone: function (e, t) {
                        return e = null != e && e,
                            t = null == t ? e : t,
                            this.map(function () {
                                return ye.clone(this, e, t)
                            })
                    },
                    html: function (e) {
                        return Be(this, function (e) {
                            var t = this[0] || {}
                                , n = 0
                                , r = this.length;
                            if (void 0 === e && 1 === t.nodeType)
                                return t.innerHTML;
                            if ("string" == typeof e && !it.test(e) && !Ge[(Ke.exec(e) || ["", ""])[1].toLowerCase()]) {
                                e = ye.htmlPrefilter(e);
                                try {
                                    for (; n < r; n++)
                                        t = this[n] || {},
                                            1 === t.nodeType && (ye.cleanData(k(t, !1)),
                                                t.innerHTML = e);
                                    t = 0
                                } catch (e) { }
                            }
                            t && this.empty().append(e)
                        }, null, e, arguments.length)
                    },
                    replaceWith: function () {
                        var e = [];
                        return R(this, arguments, function (t) {
                            var n = this.parentNode;
                            ye.inArray(this, e) < 0 && (ye.cleanData(k(this)),
                                n && n.replaceChild(t, this))
                        }, e)
                    }
                }),
                ye.each({
                    appendTo: "append",
                    prependTo: "prepend",
                    insertBefore: "before",
                    insertAfter: "after",
                    replaceAll: "replaceWith"
                }, function (e, t) {
                    ye.fn[e] = function (e) {
                        for (var n, r = [], i = ye(e), o = i.length - 1, a = 0; a <= o; a++)
                            n = a === o ? this : this.clone(!0),
                                ye(i[a])[t](n),
                                ue.apply(r, n.get());
                        return this.pushStack(r)
                    }
                });
            var ct = /^margin/
                , lt = new RegExp("^(" + We + ")(?!px)[a-z%]+$", "i")
                , ut = function (e) {
                    var t = e.ownerDocument.defaultView;
                    return t && t.opener || (t = n),
                        t.getComputedStyle(e)
                };
            !function () {
                function e() {
                    if (s) {
                        s.style.cssText = "box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",
                            s.innerHTML = "",
                            Ze.appendChild(a);
                        var e = n.getComputedStyle(s);
                        t = "1%" !== e.top,
                            o = "2px" === e.marginLeft,
                            r = "4px" === e.width,
                            s.style.marginRight = "50%",
                            i = "4px" === e.marginRight,
                            Ze.removeChild(a),
                            s = null
                    }
                }
                var t, r, i, o, a = ae.createElement("div"), s = ae.createElement("div");
                s.style && (s.style.backgroundClip = "content-box",
                    s.cloneNode(!0).style.backgroundClip = "",
                    me.clearCloneStyle = "content-box" === s.style.backgroundClip,
                    a.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute",
                    a.appendChild(s),
                    ye.extend(me, {
                        pixelPosition: function () {
                            return e(),
                                t
                        },
                        boxSizingReliable: function () {
                            return e(),
                                r
                        },
                        pixelMarginRight: function () {
                            return e(),
                                i
                        },
                        reliableMarginLeft: function () {
                            return e(),
                                o
                        }
                    }))
            }();
            var ft = /^(none|table(?!-c[ea]).+)/
                , dt = /^--/
                , pt = {
                    position: "absolute",
                    visibility: "hidden",
                    display: "block"
                }
                , ht = {
                    letterSpacing: "0",
                    fontWeight: "400"
                }
                , gt = ["Webkit", "Moz", "ms"]
                , vt = ae.createElement("div").style;
            ye.extend({
                cssHooks: {
                    opacity: {
                        get: function (e, t) {
                            if (t) {
                                var n = B(e, "opacity");
                                return "" === n ? "1" : n
                            }
                        }
                    }
                },
                cssNumber: {
                    animationIterationCount: !0,
                    columnCount: !0,
                    fillOpacity: !0,
                    flexGrow: !0,
                    flexShrink: !0,
                    fontWeight: !0,
                    lineHeight: !0,
                    opacity: !0,
                    order: !0,
                    orphans: !0,
                    widows: !0,
                    zIndex: !0,
                    zoom: !0
                },
                cssProps: {
                    float: "cssFloat"
                },
                style: function (e, t, n, r) {
                    if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                        var i, o, a, s = ye.camelCase(t), c = dt.test(t), l = e.style;
                        if (c || (t = I(s)),
                            a = ye.cssHooks[t] || ye.cssHooks[s],
                            void 0 === n)
                            return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                        o = typeof n,
                            "string" === o && (i = Xe.exec(n)) && i[1] && (n = b(e, t, i),
                                o = "number"),
                            null != n && n === n && ("number" === o && (n += i && i[3] || (ye.cssNumber[s] ? "" : "px")),
                                me.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"),
                                a && "set" in a && void 0 === (n = a.set(e, n, r)) || (c ? l.setProperty(t, n) : l[t] = n))
                    }
                },
                css: function (e, t, n, r) {
                    var i, o, a, s = ye.camelCase(t);
                    return dt.test(t) || (t = I(s)),
                        a = ye.cssHooks[t] || ye.cssHooks[s],
                        a && "get" in a && (i = a.get(e, !0, n)),
                        void 0 === i && (i = B(e, t, r)),
                        "normal" === i && t in ht && (i = ht[t]),
                        "" === n || n ? (o = parseFloat(i),
                            !0 === n || isFinite(o) ? o || 0 : i) : i
                }
            }),
                ye.each(["height", "width"], function (e, t) {
                    ye.cssHooks[t] = {
                        get: function (e, n, r) {
                            if (n)
                                return !ft.test(ye.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? W(e, t, r) : $e(e, pt, function () {
                                    return W(e, t, r)
                                })
                        },
                        set: function (e, n, r) {
                            var i, o = r && ut(e), a = r && q(e, t, r, "border-box" === ye.css(e, "boxSizing", !1, o), o);
                            return a && (i = Xe.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n,
                                n = ye.css(e, t)),
                                F(e, n, a)
                        }
                    }
                }),
                ye.cssHooks.marginLeft = D(me.reliableMarginLeft, function (e, t) {
                    if (t)
                        return (parseFloat(B(e, "marginLeft")) || e.getBoundingClientRect().left - $e(e, {
                            marginLeft: 0
                        }, function () {
                            return e.getBoundingClientRect().left
                        })) + "px"
                }),
                ye.each({
                    margin: "",
                    padding: "",
                    border: "Width"
                }, function (e, t) {
                    ye.cssHooks[e + t] = {
                        expand: function (n) {
                            for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++)
                                i[e + ze[r] + t] = o[r] || o[r - 2] || o[0];
                            return i
                        }
                    },
                        ct.test(e) || (ye.cssHooks[e + t].set = F)
                }),
                ye.fn.extend({
                    css: function (e, t) {
                        return Be(this, function (e, t, n) {
                            var r, i, o = {}, a = 0;
                            if (Array.isArray(t)) {
                                for (r = ut(e),
                                    i = t.length; a < i; a++)
                                    o[t[a]] = ye.css(e, t[a], !1, r);
                                return o
                            }
                            return void 0 !== n ? ye.style(e, t, n) : ye.css(e, t)
                        }, e, t, arguments.length > 1)
                    }
                }),
                ye.Tween = X,
                X.prototype = {
                    constructor: X,
                    init: function (e, t, n, r, i, o) {
                        this.elem = e,
                            this.prop = n,
                            this.easing = i || ye.easing._default,
                            this.options = t,
                            this.start = this.now = this.cur(),
                            this.end = r,
                            this.unit = o || (ye.cssNumber[n] ? "" : "px")
                    },
                    cur: function () {
                        var e = X.propHooks[this.prop];
                        return e && e.get ? e.get(this) : X.propHooks._default.get(this)
                    },
                    run: function (e) {
                        var t, n = X.propHooks[this.prop];
                        return this.options.duration ? this.pos = t = ye.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e,
                            this.now = (this.end - this.start) * t + this.start,
                            this.options.step && this.options.step.call(this.elem, this.now, this),
                            n && n.set ? n.set(this) : X.propHooks._default.set(this),
                            this
                    }
                },
                X.prototype.init.prototype = X.prototype,
                X.propHooks = {
                    _default: {
                        get: function (e) {
                            var t;
                            return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = ye.css(e.elem, e.prop, ""),
                                t && "auto" !== t ? t : 0)
                        },
                        set: function (e) {
                            ye.fx.step[e.prop] ? ye.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[ye.cssProps[e.prop]] && !ye.cssHooks[e.prop] ? e.elem[e.prop] = e.now : ye.style(e.elem, e.prop, e.now + e.unit)
                        }
                    }
                },
                X.propHooks.scrollTop = X.propHooks.scrollLeft = {
                    set: function (e) {
                        e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
                    }
                },
                ye.easing = {
                    linear: function (e) {
                        return e
                    },
                    swing: function (e) {
                        return .5 - Math.cos(e * Math.PI) / 2
                    },
                    _default: "swing"
                },
                ye.fx = X.prototype.init,
                ye.fx.step = {};
            var mt, yt, bt = /^(?:toggle|show|hide)$/, wt = /queueHooks$/;
            ye.Animation = ye.extend(Y, {
                tweeners: {
                    "*": [function (e, t) {
                        var n = this.createTween(e, t);
                        return b(n.elem, e, Xe.exec(t), n),
                            n
                    }
                    ]
                },
                tweener: function (e, t) {
                    ye.isFunction(e) ? (t = e,
                        e = ["*"]) : e = e.match(He);
                    for (var n, r = 0, i = e.length; r < i; r++)
                        n = e[r],
                            Y.tweeners[n] = Y.tweeners[n] || [],
                            Y.tweeners[n].unshift(t)
                },
                prefilters: [V],
                prefilter: function (e, t) {
                    t ? Y.prefilters.unshift(e) : Y.prefilters.push(e)
                }
            }),
                ye.speed = function (e, t, n) {
                    var r = e && "object" == typeof e ? ye.extend({}, e) : {
                        complete: n || !n && t || ye.isFunction(e) && e,
                        duration: e,
                        easing: n && t || t && !ye.isFunction(t) && t
                    };
                    return ye.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in ye.fx.speeds ? r.duration = ye.fx.speeds[r.duration] : r.duration = ye.fx.speeds._default),
                        null != r.queue && !0 !== r.queue || (r.queue = "fx"),
                        r.old = r.complete,
                        r.complete = function () {
                            ye.isFunction(r.old) && r.old.call(this),
                                r.queue && ye.dequeue(this, r.queue)
                        }
                        ,
                        r
                }
                ,
                ye.fn.extend({
                    fadeTo: function (e, t, n, r) {
                        return this.filter(Ue).css("opacity", 0).show().end().animate({
                            opacity: t
                        }, e, n, r)
                    },
                    animate: function (e, t, n, r) {
                        var i = ye.isEmptyObject(e)
                            , o = ye.speed(t, n, r)
                            , a = function () {
                                var t = Y(this, ye.extend({}, e), o);
                                (i || Le.get(this, "finish")) && t.stop(!0)
                            };
                        return a.finish = a,
                            i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
                    },
                    stop: function (e, t, n) {
                        var r = function (e) {
                            var t = e.stop;
                            delete e.stop,
                                t(n)
                        };
                        return "string" != typeof e && (n = t,
                            t = e,
                            e = void 0),
                            t && !1 !== e && this.queue(e || "fx", []),
                            this.each(function () {
                                var t = !0
                                    , i = null != e && e + "queueHooks"
                                    , o = ye.timers
                                    , a = Le.get(this);
                                if (i)
                                    a[i] && a[i].stop && r(a[i]);
                                else
                                    for (i in a)
                                        a[i] && a[i].stop && wt.test(i) && r(a[i]);
                                for (i = o.length; i--;)
                                    o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n),
                                        t = !1,
                                        o.splice(i, 1));
                                !t && n || ye.dequeue(this, e)
                            })
                    },
                    finish: function (e) {
                        return !1 !== e && (e = e || "fx"),
                            this.each(function () {
                                var t, n = Le.get(this), r = n[e + "queue"], i = n[e + "queueHooks"], o = ye.timers, a = r ? r.length : 0;
                                for (n.finish = !0,
                                    ye.queue(this, e, []),
                                    i && i.stop && i.stop.call(this, !0),
                                    t = o.length; t--;)
                                    o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0),
                                        o.splice(t, 1));
                                for (t = 0; t < a; t++)
                                    r[t] && r[t].finish && r[t].finish.call(this);
                                delete n.finish
                            })
                    }
                }),
                ye.each(["toggle", "show", "hide"], function (e, t) {
                    var n = ye.fn[t];
                    ye.fn[t] = function (e, r, i) {
                        return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate($(t, !0), e, r, i)
                    }
                }),
                ye.each({
                    slideDown: $("show"),
                    slideUp: $("hide"),
                    slideToggle: $("toggle"),
                    fadeIn: {
                        opacity: "show"
                    },
                    fadeOut: {
                        opacity: "hide"
                    },
                    fadeToggle: {
                        opacity: "toggle"
                    }
                }, function (e, t) {
                    ye.fn[e] = function (e, n, r) {
                        return this.animate(t, e, n, r)
                    }
                }),
                ye.timers = [],
                ye.fx.tick = function () {
                    var e, t = 0, n = ye.timers;
                    for (mt = ye.now(); t < n.length; t++)
                        (e = n[t])() || n[t] !== e || n.splice(t--, 1);
                    n.length || ye.fx.stop(),
                        mt = void 0
                }
                ,
                ye.fx.timer = function (e) {
                    ye.timers.push(e),
                        ye.fx.start()
                }
                ,
                ye.fx.interval = 13,
                ye.fx.start = function () {
                    yt || (yt = !0,
                        z())
                }
                ,
                ye.fx.stop = function () {
                    yt = null
                }
                ,
                ye.fx.speeds = {
                    slow: 600,
                    fast: 200,
                    _default: 400
                },
                ye.fn.delay = function (e, t) {
                    return e = ye.fx ? ye.fx.speeds[e] || e : e,
                        t = t || "fx",
                        this.queue(t, function (t, r) {
                            var i = n.setTimeout(t, e);
                            r.stop = function () {
                                n.clearTimeout(i)
                            }
                        })
                }
                ,
                function () {
                    var e = ae.createElement("input")
                        , t = ae.createElement("select")
                        , n = t.appendChild(ae.createElement("option"));
                    e.type = "checkbox",
                        me.checkOn = "" !== e.value,
                        me.optSelected = n.selected,
                        e = ae.createElement("input"),
                        e.value = "t",
                        e.type = "radio",
                        me.radioValue = "t" === e.value
                }();
            var xt, kt = ye.expr.attrHandle;
            ye.fn.extend({
                attr: function (e, t) {
                    return Be(this, ye.attr, e, t, arguments.length > 1)
                },
                removeAttr: function (e) {
                    return this.each(function () {
                        ye.removeAttr(this, e)
                    })
                }
            }),
                ye.extend({
                    attr: function (e, t, n) {
                        var r, i, o = e.nodeType;
                        if (3 !== o && 8 !== o && 2 !== o)
                            return void 0 === e.getAttribute ? ye.prop(e, t, n) : (1 === o && ye.isXMLDoc(e) || (i = ye.attrHooks[t.toLowerCase()] || (ye.expr.match.bool.test(t) ? xt : void 0)),
                                void 0 !== n ? null === n ? void ye.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""),
                                    n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : (r = ye.find.attr(e, t),
                                        null == r ? void 0 : r))
                    },
                    attrHooks: {
                        type: {
                            set: function (e, t) {
                                if (!me.radioValue && "radio" === t && c(e, "input")) {
                                    var n = e.value;
                                    return e.setAttribute("type", t),
                                        n && (e.value = n),
                                        t
                                }
                            }
                        }
                    },
                    removeAttr: function (e, t) {
                        var n, r = 0, i = t && t.match(He);
                        if (i && 1 === e.nodeType)
                            for (; n = i[r++];)
                                e.removeAttribute(n)
                    }
                }),
                xt = {
                    set: function (e, t, n) {
                        return !1 === t ? ye.removeAttr(e, n) : e.setAttribute(n, n),
                            n
                    }
                },
                ye.each(ye.expr.match.bool.source.match(/\w+/g), function (e, t) {
                    var n = kt[t] || ye.find.attr;
                    kt[t] = function (e, t, r) {
                        var i, o, a = t.toLowerCase();
                        return r || (o = kt[a],
                            kt[a] = i,
                            i = null != n(e, t, r) ? a : null,
                            kt[a] = o),
                            i
                    }
                });
            var St = /^(?:input|select|textarea|button)$/i
                , _t = /^(?:a|area)$/i;
            ye.fn.extend({
                prop: function (e, t) {
                    return Be(this, ye.prop, e, t, arguments.length > 1)
                },
                removeProp: function (e) {
                    return this.each(function () {
                        delete this[ye.propFix[e] || e]
                    })
                }
            }),
                ye.extend({
                    prop: function (e, t, n) {
                        var r, i, o = e.nodeType;
                        if (3 !== o && 8 !== o && 2 !== o)
                            return 1 === o && ye.isXMLDoc(e) || (t = ye.propFix[t] || t,
                                i = ye.propHooks[t]),
                                void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
                    },
                    propHooks: {
                        tabIndex: {
                            get: function (e) {
                                var t = ye.find.attr(e, "tabindex");
                                return t ? parseInt(t, 10) : St.test(e.nodeName) || _t.test(e.nodeName) && e.href ? 0 : -1
                            }
                        }
                    },
                    propFix: {
                        for: "htmlFor",
                        class: "className"
                    }
                }),
                me.optSelected || (ye.propHooks.selected = {
                    get: function (e) {
                        var t = e.parentNode;
                        return t && t.parentNode && t.parentNode.selectedIndex,
                            null
                    },
                    set: function (e) {
                        var t = e.parentNode;
                        t && (t.selectedIndex,
                            t.parentNode && t.parentNode.selectedIndex)
                    }
                }),
                ye.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
                    ye.propFix[this.toLowerCase()] = this
                }),
                ye.fn.extend({
                    addClass: function (e) {
                        var t, n, r, i, o, a, s, c = 0;
                        if (ye.isFunction(e))
                            return this.each(function (t) {
                                ye(this).addClass(e.call(this, t, Q(this)))
                            });
                        if ("string" == typeof e && e)
                            for (t = e.match(He) || []; n = this[c++];)
                                if (i = Q(n),
                                    r = 1 === n.nodeType && " " + G(i) + " ") {
                                    for (a = 0; o = t[a++];)
                                        r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                                    s = G(r),
                                        i !== s && n.setAttribute("class", s)
                                }
                        return this
                    },
                    removeClass: function (e) {
                        var t, n, r, i, o, a, s, c = 0;
                        if (ye.isFunction(e))
                            return this.each(function (t) {
                                ye(this).removeClass(e.call(this, t, Q(this)))
                            });
                        if (!arguments.length)
                            return this.attr("class", "");
                        if ("string" == typeof e && e)
                            for (t = e.match(He) || []; n = this[c++];)
                                if (i = Q(n),
                                    r = 1 === n.nodeType && " " + G(i) + " ") {
                                    for (a = 0; o = t[a++];)
                                        for (; r.indexOf(" " + o + " ") > -1;)
                                            r = r.replace(" " + o + " ", " ");
                                    s = G(r),
                                        i !== s && n.setAttribute("class", s)
                                }
                        return this
                    },
                    toggleClass: function (e, t) {
                        var n = typeof e;
                        return "boolean" == typeof t && "string" === n ? t ? this.addClass(e) : this.removeClass(e) : ye.isFunction(e) ? this.each(function (n) {
                            ye(this).toggleClass(e.call(this, n, Q(this), t), t)
                        }) : this.each(function () {
                            var t, r, i, o;
                            if ("string" === n)
                                for (r = 0,
                                    i = ye(this),
                                    o = e.match(He) || []; t = o[r++];)
                                    i.hasClass(t) ? i.removeClass(t) : i.addClass(t);
                            else
                                void 0 !== e && "boolean" !== n || (t = Q(this),
                                    t && Le.set(this, "__className__", t),
                                    this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : Le.get(this, "__className__") || ""))
                        })
                    },
                    hasClass: function (e) {
                        var t, n, r = 0;
                        for (t = " " + e + " "; n = this[r++];)
                            if (1 === n.nodeType && (" " + G(Q(n)) + " ").indexOf(t) > -1)
                                return !0;
                        return !1
                    }
                });
            var Ct = /\r/g;
            ye.fn.extend({
                val: function (e) {
                    var t, n, r, i = this[0];
                    {
                        if (arguments.length)
                            return r = ye.isFunction(e),
                                this.each(function (n) {
                                    var i;
                                    1 === this.nodeType && (i = r ? e.call(this, n, ye(this).val()) : e,
                                        null == i ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = ye.map(i, function (e) {
                                            return null == e ? "" : e + ""
                                        })),
                                        (t = ye.valHooks[this.type] || ye.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
                                });
                        if (i)
                            return (t = ye.valHooks[i.type] || ye.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : (n = i.value,
                                "string" == typeof n ? n.replace(Ct, "") : null == n ? "" : n)
                    }
                }
            }),
                ye.extend({
                    valHooks: {
                        option: {
                            get: function (e) {
                                var t = ye.find.attr(e, "value");
                                return null != t ? t : G(ye.text(e))
                            }
                        },
                        select: {
                            get: function (e) {
                                var t, n, r, i = e.options, o = e.selectedIndex, a = "select-one" === e.type, s = a ? null : [], l = a ? o + 1 : i.length;
                                for (r = o < 0 ? l : a ? o : 0; r < l; r++)
                                    if (n = i[r],
                                        (n.selected || r === o) && !n.disabled && (!n.parentNode.disabled || !c(n.parentNode, "optgroup"))) {
                                        if (t = ye(n).val(),
                                            a)
                                            return t;
                                        s.push(t)
                                    }
                                return s
                            },
                            set: function (e, t) {
                                for (var n, r, i = e.options, o = ye.makeArray(t), a = i.length; a--;)
                                    r = i[a],
                                        (r.selected = ye.inArray(ye.valHooks.option.get(r), o) > -1) && (n = !0);
                                return n || (e.selectedIndex = -1),
                                    o
                            }
                        }
                    }
                }),
                ye.each(["radio", "checkbox"], function () {
                    ye.valHooks[this] = {
                        set: function (e, t) {
                            if (Array.isArray(t))
                                return e.checked = ye.inArray(ye(e).val(), t) > -1
                        }
                    },
                        me.checkOn || (ye.valHooks[this].get = function (e) {
                            return null === e.getAttribute("value") ? "on" : e.value
                        }
                        )
                });
            var Tt = /^(?:focusinfocus|focusoutblur)$/;
            ye.extend(ye.event, {
                trigger: function (e, t, r, i) {
                    var o, a, s, c, l, u, f, d = [r || ae], p = he.call(e, "type") ? e.type : e, h = he.call(e, "namespace") ? e.namespace.split(".") : [];
                    if (a = s = r = r || ae,
                        3 !== r.nodeType && 8 !== r.nodeType && !Tt.test(p + ye.event.triggered) && (p.indexOf(".") > -1 && (h = p.split("."),
                            p = h.shift(),
                            h.sort()),
                            l = p.indexOf(":") < 0 && "on" + p,
                            e = e[ye.expando] ? e : new ye.Event(p, "object" == typeof e && e),
                            e.isTrigger = i ? 2 : 3,
                            e.namespace = h.join("."),
                            e.rnamespace = e.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null,
                            e.result = void 0,
                            e.target || (e.target = r),
                            t = null == t ? [e] : ye.makeArray(t, [e]),
                            f = ye.event.special[p] || {},
                            i || !f.trigger || !1 !== f.trigger.apply(r, t))) {
                        if (!i && !f.noBubble && !ye.isWindow(r)) {
                            for (c = f.delegateType || p,
                                Tt.test(c + p) || (a = a.parentNode); a; a = a.parentNode)
                                d.push(a),
                                    s = a;
                            s === (r.ownerDocument || ae) && d.push(s.defaultView || s.parentWindow || n)
                        }
                        for (o = 0; (a = d[o++]) && !e.isPropagationStopped();)
                            e.type = o > 1 ? c : f.bindType || p,
                                u = (Le.get(a, "events") || {})[e.type] && Le.get(a, "handle"),
                                u && u.apply(a, t),
                                (u = l && a[l]) && u.apply && De(a) && (e.result = u.apply(a, t),
                                    !1 === e.result && e.preventDefault());
                        return e.type = p,
                            i || e.isDefaultPrevented() || f._default && !1 !== f._default.apply(d.pop(), t) || !De(r) || l && ye.isFunction(r[p]) && !ye.isWindow(r) && (s = r[l],
                                s && (r[l] = null),
                                ye.event.triggered = p,
                                r[p](),
                                ye.event.triggered = void 0,
                                s && (r[l] = s)),
                            e.result
                    }
                },
                simulate: function (e, t, n) {
                    var r = ye.extend(new ye.Event, n, {
                        type: e,
                        isSimulated: !0
                    });
                    ye.event.trigger(r, null, t)
                }
            }),
                ye.fn.extend({
                    trigger: function (e, t) {
                        return this.each(function () {
                            ye.event.trigger(e, t, this)
                        })
                    },
                    triggerHandler: function (e, t) {
                        var n = this[0];
                        if (n)
                            return ye.event.trigger(e, t, n, !0)
                    }
                }),
                ye.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
                    ye.fn[t] = function (e, n) {
                        return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
                    }
                }),
                ye.fn.extend({
                    hover: function (e, t) {
                        return this.mouseenter(e).mouseleave(t || e)
                    }
                }),
                me.focusin = "onfocusin" in n,
                me.focusin || ye.each({
                    focus: "focusin",
                    blur: "focusout"
                }, function (e, t) {
                    var n = function (e) {
                        ye.event.simulate(t, e.target, ye.event.fix(e))
                    };
                    ye.event.special[t] = {
                        setup: function () {
                            var r = this.ownerDocument || this
                                , i = Le.access(r, t);
                            i || r.addEventListener(e, n, !0),
                                Le.access(r, t, (i || 0) + 1)
                        },
                        teardown: function () {
                            var r = this.ownerDocument || this
                                , i = Le.access(r, t) - 1;
                            i ? Le.access(r, t, i) : (r.removeEventListener(e, n, !0),
                                Le.remove(r, t))
                        }
                    }
                });
            var Et = n.location
                , Ot = ye.now()
                , Nt = /\?/;
            ye.parseXML = function (e) {
                var t;
                if (!e || "string" != typeof e)
                    return null;
                try {
                    t = (new n.DOMParser).parseFromString(e, "text/xml")
                } catch (e) {
                    t = void 0
                }
                return t && !t.getElementsByTagName("parsererror").length || ye.error("Invalid XML: " + e),
                    t
            }
                ;
            var Pt = /\[\]$/
                , jt = /\r?\n/g
                , At = /^(?:submit|button|image|reset|file)$/i
                , Ht = /^(?:input|select|textarea|keygen)/i;
            ye.param = function (e, t) {
                var n, r = [], i = function (e, t) {
                    var n = ye.isFunction(t) ? t() : t;
                    r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
                };
                if (Array.isArray(e) || e.jquery && !ye.isPlainObject(e))
                    ye.each(e, function () {
                        i(this.name, this.value)
                    });
                else
                    for (n in e)
                        Z(n, e[n], t, i);
                return r.join("&")
            }
                ,
                ye.fn.extend({
                    serialize: function () {
                        return ye.param(this.serializeArray())
                    },
                    serializeArray: function () {
                        return this.map(function () {
                            var e = ye.prop(this, "elements");
                            return e ? ye.makeArray(e) : this
                        }).filter(function () {
                            var e = this.type;
                            return this.name && !ye(this).is(":disabled") && Ht.test(this.nodeName) && !At.test(e) && (this.checked || !Ve.test(e))
                        }).map(function (e, t) {
                            var n = ye(this).val();
                            return null == n ? null : Array.isArray(n) ? ye.map(n, function (e) {
                                return {
                                    name: t.name,
                                    value: e.replace(jt, "\r\n")
                                }
                            }) : {
                                    name: t.name,
                                    value: n.replace(jt, "\r\n")
                                }
                        }).get()
                    }
                });
            var Rt = /%20/g
                , Mt = /#.*$/
                , Bt = /([?&])_=[^&]*/
                , Dt = /^(.*?):[ \t]*([^\r\n]*)$/gm
                , Lt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/
                , It = /^(?:GET|HEAD)$/
                , Ft = /^\/\//
                , qt = {}
                , Wt = {}
                , Xt = "*/".concat("*")
                , zt = ae.createElement("a");
            zt.href = Et.href,
                ye.extend({
                    active: 0,
                    lastModified: {},
                    etag: {},
                    ajaxSettings: {
                        url: Et.href,
                        type: "GET",
                        isLocal: Lt.test(Et.protocol),
                        global: !0,
                        processData: !0,
                        async: !0,
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        accepts: {
                            "*": Xt,
                            text: "text/plain",
                            html: "text/html",
                            xml: "application/xml, text/xml",
                            json: "application/json, text/javascript"
                        },
                        contents: {
                            xml: /\bxml\b/,
                            html: /\bhtml/,
                            json: /\bjson\b/
                        },
                        responseFields: {
                            xml: "responseXML",
                            text: "responseText",
                            json: "responseJSON"
                        },
                        converters: {
                            "* text": String,
                            "text html": !0,
                            "text json": JSON.parse,
                            "text xml": ye.parseXML
                        },
                        flatOptions: {
                            url: !0,
                            context: !0
                        }
                    },
                    ajaxSetup: function (e, t) {
                        return t ? ne(ne(e, ye.ajaxSettings), t) : ne(ye.ajaxSettings, e)
                    },
                    ajaxPrefilter: ee(qt),
                    ajaxTransport: ee(Wt),
                    ajax: function (e, t) {
                        function r(e, t, r, s) {
                            var l, d, p, w, x, k = t;
                            u || (u = !0,
                                c && n.clearTimeout(c),
                                i = void 0,
                                a = s || "",
                                S.readyState = e > 0 ? 4 : 0,
                                l = e >= 200 && e < 300 || 304 === e,
                                r && (w = re(h, S, r)),
                                w = ie(h, w, S, l),
                                l ? (h.ifModified && (x = S.getResponseHeader("Last-Modified"),
                                    x && (ye.lastModified[o] = x),
                                    (x = S.getResponseHeader("etag")) && (ye.etag[o] = x)),
                                    204 === e || "HEAD" === h.type ? k = "nocontent" : 304 === e ? k = "notmodified" : (k = w.state,
                                        d = w.data,
                                        p = w.error,
                                        l = !p)) : (p = k,
                                            !e && k || (k = "error",
                                                e < 0 && (e = 0))),
                                S.status = e,
                                S.statusText = (t || k) + "",
                                l ? m.resolveWith(g, [d, k, S]) : m.rejectWith(g, [S, k, p]),
                                S.statusCode(b),
                                b = void 0,
                                f && v.trigger(l ? "ajaxSuccess" : "ajaxError", [S, h, l ? d : p]),
                                y.fireWith(g, [S, k]),
                                f && (v.trigger("ajaxComplete", [S, h]),
                                    --ye.active || ye.event.trigger("ajaxStop")))
                        }
                        "object" == typeof e && (t = e,
                            e = void 0),
                            t = t || {};
                        var i, o, a, s, c, l, u, f, d, p, h = ye.ajaxSetup({}, t), g = h.context || h, v = h.context && (g.nodeType || g.jquery) ? ye(g) : ye.event, m = ye.Deferred(), y = ye.Callbacks("once memory"), b = h.statusCode || {}, w = {}, x = {}, k = "canceled", S = {
                            readyState: 0,
                            getResponseHeader: function (e) {
                                var t;
                                if (u) {
                                    if (!s)
                                        for (s = {}; t = Dt.exec(a);)
                                            s[t[1].toLowerCase()] = t[2];
                                    t = s[e.toLowerCase()]
                                }
                                return null == t ? null : t
                            },
                            getAllResponseHeaders: function () {
                                return u ? a : null
                            },
                            setRequestHeader: function (e, t) {
                                return null == u && (e = x[e.toLowerCase()] = x[e.toLowerCase()] || e,
                                    w[e] = t),
                                    this
                            },
                            overrideMimeType: function (e) {
                                return null == u && (h.mimeType = e),
                                    this
                            },
                            statusCode: function (e) {
                                var t;
                                if (e)
                                    if (u)
                                        S.always(e[S.status]);
                                    else
                                        for (t in e)
                                            b[t] = [b[t], e[t]];
                                return this
                            },
                            abort: function (e) {
                                var t = e || k;
                                return i && i.abort(t),
                                    r(0, t),
                                    this
                            }
                        };
                        if (m.promise(S),
                            h.url = ((e || h.url || Et.href) + "").replace(Ft, Et.protocol + "//"),
                            h.type = t.method || t.type || h.method || h.type,
                            h.dataTypes = (h.dataType || "*").toLowerCase().match(He) || [""],
                            null == h.crossDomain) {
                            l = ae.createElement("a");
                            try {
                                l.href = h.url,
                                    l.href = l.href,
                                    h.crossDomain = zt.protocol + "//" + zt.host != l.protocol + "//" + l.host
                            } catch (e) {
                                h.crossDomain = !0
                            }
                        }
                        if (h.data && h.processData && "string" != typeof h.data && (h.data = ye.param(h.data, h.traditional)),
                            te(qt, h, t, S),
                            u)
                            return S;
                        f = ye.event && h.global,
                            f && 0 == ye.active++ && ye.event.trigger("ajaxStart"),
                            h.type = h.type.toUpperCase(),
                            h.hasContent = !It.test(h.type),
                            o = h.url.replace(Mt, ""),
                            h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(Rt, "+")) : (p = h.url.slice(o.length),
                                h.data && (o += (Nt.test(o) ? "&" : "?") + h.data,
                                    delete h.data),
                                !1 === h.cache && (o = o.replace(Bt, "$1"),
                                    p = (Nt.test(o) ? "&" : "?") + "_=" + Ot++ + p),
                                h.url = o + p),
                            h.ifModified && (ye.lastModified[o] && S.setRequestHeader("If-Modified-Since", ye.lastModified[o]),
                                ye.etag[o] && S.setRequestHeader("If-None-Match", ye.etag[o])),
                            (h.data && h.hasContent && !1 !== h.contentType || t.contentType) && S.setRequestHeader("Content-Type", h.contentType),
                            S.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + Xt + "; q=0.01" : "") : h.accepts["*"]);
                        for (d in h.headers)
                            S.setRequestHeader(d, h.headers[d]);
                        if (h.beforeSend && (!1 === h.beforeSend.call(g, S, h) || u))
                            return S.abort();
                        if (k = "abort",
                            y.add(h.complete),
                            S.done(h.success),
                            S.fail(h.error),
                            i = te(Wt, h, t, S)) {
                            if (S.readyState = 1,
                                f && v.trigger("ajaxSend", [S, h]),
                                u)
                                return S;
                            h.async && h.timeout > 0 && (c = n.setTimeout(function () {
                                S.abort("timeout")
                            }, h.timeout));
                            try {
                                u = !1,
                                    i.send(w, r)
                            } catch (e) {
                                if (u)
                                    throw e;
                                r(-1, e)
                            }
                        } else
                            r(-1, "No Transport");
                        return S
                    },
                    getJSON: function (e, t, n) {
                        return ye.get(e, t, n, "json")
                    },
                    getScript: function (e, t) {
                        return ye.get(e, void 0, t, "script")
                    }
                }),
                ye.each(["get", "post"], function (e, t) {
                    ye[t] = function (e, n, r, i) {
                        return ye.isFunction(n) && (i = i || r,
                            r = n,
                            n = void 0),
                            ye.ajax(ye.extend({
                                url: e,
                                type: t,
                                dataType: i,
                                data: n,
                                success: r
                            }, ye.isPlainObject(e) && e))
                    }
                }),
                ye._evalUrl = function (e) {
                    return ye.ajax({
                        url: e,
                        type: "GET",
                        dataType: "script",
                        cache: !0,
                        async: !1,
                        global: !1,
                        throws: !0
                    })
                }
                ,
                ye.fn.extend({
                    wrapAll: function (e) {
                        var t;
                        return this[0] && (ye.isFunction(e) && (e = e.call(this[0])),
                            t = ye(e, this[0].ownerDocument).eq(0).clone(!0),
                            this[0].parentNode && t.insertBefore(this[0]),
                            t.map(function () {
                                for (var e = this; e.firstElementChild;)
                                    e = e.firstElementChild;
                                return e
                            }).append(this)),
                            this
                    },
                    wrapInner: function (e) {
                        return ye.isFunction(e) ? this.each(function (t) {
                            ye(this).wrapInner(e.call(this, t))
                        }) : this.each(function () {
                            var t = ye(this)
                                , n = t.contents();
                            n.length ? n.wrapAll(e) : t.append(e)
                        })
                    },
                    wrap: function (e) {
                        var t = ye.isFunction(e);
                        return this.each(function (n) {
                            ye(this).wrapAll(t ? e.call(this, n) : e)
                        })
                    },
                    unwrap: function (e) {
                        return this.parent(e).not("body").each(function () {
                            ye(this).replaceWith(this.childNodes)
                        }),
                            this
                    }
                }),
                ye.expr.pseudos.hidden = function (e) {
                    return !ye.expr.pseudos.visible(e)
                }
                ,
                ye.expr.pseudos.visible = function (e) {
                    return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
                }
                ,
                ye.ajaxSettings.xhr = function () {
                    try {
                        return new n.XMLHttpRequest
                    } catch (e) { }
                }
                ;
            var Ut = {
                0: 200,
                1223: 204
            }
                , $t = ye.ajaxSettings.xhr();
            me.cors = !!$t && "withCredentials" in $t,
                me.ajax = $t = !!$t,
                ye.ajaxTransport(function (e) {
                    var t, r;
                    if (me.cors || $t && !e.crossDomain)
                        return {
                            send: function (i, o) {
                                var a, s = e.xhr();
                                if (s.open(e.type, e.url, e.async, e.username, e.password),
                                    e.xhrFields)
                                    for (a in e.xhrFields)
                                        s[a] = e.xhrFields[a];
                                e.mimeType && s.overrideMimeType && s.overrideMimeType(e.mimeType),
                                    e.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
                                for (a in i)
                                    s.setRequestHeader(a, i[a]);
                                t = function (e) {
                                    return function () {
                                        t && (t = r = s.onload = s.onerror = s.onabort = s.onreadystatechange = null,
                                            "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Ut[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {
                                                binary: s.response
                                            } : {
                                                    text: s.responseText
                                                }, s.getAllResponseHeaders()))
                                    }
                                }
                                    ,
                                    s.onload = t(),
                                    r = s.onerror = t("error"),
                                    void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () {
                                        4 === s.readyState && n.setTimeout(function () {
                                            t && r()
                                        })
                                    }
                                    ,
                                    t = t("abort");
                                try {
                                    s.send(e.hasContent && e.data || null)
                                } catch (e) {
                                    if (t)
                                        throw e
                                }
                            },
                            abort: function () {
                                t && t()
                            }
                        }
                }),
                ye.ajaxPrefilter(function (e) {
                    e.crossDomain && (e.contents.script = !1)
                }),
                ye.ajaxSetup({
                    accepts: {
                        script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
                    },
                    contents: {
                        script: /\b(?:java|ecma)script\b/
                    },
                    converters: {
                        "text script": function (e) {
                            return ye.globalEval(e),
                                e
                        }
                    }
                }),
                ye.ajaxPrefilter("script", function (e) {
                    void 0 === e.cache && (e.cache = !1),
                        e.crossDomain && (e.type = "GET")
                }),
                ye.ajaxTransport("script", function (e) {
                    if (e.crossDomain) {
                        var t, n;
                        return {
                            send: function (r, i) {
                                t = ye("<script>").prop({
                                    charset: e.scriptCharset,
                                    src: e.url
                                }).on("load error", n = function (e) {
                                    t.remove(),
                                        n = null,
                                        e && i("error" === e.type ? 404 : 200, e.type)
                                }
                                ),
                                    ae.head.appendChild(t[0])
                            },
                            abort: function () {
                                n && n()
                            }
                        }
                    }
                });
            var Jt = []
                , Vt = /(=)\?(?=&|$)|\?\?/;
            ye.ajaxSetup({
                jsonp: "callback",
                jsonpCallback: function () {
                    var e = Jt.pop() || ye.expando + "_" + Ot++;
                    return this[e] = !0,
                        e
                }
            }),
                ye.ajaxPrefilter("json jsonp", function (e, t, r) {
                    var i, o, a, s = !1 !== e.jsonp && (Vt.test(e.url) ? "url" : "string" == typeof e.data && 0 === (e.contentType || "").indexOf("application/x-www-form-urlencoded") && Vt.test(e.data) && "data");
                    if (s || "jsonp" === e.dataTypes[0])
                        return i = e.jsonpCallback = ye.isFunction(e.jsonpCallback) ? e.jsonpCallback() : e.jsonpCallback,
                            s ? e[s] = e[s].replace(Vt, "$1" + i) : !1 !== e.jsonp && (e.url += (Nt.test(e.url) ? "&" : "?") + e.jsonp + "=" + i),
                            e.converters["script json"] = function () {
                                return a || ye.error(i + " was not called"),
                                    a[0]
                            }
                            ,
                            e.dataTypes[0] = "json",
                            o = n[i],
                            n[i] = function () {
                                a = arguments
                            }
                            ,
                            r.always(function () {
                                void 0 === o ? ye(n).removeProp(i) : n[i] = o,
                                    e[i] && (e.jsonpCallback = t.jsonpCallback,
                                        Jt.push(i)),
                                    a && ye.isFunction(o) && o(a[0]),
                                    a = o = void 0
                            }),
                            "script"
                }),
                me.createHTMLDocument = function () {
                    var e = ae.implementation.createHTMLDocument("").body;
                    return e.innerHTML = "<form></form><form></form>",
                        2 === e.childNodes.length
                }(),
                ye.parseHTML = function (e, t, n) {
                    if ("string" != typeof e)
                        return [];
                    "boolean" == typeof t && (n = t,
                        t = !1);
                    var r, i, o;
                    return t || (me.createHTMLDocument ? (t = ae.implementation.createHTMLDocument(""),
                        r = t.createElement("base"),
                        r.href = ae.location.href,
                        t.head.appendChild(r)) : t = ae),
                        i = Ee.exec(e),
                        o = !n && [],
                        i ? [t.createElement(i[1])] : (i = _([e], t, o),
                            o && o.length && ye(o).remove(),
                            ye.merge([], i.childNodes))
                }
                ,
                ye.fn.load = function (e, t, n) {
                    var r, i, o, a = this, s = e.indexOf(" ");
                    return s > -1 && (r = G(e.slice(s)),
                        e = e.slice(0, s)),
                        ye.isFunction(t) ? (n = t,
                            t = void 0) : t && "object" == typeof t && (i = "POST"),
                        a.length > 0 && ye.ajax({
                            url: e,
                            type: i || "GET",
                            dataType: "html",
                            data: t
                        }).done(function (e) {
                            o = arguments,
                                a.html(r ? ye("<div>").append(ye.parseHTML(e)).find(r) : e)
                        }).always(n && function (e, t) {
                            a.each(function () {
                                n.apply(this, o || [e.responseText, t, e])
                            })
                        }
                        ),
                        this
                }
                ,
                ye.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
                    ye.fn[t] = function (e) {
                        return this.on(t, e)
                    }
                }),
                ye.expr.pseudos.animated = function (e) {
                    return ye.grep(ye.timers, function (t) {
                        return e === t.elem
                    }).length
                }
                ,
                ye.offset = {
                    setOffset: function (e, t, n) {
                        var r, i, o, a, s, c, l, u = ye.css(e, "position"), f = ye(e), d = {};
                        "static" === u && (e.style.position = "relative"),
                            s = f.offset(),
                            o = ye.css(e, "top"),
                            c = ye.css(e, "left"),
                            l = ("absolute" === u || "fixed" === u) && (o + c).indexOf("auto") > -1,
                            l ? (r = f.position(),
                                a = r.top,
                                i = r.left) : (a = parseFloat(o) || 0,
                                    i = parseFloat(c) || 0),
                            ye.isFunction(t) && (t = t.call(e, n, ye.extend({}, s))),
                            null != t.top && (d.top = t.top - s.top + a),
                            null != t.left && (d.left = t.left - s.left + i),
                            "using" in t ? t.using.call(e, d) : f.css(d)
                    }
                },
                ye.fn.extend({
                    offset: function (e) {
                        if (arguments.length)
                            return void 0 === e ? this : this.each(function (t) {
                                ye.offset.setOffset(this, e, t)
                            });
                        var t, n, r, i, o = this[0];
                        if (o)
                            return o.getClientRects().length ? (r = o.getBoundingClientRect(),
                                t = o.ownerDocument,
                                n = t.documentElement,
                                i = t.defaultView,
                                {
                                    top: r.top + i.pageYOffset - n.clientTop,
                                    left: r.left + i.pageXOffset - n.clientLeft
                                }) : {
                                    top: 0,
                                    left: 0
                                }
                    },
                    position: function () {
                        if (this[0]) {
                            var e, t, n = this[0], r = {
                                top: 0,
                                left: 0
                            };
                            return "fixed" === ye.css(n, "position") ? t = n.getBoundingClientRect() : (e = this.offsetParent(),
                                t = this.offset(),
                                c(e[0], "html") || (r = e.offset()),
                                r = {
                                    top: r.top + ye.css(e[0], "borderTopWidth", !0),
                                    left: r.left + ye.css(e[0], "borderLeftWidth", !0)
                                }),
                                {
                                    top: t.top - r.top - ye.css(n, "marginTop", !0),
                                    left: t.left - r.left - ye.css(n, "marginLeft", !0)
                                }
                        }
                    },
                    offsetParent: function () {
                        return this.map(function () {
                            for (var e = this.offsetParent; e && "static" === ye.css(e, "position");)
                                e = e.offsetParent;
                            return e || Ze
                        })
                    }
                }),
                ye.each({
                    scrollLeft: "pageXOffset",
                    scrollTop: "pageYOffset"
                }, function (e, t) {
                    var n = "pageYOffset" === t;
                    ye.fn[e] = function (r) {
                        return Be(this, function (e, r, i) {
                            var o;
                            if (ye.isWindow(e) ? o = e : 9 === e.nodeType && (o = e.defaultView),
                                void 0 === i)
                                return o ? o[t] : e[r];
                            o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
                        }, e, r, arguments.length)
                    }
                }),
                ye.each(["top", "left"], function (e, t) {
                    ye.cssHooks[t] = D(me.pixelPosition, function (e, n) {
                        if (n)
                            return n = B(e, t),
                                lt.test(n) ? ye(e).position()[t] + "px" : n
                    })
                }),
                ye.each({
                    Height: "height",
                    Width: "width"
                }, function (e, t) {
                    ye.each({
                        padding: "inner" + e,
                        content: t,
                        "": "outer" + e
                    }, function (n, r) {
                        ye.fn[r] = function (i, o) {
                            var a = arguments.length && (n || "boolean" != typeof i)
                                , s = n || (!0 === i || !0 === o ? "margin" : "border");
                            return Be(this, function (t, n, i) {
                                var o;
                                return ye.isWindow(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement,
                                    Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? ye.css(t, n, s) : ye.style(t, n, i, s)
                            }, t, a ? i : void 0, a)
                        }
                    })
                }),
                ye.fn.extend({
                    bind: function (e, t, n) {
                        return this.on(e, null, t, n)
                    },
                    unbind: function (e, t) {
                        return this.off(e, null, t)
                    },
                    delegate: function (e, t, n, r) {
                        return this.on(t, e, n, r)
                    },
                    undelegate: function (e, t, n) {
                        return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
                    }
                }),
                ye.holdReady = function (e) {
                    e ? ye.readyWait++ : ye.ready(!0)
                }
                ,
                ye.isArray = Array.isArray,
                ye.parseJSON = JSON.parse,
                ye.nodeName = c,
                r = [],
                void 0 !== (i = function () {
                    return ye
                }
                    .apply(t, r)) && (e.exports = i);
            var Kt = n.jQuery
                , Yt = n.$;
            return ye.noConflict = function (e) {
                return n.$ === ye && (n.$ = Yt),
                    e && n.jQuery === ye && (n.jQuery = Kt),
                    ye
            }
                ,
                o || (n.jQuery = n.$ = ye),
                ye
        })
    },
    120: function (e, t, n) {
        var r, i;
        !function (o) {
            r = o,
                void 0 !== (i = "function" == typeof r ? r.call(t, n, t, e) : r) && (e.exports = i),
                e.exports = o()
        }(function () {
            function e() {
                for (var e = 0, t = {}; e < arguments.length; e++) {
                    var n = arguments[e];
                    for (var r in n)
                        t[r] = n[r]
                }
                return t
            }
            function t(n) {
                function r(t, i, o) {
                    var a;
                    if ("undefined" != typeof document) {
                        if (arguments.length > 1) {
                            if (o = e({
                                path: "/"
                            }, r.defaults, o),
                                "number" == typeof o.expires) {
                                var s = new Date;
                                s.setMilliseconds(s.getMilliseconds() + 864e5 * o.expires),
                                    o.expires = s
                            }
                            try {
                                a = JSON.stringify(i),
                                    /^[\{\[]/.test(a) && (i = a)
                            } catch (e) { }
                            return i = n.write ? n.write(i, t) : encodeURIComponent(String(i)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent),
                                t = encodeURIComponent(String(t)),
                                t = t.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent),
                                t = t.replace(/[\(\)]/g, escape),
                                document.cookie = [t, "=", i, o.expires ? "; expires=" + o.expires.toUTCString() : "", o.path ? "; path=" + o.path : "", o.domain ? "; domain=" + o.domain : "", o.secure ? "; secure" : ""].join("")
                        }
                        t || (a = {});
                        for (var c = document.cookie ? document.cookie.split("; ") : [], l = /(%[0-9A-Z]{2})+/g, u = 0; u < c.length; u++) {
                            var f = c[u].split("=")
                                , d = f.slice(1).join("=");
                            '"' === d.charAt(0) && (d = d.slice(1, -1));
                            try {
                                var p = f[0].replace(l, decodeURIComponent);
                                if (d = n.read ? n.read(d, p) : n(d, p) || d.replace(l, decodeURIComponent),
                                    this.json)
                                    try {
                                        d = JSON.parse(d)
                                    } catch (e) { }
                                if (t === p) {
                                    a = d;
                                    break
                                }
                                t || (a[p] = d)
                            } catch (e) { }
                        }
                        return a
                    }
                }
                return r.set = r,
                    r.get = function (e) {
                        return r.call(r, e)
                    }
                    ,
                    r.getJSON = function () {
                        return r.apply({
                            json: !0
                        }, [].slice.call(arguments))
                    }
                    ,
                    r.defaults = {},
                    r.remove = function (t, n) {
                        r(t, "", e(n, {
                            expires: -1
                        }))
                    }
                    ,
                    r.withConverter = t,
                    r
            }
            return t(function () { })
        })
    },
    13: function (e, t, n) {
        (function (t) {
            var r = n(51)
                , i = "undefined" != typeof window ? window : void 0 !== t ? t : "undefined" != typeof self ? self : {}
                , o = i.Raven
                , a = new r;
            a.noConflict = function () {
                return i.Raven = o,
                    a
            }
                ,
                a.afterLoad(),
                e.exports = a
        }
        ).call(t, n(4))
    },
    2: function (e, t, n) {
        "use strict";
        n.d(t, "a", function () {
            return r
        });
        var r = {}
    },
    221: function (e, t) { },
    3: function (e, t, n) {
        var r, i;
        (function () {
            function n(e) {
                function t(t, n, r, i, o, a) {
                    for (; o >= 0 && o < a; o += e) {
                        var s = i ? i[o] : o;
                        r = n(r, t[s], s, t)
                    }
                    return r
                }
                return function (n, r, i, o) {
                    r = S(r, o, 4);
                    var a = !P(n) && k.keys(n)
                        , s = (a || n).length
                        , c = e > 0 ? 0 : s - 1;
                    return arguments.length < 3 && (i = n[a ? a[c] : c],
                        c += e),
                        t(n, r, i, a, c, s)
                }
            }
            function o(e) {
                return function (t, n, r) {
                    n = _(n, r);
                    for (var i = N(t), o = e > 0 ? 0 : i - 1; o >= 0 && o < i; o += e)
                        if (n(t[o], o, t))
                            return o;
                    return -1
                }
            }
            function a(e, t, n) {
                return function (r, i, o) {
                    var a = 0
                        , s = N(r);
                    if ("number" == typeof o)
                        e > 0 ? a = o >= 0 ? o : Math.max(o + s, a) : s = o >= 0 ? Math.min(o + 1, s) : o + s + 1;
                    else if (n && o && s)
                        return o = n(r, i),
                            r[o] === i ? o : -1;
                    if (i !== i)
                        return o = t(h.call(r, a, s), k.isNaN),
                            o >= 0 ? o + a : -1;
                    for (o = e > 0 ? a : s - 1; o >= 0 && o < s; o += e)
                        if (r[o] === i)
                            return o;
                    return -1
                }
            }
            function s(e, t) {
                var n = M.length
                    , r = e.constructor
                    , i = k.isFunction(r) && r.prototype || f
                    , o = "constructor";
                for (k.has(e, o) && !k.contains(t, o) && t.push(o); n--;)
                    (o = M[n]) in e && e[o] !== i[o] && !k.contains(t, o) && t.push(o)
            }
            var c = this
                , l = c._
                , u = Array.prototype
                , f = Object.prototype
                , d = Function.prototype
                , p = u.push
                , h = u.slice
                , g = f.toString
                , v = f.hasOwnProperty
                , m = Array.isArray
                , y = Object.keys
                , b = d.bind
                , w = Object.create
                , x = function () { }
                , k = function (e) {
                    return e instanceof k ? e : this instanceof k ? void (this._wrapped = e) : new k(e)
                };
            void 0 !== e && e.exports && (t = e.exports = k),
                t._ = k,
                k.VERSION = "1.8.3";
            var S = function (e, t, n) {
                if (void 0 === t)
                    return e;
                switch (null == n ? 3 : n) {
                    case 1:
                        return function (n) {
                            return e.call(t, n)
                        }
                            ;
                    case 2:
                        return function (n, r) {
                            return e.call(t, n, r)
                        }
                            ;
                    case 3:
                        return function (n, r, i) {
                            return e.call(t, n, r, i)
                        }
                            ;
                    case 4:
                        return function (n, r, i, o) {
                            return e.call(t, n, r, i, o)
                        }
                }
                return function () {
                    return e.apply(t, arguments)
                }
            }
                , _ = function (e, t, n) {
                    return null == e ? k.identity : k.isFunction(e) ? S(e, t, n) : k.isObject(e) ? k.matcher(e) : k.property(e)
                };
            k.iteratee = function (e, t) {
                return _(e, t, 1 / 0)
            }
                ;
            var C = function (e, t) {
                return function (n) {
                    var r = arguments.length;
                    if (r < 2 || null == n)
                        return n;
                    for (var i = 1; i < r; i++)
                        for (var o = arguments[i], a = e(o), s = a.length, c = 0; c < s; c++) {
                            var l = a[c];
                            t && void 0 !== n[l] || (n[l] = o[l])
                        }
                    return n
                }
            }
                , T = function (e) {
                    if (!k.isObject(e))
                        return {};
                    if (w)
                        return w(e);
                    x.prototype = e;
                    var t = new x;
                    return x.prototype = null,
                        t
                }
                , E = function (e) {
                    return function (t) {
                        return null == t ? void 0 : t[e]
                    }
                }
                , O = Math.pow(2, 53) - 1
                , N = E("length")
                , P = function (e) {
                    var t = N(e);
                    return "number" == typeof t && t >= 0 && t <= O
                };
            k.each = k.forEach = function (e, t, n) {
                t = S(t, n);
                var r, i;
                if (P(e))
                    for (r = 0,
                        i = e.length; r < i; r++)
                        t(e[r], r, e);
                else {
                    var o = k.keys(e);
                    for (r = 0,
                        i = o.length; r < i; r++)
                        t(e[o[r]], o[r], e)
                }
                return e
            }
                ,
                k.map = k.collect = function (e, t, n) {
                    t = _(t, n);
                    for (var r = !P(e) && k.keys(e), i = (r || e).length, o = Array(i), a = 0; a < i; a++) {
                        var s = r ? r[a] : a;
                        o[a] = t(e[s], s, e)
                    }
                    return o
                }
                ,
                k.reduce = k.foldl = k.inject = n(1),
                k.reduceRight = k.foldr = n(-1),
                k.find = k.detect = function (e, t, n) {
                    var r;
                    if (void 0 !== (r = P(e) ? k.findIndex(e, t, n) : k.findKey(e, t, n)) && -1 !== r)
                        return e[r]
                }
                ,
                k.filter = k.select = function (e, t, n) {
                    var r = [];
                    return t = _(t, n),
                        k.each(e, function (e, n, i) {
                            t(e, n, i) && r.push(e)
                        }),
                        r
                }
                ,
                k.reject = function (e, t, n) {
                    return k.filter(e, k.negate(_(t)), n)
                }
                ,
                k.every = k.all = function (e, t, n) {
                    t = _(t, n);
                    for (var r = !P(e) && k.keys(e), i = (r || e).length, o = 0; o < i; o++) {
                        var a = r ? r[o] : o;
                        if (!t(e[a], a, e))
                            return !1
                    }
                    return !0
                }
                ,
                k.some = k.any = function (e, t, n) {
                    t = _(t, n);
                    for (var r = !P(e) && k.keys(e), i = (r || e).length, o = 0; o < i; o++) {
                        var a = r ? r[o] : o;
                        if (t(e[a], a, e))
                            return !0
                    }
                    return !1
                }
                ,
                k.contains = k.includes = k.include = function (e, t, n, r) {
                    return P(e) || (e = k.values(e)),
                        ("number" != typeof n || r) && (n = 0),
                        k.indexOf(e, t, n) >= 0
                }
                ,
                k.invoke = function (e, t) {
                    var n = h.call(arguments, 2)
                        , r = k.isFunction(t);
                    return k.map(e, function (e) {
                        var i = r ? t : e[t];
                        return null == i ? i : i.apply(e, n)
                    })
                }
                ,
                k.pluck = function (e, t) {
                    return k.map(e, k.property(t))
                }
                ,
                k.where = function (e, t) {
                    return k.filter(e, k.matcher(t))
                }
                ,
                k.findWhere = function (e, t) {
                    return k.find(e, k.matcher(t))
                }
                ,
                k.max = function (e, t, n) {
                    var r, i, o = -1 / 0, a = -1 / 0;
                    if (null == t && null != e) {
                        e = P(e) ? e : k.values(e);
                        for (var s = 0, c = e.length; s < c; s++)
                            (r = e[s]) > o && (o = r)
                    } else
                        t = _(t, n),
                            k.each(e, function (e, n, r) {
                                ((i = t(e, n, r)) > a || i === -1 / 0 && o === -1 / 0) && (o = e,
                                    a = i)
                            });
                    return o
                }
                ,
                k.min = function (e, t, n) {
                    var r, i, o = 1 / 0, a = 1 / 0;
                    if (null == t && null != e) {
                        e = P(e) ? e : k.values(e);
                        for (var s = 0, c = e.length; s < c; s++)
                            (r = e[s]) < o && (o = r)
                    } else
                        t = _(t, n),
                            k.each(e, function (e, n, r) {
                                ((i = t(e, n, r)) < a || i === 1 / 0 && o === 1 / 0) && (o = e,
                                    a = i)
                            });
                    return o
                }
                ,
                k.shuffle = function (e) {
                    for (var t, n = P(e) ? e : k.values(e), r = n.length, i = Array(r), o = 0; o < r; o++)
                        t = k.random(0, o),
                            t !== o && (i[o] = i[t]),
                            i[t] = n[o];
                    return i
                }
                ,
                k.sample = function (e, t, n) {
                    return null == t || n ? (P(e) || (e = k.values(e)),
                        e[k.random(e.length - 1)]) : k.shuffle(e).slice(0, Math.max(0, t))
                }
                ,
                k.sortBy = function (e, t, n) {
                    return t = _(t, n),
                        k.pluck(k.map(e, function (e, n, r) {
                            return {
                                value: e,
                                index: n,
                                criteria: t(e, n, r)
                            }
                        }).sort(function (e, t) {
                            var n = e.criteria
                                , r = t.criteria;
                            if (n !== r) {
                                if (n > r || void 0 === n)
                                    return 1;
                                if (n < r || void 0 === r)
                                    return -1
                            }
                            return e.index - t.index
                        }), "value")
                }
                ;
            var j = function (e) {
                return function (t, n, r) {
                    var i = {};
                    return n = _(n, r),
                        k.each(t, function (r, o) {
                            var a = n(r, o, t);
                            e(i, r, a)
                        }),
                        i
                }
            };
            k.groupBy = j(function (e, t, n) {
                k.has(e, n) ? e[n].push(t) : e[n] = [t]
            }),
                k.indexBy = j(function (e, t, n) {
                    e[n] = t
                }),
                k.countBy = j(function (e, t, n) {
                    k.has(e, n) ? e[n]++ : e[n] = 1
                }),
                k.toArray = function (e) {
                    return e ? k.isArray(e) ? h.call(e) : P(e) ? k.map(e, k.identity) : k.values(e) : []
                }
                ,
                k.size = function (e) {
                    return null == e ? 0 : P(e) ? e.length : k.keys(e).length
                }
                ,
                k.partition = function (e, t, n) {
                    t = _(t, n);
                    var r = []
                        , i = [];
                    return k.each(e, function (e, n, o) {
                        (t(e, n, o) ? r : i).push(e)
                    }),
                        [r, i]
                }
                ,
                k.first = k.head = k.take = function (e, t, n) {
                    if (null != e)
                        return null == t || n ? e[0] : k.initial(e, e.length - t)
                }
                ,
                k.initial = function (e, t, n) {
                    return h.call(e, 0, Math.max(0, e.length - (null == t || n ? 1 : t)))
                }
                ,
                k.last = function (e, t, n) {
                    if (null != e)
                        return null == t || n ? e[e.length - 1] : k.rest(e, Math.max(0, e.length - t))
                }
                ,
                k.rest = k.tail = k.drop = function (e, t, n) {
                    return h.call(e, null == t || n ? 1 : t)
                }
                ,
                k.compact = function (e) {
                    return k.filter(e, k.identity)
                }
                ;
            var A = function (e, t, n, r) {
                for (var i = [], o = 0, a = r || 0, s = N(e); a < s; a++) {
                    var c = e[a];
                    if (P(c) && (k.isArray(c) || k.isArguments(c))) {
                        t || (c = A(c, t, n));
                        var l = 0
                            , u = c.length;
                        for (i.length += u; l < u;)
                            i[o++] = c[l++]
                    } else
                        n || (i[o++] = c)
                }
                return i
            };
            k.flatten = function (e, t) {
                return A(e, t, !1)
            }
                ,
                k.without = function (e) {
                    return k.difference(e, h.call(arguments, 1))
                }
                ,
                k.uniq = k.unique = function (e, t, n, r) {
                    k.isBoolean(t) || (r = n,
                        n = t,
                        t = !1),
                        null != n && (n = _(n, r));
                    for (var i = [], o = [], a = 0, s = N(e); a < s; a++) {
                        var c = e[a]
                            , l = n ? n(c, a, e) : c;
                        t ? (a && o === l || i.push(c),
                            o = l) : n ? k.contains(o, l) || (o.push(l),
                                i.push(c)) : k.contains(i, c) || i.push(c)
                    }
                    return i
                }
                ,
                k.union = function () {
                    return k.uniq(A(arguments, !0, !0))
                }
                ,
                k.intersection = function (e) {
                    for (var t = [], n = arguments.length, r = 0, i = N(e); r < i; r++) {
                        var o = e[r];
                        if (!k.contains(t, o)) {
                            for (var a = 1; a < n && k.contains(arguments[a], o); a++)
                                ;
                            a === n && t.push(o)
                        }
                    }
                    return t
                }
                ,
                k.difference = function (e) {
                    var t = A(arguments, !0, !0, 1);
                    return k.filter(e, function (e) {
                        return !k.contains(t, e)
                    })
                }
                ,
                k.zip = function () {
                    return k.unzip(arguments)
                }
                ,
                k.unzip = function (e) {
                    for (var t = e && k.max(e, N).length || 0, n = Array(t), r = 0; r < t; r++)
                        n[r] = k.pluck(e, r);
                    return n
                }
                ,
                k.object = function (e, t) {
                    for (var n = {}, r = 0, i = N(e); r < i; r++)
                        t ? n[e[r]] = t[r] : n[e[r][0]] = e[r][1];
                    return n
                }
                ,
                k.findIndex = o(1),
                k.findLastIndex = o(-1),
                k.sortedIndex = function (e, t, n, r) {
                    n = _(n, r, 1);
                    for (var i = n(t), o = 0, a = N(e); o < a;) {
                        var s = Math.floor((o + a) / 2);
                        n(e[s]) < i ? o = s + 1 : a = s
                    }
                    return o
                }
                ,
                k.indexOf = a(1, k.findIndex, k.sortedIndex),
                k.lastIndexOf = a(-1, k.findLastIndex),
                k.range = function (e, t, n) {
                    null == t && (t = e || 0,
                        e = 0),
                        n = n || 1;
                    for (var r = Math.max(Math.ceil((t - e) / n), 0), i = Array(r), o = 0; o < r; o++ ,
                        e += n)
                        i[o] = e;
                    return i
                }
                ;
            var H = function (e, t, n, r, i) {
                if (!(r instanceof t))
                    return e.apply(n, i);
                var o = T(e.prototype)
                    , a = e.apply(o, i);
                return k.isObject(a) ? a : o
            };
            k.bind = function (e, t) {
                if (b && e.bind === b)
                    return b.apply(e, h.call(arguments, 1));
                if (!k.isFunction(e))
                    throw new TypeError("Bind must be called on a function");
                var n = h.call(arguments, 2)
                    , r = function () {
                        return H(e, r, t, this, n.concat(h.call(arguments)))
                    };
                return r
            }
                ,
                k.partial = function (e) {
                    var t = h.call(arguments, 1)
                        , n = function () {
                            for (var r = 0, i = t.length, o = Array(i), a = 0; a < i; a++)
                                o[a] = t[a] === k ? arguments[r++] : t[a];
                            for (; r < arguments.length;)
                                o.push(arguments[r++]);
                            return H(e, n, this, this, o)
                        };
                    return n
                }
                ,
                k.bindAll = function (e) {
                    var t, n, r = arguments.length;
                    if (r <= 1)
                        throw new Error("bindAll must be passed function names");
                    for (t = 1; t < r; t++)
                        n = arguments[t],
                            e[n] = k.bind(e[n], e);
                    return e
                }
                ,
                k.memoize = function (e, t) {
                    var n = function (r) {
                        var i = n.cache
                            , o = "" + (t ? t.apply(this, arguments) : r);
                        return k.has(i, o) || (i[o] = e.apply(this, arguments)),
                            i[o]
                    };
                    return n.cache = {},
                        n
                }
                ,
                k.delay = function (e, t) {
                    var n = h.call(arguments, 2);
                    return setTimeout(function () {
                        return e.apply(null, n)
                    }, t)
                }
                ,
                k.defer = k.partial(k.delay, k, 1),
                k.throttle = function (e, t, n) {
                    var r, i, o, a = null, s = 0;
                    n || (n = {});
                    var c = function () {
                        s = !1 === n.leading ? 0 : k.now(),
                            a = null,
                            o = e.apply(r, i),
                            a || (r = i = null)
                    };
                    return function () {
                        var l = k.now();
                        s || !1 !== n.leading || (s = l);
                        var u = t - (l - s);
                        return r = this,
                            i = arguments,
                            u <= 0 || u > t ? (a && (clearTimeout(a),
                                a = null),
                                s = l,
                                o = e.apply(r, i),
                                a || (r = i = null)) : a || !1 === n.trailing || (a = setTimeout(c, u)),
                            o
                    }
                }
                ,
                k.debounce = function (e, t, n) {
                    var r, i, o, a, s, c = function () {
                        var l = k.now() - a;
                        l < t && l >= 0 ? r = setTimeout(c, t - l) : (r = null,
                            n || (s = e.apply(o, i),
                                r || (o = i = null)))
                    };
                    return function () {
                        o = this,
                            i = arguments,
                            a = k.now();
                        var l = n && !r;
                        return r || (r = setTimeout(c, t)),
                            l && (s = e.apply(o, i),
                                o = i = null),
                            s
                    }
                }
                ,
                k.wrap = function (e, t) {
                    return k.partial(t, e)
                }
                ,
                k.negate = function (e) {
                    return function () {
                        return !e.apply(this, arguments)
                    }
                }
                ,
                k.compose = function () {
                    var e = arguments
                        , t = e.length - 1;
                    return function () {
                        for (var n = t, r = e[t].apply(this, arguments); n--;)
                            r = e[n].call(this, r);
                        return r
                    }
                }
                ,
                k.after = function (e, t) {
                    return function () {
                        if (--e < 1)
                            return t.apply(this, arguments)
                    }
                }
                ,
                k.before = function (e, t) {
                    var n;
                    return function () {
                        return --e > 0 && (n = t.apply(this, arguments)),
                            e <= 1 && (t = null),
                            n
                    }
                }
                ,
                k.once = k.partial(k.before, 2);
            var R = !{
                toString: null
            }.propertyIsEnumerable("toString")
                , M = ["valueOf", "isPrototypeOf", "toString", "propertyIsEnumerable", "hasOwnProperty", "toLocaleString"];
            k.keys = function (e) {
                if (!k.isObject(e))
                    return [];
                if (y)
                    return y(e);
                var t = [];
                for (var n in e)
                    k.has(e, n) && t.push(n);
                return R && s(e, t),
                    t
            }
                ,
                k.allKeys = function (e) {
                    if (!k.isObject(e))
                        return [];
                    var t = [];
                    for (var n in e)
                        t.push(n);
                    return R && s(e, t),
                        t
                }
                ,
                k.values = function (e) {
                    for (var t = k.keys(e), n = t.length, r = Array(n), i = 0; i < n; i++)
                        r[i] = e[t[i]];
                    return r
                }
                ,
                k.mapObject = function (e, t, n) {
                    t = _(t, n);
                    for (var r, i = k.keys(e), o = i.length, a = {}, s = 0; s < o; s++)
                        r = i[s],
                            a[r] = t(e[r], r, e);
                    return a
                }
                ,
                k.pairs = function (e) {
                    for (var t = k.keys(e), n = t.length, r = Array(n), i = 0; i < n; i++)
                        r[i] = [t[i], e[t[i]]];
                    return r
                }
                ,
                k.invert = function (e) {
                    for (var t = {}, n = k.keys(e), r = 0, i = n.length; r < i; r++)
                        t[e[n[r]]] = n[r];
                    return t
                }
                ,
                k.functions = k.methods = function (e) {
                    var t = [];
                    for (var n in e)
                        k.isFunction(e[n]) && t.push(n);
                    return t.sort()
                }
                ,
                k.extend = C(k.allKeys),
                k.extendOwn = k.assign = C(k.keys),
                k.findKey = function (e, t, n) {
                    t = _(t, n);
                    for (var r, i = k.keys(e), o = 0, a = i.length; o < a; o++)
                        if (r = i[o],
                            t(e[r], r, e))
                            return r
                }
                ,
                k.pick = function (e, t, n) {
                    var r, i, o = {}, a = e;
                    if (null == a)
                        return o;
                    k.isFunction(t) ? (i = k.allKeys(a),
                        r = S(t, n)) : (i = A(arguments, !1, !1, 1),
                            r = function (e, t, n) {
                                return t in n
                            }
                            ,
                            a = Object(a));
                    for (var s = 0, c = i.length; s < c; s++) {
                        var l = i[s]
                            , u = a[l];
                        r(u, l, a) && (o[l] = u)
                    }
                    return o
                }
                ,
                k.omit = function (e, t, n) {
                    if (k.isFunction(t))
                        t = k.negate(t);
                    else {
                        var r = k.map(A(arguments, !1, !1, 1), String);
                        t = function (e, t) {
                            return !k.contains(r, t)
                        }
                    }
                    return k.pick(e, t, n)
                }
                ,
                k.defaults = C(k.allKeys, !0),
                k.create = function (e, t) {
                    var n = T(e);
                    return t && k.extendOwn(n, t),
                        n
                }
                ,
                k.clone = function (e) {
                    return k.isObject(e) ? k.isArray(e) ? e.slice() : k.extend({}, e) : e
                }
                ,
                k.tap = function (e, t) {
                    return t(e),
                        e
                }
                ,
                k.isMatch = function (e, t) {
                    var n = k.keys(t)
                        , r = n.length;
                    if (null == e)
                        return !r;
                    for (var i = Object(e), o = 0; o < r; o++) {
                        var a = n[o];
                        if (t[a] !== i[a] || !(a in i))
                            return !1
                    }
                    return !0
                }
                ;
            var B = function (e, t, n, r) {
                if (e === t)
                    return 0 !== e || 1 / e == 1 / t;
                if (null == e || null == t)
                    return e === t;
                e instanceof k && (e = e._wrapped),
                    t instanceof k && (t = t._wrapped);
                var i = g.call(e);
                if (i !== g.call(t))
                    return !1;
                switch (i) {
                    case "[object RegExp]":
                    case "[object String]":
                        return "" + e == "" + t;
                    case "[object Number]":
                        return +e != +e ? +t != +t : 0 == +e ? 1 / +e == 1 / t : +e == +t;
                    case "[object Date]":
                    case "[object Boolean]":
                        return +e == +t
                }
                var o = "[object Array]" === i;
                if (!o) {
                    if ("object" != typeof e || "object" != typeof t)
                        return !1;
                    var a = e.constructor
                        , s = t.constructor;
                    if (a !== s && !(k.isFunction(a) && a instanceof a && k.isFunction(s) && s instanceof s) && "constructor" in e && "constructor" in t)
                        return !1
                }
                n = n || [],
                    r = r || [];
                for (var c = n.length; c--;)
                    if (n[c] === e)
                        return r[c] === t;
                if (n.push(e),
                    r.push(t),
                    o) {
                    if ((c = e.length) !== t.length)
                        return !1;
                    for (; c--;)
                        if (!B(e[c], t[c], n, r))
                            return !1
                } else {
                    var l, u = k.keys(e);
                    if (c = u.length,
                        k.keys(t).length !== c)
                        return !1;
                    for (; c--;)
                        if (l = u[c],
                            !k.has(t, l) || !B(e[l], t[l], n, r))
                            return !1
                }
                return n.pop(),
                    r.pop(),
                    !0
            };
            k.isEqual = function (e, t) {
                return B(e, t)
            }
                ,
                k.isEmpty = function (e) {
                    return null == e || (P(e) && (k.isArray(e) || k.isString(e) || k.isArguments(e)) ? 0 === e.length : 0 === k.keys(e).length)
                }
                ,
                k.isElement = function (e) {
                    return !(!e || 1 !== e.nodeType)
                }
                ,
                k.isArray = m || function (e) {
                    return "[object Array]" === g.call(e)
                }
                ,
                k.isObject = function (e) {
                    var t = typeof e;
                    return "function" === t || "object" === t && !!e
                }
                ,
                k.each(["Arguments", "Function", "String", "Number", "Date", "RegExp", "Error"], function (e) {
                    k["is" + e] = function (t) {
                        return g.call(t) === "[object " + e + "]"
                    }
                }),
                k.isArguments(arguments) || (k.isArguments = function (e) {
                    return k.has(e, "callee")
                }
                ),
                "function" != typeof /./ && "object" != typeof Int8Array && (k.isFunction = function (e) {
                    return "function" == typeof e || !1
                }
                ),
                k.isFinite = function (e) {
                    return isFinite(e) && !isNaN(parseFloat(e))
                }
                ,
                k.isNaN = function (e) {
                    return k.isNumber(e) && e !== +e
                }
                ,
                k.isBoolean = function (e) {
                    return !0 === e || !1 === e || "[object Boolean]" === g.call(e)
                }
                ,
                k.isNull = function (e) {
                    return null === e
                }
                ,
                k.isUndefined = function (e) {
                    return void 0 === e
                }
                ,
                k.has = function (e, t) {
                    return null != e && v.call(e, t)
                }
                ,
                k.noConflict = function () {
                    return c._ = l,
                        this
                }
                ,
                k.identity = function (e) {
                    return e
                }
                ,
                k.constant = function (e) {
                    return function () {
                        return e
                    }
                }
                ,
                k.noop = function () { }
                ,
                k.property = E,
                k.propertyOf = function (e) {
                    return null == e ? function () { }
                        : function (t) {
                            return e[t]
                        }
                }
                ,
                k.matcher = k.matches = function (e) {
                    return e = k.extendOwn({}, e),
                        function (t) {
                            return k.isMatch(t, e)
                        }
                }
                ,
                k.times = function (e, t, n) {
                    var r = Array(Math.max(0, e));
                    t = S(t, n, 1);
                    for (var i = 0; i < e; i++)
                        r[i] = t(i);
                    return r
                }
                ,
                k.random = function (e, t) {
                    return null == t && (t = e,
                        e = 0),
                        e + Math.floor(Math.random() * (t - e + 1))
                }
                ,
                k.now = Date.now || function () {
                    return (new Date).getTime()
                }
                ;
            var D = {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#x27;",
                "`": "&#x60;"
            }
                , L = k.invert(D)
                , I = function (e) {
                    var t = function (t) {
                        return e[t]
                    }
                        , n = "(?:" + k.keys(e).join("|") + ")"
                        , r = RegExp(n)
                        , i = RegExp(n, "g");
                    return function (e) {
                        return e = null == e ? "" : "" + e,
                            r.test(e) ? e.replace(i, t) : e
                    }
                };
            k.escape = I(D),
                k.unescape = I(L),
                k.result = function (e, t, n) {
                    var r = null == e ? void 0 : e[t];
                    return void 0 === r && (r = n),
                        k.isFunction(r) ? r.call(e) : r
                }
                ;
            var F = 0;
            k.uniqueId = function (e) {
                var t = ++F + "";
                return e ? e + t : t
            }
                ,
                k.templateSettings = {
                    evaluate: /<%([\s\S]+?)%>/g,
                    interpolate: /<%=([\s\S]+?)%>/g,
                    escape: /<%-([\s\S]+?)%>/g
                };
            var q = /(.)^/
                , W = {
                    "'": "'",
                    "\\": "\\",
                    "\r": "r",
                    "\n": "n",
                    "\u2028": "u2028",
                    "\u2029": "u2029"
                }
                , X = /\\|'|\r|\n|\u2028|\u2029/g
                , z = function (e) {
                    return "\\" + W[e]
                };
            k.template = function (e, t, n) {
                !t && n && (t = n),
                    t = k.defaults({}, t, k.templateSettings);
                var r = RegExp([(t.escape || q).source, (t.interpolate || q).source, (t.evaluate || q).source].join("|") + "|$", "g")
                    , i = 0
                    , o = "__p+='";
                e.replace(r, function (t, n, r, a, s) {
                    return o += e.slice(i, s).replace(X, z),
                        i = s + t.length,
                        n ? o += "'+\n((__t=(" + n + "))==null?'':_.escape(__t))+\n'" : r ? o += "'+\n((__t=(" + r + "))==null?'':__t)+\n'" : a && (o += "';\n" + a + "\n__p+='"),
                        t
                }),
                    o += "';\n",
                    t.variable || (o = "with(obj||{}){\n" + o + "}\n"),
                    o = "var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n" + o + "return __p;\n";
                try {
                    var a = new Function(t.variable || "obj", "_", o)
                } catch (e) {
                    throw e.source = o,
                    e
                }
                var s = function (e) {
                    return a.call(this, e, k)
                };
                return s.source = "function(" + (t.variable || "obj") + "){\n" + o + "}",
                    s
            }
                ,
                k.chain = function (e) {
                    var t = k(e);
                    return t._chain = !0,
                        t
                }
                ;
            var U = function (e, t) {
                return e._chain ? k(t).chain() : t
            };
            k.mixin = function (e) {
                k.each(k.functions(e), function (t) {
                    var n = k[t] = e[t];
                    k.prototype[t] = function () {
                        var e = [this._wrapped];
                        return p.apply(e, arguments),
                            U(this, n.apply(k, e))
                    }
                })
            }
                ,
                k.mixin(k),
                k.each(["pop", "push", "reverse", "shift", "sort", "splice", "unshift"], function (e) {
                    var t = u[e];
                    k.prototype[e] = function () {
                        var n = this._wrapped;
                        return t.apply(n, arguments),
                            "shift" !== e && "splice" !== e || 0 !== n.length || delete n[0],
                            U(this, n)
                    }
                }),
                k.each(["concat", "join", "slice"], function (e) {
                    var t = u[e];
                    k.prototype[e] = function () {
                        return U(this, t.apply(this._wrapped, arguments))
                    }
                }),
                k.prototype.value = function () {
                    return this._wrapped
                }
                ,
                k.prototype.valueOf = k.prototype.toJSON = k.prototype.value,
                k.prototype.toString = function () {
                    return "" + this._wrapped
                }
                ,
                r = [],
                void 0 !== (i = function () {
                    return k
                }
                    .apply(t, r)) && (e.exports = i)
        }
        ).call(this)
    },
    4: function (e, t) {
        var n;
        n = function () {
            return this
        }();
        try {
            n = n || Function("return this")() || (0,
                eval)("this")
        } catch (e) {
            "object" == typeof window && (n = window)
        }
        e.exports = n
    },
    49: function (e, t) {
        function n(e) {
            this.name = "RavenConfigError",
                this.message = e
        }
        n.prototype = new Error,
            n.prototype.constructor = n,
            e.exports = n
    },
    5: function (e, t, n) {
        (function (t) {
            function n(e) {
                return "object" == typeof e && null !== e
            }
            function r(e) {
                switch ({}.toString.call(e)) {
                    case "[object Error]":
                    case "[object Exception]":
                    case "[object DOMException]":
                        return !0;
                    default:
                        return e instanceof Error
                }
            }
            function i(e) {
                return f() && "[object ErrorEvent]" === {}.toString.call(e)
            }
            function o(e) {
                return void 0 === e
            }
            function a(e) {
                return "function" == typeof e
            }
            function s(e) {
                return "[object Object]" === Object.prototype.toString.call(e)
            }
            function c(e) {
                return "[object String]" === Object.prototype.toString.call(e)
            }
            function l(e) {
                return "[object Array]" === Object.prototype.toString.call(e)
            }
            function u(e) {
                if (!s(e))
                    return !1;
                for (var t in e)
                    if (e.hasOwnProperty(t))
                        return !1;
                return !0
            }
            function f() {
                try {
                    return new ErrorEvent(""),
                        !0
                } catch (e) {
                    return !1
                }
            }
            function d() {
                if (!("fetch" in j))
                    return !1;
                try {
                    return new Headers,
                        new Request(""),
                        new Response,
                        !0
                } catch (e) {
                    return !1
                }
            }
            function p(e) {
                function t(t, n) {
                    var r = e(t) || t;
                    return n ? n(r) || r : r
                }
                return t
            }
            function h(e, t) {
                var n, r;
                if (o(e.length))
                    for (n in e)
                        y(e, n) && t.call(null, n, e[n]);
                else if (r = e.length)
                    for (n = 0; n < r; n++)
                        t.call(null, n, e[n])
            }
            function g(e, t) {
                return t ? (h(t, function (t, n) {
                    e[t] = n
                }),
                    e) : e
            }
            function v(e) {
                return !!Object.isFrozen && Object.isFrozen(e)
            }
            function m(e, t) {
                return !t || e.length <= t ? e : e.substr(0, t) + "…"
            }
            function y(e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }
            function b(e) {
                for (var t, n = [], r = 0, i = e.length; r < i; r++)
                    t = e[r],
                        c(t) ? n.push(t.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1")) : t && t.source && n.push(t.source);
                return new RegExp(n.join("|"), "i")
            }
            function w(e) {
                var t = [];
                return h(e, function (e, n) {
                    t.push(encodeURIComponent(e) + "=" + encodeURIComponent(n))
                }),
                    t.join("&")
            }
            function x(e) {
                if ("string" != typeof e)
                    return {};
                var t = e.match(/^(([^:\/?#]+):)?(\/\/([^\/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/)
                    , n = t[6] || ""
                    , r = t[8] || "";
                return {
                    protocol: t[2],
                    host: t[4],
                    path: t[5],
                    relative: t[5] + n + r
                }
            }
            function k() {
                var e = j.crypto || j.msCrypto;
                if (!o(e) && e.getRandomValues) {
                    var t = new Uint16Array(8);
                    e.getRandomValues(t),
                        t[3] = 4095 & t[3] | 16384,
                        t[4] = 16383 & t[4] | 32768;
                    var n = function (e) {
                        for (var t = e.toString(16); t.length < 4;)
                            t = "0" + t;
                        return t
                    };
                    return n(t[0]) + n(t[1]) + n(t[2]) + n(t[3]) + n(t[4]) + n(t[5]) + n(t[6]) + n(t[7])
                }
                return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(/[xy]/g, function (e) {
                    var t = 16 * Math.random() | 0;
                    return ("x" === e ? t : 3 & t | 8).toString(16)
                })
            }
            function S(e) {
                for (var t, n = [], r = 0, i = 0, o = " > ".length; e && r++ < 5 && !("html" === (t = _(e)) || r > 1 && i + n.length * o + t.length >= 80);)
                    n.push(t),
                        i += t.length,
                        e = e.parentNode;
                return n.reverse().join(" > ")
            }
            function _(e) {
                var t, n, r, i, o, a = [];
                if (!e || !e.tagName)
                    return "";
                if (a.push(e.tagName.toLowerCase()),
                    e.id && a.push("#" + e.id),
                    (t = e.className) && c(t))
                    for (n = t.split(/\s+/),
                        o = 0; o < n.length; o++)
                        a.push("." + n[o]);
                var s = ["type", "name", "title", "alt"];
                for (o = 0; o < s.length; o++)
                    r = s[o],
                        (i = e.getAttribute(r)) && a.push("[" + r + '="' + i + '"]');
                return a.join("")
            }
            function C(e, t) {
                return !!(!!e ^ !!t)
            }
            function T(e, t) {
                return o(e) && o(t)
            }
            function E(e, t) {
                return !C(e, t) && (e = e.values[0],
                    t = t.values[0],
                    e.type === t.type && e.value === t.value && (!T(e.stacktrace, t.stacktrace) && O(e.stacktrace, t.stacktrace)))
            }
            function O(e, t) {
                if (C(e, t))
                    return !1;
                var n = e.frames
                    , r = t.frames;
                if (n.length !== r.length)
                    return !1;
                for (var i, o, a = 0; a < n.length; a++)
                    if (i = n[a],
                        o = r[a],
                        i.filename !== o.filename || i.lineno !== o.lineno || i.colno !== o.colno || i.function !== o.function)
                        return !1;
                return !0
            }
            function N(e, t, n, r) {
                var i = e[t];
                e[t] = n(i),
                    e[t].__raven__ = !0,
                    e[t].__orig__ = i,
                    r && r.push([e, t, i])
            }
            function P(e, t) {
                if (!l(e))
                    return "";
                for (var n = [], r = 0; r < e.length; r++)
                    try {
                        n.push(String(e[r]))
                    } catch (e) {
                        n.push("[value cannot be serialized]")
                    }
                return n.join(t)
            }
            var j = "undefined" != typeof window ? window : void 0 !== t ? t : "undefined" != typeof self ? self : {};
            e.exports = {
                isObject: n,
                isError: r,
                isErrorEvent: i,
                isUndefined: o,
                isFunction: a,
                isPlainObject: s,
                isString: c,
                isArray: l,
                isEmptyObject: u,
                supportsErrorEvent: f,
                supportsFetch: d,
                wrappedCallback: p,
                each: h,
                objectMerge: g,
                truncate: m,
                objectFrozen: v,
                hasKey: y,
                joinRegExp: b,
                urlencode: w,
                uuid4: k,
                htmlTreeAsString: S,
                htmlElementAsString: _,
                isSameException: E,
                isSameStacktrace: O,
                parseUrl: x,
                fill: N,
                safeJoin: P
            }
        }
        ).call(t, n(4))
    },
    50: function (e, t, n) {
        var r = n(5)
            , i = function (e, t, n) {
                var i = e[t]
                    , o = e;
                if (t in e) {
                    var a = "warn" === t ? "warning" : t;
                    e[t] = function () {
                        var e = [].slice.call(arguments)
                            , s = r.safeJoin(e, " ")
                            , c = {
                                level: a,
                                logger: "console",
                                extra: {
                                    arguments: e
                                }
                            };
                        "assert" === t ? !1 === e[0] && (s = "Assertion failed: " + (r.safeJoin(e.slice(1), " ") || "console.assert"),
                            c.extra.arguments = e.slice(1),
                            n && n(s, c)) : n && n(s, c),
                            i && Function.prototype.apply.call(i, o, e)
                    }
                }
            };
        e.exports = {
            wrapMethod: i
        }
    },
    51: function (e, t, n) {
        (function (t) {
            function r() {
                return +new Date
            }
            function i(e, t) {
                return h(t) ? function (n) {
                    return t(n, e)
                }
                    : t
            }
            function o() {
                this._hasJSON = !("object" != typeof JSON || !JSON.stringify),
                    this._hasDocument = !p(B),
                    this._hasNavigator = !p(D),
                    this._lastCapturedException = null,
                    this._lastData = null,
                    this._lastEventId = null,
                    this._globalServer = null,
                    this._globalKey = null,
                    this._globalProject = null,
                    this._globalContext = {},
                    this._globalOptions = {
                        release: M.SENTRY_RELEASE && M.SENTRY_RELEASE.id,
                        logger: "javascript",
                        ignoreErrors: [],
                        ignoreUrls: [],
                        whitelistUrls: [],
                        includePaths: [],
                        headers: null,
                        collectWindowErrors: !0,
                        maxMessageLength: 0,
                        maxUrlLength: 250,
                        stackTraceLimit: 50,
                        autoBreadcrumbs: !0,
                        instrument: !0,
                        sampleRate: 1
                    },
                    this._fetchDefaults = {
                        method: "POST",
                        keepalive: !0,
                        referrerPolicy: "origin"
                    },
                    this._ignoreOnError = 0,
                    this._isRavenInstalled = !1,
                    this._originalErrorStackTraceLimit = Error.stackTraceLimit,
                    this._originalConsole = M.console || {},
                    this._originalConsoleMethods = {},
                    this._plugins = [],
                    this._startTime = r(),
                    this._wrappedBuiltIns = [],
                    this._breadcrumbs = [],
                    this._lastCapturedEvent = null,
                    this._keypressTimeout,
                    this._location = M.location,
                    this._lastHref = this._location && this._location.href,
                    this._resetBackoff();
                for (var e in this._originalConsole)
                    this._originalConsoleMethods[e] = this._originalConsole[e]
            }
            var a = n(52)
                , s = n(53)
                , c = n(49)
                , l = n(5)
                , u = l.isError
                , f = l.isObject
                , d = l.isErrorEvent
                , p = l.isUndefined
                , h = l.isFunction
                , g = l.isString
                , v = l.isArray
                , m = l.isEmptyObject
                , y = l.each
                , b = l.objectMerge
                , w = l.truncate
                , x = l.objectFrozen
                , k = l.hasKey
                , S = l.joinRegExp
                , _ = l.urlencode
                , C = l.uuid4
                , T = l.htmlTreeAsString
                , E = l.isSameException
                , O = l.isSameStacktrace
                , N = l.parseUrl
                , P = l.fill
                , j = l.supportsFetch
                , A = n(50).wrapMethod
                , H = "source protocol user pass host port path".split(" ")
                , R = /^(?:(\w+):)?\/\/(?:(\w+)(:\w+)?@)?([\w\.-]+)(?::(\d+))?(\/.*)/
                , M = "undefined" != typeof window ? window : void 0 !== t ? t : "undefined" != typeof self ? self : {}
                , B = M.document
                , D = M.navigator;
            o.prototype = {
                VERSION: "3.22.3",
                debug: !1,
                TraceKit: a,
                config: function (e, t) {
                    var n = this;
                    if (n._globalServer)
                        return this._logDebug("error", "Error: Raven has already been configured"),
                            n;
                    if (!e)
                        return n;
                    var r = n._globalOptions;
                    t && y(t, function (e, t) {
                        "tags" === e || "extra" === e || "user" === e ? n._globalContext[e] = t : r[e] = t
                    }),
                        n.setDSN(e),
                        r.ignoreErrors.push(/^Script error\.?$/),
                        r.ignoreErrors.push(/^Javascript error: Script error\.? on line 0$/),
                        r.ignoreErrors = S(r.ignoreErrors),
                        r.ignoreUrls = !!r.ignoreUrls.length && S(r.ignoreUrls),
                        r.whitelistUrls = !!r.whitelistUrls.length && S(r.whitelistUrls),
                        r.includePaths = S(r.includePaths),
                        r.maxBreadcrumbs = Math.max(0, Math.min(r.maxBreadcrumbs || 100, 100));
                    var i = {
                        xhr: !0,
                        console: !0,
                        dom: !0,
                        location: !0,
                        sentry: !0
                    }
                        , o = r.autoBreadcrumbs;
                    "[object Object]" === {}.toString.call(o) ? o = b(i, o) : !1 !== o && (o = i),
                        r.autoBreadcrumbs = o;
                    var s = {
                        tryCatch: !0
                    }
                        , c = r.instrument;
                    return "[object Object]" === {}.toString.call(c) ? c = b(s, c) : !1 !== c && (c = s),
                        r.instrument = c,
                        a.collectWindowErrors = !!r.collectWindowErrors,
                        n
                },
                install: function () {
                    var e = this;
                    return e.isSetup() && !e._isRavenInstalled && (a.report.subscribe(function () {
                        e._handleOnErrorStackInfo.apply(e, arguments)
                    }),
                        e._patchFunctionToString(),
                        e._globalOptions.instrument && e._globalOptions.instrument.tryCatch && e._instrumentTryCatch(),
                        e._globalOptions.autoBreadcrumbs && e._instrumentBreadcrumbs(),
                        e._drainPlugins(),
                        e._isRavenInstalled = !0),
                        Error.stackTraceLimit = e._globalOptions.stackTraceLimit,
                        this
                },
                setDSN: function (e) {
                    var t = this
                        , n = t._parseDSN(e)
                        , r = n.path.lastIndexOf("/")
                        , i = n.path.substr(1, r);
                    t._dsn = e,
                        t._globalKey = n.user,
                        t._globalSecret = n.pass && n.pass.substr(1),
                        t._globalProject = n.path.substr(r + 1),
                        t._globalServer = t._getGlobalServer(n),
                        t._globalEndpoint = t._globalServer + "/" + i + "api/" + t._globalProject + "/store/",
                        this._resetBackoff()
                },
                context: function (e, t, n) {
                    return h(e) && (n = t || [],
                        t = e,
                        e = void 0),
                        this.wrap(e, t).apply(this, n)
                },
                wrap: function (e, t, n) {
                    function r() {
                        var r = []
                            , o = arguments.length
                            , a = !e || e && !1 !== e.deep;
                        for (n && h(n) && n.apply(this, arguments); o--;)
                            r[o] = a ? i.wrap(e, arguments[o]) : arguments[o];
                        try {
                            return t.apply(this, r)
                        } catch (t) {
                            throw i._ignoreNextOnError(),
                            i.captureException(t, e),
                            t
                        }
                    }
                    var i = this;
                    if (p(t) && !h(e))
                        return e;
                    if (h(e) && (t = e,
                        e = void 0),
                        !h(t))
                        return t;
                    try {
                        if (t.__raven__)
                            return t;
                        if (t.__raven_wrapper__)
                            return t.__raven_wrapper__
                    } catch (e) {
                        return t
                    }
                    for (var o in t)
                        k(t, o) && (r[o] = t[o]);
                    return r.prototype = t.prototype,
                        t.__raven_wrapper__ = r,
                        r.__raven__ = !0,
                        r.__orig__ = t,
                        r
                },
                uninstall: function () {
                    return a.report.uninstall(),
                        this._unpatchFunctionToString(),
                        this._restoreBuiltIns(),
                        this._restoreConsole(),
                        Error.stackTraceLimit = this._originalErrorStackTraceLimit,
                        this._isRavenInstalled = !1,
                        this
                },
                captureException: function (e, t) {
                    t = b({
                        trimHeadFrames: 0
                    }, t || {});
                    var n = !u(e)
                        , r = !d(e)
                        , i = d(e) && !e.error;
                    if (n && r || i)
                        return this.captureMessage(e, b(t, {
                            stacktrace: !0,
                            trimHeadFrames: t.trimHeadFrames + 1
                        }));
                    d(e) && (e = e.error),
                        this._lastCapturedException = e;
                    try {
                        var o = a.computeStackTrace(e);
                        this._handleStackInfo(o, t)
                    } catch (t) {
                        if (e !== t)
                            throw t
                    }
                    return this
                },
                captureMessage: function (e, t) {
                    if (!this._globalOptions.ignoreErrors.test || !this._globalOptions.ignoreErrors.test(e)) {
                        t = t || {};
                        var n, r = b({
                            message: e + ""
                        }, t);
                        try {
                            throw new Error(e)
                        } catch (e) {
                            n = e
                        }
                        n.name = null;
                        var i = a.computeStackTrace(n)
                            , o = v(i.stack) && i.stack[1]
                            , s = o && o.url || "";
                        if ((!this._globalOptions.ignoreUrls.test || !this._globalOptions.ignoreUrls.test(s)) && (!this._globalOptions.whitelistUrls.test || this._globalOptions.whitelistUrls.test(s))) {
                            if (this._globalOptions.stacktrace || t && t.stacktrace) {
                                t = b({
                                    fingerprint: e,
                                    trimHeadFrames: (t.trimHeadFrames || 0) + 1
                                }, t);
                                var c = this._prepareFrames(i, t);
                                r.stacktrace = {
                                    frames: c.reverse()
                                }
                            }
                            return this._send(r),
                                this
                        }
                    }
                },
                captureBreadcrumb: function (e) {
                    var t = b({
                        timestamp: r() / 1e3
                    }, e);
                    if (h(this._globalOptions.breadcrumbCallback)) {
                        var n = this._globalOptions.breadcrumbCallback(t);
                        if (f(n) && !m(n))
                            t = n;
                        else if (!1 === n)
                            return this
                    }
                    return this._breadcrumbs.push(t),
                        this._breadcrumbs.length > this._globalOptions.maxBreadcrumbs && this._breadcrumbs.shift(),
                        this
                },
                addPlugin: function (e) {
                    var t = [].slice.call(arguments, 1);
                    return this._plugins.push([e, t]),
                        this._isRavenInstalled && this._drainPlugins(),
                        this
                },
                setUserContext: function (e) {
                    return this._globalContext.user = e,
                        this
                },
                setExtraContext: function (e) {
                    return this._mergeContext("extra", e),
                        this
                },
                setTagsContext: function (e) {
                    return this._mergeContext("tags", e),
                        this
                },
                clearContext: function () {
                    return this._globalContext = {},
                        this
                },
                getContext: function () {
                    return JSON.parse(s(this._globalContext))
                },
                setEnvironment: function (e) {
                    return this._globalOptions.environment = e,
                        this
                },
                setRelease: function (e) {
                    return this._globalOptions.release = e,
                        this
                },
                setDataCallback: function (e) {
                    var t = this._globalOptions.dataCallback;
                    return this._globalOptions.dataCallback = i(t, e),
                        this
                },
                setBreadcrumbCallback: function (e) {
                    var t = this._globalOptions.breadcrumbCallback;
                    return this._globalOptions.breadcrumbCallback = i(t, e),
                        this
                },
                setShouldSendCallback: function (e) {
                    var t = this._globalOptions.shouldSendCallback;
                    return this._globalOptions.shouldSendCallback = i(t, e),
                        this
                },
                setTransport: function (e) {
                    return this._globalOptions.transport = e,
                        this
                },
                lastException: function () {
                    return this._lastCapturedException
                },
                lastEventId: function () {
                    return this._lastEventId
                },
                isSetup: function () {
                    return !!this._hasJSON && (!!this._globalServer || (this.ravenNotConfiguredError || (this.ravenNotConfiguredError = !0,
                        this._logDebug("error", "Error: Raven has not been configured.")),
                        !1))
                },
                afterLoad: function () {
                    var e = M.RavenConfig;
                    e && this.config(e.dsn, e.config).install()
                },
                showReportDialog: function (e) {
                    if (B) {
                        e = e || {};
                        var t = e.eventId || this.lastEventId();
                        if (!t)
                            throw new c("Missing eventId");
                        var n = e.dsn || this._dsn;
                        if (!n)
                            throw new c("Missing DSN");
                        var r = encodeURIComponent
                            , i = "";
                        i += "?eventId=" + r(t),
                            i += "&dsn=" + r(n);
                        var o = e.user || this._globalContext.user;
                        o && (o.name && (i += "&name=" + r(o.name)),
                            o.email && (i += "&email=" + r(o.email)));
                        var a = this._getGlobalServer(this._parseDSN(n))
                            , s = B.createElement("script");
                        s.async = !0,
                            s.src = a + "/api/embed/error-page/" + i,
                            (B.head || B.body).appendChild(s)
                    }
                },
                _ignoreNextOnError: function () {
                    var e = this;
                    this._ignoreOnError += 1,
                        setTimeout(function () {
                            e._ignoreOnError -= 1
                        })
                },
                _triggerEvent: function (e, t) {
                    var n, r;
                    if (this._hasDocument) {
                        t = t || {},
                            e = "raven" + e.substr(0, 1).toUpperCase() + e.substr(1),
                            B.createEvent ? (n = B.createEvent("HTMLEvents"),
                                n.initEvent(e, !0, !0)) : (n = B.createEventObject(),
                                    n.eventType = e);
                        for (r in t)
                            k(t, r) && (n[r] = t[r]);
                        if (B.createEvent)
                            B.dispatchEvent(n);
                        else
                            try {
                                B.fireEvent("on" + n.eventType.toLowerCase(), n)
                            } catch (e) { }
                    }
                },
                _breadcrumbEventHandler: function (e) {
                    var t = this;
                    return function (n) {
                        if (t._keypressTimeout = null,
                            t._lastCapturedEvent !== n) {
                            t._lastCapturedEvent = n;
                            var r;
                            try {
                                r = T(n.target)
                            } catch (e) {
                                r = "<unknown>"
                            }
                            t.captureBreadcrumb({
                                category: "ui." + e,
                                message: r
                            })
                        }
                    }
                },
                _keypressEventHandler: function () {
                    var e = this;
                    return function (t) {
                        var n;
                        try {
                            n = t.target
                        } catch (e) {
                            return
                        }
                        var r = n && n.tagName;
                        if (r && ("INPUT" === r || "TEXTAREA" === r || n.isContentEditable)) {
                            var i = e._keypressTimeout;
                            i || e._breadcrumbEventHandler("input")(t),
                                clearTimeout(i),
                                e._keypressTimeout = setTimeout(function () {
                                    e._keypressTimeout = null
                                }, 1e3)
                        }
                    }
                },
                _captureUrlChange: function (e, t) {
                    var n = N(this._location.href)
                        , r = N(t)
                        , i = N(e);
                    this._lastHref = t,
                        n.protocol === r.protocol && n.host === r.host && (t = r.relative),
                        n.protocol === i.protocol && n.host === i.host && (e = i.relative),
                        this.captureBreadcrumb({
                            category: "navigation",
                            data: {
                                to: t,
                                from: e
                            }
                        })
                },
                _patchFunctionToString: function () {
                    var e = this;
                    e._originalFunctionToString = Function.prototype.toString,
                        Function.prototype.toString = function () {
                            return "function" == typeof this && this.__raven__ ? e._originalFunctionToString.apply(this.__orig__, arguments) : e._originalFunctionToString.apply(this, arguments)
                        }
                },
                _unpatchFunctionToString: function () {
                    this._originalFunctionToString && (Function.prototype.toString = this._originalFunctionToString)
                },
                _instrumentTryCatch: function () {
                    function e(e) {
                        return function (n, r) {
                            for (var i = new Array(arguments.length), o = 0; o < i.length; ++o)
                                i[o] = arguments[o];
                            var a = i[0];
                            return h(a) && (i[0] = t.wrap(a)),
                                e.apply ? e.apply(this, i) : e(i[0], i[1])
                        }
                    }
                    var t = this
                        , n = t._wrappedBuiltIns
                        , r = this._globalOptions.autoBreadcrumbs;
                    P(M, "setTimeout", e, n),
                        P(M, "setInterval", e, n),
                        M.requestAnimationFrame && P(M, "requestAnimationFrame", function (e) {
                            return function (n) {
                                return e(t.wrap(n))
                            }
                        }, n);
                    for (var i = ["EventTarget", "Window", "Node", "ApplicationCache", "AudioTrackList", "ChannelMergerNode", "CryptoOperation", "EventSource", "FileReader", "HTMLUnknownElement", "IDBDatabase", "IDBRequest", "IDBTransaction", "KeyOperation", "MediaController", "MessagePort", "ModalWindow", "Notification", "SVGElementInstance", "Screen", "TextTrack", "TextTrackCue", "TextTrackList", "WebSocket", "WebSocketWorker", "Worker", "XMLHttpRequest", "XMLHttpRequestEventTarget", "XMLHttpRequestUpload"], o = 0; o < i.length; o++)
                        !function (e) {
                            var i = M[e] && M[e].prototype;
                            i && i.hasOwnProperty && i.hasOwnProperty("addEventListener") && (P(i, "addEventListener", function (n) {
                                return function (i, o, a, s) {
                                    try {
                                        o && o.handleEvent && (o.handleEvent = t.wrap(o.handleEvent))
                                    } catch (e) { }
                                    var c, l, u;
                                    return r && r.dom && ("EventTarget" === e || "Node" === e) && (l = t._breadcrumbEventHandler("click"),
                                        u = t._keypressEventHandler(),
                                        c = function (e) {
                                            if (e) {
                                                var t;
                                                try {
                                                    t = e.type
                                                } catch (e) {
                                                    return
                                                }
                                                return "click" === t ? l(e) : "keypress" === t ? u(e) : void 0
                                            }
                                        }
                                    ),
                                        n.call(this, i, t.wrap(o, void 0, c), a, s)
                                }
                            }, n),
                                P(i, "removeEventListener", function (e) {
                                    return function (t, n, r, i) {
                                        try {
                                            n = n && (n.__raven_wrapper__ ? n.__raven_wrapper__ : n)
                                        } catch (e) { }
                                        return e.call(this, t, n, r, i)
                                    }
                                }, n))
                        }(i[o])
                },
                _instrumentBreadcrumbs: function () {
                    function e(e, n) {
                        e in n && h(n[e]) && P(n, e, function (e) {
                            return t.wrap(e)
                        })
                    }
                    var t = this
                        , n = this._globalOptions.autoBreadcrumbs
                        , r = t._wrappedBuiltIns;
                    if (n.xhr && "XMLHttpRequest" in M) {
                        var i = XMLHttpRequest.prototype;
                        P(i, "open", function (e) {
                            return function (n, r) {
                                return g(r) && -1 === r.indexOf(t._globalKey) && (this.__raven_xhr = {
                                    method: n,
                                    url: r,
                                    status_code: null
                                }),
                                    e.apply(this, arguments)
                            }
                        }, r),
                            P(i, "send", function (n) {
                                return function () {
                                    function r() {
                                        if (i.__raven_xhr && 4 === i.readyState) {
                                            try {
                                                i.__raven_xhr.status_code = i.status
                                            } catch (e) { }
                                            t.captureBreadcrumb({
                                                type: "http",
                                                category: "xhr",
                                                data: i.__raven_xhr
                                            })
                                        }
                                    }
                                    for (var i = this, o = ["onload", "onerror", "onprogress"], a = 0; a < o.length; a++)
                                        e(o[a], i);
                                    return "onreadystatechange" in i && h(i.onreadystatechange) ? P(i, "onreadystatechange", function (e) {
                                        return t.wrap(e, void 0, r)
                                    }) : i.onreadystatechange = r,
                                        n.apply(this, arguments)
                                }
                            }, r)
                    }
                    n.xhr && j() && P(M, "fetch", function (e) {
                        return function () {
                            for (var n = new Array(arguments.length), r = 0; r < n.length; ++r)
                                n[r] = arguments[r];
                            var i, o = n[0], a = "GET";
                            if ("string" == typeof o ? i = o : "Request" in M && o instanceof M.Request ? (i = o.url,
                                o.method && (a = o.method)) : i = "" + o,
                                -1 !== i.indexOf(t._globalKey))
                                return e.apply(this, n);
                            n[1] && n[1].method && (a = n[1].method);
                            var s = {
                                method: a,
                                url: i,
                                status_code: null
                            };
                            return e.apply(this, n).then(function (e) {
                                return s.status_code = e.status,
                                    t.captureBreadcrumb({
                                        type: "http",
                                        category: "fetch",
                                        data: s
                                    }),
                                    e
                            })
                        }
                    }, r),
                        n.dom && this._hasDocument && (B.addEventListener ? (B.addEventListener("click", t._breadcrumbEventHandler("click"), !1),
                            B.addEventListener("keypress", t._keypressEventHandler(), !1)) : (B.attachEvent("onclick", t._breadcrumbEventHandler("click")),
                                B.attachEvent("onkeypress", t._keypressEventHandler())));
                    var o = M.chrome
                        , a = o && o.app && o.app.runtime
                        , s = !a && M.history && history.pushState && history.replaceState;
                    if (n.location && s) {
                        var c = M.onpopstate;
                        M.onpopstate = function () {
                            var e = t._location.href;
                            if (t._captureUrlChange(t._lastHref, e),
                                c)
                                return c.apply(this, arguments)
                        }
                            ;
                        var l = function (e) {
                            return function () {
                                var n = arguments.length > 2 ? arguments[2] : void 0;
                                return n && t._captureUrlChange(t._lastHref, n + ""),
                                    e.apply(this, arguments)
                            }
                        };
                        P(history, "pushState", l, r),
                            P(history, "replaceState", l, r)
                    }
                    if (n.console && "console" in M && console.log) {
                        var u = function (e, n) {
                            t.captureBreadcrumb({
                                message: e,
                                level: n.level,
                                category: "console"
                            })
                        };
                        y(["debug", "info", "warn", "error", "log"], function (e, t) {
                            A(console, t, u)
                        })
                    }
                },
                _restoreBuiltIns: function () {
                    for (var e; this._wrappedBuiltIns.length;) {
                        e = this._wrappedBuiltIns.shift();
                        var t = e[0]
                            , n = e[1]
                            , r = e[2];
                        t[n] = r
                    }
                },
                _restoreConsole: function () {
                    for (var e in this._originalConsoleMethods)
                        this._originalConsole[e] = this._originalConsoleMethods[e]
                },
                _drainPlugins: function () {
                    var e = this;
                    y(this._plugins, function (t, n) {
                        var r = n[0]
                            , i = n[1];
                        r.apply(e, [e].concat(i))
                    })
                },
                _parseDSN: function (e) {
                    var t = R.exec(e)
                        , n = {}
                        , r = 7;
                    try {
                        for (; r--;)
                            n[H[r]] = t[r] || ""
                    } catch (t) {
                        throw new c("Invalid DSN: " + e)
                    }
                    if (n.pass && !this._globalOptions.allowSecretKey)
                        throw new c("Do not specify your secret key in the DSN. See: http://bit.ly/raven-secret-key");
                    return n
                },
                _getGlobalServer: function (e) {
                    var t = "//" + e.host + (e.port ? ":" + e.port : "");
                    return e.protocol && (t = e.protocol + ":" + t),
                        t
                },
                _handleOnErrorStackInfo: function () {
                    this._ignoreOnError || this._handleStackInfo.apply(this, arguments)
                },
                _handleStackInfo: function (e, t) {
                    var n = this._prepareFrames(e, t);
                    this._triggerEvent("handle", {
                        stackInfo: e,
                        options: t
                    }),
                        this._processException(e.name, e.message, e.url, e.lineno, n, t)
                },
                _prepareFrames: function (e, t) {
                    var n = this
                        , r = [];
                    if (e.stack && e.stack.length && (y(e.stack, function (t, i) {
                        var o = n._normalizeFrame(i, e.url);
                        o && r.push(o)
                    }),
                        t && t.trimHeadFrames))
                        for (var i = 0; i < t.trimHeadFrames && i < r.length; i++)
                            r[i].in_app = !1;
                    return r = r.slice(0, this._globalOptions.stackTraceLimit)
                },
                _normalizeFrame: function (e, t) {
                    var n = {
                        filename: e.url,
                        lineno: e.line,
                        colno: e.column,
                        function: e.func || "?"
                    };
                    return e.url || (n.filename = t),
                        n.in_app = !(this._globalOptions.includePaths.test && !this._globalOptions.includePaths.test(n.filename) || /(Raven|TraceKit)\./.test(n.function) || /raven\.(min\.)?js$/.test(n.filename)),
                        n
                },
                _processException: function (e, t, n, r, i, o) {
                    var a = (e ? e + ": " : "") + (t || "");
                    if (!this._globalOptions.ignoreErrors.test || !this._globalOptions.ignoreErrors.test(t) && !this._globalOptions.ignoreErrors.test(a)) {
                        var s;
                        if (i && i.length ? (n = i[0].filename || n,
                            i.reverse(),
                            s = {
                                frames: i
                            }) : n && (s = {
                                frames: [{
                                    filename: n,
                                    lineno: r,
                                    in_app: !0
                                }]
                            }),
                            (!this._globalOptions.ignoreUrls.test || !this._globalOptions.ignoreUrls.test(n)) && (!this._globalOptions.whitelistUrls.test || this._globalOptions.whitelistUrls.test(n))) {
                            var c = b({
                                exception: {
                                    values: [{
                                        type: e,
                                        value: t,
                                        stacktrace: s
                                    }]
                                },
                                culprit: n
                            }, o);
                            this._send(c)
                        }
                    }
                },
                _trimPacket: function (e) {
                    var t = this._globalOptions.maxMessageLength;
                    if (e.message && (e.message = w(e.message, t)),
                        e.exception) {
                        var n = e.exception.values[0];
                        n.value = w(n.value, t)
                    }
                    var r = e.request;
                    return r && (r.url && (r.url = w(r.url, this._globalOptions.maxUrlLength)),
                        r.Referer && (r.Referer = w(r.Referer, this._globalOptions.maxUrlLength))),
                        e.breadcrumbs && e.breadcrumbs.values && this._trimBreadcrumbs(e.breadcrumbs),
                        e
                },
                _trimBreadcrumbs: function (e) {
                    for (var t, n, r, i = ["to", "from", "url"], o = 0; o < e.values.length; ++o)
                        if (n = e.values[o],
                            n.hasOwnProperty("data") && f(n.data) && !x(n.data)) {
                            r = b({}, n.data);
                            for (var a = 0; a < i.length; ++a)
                                t = i[a],
                                    r.hasOwnProperty(t) && r[t] && (r[t] = w(r[t], this._globalOptions.maxUrlLength));
                            e.values[o].data = r
                        }
                },
                _getHttpData: function () {
                    if (this._hasNavigator || this._hasDocument) {
                        var e = {};
                        return this._hasNavigator && D.userAgent && (e.headers = {
                            "User-Agent": navigator.userAgent
                        }),
                            M.location && M.location.href && (e.url = M.location.href),
                            this._hasDocument && B.referrer && (e.headers || (e.headers = {}),
                                e.headers.Referer = B.referrer),
                            e
                    }
                },
                _resetBackoff: function () {
                    this._backoffDuration = 0,
                        this._backoffStart = null
                },
                _shouldBackoff: function () {
                    return this._backoffDuration && r() - this._backoffStart < this._backoffDuration
                },
                _isRepeatData: function (e) {
                    var t = this._lastData;
                    return !(!t || e.message !== t.message || e.culprit !== t.culprit) && (e.stacktrace || t.stacktrace ? O(e.stacktrace, t.stacktrace) : !e.exception && !t.exception || E(e.exception, t.exception))
                },
                _setBackoffState: function (e) {
                    if (!this._shouldBackoff()) {
                        var t = e.status;
                        if (400 === t || 401 === t || 429 === t) {
                            var n;
                            try {
                                n = j() ? e.headers.get("Retry-After") : e.getResponseHeader("Retry-After"),
                                    n = 1e3 * parseInt(n, 10)
                            } catch (e) { }
                            this._backoffDuration = n || (2 * this._backoffDuration || 1e3),
                                this._backoffStart = r()
                        }
                    }
                },
                _send: function (e) {
                    var t = this._globalOptions
                        , n = {
                            project: this._globalProject,
                            logger: t.logger,
                            platform: "javascript"
                        }
                        , i = this._getHttpData();
                    if (i && (n.request = i),
                        e.trimHeadFrames && delete e.trimHeadFrames,
                        e = b(n, e),
                        e.tags = b(b({}, this._globalContext.tags), e.tags),
                        e.extra = b(b({}, this._globalContext.extra), e.extra),
                        e.extra["session:duration"] = r() - this._startTime,
                        this._breadcrumbs && this._breadcrumbs.length > 0 && (e.breadcrumbs = {
                            values: [].slice.call(this._breadcrumbs, 0)
                        }),
                        this._globalContext.user && (e.user = this._globalContext.user),
                        t.environment && (e.environment = t.environment),
                        t.release && (e.release = t.release),
                        t.serverName && (e.server_name = t.serverName),
                        Object.keys(e).forEach(function (t) {
                            (null == e[t] || "" === e[t] || m(e[t])) && delete e[t]
                        }),
                        h(t.dataCallback) && (e = t.dataCallback(e) || e),
                        e && !m(e) && (!h(t.shouldSendCallback) || t.shouldSendCallback(e)))
                        return this._shouldBackoff() ? void this._logDebug("warn", "Raven dropped error due to backoff: ", e) : void ("number" == typeof t.sampleRate ? Math.random() < t.sampleRate && this._sendProcessedPayload(e) : this._sendProcessedPayload(e))
                },
                _getUuid: function () {
                    return C()
                },
                _sendProcessedPayload: function (e, t) {
                    var n = this
                        , r = this._globalOptions;
                    if (this.isSetup()) {
                        if (e = this._trimPacket(e),
                            !this._globalOptions.allowDuplicates && this._isRepeatData(e))
                            return void this._logDebug("warn", "Raven dropped repeat event: ", e);
                        this._lastEventId = e.event_id || (e.event_id = this._getUuid()),
                            this._lastData = e,
                            this._logDebug("debug", "Raven about to send:", e);
                        var i = {
                            sentry_version: "7",
                            sentry_client: "raven-js/" + this.VERSION,
                            sentry_key: this._globalKey
                        };
                        this._globalSecret && (i.sentry_secret = this._globalSecret);
                        var o = e.exception && e.exception.values[0];
                        this._globalOptions.autoBreadcrumbs && this._globalOptions.autoBreadcrumbs.sentry && this.captureBreadcrumb({
                            category: "sentry",
                            message: o ? (o.type ? o.type + ": " : "") + o.value : e.message,
                            event_id: e.event_id,
                            level: e.level || "error"
                        });
                        var a = this._globalEndpoint;
                        (r.transport || this._makeRequest).call(this, {
                            url: a,
                            auth: i,
                            data: e,
                            options: r,
                            onSuccess: function () {
                                n._resetBackoff(),
                                    n._triggerEvent("success", {
                                        data: e,
                                        src: a
                                    }),
                                    t && t()
                            },
                            onError: function (r) {
                                n._logDebug("error", "Raven transport failed to send: ", r),
                                    r.request && n._setBackoffState(r.request),
                                    n._triggerEvent("failure", {
                                        data: e,
                                        src: a
                                    }),
                                    r = r || new Error("Raven send failed (no additional details provided)"),
                                    t && t(r)
                            }
                        })
                    }
                },
                _makeRequest: function (e) {
                    var t = e.url + "?" + _(e.auth)
                        , n = null
                        , r = {};
                    if (e.options.headers && (n = this._evaluateHash(e.options.headers)),
                        e.options.fetchParameters && (r = this._evaluateHash(e.options.fetchParameters)),
                        j()) {
                        r.body = s(e.data);
                        var i = b({}, this._fetchDefaults)
                            , o = b(i, r);
                        return n && (o.headers = n),
                            M.fetch(t, o).then(function (t) {
                                if (t.ok)
                                    e.onSuccess && e.onSuccess();
                                else {
                                    var n = new Error("Sentry error code: " + t.status);
                                    n.request = t,
                                        e.onError && e.onError(n)
                                }
                            }).catch(function () {
                                e.onError && e.onError(new Error("Sentry error code: network unavailable"))
                            })
                    }
                    var a = M.XMLHttpRequest && new M.XMLHttpRequest;
                    if (a) {
                        ("withCredentials" in a || "undefined" != typeof XDomainRequest) && ("withCredentials" in a ? a.onreadystatechange = function () {
                            if (4 === a.readyState)
                                if (200 === a.status)
                                    e.onSuccess && e.onSuccess();
                                else if (e.onError) {
                                    var t = new Error("Sentry error code: " + a.status);
                                    t.request = a,
                                        e.onError(t)
                                }
                        }
                            : (a = new XDomainRequest,
                                t = t.replace(/^https?:/, ""),
                                e.onSuccess && (a.onload = e.onSuccess),
                                e.onError && (a.onerror = function () {
                                    var t = new Error("Sentry error code: XDomainRequest");
                                    t.request = a,
                                        e.onError(t)
                                }
                                )),
                            a.open("POST", t),
                            n && y(n, function (e, t) {
                                a.setRequestHeader(e, t)
                            }),
                            a.send(s(e.data)))
                    }
                },
                _evaluateHash: function (e) {
                    var t = {};
                    for (var n in e)
                        if (e.hasOwnProperty(n)) {
                            var r = e[n];
                            t[n] = "function" == typeof r ? r() : r
                        }
                    return t
                },
                _logDebug: function (e) {
                    this._originalConsoleMethods[e] && this.debug && Function.prototype.apply.call(this._originalConsoleMethods[e], this._originalConsole, [].slice.call(arguments, 1))
                },
                _mergeContext: function (e, t) {
                    p(t) ? delete this._globalContext[e] : this._globalContext[e] = b(this._globalContext[e] || {}, t)
                }
            },
                o.prototype.setUser = o.prototype.setUserContext,
                o.prototype.setReleaseContext = o.prototype.setRelease,
                e.exports = o
        }
        ).call(t, n(4))
    },
    52: function (e, t, n) {
        (function (t) {
            function r() {
                return "undefined" == typeof document || null == document.location ? "" : document.location.href
            }
            var i = n(5)
                , o = {
                    collectWindowErrors: !0,
                    debug: !1
                }
                , a = "undefined" != typeof window ? window : void 0 !== t ? t : "undefined" != typeof self ? self : {}
                , s = [].slice
                , c = "?"
                , l = /^(?:[Uu]ncaught (?:exception: )?)?(?:((?:Eval|Internal|Range|Reference|Syntax|Type|URI|)Error): )?(.*)$/;
            o.report = function () {
                function e(e) {
                    d(),
                        y.push(e)
                }
                function t(e) {
                    for (var t = y.length - 1; t >= 0; --t)
                        y[t] === e && y.splice(t, 1)
                }
                function n() {
                    p(),
                        y = []
                }
                function u(e, t) {
                    var n = null;
                    if (!t || o.collectWindowErrors) {
                        for (var r in y)
                            if (y.hasOwnProperty(r))
                                try {
                                    y[r].apply(null, [e].concat(s.call(arguments, 2)))
                                } catch (e) {
                                    n = e
                                }
                        if (n)
                            throw n
                    }
                }
                function f(e, t, n, a, s) {
                    var f = null
                        , d = i.isErrorEvent(s) ? s.error : s
                        , p = i.isErrorEvent(e) ? e.message : e;
                    if (x)
                        o.computeStackTrace.augmentStackTraceWithInitialElement(x, t, n, p),
                            h();
                    else if (d && i.isError(d))
                        f = o.computeStackTrace(d),
                            u(f, !0);
                    else {
                        var g, m = {
                            url: t,
                            line: n,
                            column: a
                        }, y = void 0;
                        if ("[object String]" === {}.toString.call(p)) {
                            var g = p.match(l);
                            g && (y = g[1],
                                p = g[2])
                        }
                        m.func = c,
                            f = {
                                name: y,
                                message: p,
                                url: r(),
                                stack: [m]
                            },
                            u(f, !0)
                    }
                    return !!v && v.apply(this, arguments)
                }
                function d() {
                    m || (v = a.onerror,
                        a.onerror = f,
                        m = !0)
                }
                function p() {
                    m && (a.onerror = v,
                        m = !1,
                        v = void 0)
                }
                function h() {
                    var e = x
                        , t = b;
                    b = null,
                        x = null,
                        w = null,
                        u.apply(null, [e, !1].concat(t))
                }
                function g(e, t) {
                    var n = s.call(arguments, 1);
                    if (x) {
                        if (w === e)
                            return;
                        h()
                    }
                    var r = o.computeStackTrace(e);
                    if (x = r,
                        w = e,
                        b = n,
                        setTimeout(function () {
                            w === e && h()
                        }, r.incomplete ? 2e3 : 0),
                        !1 !== t)
                        throw e
                }
                var v, m, y = [], b = null, w = null, x = null;
                return g.subscribe = e,
                    g.unsubscribe = t,
                    g.uninstall = n,
                    g
            }(),
                o.computeStackTrace = function () {
                    function e(e) {
                        if (void 0 !== e.stack && e.stack) {
                            for (var t, n, i, o = /^\s*at (.*?) ?\(((?:file|https?|blob|chrome-extension|native|eval|webpack|<anonymous>|[a-z]:|\/).*?)(?::(\d+))?(?::(\d+))?\)?\s*$/i, a = /^\s*(.*?)(?:\((.*?)\))?(?:^|@)((?:file|https?|blob|chrome|webpack|resource|\[native).*?|[^@]*bundle)(?::(\d+))?(?::(\d+))?\s*$/i, s = /^\s*at (?:((?:\[object object\])?.+) )?\(?((?:file|ms-appx(?:-web)|https?|webpack|blob):.*?):(\d+)(?::(\d+))?\)?\s*$/i, l = /(\S+) line (\d+)(?: > eval line \d+)* > eval/i, u = /\((\S*)(?::(\d+))(?::(\d+))\)/, f = e.stack.split("\n"), d = [], p = (/^(.*) is undefined$/.exec(e.message),
                                0), h = f.length; p < h; ++p) {
                                if (n = o.exec(f[p])) {
                                    var g = n[2] && 0 === n[2].indexOf("native")
                                        , v = n[2] && 0 === n[2].indexOf("eval");
                                    v && (t = u.exec(n[2])) && (n[2] = t[1],
                                        n[3] = t[2],
                                        n[4] = t[3]),
                                        i = {
                                            url: g ? null : n[2],
                                            func: n[1] || c,
                                            args: g ? [n[2]] : [],
                                            line: n[3] ? +n[3] : null,
                                            column: n[4] ? +n[4] : null
                                        }
                                } else if (n = s.exec(f[p]))
                                    i = {
                                        url: n[2],
                                        func: n[1] || c,
                                        args: [],
                                        line: +n[3],
                                        column: n[4] ? +n[4] : null
                                    };
                                else {
                                    if (!(n = a.exec(f[p])))
                                        continue;
                                    var v = n[3] && n[3].indexOf(" > eval") > -1;
                                    v && (t = l.exec(n[3])) ? (n[3] = t[1],
                                        n[4] = t[2],
                                        n[5] = null) : 0 !== p || n[5] || void 0 === e.columnNumber || (d[0].column = e.columnNumber + 1),
                                        i = {
                                            url: n[3],
                                            func: n[1] || c,
                                            args: n[2] ? n[2].split(",") : [],
                                            line: n[4] ? +n[4] : null,
                                            column: n[5] ? +n[5] : null
                                        }
                                }
                                !i.func && i.line && (i.func = c),
                                    d.push(i)
                            }
                            return d.length ? {
                                name: e.name,
                                message: e.message,
                                url: r(),
                                stack: d
                            } : null
                        }
                    }
                    function t(e, t, n, r) {
                        var i = {
                            url: t,
                            line: n
                        };
                        if (i.url && i.line) {
                            if (e.incomplete = !1,
                                i.func || (i.func = c),
                                e.stack.length > 0 && e.stack[0].url === i.url) {
                                if (e.stack[0].line === i.line)
                                    return !1;
                                if (!e.stack[0].line && e.stack[0].func === i.func)
                                    return e.stack[0].line = i.line,
                                        !1
                            }
                            return e.stack.unshift(i),
                                e.partial = !0,
                                !0
                        }
                        return e.incomplete = !0,
                            !1
                    }
                    function n(e, a) {
                        for (var s, l, u = /function\s+([_$a-zA-Z\xA0-\uFFFF][_$a-zA-Z0-9\xA0-\uFFFF]*)?\s*\(/i, f = [], d = {}, p = !1, h = n.caller; h && !p; h = h.caller)
                            if (h !== i && h !== o.report) {
                                if (l = {
                                    url: null,
                                    func: c,
                                    line: null,
                                    column: null
                                },
                                    h.name ? l.func = h.name : (s = u.exec(h.toString())) && (l.func = s[1]),
                                    void 0 === l.func)
                                    try {
                                        l.func = s.input.substring(0, s.input.indexOf("{"))
                                    } catch (e) { }
                                d["" + h] ? p = !0 : d["" + h] = !0,
                                    f.push(l)
                            }
                        a && f.splice(0, a);
                        var g = {
                            name: e.name,
                            message: e.message,
                            url: r(),
                            stack: f
                        };
                        return t(g, e.sourceURL || e.fileName, e.line || e.lineNumber, e.message || e.description),
                            g
                    }
                    function i(t, i) {
                        var a = null;
                        i = null == i ? 0 : +i;
                        try {
                            if (a = e(t))
                                return a
                        } catch (e) {
                            if (o.debug)
                                throw e
                        }
                        try {
                            if (a = n(t, i + 1))
                                return a
                        } catch (e) {
                            if (o.debug)
                                throw e
                        }
                        return {
                            name: t.name,
                            message: t.message,
                            url: r()
                        }
                    }
                    return i.augmentStackTraceWithInitialElement = t,
                        i.computeStackTraceFromStackProp = e,
                        i
                }(),
                e.exports = o
        }
        ).call(t, n(4))
    },
    53: function (e, t) {
        function n(e, t) {
            for (var n = 0; n < e.length; ++n)
                if (e[n] === t)
                    return n;
            return -1
        }
        function r(e, t, n, r) {
            return JSON.stringify(e, o(t, r), n)
        }
        function i(e) {
            var t = {
                stack: e.stack,
                message: e.message,
                name: e.name
            };
            for (var n in e)
                Object.prototype.hasOwnProperty.call(e, n) && (t[n] = e[n]);
            return t
        }
        function o(e, t) {
            var r = []
                , o = [];
            return null == t && (t = function (e, t) {
                return r[0] === t ? "[Circular ~]" : "[Circular ~." + o.slice(0, n(r, t)).join(".") + "]"
            }
            ),
                function (a, s) {
                    if (r.length > 0) {
                        var c = n(r, this);
                        ~c ? r.splice(c + 1) : r.push(this),
                            ~c ? o.splice(c, 1 / 0, a) : o.push(a),
                            ~n(r, s) && (s = t.call(this, a, s))
                    } else
                        r.push(s);
                    return null == e ? s instanceof Error ? i(s) : s : e.call(this, a, s)
                }
        }
        t = e.exports = r,
            t.getSerialize = o
    },
    736: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.controller = t.a.controller || {},
                    t.a.controller.autobookmark = function (n) {
                        function r(e, n) {
                            var r;
                            if (r = a(t.a.config.epubIdUrl),
                                t.a.config.autobookmark) {
                                try {
                                    k = new t.a.model.Autobookmark(t.a.config.autobookmark)
                                } catch (e) {
                                    k = null,
                                        t.a.debug.errCatchLog(e)
                                }
                                k && r && r.time > k.time && (k = new t.a.model.Autobookmark(r))
                            } else
                                r && (k = new t.a.model.Autobookmark(r));
                            w = k,
                                t.a.view.autobookmark.init(e),
                                t.a.view.autobookmark.on("goBookmark", c),
                                t.a.controller.main.on("changeStat", l),
                                t.a.data.autobookmark.on("success", d),
                                t.a.data.autobookmark.on("error", p)
                        }
                        function i() {
                            var r, i, o;
                            if (n.localStorage) {
                                r = n.localStorage.getItem(v);
                                try {
                                    r = JSON.parse(r) || {}
                                } catch (e) {
                                    r = {},
                                        t.a.debug.errCatchLog(e)
                                }
                                return r[t.a.config.epubIdUrl] && delete r[t.a.config.epubIdUrl],
                                    e.size(r) ? (o = e.keys(r)[0],
                                        i = r[o],
                                        delete r[o]) : i = null,
                                    n.localStorage.setItem(v, JSON.stringify(r)),
                                    i
                            }
                        }
                        function o(e) {
                            var t;
                            n.localStorage && (t = n.localStorage.getItem(v),
                                t = JSON.parse(t) || {},
                                t[e.book] = e,
                                n.localStorage.setItem(v, JSON.stringify(t)))
                        }
                        function a(e) {
                            var r;
                            if (n.localStorage) {
                                r = n.localStorage.getItem(g);
                                try {
                                    r = JSON.parse(r) || {}
                                } catch (e) {
                                    r = {},
                                        t.a.debug.errCatchLog(e)
                                }
                                return r[e]
                            }
                        }
                        function s(t) {
                            var r, i;
                            n.localStorage && (r = n.localStorage.getItem(g),
                                r = JSON.parse(r) || {},
                                e.size(r) && (i = e.keys(r)[0],
                                    t.time - r[i].time > 1728e3 && delete r[i]),
                                r[t.book] = t,
                                n.localStorage.setItem(g, JSON.stringify(r)))
                        }
                        function c() {
                            S ? h.trigger("goBookmark", [w]) : x ? h.trigger("goBookmark", [x]) : h.trigger("goBookmark", [k]),
                                b = !0,
                                S = !1
                        }
                        function l(e) {
                            var n, r = e.page, i = e.part;
                            n = t.a.view.content.getStatByPage(r),
                                i && e.linear ? (t.a.view.autobookmark.hide(),
                                    1 !== y && !b && k && e.lastAction && -1 !== e.lastAction.indexOf("Jump") ? (x = k,
                                        t.a.view.autobookmark.show()) : x = null,
                                    k = new t.a.model.Autobookmark({
                                        part: i,
                                        xpath: n.xpath,
                                        offset: n.offset
                                    }),
                                    1 !== y && m(k)) : (t.a.view.autobookmark.show(),
                                        S = !1),
                                (1 === y || S && y <= 3) && w && (e.part !== w.part || t.a.view.content.getPageByXpath(w) !== r) && (t.a.view.autobookmark.show(),
                                    S = !0),
                                y += 1,
                                b = !1
                        }
                        function u(e) {
                            s(e),
                                t.a.data.autobookmark.post(e)
                        }
                        function f() {
                            var e = i();
                            e && setTimeout(function () {
                                t.a.data.autobookmark.post(e)
                            }, 1e3)
                        }
                        function d(e) {
                            f()
                        }
                        function p(e) {
                            o(e)
                        }
                        var h, g = "rdr.autobookmarks", v = g + ".err", m = e.debounce(u, 5e3), y = 1, b = !1, w = null, x = null, k = null, S = !1;
                        return h = {
                            init: r,
                            getAbm: function () {
                                return k
                            }
                        },
                            e.extend(h, t.a.util.events),
                            h
                    }(window)
            }
                .call(t, n(3))
    },
    737: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.bookmarks = function () {
                        function n(t) {
                            var n;
                            for (n = 0; n < r.a.config.bookmarks.length; n += 1)
                                _[n] = new r.a.model.Bookmark(r.a.config.bookmarks[n]);
                            r.a.view.bookmarks.btn.init(t),
                                r.a.view.bookmarks.bar.init(t),
                                r.a.view.bookmarks.listBtn.init(t),
                                k = e.template(C),
                                r.a.data.bookmark.init(r.a.config.epubIdUrl),
                                r.a.view.bookmarks.btn.on("add", s),
                                r.a.view.bookmarks.listBtn.on("click", o),
                                r.a.data.bookmark.on("saved", c),
                                r.a.data.bookmark.on("addError", l),
                                r.a.view.bookmarks.btn.on("del", u),
                                r.a.data.bookmark.on("deleted", f),
                                r.a.data.bookmark.on("delError", d),
                                r.a.view.bookmarks.bar.on("go", a),
                                r.a.view.bookmarks.bar.on("del", u),
                                r.a.controller.main.on("changeStat", i)
                        }
                        function i(e) {
                            y = e.part,
                                b = e.page,
                                x = e.linear,
                                w = e.sections,
                                h()
                        }
                        function o() {
                            if (0 !== _.length) {
                                var e = new r.a.view.Dialog({
                                    title: "Мои закладки",
                                    html: k({
                                        bookmarks: _
                                    })
                                });
                                e.open(),
                                    e.on("cancel", function () {
                                        e.close()
                                    }),
                                    t("li", e.getContentEl()).click(function () {
                                        t(this).data("id");
                                        e.close()
                                    })
                            }
                        }
                        function a(t) {
                            var n = e.find(_, function (e) {
                                return e.id === t
                            });
                            n && m.trigger("goBookmark", [n])
                        }
                        function s() {
                            var t, n, i = y;
                            !S && i && x && (S = !0,
                                t = r.a.view.content.getStatByPage(b),
                                n = new r.a.model.Bookmark(e.extend({
                                    part: i
                                }, t)),
                                _.push(n),
                                r.a.data.bookmark.post(n))
                        }
                        function c(e) {
                            h(),
                                S = !1,
                                m.trigger("bookmarkAdded")
                        }
                        function l(t, n, i) {
                            var o = "Произошла ошибка при добавлении закладки"
                                , a = r.a.util.ajax.errorMessage(n, i);
                            a && (o += ":\n" + a),
                                alert(o),
                                _ = e.reject(_, function (e) {
                                    return e === t
                                }),
                                h(),
                                S = !1
                        }
                        function u(e) {
                            e ? g(e) : v(),
                                h()
                        }
                        function f(t) {
                            _ = e.reject(_, function (e) {
                                return e === t
                            }),
                                h(),
                                m.trigger("bookmarkDeleted")
                        }
                        function d(e, t, n) {
                            var i = "Произошла ошибка при удалении закладки"
                                , o = r.a.util.ajax.errorMessage(t, n);
                            o && (i += ":\n" + o),
                                alert(i),
                                h()
                        }
                        function p(e, t) {
                            var n = e.part
                                , i = t.part
                                , o = r.a.data.epub.getSectionIndexByPartId
                                , a = o(n) || 0
                                , s = o(i) || 0;
                            return a === s ? r.a.util.client.compareXpath(e.xpath, e.offset, t.xpath, t.offset) : a - s
                        }
                        function h() {
                            var t, n, i, o = y;
                            if (_.sort(p),
                                !x)
                                return r.a.view.bookmarks.btn.hide(),
                                    void r.a.view.bookmarks.bar.update(_, [], w);
                            for (t = e.filter(_, function (e) {
                                return e.part === o
                            }),
                                n = [],
                                i = 0; i < t.length; i += 1)
                                b === r.a.view.content.getPageByXpath(t[i]) && n.push(t[i]);
                            n.length ? (r.a.view.bookmarks.btn.setActive(),
                                r.a.view.bookmarks.bar.update(_, n, w)) : (r.a.view.bookmarks.btn.setInactive(),
                                    r.a.view.bookmarks.bar.update(_, [], w)),
                                r.a.view.bookmarks.listBtn.update(_.length)
                        }
                        function g(t) {
                            var n = e.find(_, function (e) {
                                return e.id === t
                            });
                            r.a.data.bookmark.del(n)
                        }
                        function v() {
                            var t, n, i = y;
                            for (t = e.filter(_, function (e) {
                                return e.part === i
                            }),
                                n = 0; n < t.length; n += 1)
                                if (b === r.a.view.content.getPageByXpath(t[n])) {
                                    r.a.data.bookmark.del(t[n]);
                                    break
                                }
                        }
                        var m, y, b, w, x, k, S = !1, _ = [], C = '<ul class="rdr-dialog-vlist"><% _.each(bookmarks, function(item) { %><li data-id="<%= item.id %>"><%= item.prevHeaderText %><%= item.textPiece %></li> <% }); %></ul>';
                        return m = {
                            init: n
                        },
                            e.extend(m, r.a.util.events),
                            m
                    }()
            }
                .call(t, n(3), n(0))
    },
    738: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.citations = function () {
                        function n(t) {
                            var n, o = r.a.config.citations, s = r.a.data.citation, c = r.a.view.citationsBtn, l = r.a.view.citationAddBtn;
                            for (n = 0; n < o.length; n += 1)
                                D[n] = new r.a.model.Citation(o[n]);
                            r.a.config.activeCitation && (B = new r.a.model.Citation({
                                citation: r.a.config.activeCitation
                            })),
                                P = e.template(M),
                                c.init(t),
                                c.update(D.length),
                                r.a.view.content.on("selection", h),
                                r.a.view.content.on("citation", g),
                                c.on("click", a),
                                s.on("addSuccess", m),
                                s.on("addError", y),
                                s.on("delSuccess", b),
                                s.on("delError", w),
                                s.on("putSuccess", x),
                                s.on("putError", k),
                                r.a.controller.main.on("changeStat", S),
                                l.init(),
                                l.on("click", function () {
                                    l.hide(),
                                        (A || j) && r.a.view.content.processSelection(A || j, I)
                                }),
                                i()
                        }
                        function i() {
                            var n, a, s;
                            !N || r.a.view.mask.isShown || r.a.view.content.pagingEffect.isAnimated() ? (r.a.view.citationAddBtn.hide(),
                                L = !1,
                                A = null) : (window.getSelection ? n = window.getSelection().toString() : document.selection && document.selection.createRange && (j = document.selection.createRange(),
                                    n = j.text),
                                    n = t.trim(n),
                                    a = n.length,
                                    0 < a ? (window.getSelection && (j = window.getSelection().getRangeAt(0),
                                        navigator.userAgent.indexOf("Presto") > 0 && 3 === j.endContainer.nodeType && 0 === j.endOffset && j.setEnd(j.endContainer, 1)),
                                        s = r.a.util.client.getClientRectsOn(j, document.body),
                                        s.length && (s = o(s)),
                                        H && e.isEqual(H, s) ? I ? r.a.view.citationAddBtn.show(s, "Закончить цитату", "Создать цитату до этого выделения") : f(n) ? r.a.view.citationAddBtn.show(s, "Начать цитату", "Запомнить это выделение как начало цитаты") : r.a.view.citationAddBtn.show(s, "Создать цитату", "Создать цитату из выделения") : (r.a.view.citationAddBtn.hide(),
                                            H = s),
                                        L = !0) : (j = null,
                                            H = null,
                                            r.a.view.citationAddBtn.hide(),
                                            L = !1)),
                                j && (A = j),
                                setTimeout(i, 900)
                        }
                        function o(e) {
                            for (var t = e.length, n = t - 1; n > 0 && e[n].right - e[n].left < 1;)
                                n -= 1;
                            return e[n]
                        }
                        function a(e) {
                            if (!e)
                                return void c();
                            l(e)
                        }
                        function s(e, t) {
                            var n = e.citation
                                , i = t.citation
                                , o = r.a.data.epub.getSectionIndexByPartId
                                , a = o(n.part) || 0
                                , s = o(i.part) || 0;
                            return a === s ? r.a.util.client.compareXpath(n.start_xpath, n.start_offset, i.start_xpath, i.start_offset) : a - s
                        }
                        function c() {
                            var e, n;
                            n = r.a.sys.isMsPointer || r.a.sys.isIE9mobile ? "Список цитат пуст.<br><br>В данном браузере, в настоящее время, нельзя добавить цитату." : "Для создания цитаты, необходимо выделить текст, через секунду появится меню, там нажмите «Создать цитату».<br><br>Цитату можно создать и в два приема (это особенно удобно если окончание цитаты на следующей странице):<ol><li>Выделите одно слово в начале цитаты, нажмите «Начать цитату».<li>Выделите окончание и нажмите «Закончить цитату»</ol>При выделении только части слова в начале или в конце оно войдет в цитату целиком.<br><br>Кликнув по созданной цитате в тексте книги, вы сможете добавить комментарий либо удалить цитату.",
                                D.sort(s),
                                e = new r.a.view.Dialog({
                                    title: D.length ? "Мои цитаты" : "Цитаты",
                                    width: D.length > 3 && r.a.sys.getWidth() > 640 ? "600px" : "440px",
                                    html: D.length ? P({
                                        citations: D
                                    }) : n
                                }),
                                e.open(),
                                e.on("cancel", function () {
                                    e.close()
                                }),
                                D.length ? (t(e.getContentEl()).on("click", "li", function () {
                                    var n = t(this).data("id");
                                    return e.close(),
                                        l(n),
                                        !1
                                }),
                                    T.trigger("listShown")) : T.trigger("helpShown")
                        }
                        function l(t) {
                            var n;
                            t = +t,
                                (n = e.find(D, function (e) {
                                    return e.id === t
                                })) && T.trigger("goCitation", [n])
                        }
                        function u() {
                            if (!B)
                                return null;
                            var e = B.citation;
                            return new r.a.model.Autobookmark({
                                part: e.part,
                                xpath: e.start_xpath,
                                offset: e.start_offset
                            })
                        }
                        function f(e) {
                            return !/\s/.test(e)
                        }
                        function d() {
                            var e;
                            r.a.settings.citationsStartNoHelp || (e = new r.a.view.Dialog({
                                title: "Создание цитаты",
                                width: "440px",
                                html: 'Это выделение будет сохранено как начало цитаты.<br><br>Теперь на текущей или на следующей странице выделите окончание цитаты и нажмите "Закончить&nbsp;цитату"<br><br><hr><label><input type="checkbox"> Не показывать это сообщение в дальнейшем</label>'
                            }),
                                e.open(),
                                e.on("cancel", function () {
                                    e.close()
                                }),
                                t(e.getContentEl()).on("change", ":checkbox", function () {
                                    this.checked ? r.a.settings.citationsStartNoHelp = !0 : r.a.settings.citationsStartNoHelp = !1,
                                        r.a.settings.save()
                                }))
                        }
                        function p() {
                            I = null,
                                r.a.view.content.hideSelection()
                        }
                        function h(e) {
                            var n;
                            return N ? t.trim(e.text) ? e.text.length > 3e3 ? (alert("Цитата не может быть больше 3000 символов!"),
                                void (I && e.text.length > 4e3 && p())) : (n = new r.a.model.Citation({
                                    citation: {
                                        start_xpath: e.startXpath,
                                        start_offset: e.startOffset,
                                        end_xpath: e.endXpath,
                                        end_offset: e.endOffset,
                                        text: e.text
                                    }
                                }),
                                    r.a.view.content.showSelection(n),
                                    !I && f(e.text) ? (I = n,
                                        void d()) : (I = null,
                                            n.citation.part = E,
                                            r.a.view.mask.show({
                                                preloader: !0
                                            }),
                                            void r.a.data.citation.post(n))) : void (I && p()) : void alert("В этом разделе нельзя добавить цитату!")
                        }
                        function g(n, i, o) {
                            var a, s, c, l;
                            if (!0 === n && I && !L)
                                return void p();
                            (a = e.find(D, function (e) {
                                return e.id === n
                            })) && (i && o || (o = i = 100),
                                c = window.pageXOffset ? i + window.pageXOffset : i,
                                l = window.pageYOffset ? o + window.pageYOffset : o,
                                r.a.view.content.showSelection(a),
                                s = new r.a.view.Balloon({
                                    targetRect: {
                                        left: c,
                                        right: c + 2,
                                        top: l,
                                        bottom: l + 2,
                                        width: 2,
                                        height: 2
                                    },
                                    html: '<ul class="rdr-citationMenu"><li data-action=edit>' + (a.comment ? "Редактировать" : "Создать") + " комментарий&hellip;</li><li data-action=del>Удалить цитату</li></ul>"
                                }),
                                s.open(),
                                s.on("cancel", function () {
                                    s.close(),
                                        r.a.view.content.hideSelection()
                                }),
                                t("li", s.getContentEl()).click(function () {
                                    var e = t(this).data("action");
                                    s.close(),
                                        r.a.view.content.hideSelection(),
                                        "del" === e ? r.a.data.citation.del(a) : v(n)
                                }))
                        }
                        function v(n) {
                            var i;
                            if (i = e.find(D, function (e) {
                                return e.id === n
                            })) {
                                r.a.view.content.showSelection(i);
                                var o = new r.a.view.Dialog({
                                    title: "Комментарий к цитате",
                                    width: "440px",
                                    buttons: [{
                                        type: "ok",
                                        text: "Применить"
                                    }]
                                });
                                o.setContent('<textarea placeholder="Комментарий (будет виден только вам)">' + i.comment.replace(/&/g, "&amp;") + "</textarea>"),
                                    o.open(),
                                    o.on("cancel", function () {
                                        o.close(),
                                            r.a.view.content.hideSelection()
                                    }),
                                    o.on("ok", function () {
                                        var e = o.getContentEl()
                                            , n = t("textarea", e).val();
                                        o.close(),
                                            n = t.trim(n),
                                            i.comment !== n && (T.trigger("citationEdit", [!i.comment && n]),
                                                i.comment = n,
                                                r.a.data.citation.put(i)),
                                            r.a.view.content.hideSelection()
                                    })
                            }
                        }
                        function m(e) {
                            D.push(e),
                                r.a.view.content.hideSelection(),
                                r.a.view.content.indicateCitation(e),
                                r.a.view.mask.hide(),
                                r.a.view.citationsBtn.update(D.length),
                                T.trigger("citationAdded")
                        }
                        function y(e, t, n) {
                            var i = "Произошла ошибка при добавлении цитаты"
                                , o = r.a.util.ajax.errorMessage(t, n);
                            o && (i += ":\n" + o),
                                confirm(i + "\n\n" + R) ? r.a.data.citation.post(e) : (r.a.view.content.hideSelection(),
                                    r.a.view.mask.hide())
                        }
                        function b(t) {
                            D = e.reject(D, function (e) {
                                return e === t
                            }),
                                _(),
                                r.a.view.citationsBtn.update(D.length),
                                T.trigger("citationDeleted")
                        }
                        function w(e, t, n) {
                            var i = "Произошла ошибка при удалении цитаты"
                                , o = r.a.util.ajax.errorMessage(t, n);
                            o && (i += ":\n" + o),
                                alert(i)
                        }
                        function x(e) {
                            _()
                        }
                        function k(e, t, n) {
                            var i = "Произошла ошибка при сохранении цитаты"
                                , o = r.a.util.ajax.errorMessage(t, n);
                            o && (i += ":\n" + o),
                                confirm(i + "\n\n" + R) && r.a.data.citation.put(e)
                        }
                        function S(e) {
                            E = e.part,
                                O = e.page,
                                N = e.linear,
                                _()
                        }
                        function _() {
                            var t, n;
                            for (r.a.view.content.clearCitations(),
                                n = e.filter(D, function (e) {
                                    return e.citation.part === E
                                }),
                                t = 0; t < n.length; t += 1)
                                C(n[t]) && r.a.view.content.indicateCitation(n[t]);
                            B && B.citation.part === E && r.a.view.content.indicateCitation(B),
                                I && r.a.view.content.showSelection(I, !0)
                        }
                        function C(e) {
                            var t;
                            try {
                                t = r.a.view.content.getPageByCitation(e)
                            } catch (e) {
                                return r.a.debug.errCatchLog(e),
                                    !1
                            }
                            return !(t > O)
                        }
                        var T, E, O, N, P, j, A, H, R = "Повторить запрос к серверу?", M = '<ul class="rdr-dialog-vlist"><% _.each(citations, function(item) { %><li data-id="<%= item.id %>"><% print(item.citation.text.replace(/(\\r?\\n)+/g, "<br>")); %><% if (item.comment) { %><hr><em>Комментарий:</em> <%- item.comment %><% } %></li> <% }); %></ul>', B = null, D = [], L = !1, I = null;
                        return T = {
                            init: n,
                            getAbm: u,
                            isCitationAddBtnVisible: function () {
                                return L
                            }
                        },
                            e.extend(T, r.a.util.events),
                            T
                    }()
            }
                .call(t, n(3), n(0))
    },
    739: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.controls = function () {
                        function n(e) {
                            var t = r.a.controller
                                , n = r.a.view;
                            u = document.createElement("div"),
                                u.className = "rdr-bottomControls",
                                h.appendChild(u),
                                n.tocBtn.init(u),
                                t.toc.init(),
                                t.notes.init(),
                                t.nav.init(u, e),
                                t.settings.init(u),
                                t.autobookmark.init(u, r.a.config.isPreviewMode),
                                r.a.config.isPreviewMode || (f = document.createElement("div"),
                                    f.className = "rdr-topControls",
                                    h.appendChild(f),
                                    t.bookmarks.init(f),
                                    n.bookBtn.init(f),
                                    n.fullscreenBtn.init(f),
                                    t.citations.init(u)),
                                t.main.on("changeStat", i),
                                l(r.a.settings.navInfoAlwaysVisible)
                        }
                        function i(e) {
                            var t = e.lastAction || "";
                            p ? -1 !== t.indexOf("Jump") && (s(),
                                clearTimeout(d),
                                d = setTimeout(function () {
                                    d = void 0,
                                        (r.a.sys.isSmall() || r.a.settings.screenPadding > 0 && r.a.settings.screenPadding < 7) && a()
                                }, 3500)) : (p = !0,
                                    s(),
                                    c(),
                                    d = setTimeout(function () {
                                        d = void 0,
                                            a()
                                    }, 5e3))
                        }
                        function o() {
                            d || a()
                        }
                        function a() {
                            g.removeClass(v),
                                m = !1
                        }
                        function s() {
                            g.addClass(v)
                        }
                        function c() {
                            var e = 0
                                , n = 0
                                , i = t.throttle(function (e) {
                                    var t, n, i, a, c;
                                    m || (t = r.a.sys.getHeight(),
                                        n = 40,
                                        i = 90,
                                        a = e.pageY,
                                        c = e.target,
                                        c === h && (a < n || a > t - n) ? s() : g.hasClass(v) && a > i && a < t - i && o())
                                }, 300);
                            r.a.controller.nav.on("centerPage", function () {
                                clearTimeout(d),
                                    d = void 0,
                                    g.hasClass(v) ? a() : (s(),
                                        m = !0)
                            }),
                                g.on("mousemove", function (t) {
                                    var r = t.pageY
                                        , o = +new Date;
                                    r !== e && o - n < 300 && i(t),
                                        e = r,
                                        n = o
                                })
                        }
                        function l(t) {
                            var n = "rdr-bottomControls_alwaysVisble";
                            t ? e(u).addClass(n) : e(u).removeClass(n)
                        }
                        var u, f, d, p = !1, h = document.body, g = e(h), v = "rdr-controlsShow", m = !1;
                        return {
                            init: n
                        }
                    }()
            }
                .call(t, n(0), n(3))
    },
    740: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.endbook = function () {
                        function n() {
                            r.a.data.endbook.on("addSuccess", s),
                                r.a.data.endbook.on("addError", c),
                                r.a.controller.main.on("changeStat", i),
                                n = function () { }
                        }
                        function i(e) {
                            var t = e.lastAction;
                            "rightPage" !== t && "sectionRight" !== t || (e.page === e.pages && e.section === e.sections ? a(e.page) : l % u == 0 && r.a.config.popupHtml && a(),
                                l += 1)
                        }
                        function o() {
                            var n;
                            f = !1,
                                r.a.view.mask.isShown || (n = r.a.config.popupHtml ? e.isString(r.a.config.popupHtml) ? new r.a.view.Dialog({
                                    title: "Flibusta.is",
                                    width: 280,
                                    html: r.a.config.popupHtml
                                }) : new r.a.view.Dialog({
                                    title: r.a.config.popupHtml.title || "MyBook",
                                    width: 480,
                                    cls: "rdr-dialogPreview",
                                    html: r.a.config.popupHtml.html
                                }) : new r.a.view.Dialog({
                                    title: "Flibusta.is",
                                    width: 480,
                                    cls: "rdr-dialogPreview",
                                    html: "<div>Перевести эту публикацию в&nbsp;список прочитанных?</div><button class=mybook>- Прочитано -</button>"
                                }),
                                    n.open(),
                                    n.on("cancel", function () {
                                        n.close()
                                    }),
                                    t("button", n.getContentEl()).one("click", function () {
                                        n.close(),
                                            r.a.data.endbook.post()
                                    }))
                        }
                        function a(e) {
                            var t, n, i;
                            f || (r.a.config.popupHtml ? i = 1 : (e && (t = r.a.view.content.getStatByPage(e),
                                n = t.curPageTextCount),
                                n = n || 1,
                                i = 5 * n,
                                i < 1e3 ? i = 1e3 : i > 5e3 && (i = 5e3)),
                                f = !0,
                                setTimeout(o, i))
                        }
                        function s() {
                            r.a.controller.main.off("changeStat", i)
                        }
                        function c(e, t) {
                            var n = "Произошла ошибка при переводе публикации в список прочитанных"
                                , i = r.a.util.ajax.errorMessage(e, t);
                            i && (n += ":\n" + i),
                                alert(n)
                        }
                        var l = 1
                            , u = 5
                            , f = !1;
                        return {
                            init: n
                        }
                    }()
            }
                .call(t, n(3), n(0))
    },
    741: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.controller = r.a.controller || {},
            r.a.controller.ga = function (e) {
                function t() {
                    var e = r.a.config.environment;
                    if (r.a.config.isPreviewMode && (w = "Preview"),
                        "real" === e || "test" === e) {
                        var t = r.a.controller
                            , n = t.main
                            , v = t.settings
                            , m = t.toc
                            , y = t.notes
                            , b = t.bookmarks
                            , x = t.citations;
                        n.on("changeStat", g),
                            v.on("openSettings", p),
                            v.on("saveSettings", h),
                            b.on("bookmarkAdded", i),
                            b.on("bookmarkDeleted", o),
                            x.on("citationAdded", a),
                            x.on("citationDeleted", s),
                            x.on("citationEdit", c),
                            x.on("listShown", l),
                            x.on("helpShown", u),
                            m.on("tocShown", f),
                            y.on("noteShown", d)
                    }
                }
                // function n() {
                //     !function (e, t, n, r, i, o, a) {
                //         e.GoogleAnalyticsObject = i,
                //             e[i] = e[i] || function () {
                //                 (e[i].q = e[i].q || []).push(arguments)
                //             }
                //             ,
                //             e[i].l = 1 * new Date,
                //             o = t.createElement(n),
                //             a = t.getElementsByTagName(n)[0],
                //             o.async = 1,
                //             o.src = "//www.google-analytics.com/analytics.js",
                //             a.parentNode.insertBefore(o, a)
                //     }(window, document, "script", 0, "ga"),
                //         r.a.config.ga && (ga("create", r.a.config.ga.tracker_id, {
                //             cookieDomain: r.a.config.ga.domain
                //         }),
                //             ga("send", "pageview"))
                // }
                function i() {
                    v(w, "bookmark_create")
                }
                function o() {
                    v(w, "bookmark_delete")
                }
                function a() {
                    v(w, "quote_create")
                }
                function s() {
                    v(w, "quote_delete")
                }
                function c(e) {
                    e ? v(w, "quote_note_create") : v(w, "quote_note_edit")
                }
                function l() {
                    v(w, "quote_list_open")
                }
                function u() {
                    v(w, "quote_help_open")
                }
                function f() {
                    v(w, "toc_open")
                }
                function d() {
                    v(w, "note_open")
                }
                function p() {
                    v(w, "settings_open")
                }
                function h() {
                    v(w, "settings_save")
                }
                function g(e) {
                    var t = e.lastAction || "";
                    if (b || (b = !0,
                        n(),
                        v(w, "reader_open"),
                        "autobookmarkJump" !== t))
                        switch (t) {
                            case "rightPage":
                            case "sectionRight":
                                x();
                                break;
                            case "leftPage":
                            case "sectionLeft":
                                k();
                                break;
                            case "citationJump":
                                v(w, "quote_click");
                                break;
                            case "goToPage":
                            case "sectionPageJump":
                                v(w, "progress_click");
                                break;
                            case "hrefJump":
                                v(w, "link_click");
                                break;
                            case "tocHrefJump":
                                v("Toc", "link_click");
                                break;
                            case "bookmarkJump":
                                v(w, "bookmark_click");
                                break;
                            case "autobookmarkJump":
                                v(w, "back_click")
                        }
                }
                function v(e, t) {
                    ga("send", "event", {
                        eventCategory: e,
                        eventAction: t
                    })
                }
                function m() {
                    v(w, "go_forth")
                }
                function y() {
                    v(w, "go_back")
                }
                var b = !1
                    , w = "Reader"
                    , x = r.a.util.func.everyNth(m, 5)
                    , k = r.a.util.func.everyNth(y, 5);
                return {
                    init: t
                }
            }(window)
    },
    742: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.main = function () {
                        function n() {
                            r.a.debug.init("dev" === r.a.config.environment),
                                r.a.settings.init(),
                                i(),
                                a(),
                                r.a.data.epub.init(r.a.config.epubPath)
                        }
                        function i() {
                            var e = r.a.controller
                                , t = r.a.view;
                            r.a.sys.init(),
                                o(),
                                t.mask.init(),
                                t.content.init(),
                                e.controls.init(c),
                                r.a.config.isPreviewMode ? (t.preview.init(r.a.config.topBookHtml),
                                    r.a.config.popupHtml && e.endbook.init()) : (e.statistics.init(),
                                        e.endbook.init(),
                                        r.a.config.topBookHtml && t.preview.init(r.a.config.topBookHtml))
                            // e.ga.init()
                            // e.ym.init()
                        }
                        function o() {
                            var t = e(document.body)
                                , n = r.a.settings.screenPadding;
                            t.removeClass(function (e, t) {
                                return (t.match(/rdr-screenPadding\d{1,2}/g) || []).join(" ")
                            }),
                                n ? 7 !== n && t.addClass("rdr-screenPadding" + n) : r.a.sys.isSmall() && t.addClass("rdr-screenPadding4"),
                                r.a.config.isPreviewMode && t.addClass("rdr-modePreview g-user-select-none")
                        }
                        function a() {
                            function n() {
                                return r.a.view.mask.isShown || r.a.view.bigimg.isShown || r.a.view.content.pagingEffect.isAnimated()
                            }
                            function i() {
                                var e = window.location
                                    , t = e.toString()
                                    , n = t.split("/reader/")[0];
                                window.location = n + "/"
                            }
                            function a(e, t) {
                                var n, i, o, a;
                                o = e.match(/([^#]*)(#(.*))?$/),
                                    o && (n = o[3],
                                        i = o[1],
                                        i = i.replace(/^(\.){1,2}\//, "")),
                                    b = n,
                                    _ = t,
                                    !k.file || i && i !== k.file ? (m = r.a.data.epub.readSectionHtml(i),
                                        m ? r.a.view.mask.show({
                                            preloader: !0
                                        }) : (alert("Ошибка!\nНе найден раздел для перехода по ссылке!"),
                                            k.file || (m = 1,
                                                r.a.data.epub.readSectionHtml(m)))) : (a = r.a.view.content.getPageByHash(b) || 1,
                                                    a > 0 ? h = a : alert("Произошла ошибка при переходе по ссылке!"),
                                                    r.a.view.content.showPageAt(h),
                                                    p())
                            }
                            function c(e) {
                                var t = r.a.data.epub.getSectionIndexByPartId(e.part);
                                if (!t)
                                    throw new Error("main goBookmark() numSect error");
                                _ = e instanceof r.a.model.Bookmark ? "bookmarkJump" : "autobookmarkJump",
                                    t === v ? (h = r.a.view.content.getPageByXpath(e) || 1,
                                        r.a.view.content.showPageAt(h),
                                        p()) : (w = e,
                                            m = t,
                                            r.a.view.mask.show({
                                                preloader: !0
                                            }),
                                            r.a.data.epub.readSectionHtml(m))
                            }
                            function l(e) {
                                var t = r.a.data.epub.getSectionIndexByPartId(e.citation.part);
                                if (_ = "citationJump",
                                    t === v) {
                                    try {
                                        h = r.a.view.content.getPageByCitation(e)
                                    } catch (e) {
                                        h = 1,
                                            alert("Произошла ошибка при переходе на цитату!")
                                    }
                                    r.a.view.content.showPageAt(h),
                                        p()
                                } else
                                    x = e,
                                        m = t,
                                        r.a.view.mask.show({
                                            preloader: !0
                                        }),
                                        r.a.data.epub.readSectionHtml(m)
                            }
                            function u(e) {
                                d("changeSettings"),
                                    "screenPadding" === e ? (o(),
                                        r.a.view.content.resize()) : r.a.view.content.changeLayout()
                            }
                            function f() {
                                h && (d("resize"),
                                    o(),
                                    r.a.view.content.resize())
                            }
                            function d(e) {
                                r.a.view.mask.show({
                                    preloader: !0
                                }),
                                    (!C || "changeSettings" !== _ && "resize" !== _) && (C = r.a.view.content.getStatByPage(h)),
                                    _ = e
                            }
                            function p() {
                                var e = r.a.view.content.getNumPages()
                                    , t = r.a.data.epub.getSectionCount();
                                s.trigger("changeStat", [{
                                    part: k.part,
                                    page: h,
                                    pages: e,
                                    section: v,
                                    sections: t,
                                    linear: k.linear,
                                    lastAction: _
                                }])
                            }
                            var h, g, v, m, y, b, w, x, k = {}, S = {}, _ = "", C = null;
                            r.a.view.content.on("paginationCompleted", function () {
                                switch (g = r.a.view.content.getNumPages(),
                                _) {
                                    case "sectionLeft":
                                        v -= 1,
                                            h = g;
                                        break;
                                    case "sectionRight":
                                        t.isString(v) ? v = 1 : v += 1,
                                            h = 1;
                                        break;
                                    case "sectionPageJump":
                                        v = m,
                                            h = Math.ceil(g * y),
                                            0 === h && (h = 1);
                                        break;
                                    case "resize":
                                    case "changeSettings":
                                        h = r.a.view.content.getPageByXpath(C) || 1;
                                        break;
                                    case "bookmarkJump":
                                    case "autobookmarkJump":
                                        v = m;
                                        try {
                                            h = r.a.view.content.getPageByXpath(w)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e),
                                                h = void 0
                                        }
                                        h || (h = 1,
                                            alert("Произошла ошибка при переходе по закладке!"));
                                        break;
                                    case "citationJump":
                                        v = m;
                                        try {
                                            h = r.a.view.content.getPageByCitation(x)
                                        } catch (e) {
                                            h = 1,
                                                alert("Произошла ошибка при переходе на цитату!")
                                        }
                                        break;
                                    case "hrefJump":
                                    case "tocHrefJump":
                                        v = m,
                                            h = r.a.view.content.getPageByHash(b) || 1;
                                        break;
                                    default:
                                        v = m,
                                            h = 1,
                                            C = null
                                }
                                r.a.view.content.showPageAt(h),
                                    r.a.view.mask.hide(),
                                    p()
                            }),
                                r.a.view.content.on("clickImg", function (e) {
                                    r.a.view.bigimg.show(e)
                                }),
                                r.a.view.content.on("clickHref", function (e, t) {
                                    S = t,
                                        a(e, "hrefJump")
                                }),
                                r.a.controller.toc.on("clickHref", function (e) {
                                    a(e, "tocHrefJump")
                                }),
                                r.a.controller.nav.on("leftSection", function (e) {
                                    e === v || n() || r.a.view.content.pagingEffect.begin(function () {
                                        _ = "sectionLeft",
                                            m = v - 1,
                                            r.a.view.mask.show({
                                                preloader: !0
                                            }),
                                            r.a.data.epub.readSectionHtml(m)
                                    }, !1)
                                }),
                                r.a.controller.nav.on("leftPage", function () {
                                    n() || r.a.view.content.pagingEffect.start(function () {
                                        h - 1 < 1 || (h -= 1,
                                            r.a.view.content.showPageAt(h),
                                            _ = "leftPage",
                                            p())
                                    }, !1)
                                }),
                                r.a.controller.nav.on("rightSection", function (e) {
                                    e === v || n() || r.a.view.content.pagingEffect.begin(function () {
                                        _ = "sectionRight",
                                            m = t.isString(v) ? 1 : v + 1,
                                            r.a.view.mask.show({
                                                preloader: !0
                                            }),
                                            r.a.data.epub.readSectionHtml(m)
                                    }, !0)
                                }),
                                r.a.controller.nav.on("rightPage", function () {
                                    n() || r.a.view.content.pagingEffect.start(function () {
                                        h + 1 > g || (h += 1,
                                            r.a.view.content.showPageAt(h),
                                            _ = "rightPage",
                                            p(),
                                            t.isNumber(v) && v < r.a.data.epub.getSectionCount() && g - h < 99 && r.a.data.epub.preloadSection(v + 1))
                                    }, !0)
                                }),
                                r.a.data.epub.on("readyTocNcx", function () {
                                    var e, n = r.a.config.tocHref;
                                    if (r.a.data.epub.getSectionCount(),
                                        t.isString(n) && n.length > 1)
                                        a(n, "tocHrefJump");
                                    else if (e = r.a.controller.citations.getAbm() || r.a.controller.autobookmark.getAbm())
                                        try {
                                            c(e)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e),
                                                m = 1,
                                                r.a.data.epub.readSectionHtml(m)
                                        }
                                    else
                                        m = 1,
                                            r.a.data.epub.readSectionHtml(m)
                                }),
                                r.a.data.epub.on("readySection", function (e) {
                                    ("notes" === e.type || !e.linear && 0 === e.file.indexOf("contentnote")) && "hrefJump" === _ && b && r.a.controller.notes.check(b, e.html) ? (r.a.view.mask.hide(),
                                        r.a.controller.notes.show(S)) : (r.a.view.content.setHtml(e.html),
                                            k = e,
                                            r.a.view.content.pagingEffect.end("sectionRight" === _ || "sectionLeft" === _))
                                }),
                                r.a.sys.on("afterResize", f),
                                r.a.controller.settings.on("changeSettings", u),
                                r.a.controller.nav.on("goToPage", function (e) {
                                    h = e,
                                        r.a.view.content.showPageAt(e),
                                        _ = "goToPage",
                                        p()
                                }),
                                r.a.controller.nav.on("goToSectionPage", function (e, t) {
                                    m = e,
                                        y = t,
                                        _ = "sectionPageJump",
                                        r.a.view.mask.show({
                                            preloader: !0
                                        }),
                                        r.a.data.epub.readSectionHtml(e)
                                }),
                                e(document).ajaxError(function (e, t, n, i) {
                                    alert("Ошибка запроса к серверу: " + i),
                                        r.a.view.mask.hide(),
                                        p(),
                                        r.a.view.content.pagingEffect.end(!1)
                                }),
                                r.a.data.epub.on("errorSection", function () {
                                    confirm("Ошибка загрузки раздела.\nВозможно проблема с подключением к Интернету.\n\nПовторить запрос к серверу?") ? r.a.data.epub.readSectionHtml(m) : (r.a.view.mask.hide(),
                                        p(),
                                        r.a.view.content.pagingEffect.end(!1))
                                }),
                                r.a.controller.bookmarks.on("goBookmark", c),
                                r.a.controller.autobookmark.on("goBookmark", c),
                                r.a.controller.citations.on("goCitation", l),
                                r.a.view.bookBtn.on("click", i)
                        }
                        var s, c = "rdr-content";
                        return s = {
                            init: n
                        },
                            t.extend(s, r.a.util.events),
                            s
                    }()
            }
                .call(t, n(0), n(3))
    },
    743: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.nav = function () {
                        function n(n, a) {
                            var s, u, d = "." + a;
                            r.a.view.nav.pages.init(n),
                                r.a.view.nav.arrowPages.init(),
                                r.a.view.nav.slider.init(n),
                                r.a.view.nav.arrowPages.on("left", c),
                                r.a.view.nav.arrowPages.on("right", l),
                                r.a.view.nav.slider.on("change", o),
                                r.a.controller.main.on("changeStat", f),
                                u = e.debounce(function (e) {
                                    e > 0 ? c() : l()
                                }, 200),
                                s = e.debounce(function (e, n) {
                                    r.a.util.client.getSelectionText() || r.a.controller.citations.isCitationAddBtnVisible() || (t(e).closest(d).length || e === document.body) && i(n)
                                }, 300),
                                t(document).keyup(function (e) {
                                    var t = e.which;
                                    e.ctrlKey || e.shiftKey || e.altKey || (39 === t || 40 === t || 32 === t || 34 === t ? l() : 37 !== t && 38 !== t && 33 !== t || c())
                                }).keydown(function (e) {
                                    if ((e.ctrlKey || e.metaKey) && (65 === e.which || 97 === e.which))
                                        return !1
                                }).on("mousewheel DOMMouseScroll", function (e) {
                                    var t = e.originalEvent
                                        , n = t.wheelDelta || -40 * t.detail;
                                    u(n)
                                }).on("click", function (e) {
                                    m && +new Date - m < 100 || s(e.target, e.pageX)
                                }),
                                r.a.sys.isTouch ? (document.addEventListener("touchmove", function (e) {
                                    var t = e.touches;
                                    1 === t.length && b && !r.a.sys.isScaling() && Math.abs(t[0].pageX - b.x) > Math.abs(t[0].pageY - b.y) && e.preventDefault()
                                }, !1),
                                    document.addEventListener("touchstart", function (e) {
                                        var n = e.target
                                            , i = e.touches[0];
                                        1 !== e.touches.length || r.a.sys.isScaling() || !t(n).closest(d).length && n !== document.body && !t(n).closest(".nav-allow-gesture").length ? b = null : (b = {
                                            x: i.pageX,
                                            y: i.pageY
                                        },
                                            v = (new Date).getTime())
                                    }, !0),
                                    document.addEventListener("touchend", function (e) {
                                        var t = e.changedTouches[0]
                                            , n = (new Date).getTime() - v;
                                        b && n < 600 && !r.a.sys.isScaling() && (t.pageX - b.x > 50 ? (c(),
                                            e.stopPropagation()) : b.x - t.pageX > 50 && (l(),
                                                e.stopPropagation()))
                                    }, !0)) : r.a.sys.isMsPointer && (document.addEventListener("MSPointerDown", function (e) {
                                        var n = e.target;
                                        !r.a.sys.isScaling() && t(n).closest(d).length || n === document.body || t(n).closest(".nav-allow-gesture").length ? (b = {
                                            x: e.pageX,
                                            y: e.pageY
                                        },
                                            v = (new Date).getTime()) : b = null
                                    }, !0),
                                        document.addEventListener("MSPointerUp", function (e) {
                                            var t = (new Date).getTime()
                                                , n = t - v;
                                            b && n < 600 && !r.a.sys.isScaling() && (e.pageX - b.x > 50 ? (c(),
                                                e.stopPropagation(),
                                                m = t) : b.x - e.pageX > 50 && (l(),
                                                    e.stopPropagation(),
                                                    m = t))
                                        }, !0)),
                                (r.a.sys.isIE9mobile || r.a.sys.isMsPointer) && document.addEventListener("selectstart", function (e) {
                                    e.preventDefault(),
                                        e.stopPropagation()
                                }, !0)
                        }
                        function i(e) {
                            var t;
                            t = r.a.sys.getWidth() / 3,
                                e > t + t ? l() : e < t ? c() : y.trigger("centerPage")
                        }
                        function o(e, t) {
                            if (g === e) {
                                var n = Math.ceil(d * t);
                                0 === n && (n = 1),
                                    y.trigger("goToPage", [n])
                            } else
                                y.trigger("goToSectionPage", [e, t])
                        }
                        function a() {
                            g > 1 && y.trigger("leftSection", [g - 1])
                        }
                        function s() {
                            (g < h || e.isString(g)) && y.trigger("rightSection", [e.isString(g) ? 1 : g + 1])
                        }
                        function c() {
                            p > 1 ? y.trigger("leftPage") : a()
                        }
                        function l() {
                            p < d ? y.trigger("rightPage") : s()
                        }
                        function u() {
                            r.a.view.nav.arrowPages.enable(),
                                g === h && p === d && r.a.view.nav.arrowPages.disableRight(),
                                (1 === g || e.isString(g)) && 1 === p && r.a.view.nav.arrowPages.disableLeft()
                        }
                        function f(e) {
                            h = e.sections,
                                g = e.section,
                                d = e.pages,
                                p = e.page,
                                r.a.view.nav.pages.setAllSections(h),
                                r.a.view.nav.pages.setCurSection(g),
                                r.a.view.nav.pages.setAllPages(d),
                                r.a.view.nav.pages.setCurPage(p),
                                r.a.view.nav.slider.update(e),
                                u()
                        }
                        var d, p, h, g, v, m, y, b = null;
                        return y = {
                            init: n
                        },
                            e.extend(y, r.a.util.events),
                            y
                    }()
            }
                .call(t, n(3), n(0))
    },
    744: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.notes = function () {
                        function n() { }
                        function i(t, n) {
                            var i;
                            if (r.a.isIE8 && (n = n.replace(/&#8203;/g, " ")),
                                i = e("<div>" + n + "</div>").find("#" + t),
                                s = c = l = "",
                                i.find("> :last").find("a").remove(),
                                !i.find('a[href]:not([href^="http:"]), img').length && !/^\d{1,3}$/.test(i.text()))
                                return i.find("> :empty").remove(),
                                    c = i.html(),
                                    l = i.prev(":header").text(),
                                    s = t,
                                    !!(c && c.length < 2e3) || void 0
                        }
                        function o(e) {
                            var t;
                            c && (t = e && e.top ? new r.a.view.Balloon({
                                targetRect: e,
                                html: '<div class="rdr-note">' + c + "</div>"
                            }) : new r.a.view.Dialog({
                                title: l || "Сноска",
                                html: '<div class="rdr-note">' + c + "</div>"
                            }),
                                t.open(),
                                t.on("cancel", function () {
                                    t.close()
                                }),
                                a.trigger("noteShown"))
                        }
                        var a, s, c, l;
                        return a = {
                            init: n,
                            check: i,
                            show: o
                        },
                            t.extend(a, r.a.util.events),
                            a
                    }()
            }
                .call(t, n(0), n(3))
    },
    745: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.settings = function () {
                        function n(t) {
                            e(document.body).addClass(r.a.settings.colorTheme),
                                r.a.view.settingsBtn.init(t),
                                r.a.view.settingsBtn.on("click", a)
                        }
                        function i() {
                            h = t.template(C),
                                p = t.template(_),
                                v = t.template(E),
                                m = t.template(O),
                                w = t.template(j),
                                y = t.template(N),
                                b = t.template(P),
                                g = t.template(T),
                                k = t.template(H),
                                r.a.sys.isHyphens && (x = t.template(A)),
                                i = function () { }
                        }
                        function o() {
                            var e = "";
                            return i(),
                                e += h({
                                    items: [{
                                        val: 1,
                                        title: "1"
                                    }, {
                                        val: 2,
                                        title: "2"
                                    }, {
                                        val: 3,
                                        title: "3"
                                    }, {
                                        val: 0,
                                        title: "авто"
                                    }],
                                    curVal: r.a.settings.numberColumns
                                }),
                                e += g({
                                    colorTheme: [{
                                        val: "colorTheme1",
                                        title: "Светлая"
                                    }, {
                                        val: "colorTheme2",
                                        title: "Сепия"
                                    }, {
                                        val: "colorTheme3",
                                        title: "Тёмная"
                                    }],
                                    curColorTheme: r.a.settings.colorTheme
                                }),
                                e += p({
                                    curFontSize: r.a.settings.fontSize
                                }),
                                e += w({
                                    fontFamily: [{
                                        val: "Georgia, serif",
                                        title: "Georgia"
                                    }, {
                                        val: "'Times New Roman', Times, serif",
                                        title: "Times New Roman, Times"
                                    }, {
                                        val: "Arial, Helvetica, sans-serif",
                                        title: "Arial, Helvetica"
                                    }, {
                                        val: "'Trebuchet MS', Helvetica, sans-serif",
                                        title: "Trebuchet MS, Helvetica"
                                    }, {
                                        val: "Verdana, Geneva, sans-serif",
                                        title: "Verdana, Geneva"
                                    }, {
                                        val: "'Courier New', Courier, monospace",
                                        title: "Courier New, Courier"
                                    }, {
                                        val: "'Comic Sans MS', cursive",
                                        title: "Comic Sans MS"
                                    }],
                                    curFontFamily: r.a.settings.fontFamily
                                }),
                                e += m({
                                    items: [{
                                        val: 0,
                                        title: "авто"
                                    }, {
                                        val: 2,
                                        title: "2%"
                                    }, {
                                        val: 3,
                                        title: "3%"
                                    }, {
                                        val: 4,
                                        title: "4%"
                                    }, {
                                        val: 5,
                                        title: "5%"
                                    }, {
                                        val: 6,
                                        title: "6%"
                                    }, {
                                        val: 7,
                                        title: "7%"
                                    }, {
                                        val: 8,
                                        title: "8%"
                                    }, {
                                        val: 9,
                                        title: "9%"
                                    }, {
                                        val: 10,
                                        title: "10%"
                                    }],
                                    curVal: r.a.settings.screenPadding
                                }),
                                r.a.sys.isTouch && navigator.userAgent && -1 !== navigator.userAgent.indexOf("Opera") || (e += v({
                                    lineHeight: [1.3, 1.4, 1.5, 1.6, 1.7, 1.8],
                                    curLineHeight: r.a.settings.lineHeight
                                })),
                                e += b({
                                    paragraphMargin: [0, .25, .5, .75, 1, 1.25, 1.5],
                                    curParagraphMargin: r.a.settings.paragraphMargin
                                }),
                                e += y({
                                    textAlign: [{
                                        val: "left",
                                        title: "Влево"
                                    }, {
                                        val: "center",
                                        title: "По центру"
                                    }, {
                                        val: "justify",
                                        title: "По ширине"
                                    }],
                                    curTextAlign: r.a.settings.textAlign
                                }),
                                r.a.sys.isHyphens && (e += x({
                                    hyphens: [{
                                        val: !0,
                                        title: "Переносить"
                                    }, {
                                        val: !1,
                                        title: "Без переносов"
                                    }],
                                    curHyphens: r.a.settings.hyphens
                                })),
                                e += k({
                                    items: [{
                                        val: "none",
                                        title: "Нет"
                                    }, {
                                        val: "fade",
                                        title: "Fade"
                                    }, {
                                        val: "slide",
                                        title: "Slide"
                                    }],
                                    curVal: r.a.settings.pageChangeEffect
                                })
                        }
                        function a() {
                            d = new r.a.view.Dialog({
                                title: "Настройки"
                            }),
                                d.setContent(o()),
                                d.open(),
                                d.on("cancel", u),
                                e(d.getContentEl()).on("change", ":input", s),
                                f.trigger("openSettings")
                        }
                        function s() {
                            var t = this
                                , n = t.name
                                , r = t.value;
                            e.isNumeric(r) ? r = +r : "true" === r ? r = !0 : "false" === r && (r = !1),
                                c(n, r)
                        }
                        function c(e, t) {
                            if (r.a.settings[e] !== t)
                                switch (r.a.settings[e] = t,
                                S = !0,
                                e) {
                                    case "colorTheme":
                                        l(t);
                                        break;
                                    case "pageChangeEffect":
                                        break;
                                    default:
                                        f.trigger("changeSettings", [e])
                                }
                        }
                        function l(t) {
                            e(document.body).removeClass(function (e, t) {
                                return (t.match(/colorTheme\d/g) || []).join(" ")
                            }).addClass(t)
                        }
                        function u() {
                            d.close(),
                                S && (r.a.settings.save(),
                                    f.trigger("saveSettings")),
                                S = !1
                        }
                        var f, d, p, h, g, v, m, y, b, w, x, k, S = !1, _ = '<hr><label><b>Размер шрифта:</b> <select name="fontSize"><% for (var i = 12; i < 29; i += 1) { %><option <% if(curFontSize === i + "px") print("selected"); %> value="<%= i %>px"><%= i %></option><% } %></select></label>', C = '<b>Число колонок:</b> <% _.each(items, function(item) { %><label><input type="radio" name="numberColumns" value="<%= item.val %>" <% if(curVal === item.val) print("checked"); %>><%= item.title %></label> <% }) %>', T = '<hr><b>Цветовая схема:</b> <% _.each(colorTheme, function(ct) { %><label style="white-space: nowrap;" class="<%= ct.val %>"><input type="radio" name="colorTheme" value="<%= ct.val %>" <% if(curColorTheme === ct.val) print("checked"); %>><%= ct.title %> </label>&nbsp; <% }) %>', E = '<hr><label><b>Межстрочный интервал:</b> <select name="lineHeight"><% _.each(lineHeight, function(i) { %><option <% if(curLineHeight === i) print("selected"); %> value="<%= i %>"><%= i %></option><% }) %></select></label>', O = '<hr><label><b>Поля страницы:</b> <select name="screenPadding"><% _.each(items, function(item) { %><option <% if(curVal === item.val) print("selected"); %> value="<%= item.val %>"><%= item.title %></option><% }) %></select></label>', N = '<hr><b>Выравнивание:</b> <% _.each(textAlign, function(ta) { %><label style="white-space: nowrap;"><input type="radio" name="textAlign" value="<%= ta.val %>" <% if(curTextAlign === ta.val) print("checked"); %>><%= ta.title %></label> <% }) %>', P = '<hr><label><b>Между абзацами:</b> <select name="paragraphMargin"><% _.each(paragraphMargin, function(i) { %><option <% if(curParagraphMargin === i) print("selected"); %> value="<%= i %>"><%= i %></option><% }) %></select></label>', j = '<hr><b>Шрифт:</b> <span style="font-size: 32px"><% _.each(fontFamily, function(ff) { %><label style="white-space: nowrap; font-family: <%= ff.val %>" title="<%= ff.title %>"><input type="radio" name="fontFamily" value="<%= ff.val %>" <% if(curFontFamily === ff.val) print("checked"); %>>Аа</label> <% }) %></span>', A = '<hr><b>Переносы слов:</b> <% _.each(hyphens, function(hp) { %><label style="white-space: nowrap;"><input type="radio" name="hyphens" value="<%= hp.val %>" <% if(curHyphens === hp.val) print("checked"); %>><%= hp.title %></label> <% }) %>', H = '<hr><b>Эффект смены страниц:</b> <% _.each(items, function(item) { %><label style="white-space: nowrap;"><input type="radio" name="pageChangeEffect" value="<%= item.val %>" <% if(curVal === item.val) print("checked"); %>><%= item.title %></label> <% }) %>';
                        return f = {
                            init: n
                        },
                            t.extend(f, r.a.util.events),
                            f
                    }()
            }
                .call(t, n(0), n(3))
    },
    746: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.statistics = function (n) {
                        function i() {
                            r.a.controller.main.on("changeStat", s),
                                r.a.data.statistics.on("success", u),
                                r.a.data.statistics.on("error", f)
                        }
                        function o() {
                            var e, i;
                            if (n.localStorage) {
                                e = n.localStorage.getItem(h);
                                try {
                                    e = JSON.parse(e)
                                } catch (e) {
                                    r.a.debug.errCatchLog(e)
                                }
                                return t.isArray(e) && e.length ? (i = e.pop(),
                                    n.localStorage.setItem(h, JSON.stringify(e)),
                                    i) : null
                            }
                        }
                        function a(e) {
                            var r;
                            n.localStorage && (r = n.localStorage.getItem(h),
                                r = JSON.parse(r),
                                t.isArray(r) ? r.push(e) : r = [e],
                                r.length < p && n.localStorage.setItem(h, JSON.stringify(r)))
                        }
                        function s(e) {
                            var t, n;
                            e.part && e.linear && (t = r.a.view.content.getStatByPage(e.page),
                                n = new r.a.model.Statistics({
                                    book: r.a.config.epubId,
                                    part: e.part,
                                    chars_offset: t.prevTextCount,
                                    chars_page: t.curPageTextCount
                                }),
                                g(n))
                        }
                        function c(e) {
                            r.a.data.statistics.post(e)
                        }
                        function l() {
                            var e = o();
                            e && setTimeout(function () {
                                r.a.data.statistics.post(e)
                            }, 1e3)
                        }
                        function u(e) {
                            l()
                        }
                        function f(e) {
                            a(e)
                        }
                        var d, p = 500, h = "rdr.statistics", g = e.debounce(c, 5e3);
                        return d = {
                            init: i
                        },
                            e.extend(d, r.a.util.events),
                            d
                    }(window)
            }
                .call(t, n(3), n(0))
    },
    747: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.controller = r.a.controller || {},
                    r.a.controller.toc = function () {
                        function n() {
                            r.a.view.tocBtn.on("click", o),
                                r.a.controller.main.on("changeStat", i)
                        }
                        function i(e) {
                            u = e.part,
                                c = e.page,
                                l = e.sections
                        }
                        function o() {
                            var t, n, i, o, p, h, g, v, m, y;
                            if (s || (s = '<div class="rdr-toc">' + r.a.data.epub.getTocHtml() + "</div>"),
                                t = r.a.data.epub.getSectionFileByPartId(u)) {
                                if (n = new RegExp('href="' + t + "(#\\w+)?", "g"),
                                    (y = s.match(n)) && y.length > 1) {
                                    for (i = s,
                                        p = 0; p < y.length; p += 1)
                                        if (h = y[p].split("#")[1])
                                            if ((m = r.a.view.content.getPageByHash(h)) < c)
                                                g = h;
                                            else {
                                                if (m !== c)
                                                    break;
                                                i = i.replace("#" + h + '"', "#" + h + '" ' + d)
                                            }
                                    g && i === s && (i = i.replace("#" + g + '"', "#" + g + '" ' + d))
                                }
                                if (i && i !== s || (i = s.replace(new RegExp('href="' + t + '"', "g"), d + "$&")),
                                    l > 1 && (!i || i === s) && (i = s.replace(n, d + "$&")),
                                    l > 1 && (!i || i === s))
                                    for (; t = r.a.data.epub.getPrevHrefByHref(t);)
                                        if ((v = s.lastIndexOf('href="' + t)) > 0) {
                                            i = s.slice(0, v) + d + s.slice(v);
                                            break
                                        }
                            }
                            o = new r.a.view.Dialog({
                                title: "Оглавление",
                                html: i || s,
                                clsActiveItem: f
                            }),
                                o.open(),
                                o.on("cancel", function () {
                                    o.close()
                                }),
                                e(o.getContentEl()).on("click", "a", function () {
                                    var t = e(this).attr("href");
                                    return o.close(),
                                        a.trigger("clickHref", [t]),
                                        !1
                                }),
                                a.trigger("tocShown")
                        }
                        var a, s, c, l, u, f = "rdr-toc-cur", d = 'class="' + f + '" ';
                        return a = {
                            init: n
                        },
                            t.extend(a, r.a.util.events),
                            a
                    }()
            }
                .call(t, n(0), n(3))
    },
    748: function (e, t, n) {
        // "use strict";
        // Object.defineProperty(t, "__esModule", {
        //     value: !0
        // });
        // var r = n(2);
        // r.a.controller = r.a.controller || {},
        //     r.a.controller.ym = function (e) {
        //         function t() {
        //             "real" === r.a.config.environment && r.a.controller.main.on("changeStat", i)
        //         }
        //         function n() {
        //             var t = {};
        //             !function (e, n, r) {
        //                 (n[r] = n[r] || []).push(function () {
        //                     try {
        //                         n.yaCounter16888873 = new Ya.Metrika({
        //                             id: 16888873,
        //                             webvisor: !0,
        //                             clickmap: !0,
        //                             trackLinks: !0,
        //                             accurateTrackBounce: !0,
        //                             trackHash: !0,
        //                             params: t || {}
        //                         })
        //                     } catch (e) { }
        //                 });
        //                 var i = e.getElementsByTagName("script")[0]
        //                     , o = e.createElement("script");
        //                 o.type = "text/javascript",
        //                     o.async = !0,
        //                     o.src = ("https:" == e.location.protocol ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js",
        //                     function () {
        //                         i.parentNode.insertBefore(o, i)
        //                     }()
        //             }(document, e, "yandex_metrika_callbacks")
        //         }
        //         function i(e) {
        //             r.a.controller.main.off("changeStat", i),
        //                 n()
        //         }
        //         return {
        //             init: t
        //         }
        //     }(window)
    },
    749: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.data = r.a.data || {},
                    r.a.data.autobookmark = function () {
                        function n(n) {
                            e.isEmpty(n) || t.ajax({
                                type: "POST",
                                beforeSend: function (e) {
                                    e.setRequestHeader("Accept", "application/json; version=2.5")
                                    e.setRequestHeader("X-CSRF-Token", document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
                                },
                                url: "/auto-bookmarks/?format=json",
                                data: JSON.stringify(n),
                                global: !1,
                                success: function () {
                                    i.trigger("success", [n])
                                },
                                error: function (e, t, r) {
                                    i.trigger("error", [n])
                                },
                                dataType: "json",
                                processData: !1,
                                contentType: "application/json"
                            })
                        }
                        var i, o = "/api";
                        return i = {
                            post: n
                        },
                            e.extend(i, r.a.util.events),
                            i
                    }()
            }
                .call(t, n(3), n(0))
    },
    750: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2)
                    , i = n(120)
                    , o = n.n(i);
                r.a.data = r.a.data || {},
                    r.a.data.bookmark = function () {
                        function n(e) {
                            c = e
                        }
                        function i(t) {
                            var n = {
                                book: c,
                                part: t.part,
                                xpath: t.xpath,
                                offset: t.offset,
                                first_line: t.textPiece,
                                title: t.prevHeaderText
                            };
                            e.ajax({
                                type: "POST",
                                beforeSend: function (e) {
                                    e.setRequestHeader("Accept", "application/json; version=2.5"),
                                        e.setRequestHeader("X-CSRF-Token", document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
                                },
                                url: "/bookmarks/",
                                data: JSON.stringify(n),
                                global: !1,
                                success: function (e) {
                                    e.id && (t.id = e.id),
                                        s.trigger("saved", [t])
                                },
                                error: function (e, n, i) {
                                    var o;
                                    if (400 === e.status)
                                        try {
                                            o = JSON.parse(e.responseText)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e)
                                        }
                                    s.trigger("addError", [t, e.status, o])
                                },
                                dataType: "json",
                                processData: !1,
                                contentType: "application/json"
                            })
                        }
                        function a(t) {
                            e.ajax({
                                type: "DELETE",
                                beforeSend: function (e) {
                                    e.setRequestHeader("Accept", "application/json; version=2.5"),
                                        e.setRequestHeader("X-CSRFToken", o.a.get("csrftoken"))
                                },
                                url: l + "/bookmarks/" + t.id + "/",
                                global: !1,
                                success: function (e) {
                                    s.trigger("deleted", [t])
                                },
                                error: function (e, n, i) {
                                    var o;
                                    if (400 === e.status)
                                        try {
                                            o = JSON.parse(e.responseText)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e)
                                        }
                                    s.trigger("delError", [t, e.status, o])
                                },
                                dataType: "json",
                                processData: !1
                            })
                        }
                        var s, c, l = "/api";
                        return s = {
                            init: n,
                            post: i,
                            del: a
                        },
                            t.extend(s, r.a.util.events),
                            s
                    }()
            }
                .call(t, n(0), n(3))
    },
    751: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2)
                    , i = n(120)
                    , o = n.n(i);
                r.a.data = r.a.data || {},
                    r.a.data.citation = function () {
                        function n(t) {
                            e.ajax({
                                type: "POST",
                                beforeSend: function (e) {
                                    e.setRequestHeader("Accept", "application/json; version=2.5"),
                                        e.setRequestHeader("X-CSRFToken", o.a.get("csrftoken"))
                                },
                                url: l + "/user-citations/",
                                data: JSON.stringify(t),
                                global: !1,
                                timeout: c,
                                success: function (e) {
                                    e.id && (t.id = e.id),
                                        s.trigger("addSuccess", [t])
                                },
                                error: function (e, n, i) {
                                    var o;
                                    if (400 === e.status)
                                        try {
                                            o = JSON.parse(e.responseText)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e)
                                        }
                                    s.trigger("addError", [t, e.status, o])
                                },
                                dataType: "json",
                                processData: !1,
                                contentType: "application/json; charset=utf-8"
                            })
                        }
                        function i(t) {
                            e.ajax({
                                type: "DELETE",
                                beforeSend: function (e) {
                                    e.setRequestHeader("Accept", "application/json; version=2.5"),
                                        e.setRequestHeader("X-CSRFToken", o.a.get("csrftoken"))
                                },
                                url: l + "/user-citations/" + t.id + "/",
                                global: !1,
                                timeout: c,
                                success: function (e) {
                                    s.trigger("delSuccess", [t])
                                },
                                error: function (e, n, i) {
                                    var o;
                                    if (400 === e.status)
                                        try {
                                            o = JSON.parse(e.responseText)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e)
                                        }
                                    s.trigger("delError", [t, e.status, o])
                                },
                                dataType: "json",
                                processData: !1
                            })
                        }
                        function a(t) {
                            e.ajax({
                                type: "PUT",
                                beforeSend: function (e) {
                                    e.setRequestHeader("Accept", "application/json; version=2.5"),
                                        e.setRequestHeader("X-CSRFToken", o.a.get("csrftoken"))
                                },
                                url: l + "/user-citations/" + t.id + "/",
                                data: JSON.stringify(t),
                                global: !1,
                                timeout: c,
                                success: function (e) {
                                    s.trigger("putSuccess", [t])
                                },
                                error: function (e, n, i) {
                                    var o;
                                    if (400 === e.status)
                                        try {
                                            o = JSON.parse(e.responseText)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e)
                                        }
                                    s.trigger("putError", [t, e.status, o])
                                },
                                dataType: "json",
                                processData: !1,
                                contentType: "application/json; charset=utf-8"
                            })
                        }
                        var s, c = 15e3, l = "/api";
                        return s = {
                            post: n,
                            del: i,
                            put: a
                        },
                            t.extend(s, r.a.util.events),
                            s
                    }()
            }
                .call(t, n(0), n(3))
    },
    752: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2)
                    , i = n(120)
                    , o = n.n(i);
                r.a.data = r.a.data || {},
                    r.a.data.endbook = function () {
                        function n() {
                            r.a.config.isPreviewMode || e.ajax({
                                type: "POST",
                                url: "/api/v4/bookuserlist/",
                                data: JSON.stringify({
                                    readinglist: 3,
                                    book: "/api/books/" + r.a.config.epubId + "/"
                                }),
                                global: !1,
                                beforeSend: function (e) {
                                    e.setRequestHeader("X-CSRFToken", o.a.get("csrftoken"))
                                },
                                success: function (e) {
                                    i.trigger("addSuccess")
                                },
                                error: function (e, t, n) {
                                    var o;
                                    if (400 === e.status)
                                        try {
                                            o = JSON.parse(e.responseText)
                                        } catch (e) {
                                            r.a.debug.errCatchLog(e)
                                        }
                                    i.trigger("addError", [e.status, o])
                                },
                                dataType: "json",
                                processData: !1,
                                contentType: "application/json; charset=utf-8"
                            })
                        }
                        var i;
                        return i = {
                            post: n
                        },
                            t.extend(i, r.a.util.events),
                            i
                    }()
            }
                .call(t, n(0), n(3))
    },
    753: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.data = r.a.data || {},
                    r.a.data.epub = function () {
                        function n(t) {
                            _ = t,
                                w = e.throttle(c, 7e3),
                                x = e.debounce(u, 8e3),
                                b.on("readyMetaInf", p),
                                b.on("readyContentOpf", h),
                                i()
                        }
                        function i() {
                            t.ajax({
                                url: _ + "META-INF/container.xml",
                                success: function (e) {
                                    if (!(C = t(e).find("rootfile:first").attr("full-path")))
                                        throw new Error("Нет пути к файлу content.opf");
                                    C = _ + C,
                                        S = C.replace(/[^\/]+$/, ""),
                                        b.trigger("readyMetaInf")
                                },
                                dataType: "xml"
                            })
                        }
                        function o(e, t) {
                            return e = e.replace(/(src|xlink:href)="(?!http:)/g, "$&" + t),
                                e = e.replace(/<br><\/br>/g, "<br>"),
                                e = e.replace(/<(?!area|br|col|hr|img|input|param|source|track|wbr)(\w+)([^>]*)\/>/g, "<$1$2></$1>"),
                                e = e.replace(/text-align:\s*justify/g, "text-align:_justify"),
                                e = e.replace(/position:(\s*)fixed/g, "position:$1fi&#1093;ed"),
                                r.a.isIE8 && (e = e.replace(/^\s+</, "etn<"),
                                    e = e.replace(/>\s+</g, ">\x3c!--etn--\x3e<"),
                                    e = e.replace(/\s(?=[^>]*<)/g, "&#8203;")),
                                e
                        }
                        function a(e, t, n) {
                            function r() {
                                var e, n = 0;
                                if (s === c)
                                    return void t();
                                for (s += 1,
                                    e = 0; e < l; e += 1)
                                    o[e].width > 0 && (n += 1);
                                n === l ? t() : setTimeout(r, a)
                            }
                            var i, o = [], a = 500, s = 0, c = 4, l = e.length;
                            for (i = 0; i < l; i += 1)
                                o[i] = new Image,
                                    o[i].src = e[i];
                            r()
                        }
                        function s(t) {
                            for (var n, r = /<img[^<>]+src="([^"]+)"/g, i = []; null != (n = r.exec(t));)
                                i.push(n[1]);
                            return e.uniq(i)
                        }
                        function c(e) {
                            var t;
                            for (t = 0; t < e.length; t += 1)
                                P[t] || (P[t] = new Image),
                                    P[t].src = e[t]
                        }
                        function l(e, t) {
                            var n = v(e);
                            if (n) {
                                if (N[n]) {
                                    if (void 0 === t && (w(N[n].images),
                                        t = 0),
                                        N[n].images.length && Math.random() < .3)
                                        return w(N[n].images),
                                            e;
                                    e < b.getSectionCount() && t < 2e5 && l(e + 1, t + N[n].html.length)
                                } else
                                    f(e, !0);
                                return e
                            }
                        }
                        function u() {
                            var t;
                            void 0 === k && (k = [],
                                e.each(T, function (e, t) {
                                    ("notes" === e.type || 0 === t.indexOf("contentnote") || e.href.indexOf("contentnote") >= 0) && k.push(t)
                                })),
                                0 !== k.length && (t = k[Math.floor(Math.random() * k.length)],
                                    N[t] || f(T[t].href, !0))
                        }
                        function f(n, r) {
                            var i, c;
                            if (c = v(n))
                                return n = g(c) || n,
                                    N[c] ? (r || a(N[c].images, function () {
                                        b.trigger("readySection", [N[c]])
                                    }, function () {
                                        b.trigger("errorSection")
                                    }),
                                        n) : (i = T[c].href,
                                            t.ajax({
                                                url: S + i,
                                                global: !1,
                                                timeout: 2e4,
                                                success: function (t) {
                                                    var n = ""
                                                        , l = this.url.replace(/[^\/]+$/, "")
                                                        , u = !0
                                                        , f = t.match(/<body[^>]*>([\s\S]+)<\/body>/);
                                                    f && (n = f[1]),
                                                        n = o(n, l),
                                                        -1 === e.indexOf(E, i) && (u = !1),
                                                        N[c] = {
                                                            html: n,
                                                            file: i,
                                                            part: c,
                                                            linear: u,
                                                            type: T[c].type,
                                                            images: s(n)
                                                        },
                                                        r || a(N[c].images, function () {
                                                            b.trigger("readySection", [N[c]])
                                                        }, function () {
                                                            b.trigger("errorSection")
                                                        }),
                                                        x()
                                                },
                                                error: function () {
                                                    r || b.trigger("errorSection")
                                                },
                                                dataType: "text"
                                            }),
                                            n)
                        }
                        function d() {
                            return E.length
                        }
                        function p() {
                            t.ajax({
                                url: C,
                                success: function (n) {
                                    var r = t(n)
                                        , i = r.find("manifest > item")
                                        , o = r.find("guide > reference")
                                        , a = r.find("spine > itemref");
                                    if (0 === i.length)
                                        throw new Error("contentOpfPath not contain manifest > item");
                                    if (0 === a.length)
                                        throw new Error("contentOpfPath not contain spine > itemref");
                                    i.each(function (e, n) {
                                        var r = t(n);
                                        T[r.attr("id")] = {
                                            href: r.attr("href")
                                        }
                                    }),
                                        o.each(function (n, r) {
                                            var i = t(r)
                                                , o = e.find(T, function (e, t) {
                                                    if (0 === i.attr("href").indexOf(e.href))
                                                        return !0
                                                });
                                            o && e.extend(o, {
                                                type: i.attr("type"),
                                                title: i.attr("title")
                                            })
                                        }),
                                        a.each(function (e, n) {
                                            var r = t(n)
                                                , i = T[r.attr("idref")];
                                            "no" !== r.attr("linear") && "cover" !== i.type && "toc" !== i.type && E.push(i.href)
                                        }),
                                        b.trigger("readyContentOpf")
                                },
                                dataType: "xml"
                            })
                        }
                        function h() {
                            function e(n, r) {
                                O += "<ul>",
                                    n.find("> navPoint").each(function (n, r) {
                                        var i = t(r)
                                            , o = i.find("> content").attr("src")
                                            , a = i.find("> navLabel").text();
                                        O += "<li>",
                                            O += '<a href="' + o + '">' + a + "</a>",
                                            e(i),
                                            O += "</li>"
                                    }),
                                    O += "</ul>",
                                    r && (O = O.replace(/<ul><\/ul>/g, ""))
                            }
                            var n = "toc.ncx";
                            T.ncx && T.ncx.href && (n = T.ncx.href),
                                t.ajax({
                                    url: S + n,
                                    success: function (n) {
                                        e(t(n).find("navMap"), !0),
                                            b.trigger("readyTocNcx")
                                    },
                                    dataType: "xml"
                                })
                        }
                        function g(t) {
                            var n, r, i;
                            if (n = T[t])
                                return r = n.href,
                                    i = e.indexOf(E, r),
                                    -1 !== i ? i + 1 : void 0
                        }
                        function v(t) {
                            var n, r;
                            if (t) {
                                if (e.isNumber(t)) {
                                    if (!(n = E[t - 1]))
                                        return
                                } else
                                    n = t;
                                return e.find(T, function (e, t) {
                                    if (e.href && -1 !== e.href.indexOf(n))
                                        return r = t,
                                            !0
                                }),
                                    r
                            }
                        }
                        function m(e) {
                            return T[e] && T[e].href
                        }
                        function y(t) {
                            var n = e.indexOf(E, t);
                            if (n > 0)
                                return E[n - 1]
                        }
                        var b, w, x, k, S, _, C, T = {}, E = [], O = "", N = {}, P = [];
                        return b = {
                            init: n,
                            getSectionCount: d,
                            readSectionHtml: f,
                            preloadSection: l,
                            getSectionIndexByPartId: g,
                            getSectionFileByPartId: m,
                            getPrevHrefByHref: y,
                            getTocHtml: function () {
                                return O
                            }
                        },
                            e.extend(b, r.a.util.events),
                            b
                    }()
            }
                .call(t, n(3), n(0))
    },
    754: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.data = r.a.data || {},
                    r.a.data.statistics = function () {
                        function n(t) {
                            var n = {
                                objects: [t]
                            };
                            e.ajax({
                                type: "POST",
                                beforeSend: function (e) {
                                    e.setRequestHeader("Accept", "application/json; version=2.5")
                                    e.setRequestHeader("X-CSRF-Token", document.querySelector('meta[name="csrf-token"]').getAttribute('content'))
                                },
                                url: "/statistics/?format=json",
                                data: JSON.stringify(n),
                                global: !1,
                                success: function () {
                                    i.trigger("success", [t])
                                },
                                error: function () {
                                    i.trigger("error", [t])
                                },
                                dataType: "text",
                                processData: !1,
                                contentType: "application/json"
                            })
                        }
                        var i, o = "/api";
                        return i = {
                            post: n
                        },
                            t.extend(i, r.a.util.events),
                            i
                    }()
            }
                .call(t, n(0), n(3))
    },
    755: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.debug = function (e) {
            function t(t) {
                e.console.error(t.message + "\n" + t.stack)
            }
            function n() {
                e.console.log instanceof Function ? e.console.log.apply(e.console, arguments) : e.console.log(Array.prototype.slice.call(arguments))
            }
            function i(t) {
                e.console.time ? e.console.time(t) : s = new Date
            }
            function o(t) {
                e.console.timeEnd ? e.console.timeEnd(t) : e.console.log(t + ": ", +new Date - s + "ms")
            }
            function a(t) {
                if (!t || !e.console) {
                    var n = function () { };
                    c.errCatchLog = n,
                        c.log = n,
                        c.time = n,
                        c.timeEnd = n
                }
                t && (r.a.sys.isTouch || r.a.sys.isIE9mobile) && (window.onerror = function (e, t, n) {
                    alert("Ошибка:" + e + "\nфайл:" + t + "\nстрока:" + n)
                }
                )
            }
            var s, c;
            return c = {
                init: a,
                errCatchLog: t,
                log: n,
                time: i,
                timeEnd: o
            }
        }(window)
    },
    756: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                e(function () {
                    r.a.config = r.a.config || {},
                        t.extend(r.a.config, {
                            isPreviewMode: !!readerArgs.is_preview,
                            popupHtml: readerArgs.popup_form,
                            topBookHtml: readerArgs.topbook,
                            epubPath: readerArgs.prefix,
                            coverImagePath: readerArgs.cover,
                            epubTitle: readerArgs.name,
                            epubId: readerArgs.id,
                            epubIdUrl: readerArgs.book,
                            autobookmark: readerArgs.autobookmark ? readerArgs.autobookmark : null,
                            bookmarks: readerArgs.bookmarks ? readerArgs.bookmarks : [],
                            citations: readerArgs.citations ? readerArgs.citations : [],
                            activeCitation: readerArgs.active_citation,
                            tocHref: readerArgs.toc_href,
                            environment: window.stage,
                            ga: readerArgs.ga
                        }),
                        r.a.controller.main.init()
                }),
                    "function" == typeof e && "function" == typeof t || confirm("Произошла ошибка при загрузке!\nПерезапустить приложение?") && window.location.reload(!0)
            }
                .call(t, n(0), n(3))
    },
    757: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.model = t.a.model || {},
                    t.a.model.Autobookmark = function () {
                        function n(n) {
                            if (e.defaults(n, {
                                book: t.a.config.epubIdUrl,
                                offset: 0,
                                device_name: "web",
                                time: Math.round((new Date).getTime() / 1e3)
                            }),
                                !(e.isString(n.book) && n.book.length > 0 && e.isString(n.part) && n.part.length > 0 && e.isString(n.xpath) && n.xpath.length > 0 && e.isNumber(n.offset) && n.offset >= 0 && e.isString(n.device_name) && n.device_name.length > 0 && e.isNumber(n.time) && n.time > 1))
                                throw new Error("rdr.model.Autobookmark validation error");
                            this.book = n.book,
                                this.part = n.part,
                                this.xpath = n.xpath,
                                this.offset = n.offset,
                                this.device_name = n.device_name,
                                this.time = n.time
                        }
                        return n.prototype = {
                            constructor: t.a.model.Autobookmark,
                            get: function () {
                                return this
                            }
                        },
                            n
                    }()
            }
                .call(t, n(3))
    },
    758: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.model = r.a.model || {},
            r.a.model.Bookmark = function () {
                function e(e) {
                    this.id = e.id || 0,
                        this.part = e.part,
                        this.xpath = e.xpath,
                        this.offset = e.offset || 0,
                        this.date = new Date,
                        this.prevHeaderText = e.prevHeaderText || e.title || "",
                        this.textPiece = e.textPiece || e.first_line || ""
                }
                return e.prototype = {
                    constructor: r.a.model.Bookmark,
                    get: function () {
                        return this
                    }
                },
                    e
            }()
    },
    759: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.model = r.a.model || {},
            r.a.model.Citation = function () {
                function e(e) {
                    var t = e.citation;
                    this.id = e.id || 0,
                        this.comment = e.comment || "",
                        this.citation = {
                            book: r.a.config.epubIdUrl,
                            part: t.part,
                            start_xpath: t.start_xpath,
                            start_offset: t.start_offset || 0,
                            end_xpath: t.end_xpath,
                            end_offset: t.end_offset || 1,
                            text: t.text || ""
                        }
                }
                return e.prototype = {
                    constructor: r.a.model.Citation,
                    get: function () {
                        return this
                    }
                },
                    e
            }()
    },
    760: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.model = r.a.model || {},
            r.a.model.Statistics = function () {
                function e(e) {
                    if (!e.book || !e.part)
                        throw new Error("rdr.model.Statistics no data for create");
                    this.book = e.book,
                        this.part = e.part,
                        this.time = Math.round((new Date).getTime() / 1e3),
                        this.chars_offset = e.chars_offset || 0,
                        this.chars_page = e.chars_page || 0
                }
                return e.prototype = {
                    constructor: r.a.model.Statistics,
                    get: function () {
                        return this
                    }
                },
                    e
            }()
    },
    761: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(13);
                n.n(t);
                n(2).a.settings = function (t) {
                    function n() {
                        var n, r;
                        e.extend(i, a),
                            t.localStorage && (Storage.prototype._setItem = Storage.prototype.setItem,
                                Storage.prototype.setItem = function (e, t) {
                                    try {
                                        return this._setItem(e, t)
                                    } catch (e) { }
                                }
                                ,
                                (n = t.localStorage.getItem(o)) && (r = JSON.parse(n),
                                    e.extend(i, r)))
                    }
                    function r() {
                        t.localStorage && t.localStorage.setItem(o, JSON.stringify(i))
                    }
                    var i, o = "rdr.settings", a = {
                        numberColumns: 0,
                        colorTheme: "colorTheme1",
                        hyphens: !1,
                        textAlign: "left",
                        fontFamily: "Georgia, serif",
                        navInfoAlwaysVisible: !0,
                        lineHeight: 1.5,
                        paragraphMargin: .5,
                        fontSize: "16px",
                        pageChangeEffect: "fade",
                        screenPadding: 0,
                        citationsStartNoHelp: !1
                    };
                    return i = {
                        init: n,
                        save: r
                    }
                }(window)
            }
                .call(t, n(3))
    },
    762: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.sys = function () {
                    function n() {
                        var e, t = document.documentElement;
                        p = t.clientWidth,
                            h = t.clientHeight,
                            v = g.offsetHeight,
                            m.isTouch && (e = -1 !== navigator.userAgent.indexOf("OPR/") ? h + 1 : h,
                                document.body.style.height = e + "px")
                    }
                    function i() {
                        m.trigger("resize"),
                            y()
                    }
                    function o() {
                        m.trigger("afterResize")
                    }
                    function a() {
                        var e = document.documentElement
                            , t = e.clientWidth
                            , i = e.clientHeight
                            , o = g.offsetHeight;
                        t === p && i === h && o === v || (m.isTouch ? t === p && r.a.view.mask.isShown || (n(),
                            b()) : (n(),
                                b()))
                    }
                    function s() {
                        g = document.createElement("div"),
                            g.className = "rdr-hiddenTestTextBlock",
                            g.innerHTML = "MyBook &mdash; библиотека современной и классической литературы, новинки и бестселлеры, отзывы, рекомендации, популярные авторы.",
                            document.body.appendChild(g)
                    }
                    function c() {
                        var e, t = document.documentElement;
                        return !(!m.isTouch && !m.isMsPointer || (e = p / window.innerWidth,
                            .99 < e && e < 1.01 && (e = 1),
                            1 === e && !t.scrollLeft && !t.scrollLeft))
                    }
                    function l() {
                        var e = "g-hyphens-auto"
                            , n = t(g)
                            , r = !1;
                        return n.addClass(e),
                            r = g.offsetHeight !== v,
                            n.removeClass(e),
                            r
                    }
                    function u() {
                        var e, t, n = document.body.children, r = n.length;
                        for (t = 0; t < r; t += 1)
                            e = n[t],
                                1 === e.nodeType && "SCRIPT" !== e.nodeName && "NOSCRIPT" !== e.nodeName && e.className.indexOf("rdr-") < 0 && (e.style.cssText = "position:absolute !important; overflow:hidden !important; height:1px !important; top:-9999px !important;")
                    }
                    function f() {
                        g.offsetHeight !== v && a()
                    }
                    function d() {
                        s(),
                            n(),
                            m.isHyphens = l(),
                            setInterval(function () {
                                r.a.view.content.pagingEffect.isAnimated() || (f(),
                                    u())
                            }, 1400),
                            document.addEventListener ? window.addEventListener("resize", a, !1) : window.attachEvent("onresize", a)
                    }
                    var p, h, g, v, m, y = e.debounce(o, 500), b = e.throttle(i, 300);
                    return m = {
                        init: d,
                        getWidth: function () {
                            return p
                        },
                        getHeight: function () {
                            return h
                        },
                        isScaling: c,
                        isSmall: function () {
                            return h < 581 || p < 581
                        },
                        isTouch: !!("ontouchstart" in window),
                        isMsPointer: !(!window.navigator.msPointerEnabled || !window.navigator.msMaxTouchPoints),
                        isIE9mobile: navigator.userAgent.indexOf("MSIE 9.") > 0 && (navigator.userAgent.indexOf("Windows Phone") > 0 || navigator.userAgent.indexOf("XBLWP7;") > 0),
                        isHyphens: !1,
                        fullScreen: function () {
                            var e = document
                                , t = navigator.userAgent || "";
                            return {
                                enabled: -1 === t.indexOf("Opera") && !/OPR\/1[4-8]\./.test(t) && !(-1 !== t.indexOf("YaBrowser") && -1 !== t.indexOf("Android")) && (e.fullscreenEnabled || e.mozFullScreenEnabled || e.webkitFullscreenEnabled),
                                element: function () {
                                    return e.fullscreenElement || e.mozFullScreenElement || e.webkitFullscreenElement
                                },
                                request: function (e) {
                                    return e.requestFullScreen ? e.requestFullScreen() : e.mozRequestFullScreen ? e.mozRequestFullScreen() : e.webkitRequestFullScreen ? e.webkitRequestFullScreen() : void 0
                                },
                                cancel: function () {
                                    return e.cancelFullScreen ? e.cancelFullScreen() : e.exitFullscreen ? e.exitFullscreen() : e.mozCancelFullScreen ? e.mozCancelFullScreen() : e.webkitCancelFullScreen ? e.webkitCancelFullScreen() : e.webkitExitFullscreen ? e.webkitExitFullscreen() : void 0
                                }
                            }
                        }()
                    },
                        e.extend(m, r.a.util.events),
                        m
                }()
            }
                .call(t, n(3), n(0))
    },
    763: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.util = t.a.util || {},
                    t.a.util.ajax = {
                        errorMessage: function (t, n) {
                            function r(t) {
                                var n = [];
                                return e.each(t, function (e) {
                                    "string" == typeof e && e.length ? n.push(e) : "object" == typeof e && (n = n.concat(r(e)))
                                }),
                                    n
                            }
                            var i = ""
                                , o = "Возможно проблема с подключением к Интернету.";
                            switch (t) {
                                case 405:
                                    i = "Метод недоступен для данного URI";
                                    break;
                                case 404:
                                    i = o;
                                    break;
                                case 403:
                                    i = "Действие запрещено в данный момент времени";
                                    break;
                                case 401:
                                    i = "Требуется авторизация";
                                    break;
                                case 400:
                                    n && (i = r(n).join("\n"))
                            }
                            return i || o
                        }
                    }
            }
                .call(t, n(3))
    },
    764: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.util = t.a.util || {},
                    t.a.util.client = {
                        getNodeByXPath: function () {
                            return document.evaluate ? function (e, t) {
                                var n;
                                if (t = t || document,
                                    !e || "." === e)
                                    return t;
                                try {
                                    n = document.evaluate(e, t, null, XPathResult.FIRST_ORDERED_NODE_TYPE, null).singleNodeValue
                                } catch (e) {
                                    n = null,
                                        console.error("getNodeByXPath document.evaluate error")
                                }
                                return n
                            }
                                : function (e, t) {
                                    var n, r, i, o, a, s, c, l;
                                    if (t = t || document,
                                        !e || "." === e)
                                        return t;
                                    for (n = e.split("/"),
                                        c = 0; c < n.length; c += 1)
                                        if (r = n[c].split("["),
                                            i = r[0],
                                            o = parseInt(r[1], 10) || 1,
                                            a = 0,
                                            "text()" === i) {
                                            for (s = t.childNodes,
                                                l = 0; l < s.length; l += 1)
                                                if (3 === s[l].nodeType && (a += 1) === o)
                                                    return s[l]
                                        } else
                                            for (s = t.children,
                                                l = 0; l < s.length; l += 1)
                                                if (s[l].nodeName === i.toUpperCase() && (a += 1) === o) {
                                                    t = s[l];
                                                    break
                                                }
                                    return t
                                }
                        }(),
                        getXPathByNode: function (e, t) {
                            var n, r, i = [], o = "";
                            if (t = t || document,
                                !e.parentNode)
                                return "/";
                            if (e === t)
                                return ".";
                            for (; e && e !== t; e = e.parentNode) {
                                switch (n = i[i.length] = {},
                                e.nodeType) {
                                    case 3:
                                        n.name = "text()";
                                        break;
                                    case 1:
                                        n.name = e.nodeName
                                }
                                n.position = function (e) {
                                    var t, n = 1;
                                    if (2 === e.nodeType)
                                        return null;
                                    for (t = e.previousSibling; t; t = t.previousSibling)
                                        t.nodeName === e.nodeName && ++n;
                                    return n
                                }(e)
                            }
                            for (r = i.length - 1; r >= 0; r--)
                                n = i[r],
                                    o += "/" + n.name,
                                    null != n.position && (o += "[" + n.position + "]");
                            return o.slice(1)
                        },
                        compareXpath: function (e, t, n, r) {
                            function i(e) {
                                return e.toLowerCase().replace(/\[/g, "[000000").replace(/\[\d*(\d{6})\]/g, "[$1]")
                            }
                            return e === n ? t === r ? 0 : t > r ? 1 : -1 : i(e) > i(n) ? 1 : -1
                        },
                        isLoadedImagesIn: t.a.isIE8 ? function (e) {
                            var t, n = e.getElementsByTagName("img");
                            for (t = 0; t < n.length; t += 1)
                                if (!n[t].complete || !n[t].height)
                                    return !1;
                            return !0
                        }
                            : function (e) {
                                var t, n = e.getElementsByTagName("img");
                                for (t = 0; t < n.length; t += 1)
                                    if (!n[t].naturalHeight)
                                        return !1;
                                return !0
                            }
                        ,
                        setStyleSheetRule: function (e, t, n) {
                            var r, i = e.sheet ? e.sheet : e.styleSheet, o = i.cssRules ? i.cssRules : i.rules;
                            for (r = 0; r < o.length; r += 1)
                                o[r].selectorText === t && (i.cssRules ? i.deleteRule(r) : i.removeRule(r));
                            i.insertRule ? i.insertRule(t + "{" + n + "}", o.length) : i.addRule && i.addRule(t, n, o.length)
                        },
                        getBoundingClientRectOn: function (n, r) {
                            var i, o, a, s;
                            return "deviceXDPI" in screen && window.execScript && n.collapse && !t.a.sys.isIE9mobile && (o = screen.deviceXDPI / screen.logicalXDPI),
                                a = e.isElement(r) ? r.getBoundingClientRect() : r,
                                (i = n.getBoundingClientRect()) ? (o && 1 !== o ? (s = {
                                    left: i.left / o - a.left,
                                    right: i.right / o - a.left,
                                    top: i.top / o - a.top,
                                    bottom: i.bottom / o - a.top
                                },
                                    s.width = s.right - s.left,
                                    s.height = s.bottom - s.top) : s = {
                                        left: i.left - a.left,
                                        right: i.right - a.left,
                                        top: i.top - a.top,
                                        bottom: i.bottom - a.top,
                                        width: void 0 === i.width ? i.right - i.left : i.width,
                                        height: void 0 === i.height ? i.bottom - i.top : i.height
                                    },
                                    s) : {
                                        left: 0,
                                        right: 0,
                                        top: 0,
                                        bottom: 0,
                                        width: 0,
                                        height: 0
                                    }
                        },
                        getClientRectsOn: function (n, r) {
                            var i, o, a, s, c, l = [];
                            "deviceXDPI" in screen && window.execScript && n.collapse && !t.a.sys.isIE9mobile && (o = screen.deviceXDPI / screen.logicalXDPI),
                                s = e.isElement(r) ? r.getBoundingClientRect() : r,
                                i = n.getClientRects();
                            for (a = 0; a < i.length; a += 1) {
                                if (navigator.userAgent && navigator.userAgent.indexOf("AppleWebKit") > 0) {
                                    if (a < i.length - 1 && i[a].left <= i[a + 1].left && i[a].top <= i[a + 1].top && i[a].right >= i[a + 1].right && i[a].bottom >= i[a + 1].bottom)
                                        continue;
                                    if (a === i.length - 1 && a > 0 && 0 === n.endOffset && i[a].height >= i[a - 1].height && i[a].width >= i[a - 1].width)
                                        continue
                                }
                                o && 1 !== o ? (c = {
                                    left: i[a].left / o - s.left,
                                    right: i[a].right / o - s.left,
                                    top: i[a].top / o - s.top,
                                    bottom: i[a].bottom / o - s.top
                                },
                                    c.width = c.right - c.left,
                                    c.height = c.bottom - c.top,
                                    l.push(c)) : l.push({
                                        left: i[a].left - s.left,
                                        right: i[a].right - s.left,
                                        top: i[a].top - s.top,
                                        bottom: i[a].bottom - s.top,
                                        width: i[a].width || i[a].right - i[a].left,
                                        height: i[a].height || i[a].bottom - i[a].top
                                    })
                            }
                            return 0 === i.length && (l[0] = {
                                left: 0,
                                right: 0,
                                top: 0,
                                bottom: 0,
                                width: 0,
                                height: 0
                            }),
                                l
                        },
                        wrapText: function (e) {
                            var t = document.createElement("span");
                            return e.parentNode.insertBefore(t, e),
                                t.appendChild(e),
                                t
                        },
                        unwrapText: function (e) {
                            var t = e.parentNode
                                , n = e.firstChild;
                            return t.insertBefore(n, e),
                                t.removeChild(e),
                                n
                        },
                        getSelectionText: function () {
                            var e;
                            return window.getSelection ? e = window.getSelection().toString() : document.selection && document.selection.createRange && (e = document.selection.createRange().text),
                                e
                        },
                        rangeToString: function (e) {
                            var t = e.cloneContents()
                                , n = ""
                                , r = document.createElement("div");
                            return r.appendChild(t),
                                n = r.innerHTML,
                                this.rangeToStringReplace(n)
                        },
                        rangeToString8: function (e) {
                            var t = "";
                            return t = e.htmlText,
                                this.rangeToStringReplace(t)
                        },
                        rangeToStringReplace: function (e) {
                            return e = e.replace(/\s+/g, " ").replace(/<(br|hr|p|div|center|dl|dt|li|blockquote|h1|h2|h3|h4|h5|h6|img|tr|thead|tfoot|q)/gi, "\n<x").replace(/<(td|th)/gi, " <x").replace(/<[\s\S]+?>/g, "").replace(/^\s+/, "").replace(/\s+$/, "").replace(/\s*\n+\s*/g, "\n").replace(/&nbsp;/g, " ")
                        },
                        createTextRange8: function (e, t, n, r) {
                            var i, o = document.body.createTextRange(), a = document.body.createTextRange();
                            if (3 === e.nodeType) {
                                if (e.previousSibling ? (a.moveToElementText(e.previousSibling),
                                    o.setEndPoint("StartToEnd", a)) : o.moveToElementText(e.parentNode),
                                    o.moveStart("character", 1),
                                    o.moveStart("character", -1),
                                    o.moveStart("character", t),
                                    o.collapse(!0),
                                    e === n)
                                    return o.moveEnd("character", r - t),
                                        o
                            } else
                                t ? (i = e.childNodes[t - 1],
                                    3 === i.nodeType ? i.nextSibling ? (a.moveToElementText(i.nextSibling),
                                        o.setEndPoint("StartToStart", a)) : (a.moveToElementText(i.parentNode),
                                            o.setEndPoint("StartToEnd", a)) : (o.moveToElementText(i),
                                                o.setEndPoint("StartToEnd", a))) : o.moveToElementText(e);
                            return 3 === n.nodeType ? (n.previousSibling ? (a.moveToElementText(n.previousSibling),
                                o.setEndPoint("EndToEnd", a)) : (a.moveToElementText(n.parentNode),
                                    o.setEndPoint("EndToStart", a)),
                                o.moveEnd("character", r)) : (i = n.childNodes[r - 1],
                                    r ? 3 === i.nodeType ? i.nextSibling ? (a.moveToElementText(i.nextSibling),
                                        o.setEndPoint("EndToStart", a)) : (a.moveToElementText(i.parentNode),
                                            o.setEndPoint("EndToEnd", a)) : (a.moveToElementText(i),
                                                o.setEndPoint("EndToEnd", a)) : (a.moveToElementText(n),
                                                    o.setEndPoint("EndToStart", a))),
                                o
                        }
                    }
            }
                .call(t, n(3))
    },
    765: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.util = r.a.util || {},
            r.a.util.events = {
                on: function (e, t) {
                    this._eventerHandlers || (this._eventerHandlers = {}),
                        this._eventerHandlers[e] || (this._eventerHandlers[e] = []),
                        this._eventerHandlers[e].push(t)
                },
                off: function (e, t) {
                    var n, r, i, o, a = [], s = this._eventerHandlers, c = e + ".";
                    if (this._eventerHandlers)
                        for (i in s)
                            if (o = i.split(".")[1],
                                o && (o = "." + o),
                                i === e || 0 === i.indexOf(c) || "." === e[0] && o === e)
                                if ("function" == typeof t)
                                    for (a = s[i],
                                        r = a.length,
                                        n = 0; n < r; n++)
                                        a[n] === t && (a.splice(n, 1),
                                            n -= 1,
                                            r -= 1);
                                else
                                    delete s[i]
                },
                trigger: function (e, t) {
                    var n, r = [], i = this._eventerHandlers, o = e + ".";
                    if (this._eventerHandlers) {
                        t = t || [];
                        for (n in i)
                            n !== e && 0 !== n.indexOf(o) || Array.prototype.push.apply(r, i[n]);
                        setTimeout(function () {
                            for (var e = 0; e < r.length; e++)
                                r[e].apply(this, t)
                        }, 0)
                    }
                }
            }
    },
    766: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.util = r.a.util || {},
            r.a.util.func = {
                everyNth: function (e, t) {
                    var n = 0;
                    return t <= 0 ? e : function () {
                        (n += 1) % t == 0 && e()
                    }
                }
            }
    },
    767: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.Balloon = function () {
                        function n(t) {
                            var n, r, i;
                            t = t || {},
                                n = document.createElement("div"),
                                n.className = "rdr-balloon",
                                t.width && (e.isNumeric(t.width) ? n.style.width = t.width + "px" : n.style.width = t.width),
                                r = document.createElement("div"),
                                r.className = "rdr-balloon-content",
                                n.appendChild(r),
                                i = document.createElement("div"),
                                n.appendChild(i),
                                t.html && (r.innerHTML = t.html),
                                document.body.appendChild(n),
                                this.targetRect = t.targetRect,
                                this.el = n,
                                this.elContent = r,
                                this.elArrow = i,
                                this.isShown = !1
                        }
                        return n.prototype = {
                            constructor: r.a.view.Balloon,
                            onDocKeydown: function (e) {
                                27 === e.which && this.onButtonCancel()
                            },
                            onSysResize: function () {
                                this.onButtonCancel()
                            },
                            fixTouchScroll: function () {
                                var e = 0;
                                this.elContent.addEventListener("touchstart", function (t) {
                                    e = this.scrollTop + t.touches[0].pageY
                                }, !1),
                                    this.elContent.addEventListener("touchmove", function (t) {
                                        this.scrollTop = e - t.touches[0].pageY
                                    }, !1)
                            },
                            onMaskClick: function () {
                                this.onButtonCancel()
                            },
                            getContentEl: function () {
                                return this.elContent
                            },
                            close: function () {
                                e(this.el).remove(),
                                    r.a.view.mask.off("click"),
                                    r.a.view.mask.hide(),
                                    r.a.sys.off("resize.balloon"),
                                    e(document).off(".balloon")
                            },
                            open: function () {
                                r.a.view.mask.show({
                                    blur: !0
                                }),
                                    r.a.view.mask.on("click", t.bind(this.onMaskClick, this)),
                                    e(document).on("keydown.balloon", t.bind(this.onDocKeydown, this)),
                                    r.a.sys.on("resize.balloon", t.bind(this.onSysResize, this)),
                                    this.setFontSize(),
                                    this.setPosition(),
                                    this.isShown = !0,
                                    r.a.sys.isTouch && navigator.userAgent && -1 !== navigator.userAgent.indexOf("Android 2.") && -1 === navigator.userAgent.indexOf("Opera") && this.fixTouchScroll(),
                                    (r.a.sys.isIE9mobile || r.a.sys.isMsPointer) && e(this.elContent).click(function () { })
                            },
                            onButtonCancel: function () {
                                this.trigger("cancel")
                            },
                            setFontSize: function () {
                                this.el.style.fontSize = 6 + (parseInt(r.a.settings.fontSize, 10) >> 1) + "px"
                            },
                            setPosition: function () {
                                var e, t, n, i, o, a = r.a.sys.getHeight(), s = r.a.sys.getWidth(), c = this.el.clientWidth, l = this.elContent.clientWidth;
                                this.el.style.width = c > s - 10 ? s - (c - l) - 10 + "px" : l + 1 + "px",
                                    c = this.el.clientWidth,
                                    e = this.el.clientHeight,
                                    t = this.elContent.clientHeight,
                                    this.targetRect.top > a - this.targetRect.bottom ? (this.elContent.style.maxHeight = this.targetRect.top - (e - t) - 10 - 5 + "px",
                                        e = this.el.clientHeight,
                                        n = this.targetRect.top - e - 10,
                                        this.elArrow.className = "rdr-balloon-arrow rdr-balloon-arrow_b") : (this.elContent.style.maxHeight = a - this.targetRect.bottom - (e - t) - 10 - 5 + "px",
                                            n = this.targetRect.bottom + 10,
                                            this.elArrow.className = "rdr-balloon-arrow rdr-balloon-arrow_t"),
                                    o = this.targetRect.left + this.targetRect.width / 2 - c / 2,
                                    o < 0 && (i = Math.abs(o) + 5,
                                        o = 5,
                                        this.elArrow.style.marginLeft = -(i + 10) + "px"),
                                    o + c > s && (i = o + c - s + 5,
                                        o -= i,
                                        this.elArrow.style.marginLeft = i - 10 + "px"),
                                    this.el.style.top = n + "px",
                                    this.el.style.left = o + "px"
                            }
                        },
                            t.extend(n.prototype, r.a.util.events),
                            n
                    }()
            }
                .call(t, n(0), n(3))
    },
    768: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.view = t.a.view || {},
                    t.a.view.Column = function () {
                        function n(e) {
                            var t, n, r;
                            t = document.createElement("div"),
                                t.className = "rdr-col",
                                n = document.createElement("div"),
                                n.className = "rdr-col-content",
                                r = document.createElement("div"),
                                r.className = "rdr-col-citation",
                                t.appendChild(r),
                                t.appendChild(n),
                                e.appendChild(t),
                                this.el = t,
                                this.elContent = n,
                                this.elCitation = r
                        }
                        var r = "rdr-col-citation-highlight";
                        return n.prototype = {
                            constructor: t.a.view.Column,
                            setHtml: function (n) {
                                this.elCitation.innerHTML = "",
                                    e.isString(n) ? (this.elContent.innerHTML = n,
                                        t.a.isIE8 && this._preProcDom8()) : (this.el.replaceChild(n, this.elContent),
                                            this.elContent = n)
                            },
                            _preProcDom8: function () {
                                function t(e) {
                                    var n, r;
                                    if (3 === e.nodeType)
                                        e.data = e.data.replace(/\u200B/g, " ");
                                    else if (1 === e.nodeType)
                                        for (n = 0,
                                            r = e.childNodes.length; n < r; n += 1)
                                            t(e.childNodes[n])
                                }
                                var n, r = this.elContent, i = e.toArray(r.getElementsByTagName("!")), o = i.length;
                                for (r.firstChild && "etn" === r.firstChild.data && r.firstChild.replaceNode(document.createTextNode(" ")),
                                    n = 0; n < o; n += 1)
                                    (i[n].data = "etn") && i[n].replaceNode(document.createTextNode(" "));
                                t(r)
                            },
                            setLayout: function (e, t) {
                                this.el.style.left = e,
                                    this.el.style.width = t
                            },
                            hide: function () {
                                this._lastStyleLeft = this.el.style.left,
                                    this.el.style.left = "-9999px"
                            },
                            show: function () {
                                this._lastStyleLeft ? this.el.style.left = this._lastStyleLeft : this.el.style.left = 0
                            },
                            showPage: function (e, t) {
                                this.elContent.style.top = -e + "px",
                                    this.el.style.height = t - e + "px",
                                    this.el.scrollTop = 0,
                                    this.elCitation.style.top = -e + "px",
                                    this.elCitation.style.height = t + "px"
                            },
                            showSelection: function (e) {
                                var t, n;
                                for (this.el.scrollTop = 0,
                                    t = 0; t < e.length; t += 1)
                                    n = document.createElement("div"),
                                        n.className = "rdr-col-citation-highlight rdr-col-citation-highlight_selection",
                                        n.style.left = e[t].left + "px",
                                        n.style.top = e[t].top + "px",
                                        n.style.width = e[t].width + "px",
                                        n.style.height = e[t].height + "px",
                                        this.elCitation.appendChild(n)
                            },
                            hideSelection: function () {
                                var e, t = this.elCitation, n = t.querySelectorAll(".rdr-col-citation-highlight_selection");
                                for (e = 0; e < n.length; e += 1)
                                    t.removeChild(n[e])
                            },
                            clearCitations: function () {
                                this.elCitation.innerHTML = ""
                            },
                            indicateCitation: function (e, t, n) {
                                var i, o, a = r;
                                for (t ? n && (a += " rdr-col-citation-highlight_comment") : a += " rdr-col-citation-highlight_active",
                                    i = 0; i < e.length; i += 1)
                                    o = document.createElement("div"),
                                        o.className = a,
                                        o.style.left = e[i].left + "px",
                                        o.style.top = e[i].top + "px",
                                        o.style.width = e[i].width + "px",
                                        o.style.height = e[i].height + "px",
                                        o.setAttribute("data-citation-id", t),
                                        this.elCitation.appendChild(o)
                            },
                            getRootContent: function () {
                                return this.elContent
                            }
                        },
                            n
                    }()
            }
                .call(t, n(3))
    },
    769: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.Dialog = function () {
                        function n(n) {
                            var r, i, o, a, s;
                            if (n = n || {},
                                r = document.createElement("div"),
                                n.cls ? r.className = "rdr-dialog " + n.cls : r.className = "rdr-dialog",
                                n.width && (e.isNumeric(n.width) ? r.style.width = n.width + "px" : r.style.width = n.width),
                                n.title && (i = document.createElement("div"),
                                    i.className = "rdr-dialog-title",
                                    i.innerHTML = n.title,
                                    r.appendChild(i),
                                    this.elTitle = i),
                                a = document.createElement("div"),
                                a.className = "rdr-dialog-content",
                                r.appendChild(a),
                                s = document.createElement("div"),
                                s.className = "rdr-dialog-close",
                                s.innerHTML = "&times;",
                                s.title = "закрыть",
                                r.appendChild(s),
                                n.buttons) {
                                i = document.createElement("div"),
                                    i.className = "rdr-dialog-buttons";
                                for (var c = 0; c < n.buttons.length; c += 1)
                                    o = document.createElement("button"),
                                        o.innerHTML = n.buttons[c].text,
                                        o.className = n.buttons[c].cls || "",
                                        i.appendChild(o),
                                        "ok" === n.buttons[c].type && (this.buttonOk = o);
                                r.appendChild(i)
                            }
                            n.html && (a.innerHTML = n.html),
                                document.body.appendChild(r),
                                this.el = r,
                                this.elClose = s,
                                this.elContent = a,
                                this.isShown = !1,
                                n.clsActiveItem && (this.clsActiveItem = n.clsActiveItem),
                                e(s).click(t.bind(this.onButtonCancel, this)),
                                e(this.buttonOk).click(t.bind(this.onButtonOk, this)),
                                e(this.elTitle).mousedown(t.bind(this.onTitleMouseDown, this))
                        }
                        return n.prototype = {
                            constructor: r.a.view.Dialog,
                            onDocKeydown: function (e) {
                                27 === e.which && this.onButtonCancel()
                            },
                            onSysResize: function () {
                                this.setPosition()
                            },
                            onTitleMouseDown: function (t) {
                                var n, i, o = this.el, a = e(o), s = this.elTitle, c = t.pageX - a.offset().left, l = t.pageY - a.offset().top;
                                return e(s).addClass("mousedown"),
                                    e(document).on("mousemove.dialogTitle", function (e) {
                                        var t = r.a.sys.getWidth()
                                            , a = r.a.sys.getHeight();
                                        return n = e.pageX,
                                            i = e.pageY,
                                            n < 0 && (n = 0),
                                            i < 0 && (i = 0),
                                            n > t && (n = t),
                                            i > a && (i = a),
                                            o.style.left = n - c + "px",
                                            o.style.top = i - l + "px",
                                            !1
                                    }),
                                    e(document).on("mouseup.dialogTitle", function (t) {
                                        return e(document).off(".dialogTitle"),
                                            e(s).removeClass("mousedown"),
                                            !1
                                    }),
                                    !1
                            },
                            fixTouchScroll: function () {
                                var e = 0;
                                this.elContent.addEventListener("touchstart", function (t) {
                                    e = this.scrollTop + t.touches[0].pageY
                                }, !1),
                                    this.elContent.addEventListener("touchmove", function (t) {
                                        this.scrollTop = e - t.touches[0].pageY
                                    }, !1)
                            },
                            setContent: function (e) {
                                t.isString(e) ? this.elContent.innerHTML = e : this.elContent.appendChild(e)
                            },
                            onMaskClick: function () {
                                this.onButtonCancel()
                            },
                            getContentEl: function () {
                                return this.elContent
                            },
                            close: function () {
                                e(this.el).remove(),
                                    r.a.view.mask.off("click"),
                                    r.a.view.mask.hide(),
                                    r.a.sys.off("resize.dialog"),
                                    e(document).off(".dialog")
                            },
                            open: function () {
                                r.a.view.mask.show({
                                    blur: !0
                                }),
                                    r.a.view.mask.on("click", t.bind(this.onMaskClick, this)),
                                    e(document).on("keydown.dialog", t.bind(this.onDocKeydown, this)),
                                    r.a.sys.on("resize.dialog", t.bind(this.onSysResize, this)),
                                    this.setPosition(),
                                    this.clsActiveItem && this.setScrollPosition(),
                                    this.isShown = !0,
                                    r.a.sys.isTouch && navigator.userAgent && -1 !== navigator.userAgent.indexOf("Android 2.") && -1 === navigator.userAgent.indexOf("Opera") && this.fixTouchScroll()
                            },
                            onButtonOk: function () {
                                this.trigger("ok")
                            },
                            onButtonCancel: function () {
                                this.trigger("cancel")
                            },
                            setScrollPosition: function () {
                                var t, n, i, o = this.elContent.clientHeight;
                                this.clsActiveItem && this.elContent.scrollHeight > o + 1 && (t = this.elContent.querySelector("." + this.clsActiveItem)) && (n = r.a.util.client.getBoundingClientRectOn(t, this.elContent),
                                    (i = n.top - (o >> 1)) > 0 && e(this.elContent).animate({
                                        scrollTop: i
                                    }, 200))
                            },
                            setPosition: function () {
                                var e, t, n = r.a.sys.getHeight(), i = r.a.sys.getWidth(), o = this.el.clientHeight, a = this.el.clientWidth, s = this.elContent.clientHeight, c = this.elContent.clientWidth;
                                this.elContent.style.maxHeight = n - (o - s) - 4 + "px",
                                    t = (i - a) / 2,
                                    t < 0 && (t = 0,
                                        this.el.style.width = i - (a - c) - 4 + "px"),
                                    o = this.el.clientHeight,
                                    e = (n - o) / 2,
                                    e < 0 && (e = 0),
                                    this.el.style.top = e + "px",
                                    this.el.style.left = t + "px"
                            }
                        },
                            t.extend(n.prototype, r.a.util.events),
                            n
                    }()
            }
                .call(t, n(0), n(3))
    },
    770: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.view = t.a.view || {},
                    t.a.view.autobookmark = function () {
                        function n(e) {
                            a = document.createElement("div"),
                                a.className = l,
                                a.title = u,
                                a.innerHTML = "<div></div>",
                                e.appendChild(a),
                                a.addEventListener ? a.addEventListener("click", r, !1) : a.attachEvent("onclick", r)
                        }
                        function r() {
                            s.trigger("goBookmark")
                        }
                        function i() {
                            a.className = c
                        }
                        function o() {
                            a.className = l
                        }
                        var a, s, c = "rdr-autobookmark", l = c + " inactive", u = "Вернуться";
                        return s = {
                            init: n,
                            show: i,
                            hide: o
                        },
                            e.extend(s, t.a.util.events),
                            s
                    }()
            }
                .call(t, n(3))
    },
    771: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.bigimg = function () {
                        function n() {
                            d = document.createElement("div"),
                                d.className = w,
                                p = document.createElement("img"),
                                h = document.createElement("div"),
                                h.className = x,
                                h.innerHTML = k,
                                p.title = "Скрыть изображение",
                                d.appendChild(p),
                                document.body.appendChild(d),
                                document.body.appendChild(h),
                                t([d, h]).on("click", function (e) {
                                    this === e.target && o()
                                }),
                                t(p).on("click", i)
                        }
                        function i() {
                            var e = navigator.userAgent || "";
                            if (e.indexOf("Android") > 0 && (e.indexOf("Android 2.") > 0 || e.indexOf("YaBrowser") > 0))
                                return void o();
                            y < .9 ? c(1) : y < 1.4 ? c(1.5) : y < 1.8 ? c(2) : o(),
                                p && 2 === y && (p.title = "",
                                    p.className = "rdr-cursor-zoom-out")
                        }
                        function o() {
                            t(document).off(".bigimg"),
                                t([p, h, d]).remove(),
                                d = p = h = null,
                                g.isShown = !1
                        }
                        function a(e) {
                            27 === e.which && o()
                        }
                        function s(e) {
                            var t = r.a.sys.getWidth()
                                , n = r.a.sys.getHeight()
                                , i = 1
                                , o = 1
                                , a = v * e
                                , s = m * e
                                , c = p.style;
                            a > t && (i = t / a),
                                s > n && (o = n / s),
                                o < i ? (a *= o,
                                    s *= o) : i < o && (a *= i,
                                        s *= i),
                                c.width = a + b,
                                c.height = s + b,
                                c.left = (t - a >> 1) + b,
                                c.top = (n - s >> 1) + b,
                                y = a / v,
                                l()
                        }
                        function c(e) {
                            var t = r.a.sys.getWidth()
                                , n = r.a.sys.getHeight()
                                , i = v * e
                                , o = m * e
                                , a = p.style;
                            a.width = i + b,
                                a.height = o + b,
                                a.left = i > t ? 0 : (t - i >> 1) + b,
                                a.top = o > n ? 0 : (n - o >> 1) + b,
                                y = e,
                                l()
                        }
                        function l() {
                            h && (h.innerHTML = y.toFixed(1) + " " + k,
                                S())
                        }
                        function u() {
                            h && (h.innerHTML = k)
                        }
                        function f(e) {
                            var i, o = r.a.util.client.getBoundingClientRectOn(e, document.body);
                            d || n(),
                                e.naturalWidth ? (v = e.naturalWidth,
                                    m = e.naturalHeight) : (i = new Image,
                                        i.src = e.src,
                                        v = i.width,
                                        m = i.height),
                                p.src = e.src,
                                o && (p.style.left = o.left + b,
                                    p.style.top = o.top + b,
                                    p.style.width = o.width + b,
                                    p.style.height = o.height + b,
                                    p.clientWidth),
                                s(2),
                                y < 1.8 ? (p.className = "rdr-cursor-zoom-in",
                                    p.title = "Увеличить еще") : p.className = "rdr-cursor-zoom-out",
                                t(document).on("keydown.bigimg", a),
                                g.isShown = !0
                        }
                        var d, p, h, g, v, m, y, b = "px", w = "rdr-bigimg", x = w + "-close", k = "&times;", S = e.debounce(u, 700);
                        return g = {
                            isShown: !1,
                            show: f,
                            hide: o
                        }
                    }()
            }
                .call(t, n(3), n(0))
    },
    772: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.bookBtn = function () {
                        function n(t) {
                            i = document.createElement("div"),
                                i.className = "rdr-bookBtn",
                                i.title = "На страницу книги",
                                i.innerHTML = '&lsaquo;<div><svg viewBox="0 0 224 224"><path d="m103.17664,173.51624l0,33.59375c0,12.99501 19.16626,12.62875 19.16626,0l0,-33.59375c0,0 24.90247,-28.76999 33.20623,-38.59126c8.30499,-9.81997 -6.14374,-22.01624 -13.99248,-13.07626c-7.84875,8.93876 -28.53625,32.50126 -28.53625,32.50126c0,0 -19.125,-22.66998 -27.46625,-32.12997c-8.34126,-9.45877 -22.21752,3.20123 -14.59003,12.40997c7.62878,9.20877 32.21253,38.88626 32.21253,38.88626"/><path d="m40.26038,167.5256c0,12.345 19.16626,12.26497 19.16626,0l0,-96.145c0,-4.8875 3.77625,-6.54375 7.89502,-2.0625c4.12,4.48126 30.86871,33.785 35.85498,39.26625c6.14624,6.755 13.14496,6.82373 19.16626,0.80124c4.90625,-4.90625 31.34747,-34.79999 35.65125,-39.71123c4.30249,-4.91252 8.19751,-3.13751 8.18622,1.75124c-0.04999,22.72623 -0.19,85.32251 -0.19,95.9375c0,12.89749 19.16626,12.42749 19.16626,0.16251l0,-113.27989c0,-13.95875 -20.71625,-21.17626 -32.44751,-7.96875c-11.73126,13.20748 -39.21997,44.19876 -39.21997,44.19876c0,0 -27.9325,-31.69876 -39.1225,-44.19876c-11.19,-12.5 -34.10626,-7.03125 -34.10626,9.21875l0,112.02989z"/><path d="m191.78375,0l-159.28375,0c-17.95001,0 -32.5,14.55124 -32.5,32.5l0,159.43375c0,17.94876 14.54999,32.5 32.5,32.5l42.13501,0c13.125,0 13.33246,-19.125 0,-19.125l-42.13501,0c-7.375,0 -13.375,-6 -13.375,-13.375l0,-159.43375c0,-7.375 6,-13.375 13.375,-13.375l159.28375,0c7.375,0 13.375,6 13.375,13.375l0,159.43375c0,7.375 -6,13.375 -13.375,13.375l-40.42999,0c-12.96875,0 -12.86505,19.125 0,19.125l40.42999,0c17.94873,0 32.5,-14.55124 32.5,-32.5l0,-159.43375c0,-17.94876 -14.55127,-32.5 -32.5,-32.5"/></svg></div>',
                                t.appendChild(i),
                                e(i).on("click", function (e) {
                                    o.trigger("click")
                                })

                        }
                        var i, o;
                        return o = {
                            init: n
                        },
                            t.extend(o, r.a.util.events),
                            o
                    }()
                    
            }
                .call(t, n(0), n(3))
    },
    773: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.bookmarks = r.a.view.bookmarks || {},
                    r.a.view.bookmarks.bar = function () {
                        function n(t) {
                            o = document.createElement("div"),
                                o.className = s,
                                t.appendChild(o),
                                e(o).on("click", function (e) {
                                    var t = e.target
                                        , n = +t.getAttribute("data-id");
                                    "SPAN" === t.nodeName && n && (t.className === c ? confirm(u + "?") && a.trigger("del", [n]) : a.trigger("go", [n]))
                                })
                        }
                        function i(e, n, i) {
                            var a, s, f = "";
                            for (a = 0; a < e.length; a += 1)
                                s = " (раздел " + r.a.data.epub.getSectionIndexByPartId(e[a].part) + " из " + i + "): " + e[a].prevHeaderText + " - " + e[a].textPiece,
                                    f += '<span data-id="' + e[a].id + '" title="',
                                    t.any(n, function (t) {
                                        return t.id === e[a].id
                                    }) ? (f += u + '"',
                                        f += ' class="' + c + '"') : f += l + s + '"',
                                    f += "></span>";
                            o.innerHTML = f
                        }
                        var o, a, s = "rdr-bookmarks", c = "rdr-bookmarks-active", l = "Закладка", u = "Удалить закладку";
                        return a = {
                            init: n,
                            update: i
                        },
                            t.extend(a, r.a.util.events),
                            a
                    }()
            }
                .call(t, n(0), n(3))
    },
    774: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.bookmarks = r.a.view.bookmarks || {},
                    r.a.view.bookmarks.btn = function () {
                        function n(t) {
                            s = document.createElement("div"),
                                s.className = u,
                                s.title = p,
                                t.appendChild(s),
                                e(s).on("click", function () {
                                    l ? confirm("Удалить закладку?") && (i(),
                                        c.trigger("del")) : c.trigger("add")
                                })
                        }
                        function i() {
                            s.className = u,
                                s.title = p,
                                l = !1
                        }
                        function o() {
                            s.className = f,
                                s.title = h,
                                l = !0
                        }
                        function a() {
                            s.className = d
                        }
                        var s, c, l = !1, u = "rdr-bookmark", f = u + " rdr-bookmark_active", d = u + " rdr-bookmark_hide", p = "Добавить закладку", h = "Удалить закладку";
                        return c = {
                            init: n,
                            setActive: o,
                            setInactive: i,
                            hide: a
                        },
                            t.extend(c, r.a.util.events),
                            c
                    }()
            }
                .call(t, n(0), n(3))
    },
    775: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.bookmarks = r.a.view.bookmarks || {},
                    r.a.view.bookmarks.listBtn = function () {
                        function n(t) {
                            s = document.createElement("div"),
                                s.className = u,
                                s.title = d,
                                s.innerHTML = "&equiv;",
                                t.appendChild(s),
                                c = e(s),
                                i(),
                                c.on("click", function (e) {
                                    l.trigger("click")
                                })
                        }
                        function i() {
                            c.addClass(f),
                                s.title = d
                        }
                        function o(e) {
                            c.removeClass(f),
                                s.title = d + ": " + e
                        }
                        function a(e) {
                            e ? o(e) : i()
                        }
                        var s, c, l, u = "rdr-bookmarks-listBtn", f = "inactive", d = "Мои закладки";
                        return l = {
                            init: n,
                            update: a
                        },
                            t.extend(l, r.a.util.events),
                            l
                    }()
            }
                .call(t, n(0), n(3))
    },
    776: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.citationAddBtn = function () {
                        function n(t) {
                            t = t || document.body,
                                c = document.createElement("div"),
                                c.className = h,
                                c.style.display = "none",
                                c.title = "Создать цитату из выделения",
                                c.innerHTML = "Создать цитату",
                                l = document.createElement("div"),
                                c.appendChild(l),
                                t.appendChild(c),
                                u = e(c),
                                u.on("click", function (e) {
                                    return p.trigger("click"),
                                        !1
                                })
                        }
                        function i() {
                            g || (c.style.display = "none",
                                g = !0)
                        }
                        function o(e, t, n) {
                            c.firstChild.data = t || "&nbsp;",
                                c.title = n || "",
                                g && (a(),
                                    c.style.display = "block",
                                    g = !1),
                                f === e.left && d === e.top || (f = e.left,
                                    d = e.top,
                                    s(e))
                        }
                        function a() {
                            c.style.fontSize = 6 + (parseInt(r.a.settings.fontSize, 10) >> 1) + "px"
                        }
                        function s(e) {
                            var t, n = r.a.sys.getHeight(), i = r.a.sys.getWidth(), o = c.clientHeight + 2, a = c.clientWidth + 2, s = 0;
                            0 === e.bottom && 0 === e.left && (e.left = i - a,
                                e.bottom = n - o - 20 - 5),
                                e.left + a > i && (s = e.left + a - i),
                                n - e.bottom > o + 20 ? (l.className = h + "-arrow " + h + "-arrow_t",
                                    t = e.bottom + 20) : (l.className = h + "-arrow " + h + "-arrow_b",
                                        t = e.top - o - 20),
                                c.style.left = e.left - s - 5 + "px",
                                c.style.top = t + "px",
                                l.style.left = 20 + s + "px"
                        }
                        var c, l, u, f, d, p, h = "rdr-citationAddBtn", g = !0;
                        return p = {
                            init: n,
                            show: o,
                            hide: i
                        },
                            t.extend(p, r.a.util.events),
                            p
                    }()
            }
                .call(t, n(0), n(3))
    },
    777: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.citationsBtn = function () {
                        function n(t) {
                            s = document.createElement("div"),
                                s.className = u,
                                s.title = f,
                                s.innerHTML = "<b>&laquo;</b><b>&raquo;</b>",
                                t.appendChild(s),
                                c = e(s),
                                i(),
                                c.on("click", function (e) {
                                    l.trigger("click")
                                })
                        }
                        function i() {
                            s.title = f
                        }
                        function o(e) {
                            s.title = f + ": " + e
                        }
                        function a(e) {
                            e ? o(e) : i()
                        }
                        var s, c, l, u = "rdr-citationsBtn", f = "Мои цитаты";
                        return l = {
                            init: n,
                            update: a
                        },
                            t.extend(l, r.a.util.events),
                            l
                    }()
            }
                .call(t, n(0), n(3))
    },
    778: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.content = function () {
                        function n() {
                            var t = document.head || document.getElementsByTagName("head")[0];
                            return I = document.createElement("div"),
                                I.className = "rdr-content",
                                document.body.appendChild(I),
                                r.a.view.content.pagingEffect.init(I),
                                m(),
                                X = I.clientHeight,
                                U = document.createElement("style"),
                                t.appendChild(U),
                                y(),
                                b(),
                                e(document.body).on("click", ".rdr-col-content img", function (e) {
                                    e.stopPropagation(),
                                        L.trigger("clickImg", [this])
                                }).on("click", '.rdr-col-content a[href]:not([href^="http:"])', function (t) {
                                    var n = e(this).attr("href");
                                    n && n.indexOf("%") > -1 && (n = decodeURI(n)),
                                        t.preventDefault(),
                                        t.stopPropagation(),
                                        L.trigger("clickHref", [n, i(this)])
                                }).on("click", ".rdr-col-content", function (e) {
                                    var t = o(e.clientX, e.clientY);
                                    t && (e.stopPropagation(),
                                        L.trigger("citation", [t, e.clientX, e.clientY]))
                                }).on("copy", function () {
                                    return !1
                                }),
                                I
                        }
                        function i(e) {
                            return e.children && e.children.length ? r.a.util.client.getBoundingClientRectOn(e.children[0], document.body) : r.a.util.client.getBoundingClientRectOn(e, document.body)
                        }
                        function o(e, t) {
                            var n, r, i = I.querySelectorAll(".rdr-col-citation-highlight");
                            for (n = 0; n < i.length; n += 1)
                                if (r = i[n].getBoundingClientRect(),
                                    t < r.bottom && t > r.top && e > r.left && e < r.right)
                                    return +i[n].getAttribute("data-citation-id") || !0
                        }
                        function a(e) {
                            for (; e.startOffset === e.startContainer.childNodes.length;)
                                e.setStartAfter(e.startContainer);
                            var t = e.startContainer.childNodes[e.startOffset];
                            return t && 3 === t.nodeType && /^\s*$/.test(t.data) && e.setStartAfter(t),
                                e
                        }
                        function s(e) {
                            for (; 0 === e.endOffset;)
                                e.setEndBefore(e.endContainer);
                            var t = e.endContainer.childNodes[e.endOffset - 1];
                            return t && 3 === t.nodeType && /^\s*$/.test(t.data) && e.setEndBefore(t),
                                e
                        }
                        function c(e) {
                            var t, n, r, i, o, c = /[\s,:]/, l = /[^\s,:]/;
                            if (t = e.startContainer,
                                3 === t.nodeType) {
                                if (n = e.startOffset,
                                    i = t.data,
                                    n > 0 && n < i.length && l.test(i[n])) {
                                    for (o = n,
                                        r = 0; o > 0; o -= 1)
                                        if (c.test(i[o - 1])) {
                                            r = o;
                                            break
                                        }
                                    r !== n && e.setStart(t, r)
                                }
                                if (n > 0 && n < i.length && c.test(i[n])) {
                                    for (o = n + 1,
                                        r = void 0; o < i.length; o += 1)
                                        if (l.test(i[o])) {
                                            r = o;
                                            break
                                        }
                                    r ? e.setStart(t, r) : (e.setStartAfter(t),
                                        e = a(e))
                                }
                                n === i.length && (e.setStartAfter(t),
                                    e = a(e))
                            }
                            if (e = s(e),
                                t = e.endContainer,
                                3 === t.nodeType) {
                                if (n = e.endOffset,
                                    i = t.data,
                                    n > 0 && n < i.length && l.test(i[n - 1])) {
                                    for (o = n,
                                        r = i.length; o < i.length; o += 1)
                                        if (c.test(i[o])) {
                                            r = o;
                                            break
                                        }
                                    e.setEnd(t, r)
                                }
                                if (n > 0 && n < i.length && c.test(i[n - 1])) {
                                    for (o = n - 2,
                                        r = void 0; o >= 0; o -= 1)
                                        if (i[o] && l.test(i[o])) {
                                            r = o + 1;
                                            break
                                        }
                                    r ? e.setEnd(t, r) : (e.setEndBefore(t),
                                        e = s(e))
                                }
                            }
                            return e
                        }
                        function l(t, n) {
                            var i, o, a, s, l, f, d, p, h, g;
                            if (window.getSelection) {
                                if (t = c(t),
                                    o = t.startContainer,
                                    a = t.endContainer,
                                    s = e(o).closest(".rdr-col-content"),
                                    l = e(a).closest(".rdr-col-content"),
                                    !s.length || !l.length)
                                    return;
                                f = n ? n.citation.start_offset : t.startOffset,
                                    d = t.endOffset,
                                    p = n ? n.citation.start_xpath : r.a.util.client.getXPathByNode(o, s[0]),
                                    h = r.a.util.client.getXPathByNode(a, l[0]),
                                    g = document.createRange ? document.createRange() : null,
                                    g.setStart(r.a.util.client.getNodeByXPath(p, q), f),
                                    g.setEnd(r.a.util.client.getNodeByXPath(h, q), d),
                                    i = r.a.util.client.rangeToString(g),
                                    g && g.detach()
                            } else {
                                i = t.text;
                                var v = t.duplicate();
                                t.collapse(!0),
                                    t.pasteHTML('<span id="rdrSelectionStart"></span>'),
                                    v.collapse(!1),
                                    v.pasteHTML('<span id="rdrSelectionEnd"></span>');
                                var m = u("rdrSelectionStart");
                                if (o = m.cont,
                                    f = n ? n.citation.start_offset : m.offset,
                                    m = u("rdrSelectionEnd"),
                                    a = m.cont,
                                    d = m.offset,
                                    s = e(o).closest(".rdr-col-content"),
                                    l = e(a).closest(".rdr-col-content"),
                                    !s.length || !l.length)
                                    return;
                                p = n ? n.citation.start_xpath : r.a.util.client.getXPathByNode(o, s[0]),
                                    h = r.a.util.client.getXPathByNode(a, l[0]),
                                    g = r.a.util.client.createTextRange8(r.a.util.client.getNodeByXPath(p, q), f, r.a.util.client.getNodeByXPath(h, q), d),
                                    i = r.a.util.client.rangeToString8(g)
                            }
                            return L.trigger("selection", [{
                                startXpath: p,
                                startOffset: f,
                                endXpath: h,
                                endOffset: d,
                                text: i
                            }]),
                                !0
                        }
                        function u(e) {
                            var t = document.getElementById(e)
                                , n = t.parentNode
                                , r = 0
                                , i = n
                                , o = t.previousSibling
                                , a = t.nextSibling;
                            return t.removeNode(),
                                o && 3 === o.nodeType ? (o.previousSibling && 3 === o.previousSibling.nodeType && (o.data += o.previousSibling.data + o.data,
                                    o.previousSibling.removeNode()),
                                    i = o,
                                    r = o.data.length) : a && (i = a),
                                o && 3 === o.nodeType && a && 3 === a.nodeType && (o.data += a.data,
                                    a.removeNode()),
                                {
                                    cont: i,
                                    offset: r
                                }
                        }
                        function f(e) {
                            var t, n, i, o = e.citation;
                            return t = r.a.util.client.getNodeByXPath(o.start_xpath, q),
                                n = r.a.util.client.getNodeByXPath(o.end_xpath, q),
                                r.a.isIE8 ? i = r.a.util.client.createTextRange8(t, o.start_offset, n, o.end_offset) : (i = document.createRange(),
                                    i.setStart(t, o.start_offset),
                                    i.setEnd(n, o.end_offset)),
                                r.a.util.client.getClientRectsOn(i, q)
                        }
                        function d(e, t) {
                            var n, i;
                            if (!t)
                                if (r.a.isIE8)
                                    ;
                                else
                                    try {
                                        window.getSelection().removeAllRanges()
                                    } catch (e) { }
                            for (i = f(e),
                                n = 0; n < F; n += 1)
                                $[n].showSelection(i)
                        }
                        function p() {
                            var e;
                            for (e = 0; e < F; e += 1)
                                $[e].hideSelection()
                        }
                        function h() {
                            var e;
                            for (e = 0; e < F; e += 1)
                                $[e].clearCitations()
                        }
                        function g(e) {
                            var t, n;
                            for (n = f(e),
                                t = 0; t < F; t += 1)
                                $[t].indicateCitation(n, e.id, !!e.comment)
                        }
                        function v(e, t) {
                            var n, i = parseInt(r.a.settings.fontSize, 10) / 2;
                            for (n = 3; n > 1; n -= 1)
                                if ((e - t * (n - 1)) / n / i > 50)
                                    return n;
                            return 1
                        }
                        function m() {
                            var e, t = I.clientWidth, n = r.a.settings, i = n.screenPadding || (r.a.sys.isSmall() ? 4 : 7), o = Math.floor(t * i / 100), a = n.numberColumns || v(t, o), s = Math.floor((t - o * (a - 1)) / a);
                            if (a !== F) {
                                for (F = a,
                                    e = $.length; e < a; e += 1)
                                    $[e] = new r.a.view.Column(I);
                                for (e = a; e < $.length; e += 1)
                                    $[e].hide()
                            }
                            for (e = 0; e < a; e += 1)
                                $[e].setLayout((s + o) * e + "px", s + "px");
                            q = $[0].getRootContent()
                        }
                        function y() {
                            r.a.util.client.setStyleSheetRule(U, ".rdr-col-content img", "max-height: " + Math.round(.8 * X) + "px;")
                        }
                        function b() {
                            var t = r.a.settings
                                , n = e(I)
                                , i = "margin: 0 0 " + t.paragraphMargin + "em;"
                                , o = "font:" + t.fontSize + "/" + t.lineHeight + " " + t.fontFamily + ";"
                                , a = "text-align:" + t.textAlign + ";";
                            t.hyphens ? n.addClass("g-hyphens-auto") : n.removeClass("g-hyphens-auto"),
                                "left" !== t.textAlign && "justify" !== t.textAlign || 0 !== t.paragraphMargin || (i += "text-indent:" + (1.5 * parseInt(t.fontSize, 10) | 0) + "px;"),
                                r.a.util.client.setStyleSheetRule(U, ".rdr-col-content", o + a),
                                r.a.util.client.setStyleSheetRule(U, ".rdr-col-content p", i),
                                r.a.util.client.setStyleSheetRule(U, ".rdr-col-content div.paragraph", i)
                        }
                        function w() {
                            X = I.clientHeight,
                                b(),
                                m(),
                                k(),
                                y(),
                                t.delay(function () {
                                    N(),
                                        x(),
                                        L.trigger("paginationCompleted")
                                }, 100)
                        }
                        function x() {
                            var e, t = z;
                            for (t = t.replace(" id=", " data-save-id="),
                                e = 1; e < F; e += 1)
                                $[e].setHtml(t)
                        }
                        function k() {
                            var e;
                            for (e = 0; e < F; e += 1)
                                $[e].hide();
                            J = !0
                        }
                        function S() {
                            var e;
                            q.clientHeight;
                            for (e = 0; e < F; e += 1)
                                $[e].show();
                            J = !1
                        }
                        function _(e) {
                            I.clientHeight !== X && (X = I.clientHeight,
                                y(),
                                m()),
                                k(),
                                z = e,
                                $[0].setHtml(e),
                                C(q, function () {
                                    r.a.debug.time("pagination"),
                                        N(),
                                        r.a.debug.timeEnd("pagination"),
                                        x(),
                                        L.trigger("paginationCompleted")
                                }, 20)
                        }
                        function C(e, t, n) {
                            if (n <= 0 || r.a.util.client.isLoadedImagesIn(e))
                                return void t();
                            n -= 1,
                                setTimeout(function () {
                                    C(e, t, n)
                                }, 400)
                        }
                        function T(e) {
                            var t, n = (e - 1) * F + 1;
                            for (t = 0; t < F; t += 1)
                                O($[t], n + t);
                            J && S()
                        }
                        function E(e) {
                            var t, n, i, o = q;
                            if (e && (i = o.querySelector("#" + e) || o.querySelector('[name="' + e + '"]')),
                                i)
                                for (t = r.a.util.client.getBoundingClientRectOn(i, q),
                                    n = 1; n < V.length; n += 1)
                                    if (t.top < V[n].bound)
                                        return Math.ceil(n / F)
                        }
                        function O(e, t) {
                            var n = V[t] && V[t].bound
                                , r = V[t - 1] && V[t - 1].bound;
                            void 0 !== r && void 0 === n ? n = r + X : void 0 === r && void 0 === n && (r = V[V.length - 1].bound + X,
                                n = r + X),
                                e.showPage(r, n)
                        }
                        function N() {
                            function e(a) {
                                var s, c, l = t.toArray(a.childNodes);
                                for (s = 0; s < l.length; s += 1)
                                    3 === l[s].nodeType && /^\s*$/.test(l[s].data) || (3 !== l[s].nodeType ? 1 === l[s].nodeType && (l[s].hasChildNodes() ? (f.test(l[s].nodeName) && (u = l[s],
                                        n(u)),
                                        e(l[s])) : "IMG" === l[s].nodeName && (c = r.a.util.client.getBoundingClientRectOn(l[s], W),
                                            c.bottom > o && (o = P(c.top, l[s], 0, u)))) : i(l[s]))
                            }
                            function n(e) {
                                var t = r.a.util.client.getBoundingClientRectOn(e, W)
                                    , n = +e.nodeName[1];
                                if (t && o - t.top < X / (n + 2))
                                    return o = P(t.top, e, 0, u),
                                        !0
                            }
                            function i(e) {
                                for (var t, n, i, c, f, d, p, h = /\S+/g, g = r.a.settings.hyphens, v = [], m = !1; null !== (n = h.exec(e.data));)
                                    i = n.index + n[0].length,
                                        g && n[0].length > 3 ? v.push({
                                            s: n.index,
                                            e: n.index + 1
                                        }, {
                                            s: i - 1,
                                            e: i
                                        }) : v.push({
                                            s: n.index,
                                            e: i
                                        });
                                if (r.a.isIE8 ? A(a, s, e) : (a.setStart(e, v[0].s),
                                    a.setEnd(e, v[v.length - 1].e)),
                                    p = r.a.util.client.getBoundingClientRectOn(a, W),
                                    !(p.top - V[V.length - 1].bound > X / 16 && o - p.bottom > X / 16))
                                    for (t = 0; t < v.length; t += 1)
                                        if (1 === v.length ? d = p : (r.a.isIE8 ? A(a, s, e, v[t].s, v[t].e) : (a.setStart(e, v[t].s),
                                            a.setEnd(e, v[t].e)),
                                            d = r.a.util.client.getBoundingClientRectOn(a, W)),
                                            m && d.bottom > o)
                                            t = c,
                                                m = !1;
                                        else {
                                            if (d.bottom > o && (o = P(d.top, e, v[t].s, u)),
                                                f = V[V.length - 1].bound,
                                                l && l.top < f && l.bottom > f && (f = l.top,
                                                    o = P(l.top, l.node, l.index, u)),
                                                d.top < f && d.bottom > f && (f = d.top,
                                                    o = P(d.top, e, v[t].s, u)),
                                                l = {
                                                    top: d.top,
                                                    bottom: d.bottom,
                                                    node: e,
                                                    index: v[t].s
                                                },
                                                d.top > f && p.bottom < o)
                                                break;
                                            t % 10 == 0 && t + 10 < v.length && (m = !0,
                                                c = t,
                                                t += 9)
                                        }
                            }
                            var o, a, s, c, l, u, f = /^H[12345]/;
                            r.a.isIE8 ? (a = document.body.createTextRange(),
                                s = document.body.createTextRange()) : a = document.createRange(),
                                W = q.getBoundingClientRect(),
                                V = [],
                                P(0, q.children[0], 0, u),
                                o = 0,
                                e(q),
                                c = q.children[q.children.length - 1],
                                P(o > 0 ? o : 1, c, c.childNodes.length, u),
                                V.length > 2 && V.shift(),
                                r.a.isIE8 ? (a = null,
                                    s = null) : a.detach()
                        }
                        function P(e, t, n, i) {
                            if (r.a.isIE8)
                                return j(e, t, n, i);
                            n = n || 0;
                            var o, a = document.createRange(), s = {
                                bound: 0,
                                xpath: r.a.util.client.getXPathByNode(t, q),
                                xpathNode: t,
                                offset: n,
                                prevTextCount: 0,
                                prevHeaderText: i ? i.textContent.replace(/\s+/g, " ").replace(/^\s|\s$/g, "") : "",
                                prevTextPiece: ""
                            };
                            return e ? (s.bound = e,
                                e < V[V.length - 1].bound ? (a.setStart(V[V.length - 2].xpathNode, V[V.length - 2].offset),
                                    a.setEnd(V[V.length - 1].xpathNode, V[V.length - 1].offset),
                                    o = a.toString().replace(/\s+/g, " "),
                                    s.prevTextCount = o.length,
                                    s.prevTextPiece = o.substr(0, 50),
                                    V[V.length - 1] = s) : V[V.length - 1].bound !== e && (a.setStart(V[V.length - 1].xpathNode, V[V.length - 1].offset),
                                        a.setEnd(t, n),
                                        o = a.toString().replace(/\s+/g, " "),
                                        s.prevTextCount = o.length,
                                        s.prevTextPiece = o.substr(0, 50),
                                        V.push(s))) : V.push(s),
                                a && a.detach(),
                                V[V.length - 1].bound + X
                        }
                        function j(e, t, n, i) {
                            n = n || 0;
                            var o, a, s = {
                                bound: 0,
                                xpath: r.a.util.client.getXPathByNode(t, q),
                                xpathNode: t,
                                offset: n,
                                prevTextCount: 0,
                                prevHeaderText: i ? i.innerText.replace(/\s+/g, " ").replace(/^\s|\s$/g, "") : "",
                                prevTextPiece: ""
                            };
                            return e ? (s.bound = e,
                                e < V[V.length - 1].bound ? (o = r.a.util.client.createTextRange8(V[V.length - 2].xpathNode, V[V.length - 2].offset, V[V.length - 1].xpathNode, V[V.length - 1].offset),
                                    a = o.text.replace(/\s+/g, " "),
                                    a && (s.prevTextCount = a.length,
                                        s.prevTextPiece = a.substr(0, 50)),
                                    V[V.length - 1] = s) : V[V.length - 1].bound !== e && (o = r.a.util.client.createTextRange8(V[V.length - 1].xpathNode, V[V.length - 1].offset, t, n),
                                        a = o.text.replace(/\s+/g, " "),
                                        a && (s.prevTextCount = a.length,
                                            s.prevTextPiece = a.substr(0, 50)),
                                        V.push(s))) : V.push(s),
                                o && (o = null),
                                V[V.length - 1].bound + X
                        }
                        function A(e, t, n, r, i) {
                            var o, a, s = n.previousSibling;
                            for (void 0 === r && (o = /^\s+/.exec(n.data),
                                r = o ? o.lastIndex : 0),
                                void 0 === i && (o = /\s+$/.exec(n.data),
                                    i = o ? o.index : n.data.length),
                                a = i - r; s && !s.innerText;) {
                                switch (s.nodeName) {
                                    case "BR":
                                        r += 1;
                                        break;
                                    case "#text":
                                        r += s.length
                                }
                                s = s.previousSibling
                            }
                            return s ? (t.moveToElementText(s),
                                e.setEndPoint("StartToEnd", t)) : e.moveToElementText(n.parentNode),
                                e.moveStart("character", 1),
                                e.moveStart("character", -1),
                                e.moveStart("character", r),
                                e.collapse(!0),
                                e.moveEnd("character", a),
                                e
                        }
                        function H(e) {
                            var t, n = (e - 1) * F, r = 0, i = 0, o = V[n], a = V[n + 1];
                            for (t = n; t > 0; t -= 1)
                                r += V[t].prevTextCount;
                            for (t = n + 1; t < V.length && t <= n + F; t += 1)
                                i += V[t].prevTextCount;
                            return {
                                xpath: o.xpath,
                                offset: o.offset,
                                prevTextCount: r,
                                prevHeaderText: o.prevHeaderText,
                                textPiece: a.prevTextPiece,
                                curPageTextCount: i
                            }
                        }
                        function R(e) {
                            var t, n, i, o = e.citation, a = document.createRange ? document.createRange() : null;
                            return n = r.a.util.client.getNodeByXPath(o.start_xpath, q),
                                i = r.a.util.client.getNodeByXPath(o.end_xpath, q),
                                r.a.isIE8 ? a = r.a.util.client.createTextRange8(n, o.start_offset, i, o.end_offset) : (a.setStart(n, o.start_offset),
                                    a.setEnd(i, o.end_offset)),
                                t = r.a.util.client.getBoundingClientRectOn(a, q),
                                a.detach && a.detach(),
                                M(t.top)
                        }
                        function M(e) {
                            var t, n;
                            for (e = +e.toFixed(3),
                                n = 1; n < V.length; n += 1)
                                if (e < +V[n].bound.toFixed(3)) {
                                    t = Math.ceil(n / F);
                                    break
                                }
                            return t
                        }
                        function B(e) {
                            if (r.a.isIE8)
                                return D(e);
                            var t, n, i, o, a = document.createRange ? document.createRange() : null;
                            return i = e.xpath,
                                o = e.offset || 0,
                                (n = r.a.util.client.getNodeByXPath(i, q)) ? (3 === n.nodeType || n.firstChild && o ? (a.setStart(n, o),
                                    a.setEnd(n, o + 1),
                                    t = r.a.util.client.getBoundingClientRectOn(a, q)) : t = r.a.util.client.getBoundingClientRectOn(n, q),
                                    a && a.detach(),
                                    M(t.top)) : void 0
                        }
                        function D(e) {
                            var t, n, i, o, a, s;
                            if (a = e.offset || 0,
                                o = r.a.util.client.getNodeByXPath(e.xpath, q)) {
                                for (3 === o.nodeType || o.firstChild ? (s = r.a.util.client.createTextRange8(o, a, o, a + 1),
                                    i = r.a.util.client.getBoundingClientRectOn(s, q)) : i = r.a.util.client.getBoundingClientRectOn(o, q),
                                    n = 1; n < V.length; n += 1)
                                    if (i.top < V[n].bound) {
                                        t = Math.ceil(n / F);
                                        break
                                    }
                                return s = null,
                                    t
                            }
                        }
                        var L, I, F, q, W, X, z, U, $ = [], J = !0, V = [];
                        return L = {
                            init: n,
                            resize: w,
                            changeLayout: w,
                            setHtml: _,
                            getNumPages: function () {
                                return Math.ceil((V.length - 1) / F)
                            },
                            getStatByPage: H,
                            showPageAt: T,
                            getPageByHash: E,
                            getPageByXpath: B,
                            getPageByCitation: R,
                            showSelection: d,
                            hideSelection: p,
                            indicateCitation: g,
                            clearCitations: h,
                            processSelection: l
                        },
                            t.extend(L, r.a.util.events),
                            L
                    }()
            }
                .call(t, n(0), n(3))
    },
    779: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.view = t.a.view || {},
                    t.a.view.content = t.a.view.content || {},
                    t.a.view.content.pagingEffect = function () {
                        function n(t) {
                            h = e(t)
                        }
                        function r(e) {
                            h.stop(!0, !0).animate({
                                opacity: 0
                            }, m, function () {
                                e(),
                                    h.css({
                                        opacity: 1
                                    })
                            })
                        }
                        function i(e, n) {
                            b = !!n,
                                g = h.css("left"),
                                v = t.a.sys.getWidth(),
                                y = a(v),
                                h.stop(!0, !0).animate({
                                    left: b ? -v : v
                                }, y, function () {
                                    e(),
                                        h.css({
                                            left: b ? v : -v
                                        }).animate({
                                            left: g
                                        }, y, function () {
                                            h.css({
                                                left: ""
                                            })
                                        })
                                })
                        }
                        function o(e) {
                            h.stop().animate({
                                opacity: 0
                            }, m, function () {
                                e()
                            })
                        }
                        function a(e) {
                            return 250 + (e >> 3)
                        }
                        function s(e, n) {
                            b = !!n,
                                g = h.css("left"),
                                v = t.a.sys.getWidth(),
                                y = a(v),
                                h.stop().animate({
                                    left: b ? -v : v
                                }, y, function () {
                                    e()
                                })
                        }
                        function c() {
                            h.stop().css({
                                opacity: 1
                            })
                        }
                        function l(e) {
                            h.stop(),
                                e ? h.css({
                                    left: b ? v : -v
                                }).animate({
                                    left: g
                                }, y, function () {
                                    h.css({
                                        left: ""
                                    })
                                }) : h.css({
                                    left: ""
                                })
                        }
                        function u(e) {
                            return h.is(":animated")
                        }
                        function f(e, n) {
                            var o = t.a.settings.pageChangeEffect;
                            "fade" === o ? r(e) : "slide" === o ? i(e, n) : e()
                        }
                        function d(e, n) {
                            var r = t.a.settings.pageChangeEffect;
                            "fade" === r ? o(e) : "slide" === r ? s(e, n) : e()
                        }
                        function p(e) {
                            var n = t.a.settings.pageChangeEffect;
                            "fade" === n ? c() : "slide" === n && l(e)
                        }
                        var h, g, v, m = 250, y = m, b = !0;
                        return {
                            start: f,
                            begin: d,
                            end: p,
                            isAnimated: u,
                            init: n
                        }
                    }()
            }
                .call(t, n(0))
    },
    780: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.view = r.a.view || {},
            r.a.view.fullscreenBtn = function () {
                function e(e) {
                    var a = r.a.sys.fullScreen;
                    a.enabled && (t = document.createElement("div"),
                        t.className = n,
                        t.title = i,
                        t.innerHTML = o,
                        e.appendChild(t),
                        t.addEventListener("click", function (e) {
                            a.element() ? a.cancel() : a.request(document.documentElement)
                        }, !1))
                }
                var t, n = "rdr-fullscreenBtn", i = "Полный экран", o = '<svg viewBox="0 0 32 32"><polygon points="27.414,24.586 22.828,20 20,22.828 24.586,27.414 20,32 32,32 32,20"/><polygon points="12,0 0,0 0,12 4.586,7.414 9.129,11.953 11.957,9.125 7.414,4.586"/><polygon points="12,22.828 9.172,20 4.586,24.586 0,20 0,32 12,32 7.414,27.414"/><polygon points="32,0 20,0 24.586,4.586 20.043,9.125 22.871,11.953 27.414,7.414 32,12"/></svg>';
                return {
                    init: e
                }
            }()
    },
    781: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.mask = function () {
                        function n() {
                            a = document.body.querySelector("." + u),
                                a ? c.isShown = !0 : (a = document.createElement("div"),
                                    a.className = u,
                                    document.body.appendChild(a)),
                                s = e(a),
                                s.click(function () {
                                    c.trigger("click")
                                })
                        }
                        function i(e) {
                            l += 1,
                                c.isShown = !0,
                                s.removeClass().addClass(u),
                                e && (e.preloader && s.addClass(f),
                                    e.blur && s.addClass(d),
                                    e.opaque && s.addClass(p)),
                                a.style.display = "block"
                        }
                        function o() {
                            c.isShown && (l -= 1) <= 0 && (a.style.display = "none",
                                c.isShown = !1,
                                l = 0)
                        }
                        var a, s, c, l = 0, u = "rdr-mask", f = "rdr-mask_preloader", d = "rdr-mask_blur", p = "rdr-mask_opaque";
                        return c = {
                            isShown: !1,
                            show: i,
                            hide: o,
                            init: n
                        },
                            t.extend(c, r.a.util.events),
                            c
                    }()
            }
                .call(t, n(0), n(3))
    },
    782: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.nav = r.a.view.nav || {},
                    r.a.view.nav.arrowPages = function () {
                        function n() {
                            l = e('<div class="rdr-nav-left nav-allow-gesture"/>').appendTo(document.body),
                                u = e('<div class="rdr-nav-right nav-allow-gesture"/>').appendTo(document.body),
                                l.click(i),
                                u.click(o)
                        }
                        function i(e) {
                            f.trigger("left"),
                                e.stopPropagation()
                        }
                        function o(e) {
                            f.trigger("right"),
                                e.stopPropagation()
                        }
                        function a() {
                            l.addClass(d),
                                l.get(0).title = ""
                        }
                        function s() {
                            u.addClass(d),
                                u.get(0).title = ""
                        }
                        function c() {
                            l.removeClass(d),
                                u.removeClass(d),
                                l.get(0).title = p,
                                u.get(0).title = h
                        }
                        var l, u, f, d = "rdr-nav-disabled", p = "Предыдущая страница", h = "Следующая страница";
                        return f = {
                            init: n,
                            disableLeft: a,
                            disableRight: s,
                            enable: c
                        },
                            t.extend(f, r.a.util.events),
                            f
                    }()
            }
                .call(t, n(0), n(3))
    },
    783: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e) {
                var t = n(2);
                t.a.view = t.a.view || {},
                    t.a.view.nav = t.a.view.nav || {},
                    t.a.view.nav.pages = function () {
                        function t(t) {
                            var n;
                            s = document.createElement("div"),
                                s.className = "rdr-nav-pages",
                                n = document.createElement("div"),
                                s.appendChild(n),
                                c = document.createElement("div"),
                                n.appendChild(c),
                                t.appendChild(s),
                                l = e.template("<em>страница <%= page %> из <%= allPages %></em>"),
                                u = e.template(" <em>(раздел <%= section %> из <%= allSections %>)</em>"),
                                f = e.template(" <em>(<%= section %>)</em>");
                        }
                        function n(e) {
                            p = e,
                                a()
                        }
                        function r(e) {
                            d = e,
                                a()
                        }
                        function i(e) {
                            g = e,
                                a()
                        }
                        function o(t) {
                            h = e.isString(t) ? -1 !== t.indexOf("contentnotes") ? "примечания" : t.replace(".html", "") : t,
                                a()
                        }
                        function a() {
                            var t;
                            t = l({
                                allPages: p,
                                page: d
                            }),
                                e.isNumber(h) ? t += u({
                                    allSections: g,
                                    section: h
                                }) : e.isString(h) && (t += f({
                                    section: h
                                })),
                                c.innerHTML = t
                        }
                        var s, c, l, u, f, d = 1, p = 1, h = 1, g = 1;
                        return {
                            init: t,
                            setAllPages: n,
                            setCurPage: r,
                            setAllSections: i,
                            setCurSection: o
                        }
                    }()
            }
                .call(t, n(3))
    },
    784: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.nav = r.a.view.nav || {},
                    r.a.view.nav.slider = function () {
                        function n(t) {
                            c = document.createElement("div"),
                                c.className = "rdr-nav-line",
                                u = document.createElement("div"),
                                c.appendChild(u),
                                t.appendChild(c),
                                l = e(c),
                                l.on("click", function (e) {
                                    var t = e.pageX - l.offset().left
                                        , n = t / l.width() * 100;
                                    f.trigger("change", i(n))
                                })
                        }
                        function i(e) {
                            var t, n, r;
                            return s = e,
                                t = 100 / d,
                                n = Math.ceil(s / t),
                                0 === n && (n = 1),
                                r = (s - (n - 1) * t) / t,
                                [n, r]
                        }
                        function o() {
                            if (e.isNumeric(p)) {
                                var t = 1 / d;
                                s = 100 * ((p - 1) * t + h / g * t),
                                    u.style.width = s + "%"
                            }
                        }
                        function a(e) {
                            g = e.pages,
                                h = e.page,
                                d = e.sections,
                                p = e.section,
                                o()
                        }
                        var s, c, l, u, f, d = 1, p = 1, h = 1, g = 1;
                        return f = {
                            init: n,
                            update: a
                        },
                            t.extend(f, r.a.util.events),
                            f
                    }()
            }
                .call(t, n(0), n(3))
    },
    785: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var r = n(2);
        r.a.view = r.a.view || {},
            r.a.view.preview = function () {
                function e(e) {
                    e = e && "string" == typeof e ? e.replace(/style=/g, "_s=") : "Ознакомительный фрагмент &bull; Оформите подписку и читайте полную версию",
                        i = document.createElement("div"),
                        i.className = "rdr-preview",
                        i.innerHTML = "&nbsp;<div>" + (e || "Ознакомительный фрагмент &bull; Оформите подписку и читайте полную версию") + "</div>",
                        document.body.appendChild(i),
                        o = i.children[0],
                        r.a.config.isPreviewMode || setTimeout(n, 7e3),
                        a = setInterval(t, 2e3)
                }
                function t() {
                    var e = i.clientWidth
                        , t = o.clientWidth;
                    t > e ? "l" === c ? s > e - t ? s -= 30 : c = "r" : s < 0 ? s += 30 : c = "l" : s = 0,
                        o.style.left = s + "px"
                }
                function n() {
                    clearInterval(a),
                        document.body.removeChild(i)
                }
                var i, o, a, s = 0, c = "l";
                return {
                    init: e
                }
            }()
    },
    786: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.settingsBtn = function () {
                        function n(t) {
                            i = document.createElement("div"),
                                i.className = "rdr-settingsBtn",
                                i.title = "Настройки",
                                i.innerHTML = "<b>A</b>A",
                                t.appendChild(i),
                                e(i).on("click", function (e) {
                                    o.trigger("click")
                                })
                        }
                        var i, o;
                        return o = {
                            init: n
                        },
                            t.extend(o, r.a.util.events),
                            o
                    }()
            }
                .call(t, n(0), n(3))
    },
    787: function (e, t, n) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        }),
            function (e, t) {
                var r = n(2);
                r.a.view = r.a.view || {},
                    r.a.view.tocBtn = function () {
                        function n(t) {
                            i = document.createElement("div"),
                                i.className = "rdr-tocBtn",
                                i.title = "Оглавление",
                                i.innerHTML = "<div>&equiv;</div>",
                                t.appendChild(i),
                                e(i).on("click", function (e) {
                                    o.trigger("click")
                                })
                        }
                        var i, o;
                        return o = {
                            init: n
                        },
                            t.extend(o, r.a.util.events),
                            o
                    }()
            }
                .call(t, n(0), n(3))
    },
    788: function (e, t, n) {

    },
    810: function (e, t, n) {
        n(221),
            n(3),
            n(13),
            n(120),
            n(766),
            n(765),
            n(764),
            n(763),
            n(759),
            n(757),
            n(758),
            n(760),
            n(761),
            n(762),
            n(755),
            n(781),
            n(769),
            n(767),
            n(771),
            n(768),
            n(778),
            n(779),
            n(783),
            n(782),
            n(784),
            n(787),
            n(777),
            n(776),
            n(772),
            n(780),
            n(774),
            n(773),
            n(775),
            n(770),
            n(786),
            n(785),
            n(753),
            n(749),
            n(750),
            n(754),
            n(751),
            n(752),
            n(739),
            n(743),
            n(740),
            n(737),
            n(736),
            n(738),
            n(747),
            n(744),
            n(746),
            n(745),
            n(741),
            n(748),
            n(742),
            n(756),
            e.exports = n(788)
    }
});
