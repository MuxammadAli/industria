<?php
    $title = isset($title) && !empty($title) ? $title : 'Industria - Meta title';
    $description = isset($description) && !empty($description) ? $description : 'Industria meta description';
    $keywords = '';
    $publish_time = isset($publish_time) ? $publish_time : time();
    $main_url = isset($main_url) ? $main_url : 'http://industria.uz/';
    $main_image = isset($main_image) ? $main_image : "images/main.png";
    $origin = 'industria.uz'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="industria.uz">

    <meta property="og:title" content="<?= $title ?>"/>
    <meta data-rh="true" property="article:published_time"
          content="<?= $publish_time ?>">
    <meta property="og:description" content="<?= $description ?>"/>
    <meta name="description" content="<?= $description ?>">
    <meta data-rh="true" property="og:image" content="<?= $main_image ?>"/>
    <meta property="og:image" content="<?= $main_image ?>" />
    <meta property="og:image:secure_url" content="<?= $main_image ?>"/>
    <meta property="og:type" content="article"/>
    <meta name="author" content="{{ $origin }}">
    <meta property="og:url" content="<?= $main_url ?>"/>
    <meta property="og:site_name" content="<?= $origin ?>"/>
    <meta property="twitter:title" content="<?= $title ?>">
    <meta property="twitter:url" content="<?= url()->current() ?>">
    <meta property="twitter:description" content="<?= $description ?>">
    <meta property="twitter:image" content="<?= $main_image ?>">
    <meta data-rh="true" property="al:android:app_name" content="Medium"/>
    <meta name="telegram:channel" content="@industria_uz"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:site" content="@industria.uz"/>
    <meta name="twitter:creator" content="@industria.uz"/>

    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/manifest.json">
    <meta name="application-name" content="{{ $origin }}"/>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/frontend/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="/static/css/5.17b58a5f.chunk.css" rel="stylesheet">
    <link href="/static/css/main.21e5bb66.chunk.css" rel="stylesheet">

    <style>
        html {
            background-color: #f5f9fc;
        }
        body {
            background-color: #ffffff;
        }
    </style>

</head>
<body>


    @yield('section')

    <div id="root"></div>

    <noscript>You need to enable JavaScript to run this app.</noscript>

    <script>!function (f) {
            function e(e) {
                for (var t, r, n = e[0], o = e[1], a = e[2], c = 0, u = []; c < n.length; c++) r = n[c], s[r] && u.push(s[r][0]), s[r] = 0;
                for (t in o) Object.prototype.hasOwnProperty.call(o, t) && (f[t] = o[t]);
                for (h && h(e); u.length;) u.shift()();
                return d.push.apply(d, a || []), i()
            }

            function i() {
                for (var e, t = 0; t < d.length; t++) {
                    for (var r = d[t], n = !0, o = 1; o < r.length; o++) {
                        var a = r[o];
                        0 !== s[a] && (n = !1)
                    }
                    n && (d.splice(t--, 1), e = p(p.s = r[0]))
                }
                return e
            }

            var r = {}, l = {4: 0}, s = {4: 0}, d = [];

            function p(e) {
                if (r[e]) return r[e].exports;
                var t = r[e] = {i: e, l: !1, exports: {}};
                return f[e].call(t.exports, t, t.exports, p), t.l = !0, t.exports
            }

            p.e = function (d) {
                var e = [];
                l[d] ? e.push(l[d]) : 0 !== l[d] && {6: 1}[d] && e.push(l[d] = new Promise(function (e, n) {
                    for (var t = "static/css/" + ({}[d] || d) + "." + {
                        0: "31d6cfe0",
                        1: "31d6cfe0",
                        2: "31d6cfe0",
                        6: "752ba250",
                        7: "31d6cfe0",
                        8: "31d6cfe0",
                        9: "31d6cfe0",
                        10: "31d6cfe0",
                        11: "31d6cfe0",
                        12: "31d6cfe0",
                        13: "31d6cfe0",
                        14: "31d6cfe0",
                        15: "31d6cfe0",
                        16: "31d6cfe0"
                    }[d] + ".chunk.css", o = p.p + t, r = document.getElementsByTagName("link"), a = 0; a < r.length; a++) {
                        var c = (f = r[a]).getAttribute("data-href") || f.getAttribute("href");
                        if ("stylesheet" === f.rel && (c === t || c === o)) return e()
                    }
                    var u = document.getElementsByTagName("style");
                    for (a = 0; a < u.length; a++) {
                        var f;
                        if ((c = (f = u[a]).getAttribute("data-href")) === t || c === o) return e()
                    }
                    var i = document.createElement("link");
                    i.rel = "stylesheet", i.type = "text/css", i.onload = e, i.onerror = function (e) {
                        var t = e && e.target && e.target.src || o,
                            r = new Error("Loading CSS chunk " + d + " failed.\n(" + t + ")");
                        r.request = t, delete l[d], i.parentNode.removeChild(i), n(r)
                    }, i.href = o, document.getElementsByTagName("head")[0].appendChild(i)
                }).then(function () {
                    l[d] = 0
                }));
                var r = s[d];
                if (0 !== r) if (r) e.push(r[2]); else {
                    var t = new Promise(function (e, t) {
                        r = s[d] = [e, t]
                    });
                    e.push(r[2] = t);
                    var n, a = document.createElement("script");
                    a.charset = "utf-8", a.timeout = 120, p.nc && a.setAttribute("nonce", p.nc), a.src = p.p + "static/js/" + ({}[d] || d) + "." + {
                        0: "4151d927",
                        1: "37c37d5f",
                        2: "48bc5f6e",
                        6: "53b82528",
                        7: "ecf0f108",
                        8: "e542c3a2",
                        9: "464c701d",
                        10: "4697073d",
                        11: "35495de1",
                        12: "ea68134f",
                        13: "ab9d7afb",
                        14: "c88f9ea6",
                        15: "2212064e",
                        16: "77d94349"
                    }[d] + ".chunk.js", n = function (e) {
                        a.onerror = a.onload = null, clearTimeout(c);
                        var t = s[d];
                        if (0 !== t) {
                            if (t) {
                                var r = e && ("load" === e.type ? "missing" : e.type), n = e && e.target && e.target.src,
                                    o = new Error("Loading chunk " + d + " failed.\n(" + r + ": " + n + ")");
                                o.type = r, o.request = n, t[1](o)
                            }
                            s[d] = void 0
                        }
                    };
                    var c = setTimeout(function () {
                        n({type: "timeout", target: a})
                    }, 12e4);
                    a.onerror = a.onload = n, document.head.appendChild(a)
                }
                return Promise.all(e)
            }, p.m = f, p.c = r, p.d = function (e, t, r) {
                p.o(e, t) || Object.defineProperty(e, t, {enumerable: !0, get: r})
            }, p.r = function (e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
            }, p.t = function (t, e) {
                if (1 & e && (t = p(t)), 8 & e) return t;
                if (4 & e && "object" == typeof t && t && t.__esModule) return t;
                var r = Object.create(null);
                if (p.r(r), Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: t
                }), 2 & e && "string" != typeof t) for (var n in t) p.d(r, n, function (e) {
                    return t[e]
                }.bind(null, n));
                return r
            }, p.n = function (e) {
                var t = e && e.__esModule ? function () {
                    return e.default
                } : function () {
                    return e
                };
                return p.d(t, "a", t), t
            }, p.o = function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }, p.p = "/", p.oe = function (e) {
                throw console.error(e), e
            };
            var t = window.webpackJsonp = window.webpackJsonp || [], n = t.push.bind(t);
            t.push = e, t = t.slice();
            for (var o = 0; o < t.length; o++) e(t[o]);
            var h = n;
            i()
        }([])</script>
    <script src="/static/js/5.941af840.chunk.js"></script>
    <script src="/static/js/main.83e8ac81.chunk.js"></script>
</body>
</html>
