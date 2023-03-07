<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/78648d7102.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="icon" href="{{asset('images/viechalogo.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('pages/UI/icons.html')}}">

    <script src="https://kit.fontawesome.com/78648d7102.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    <script nonce="0fc1db4e-e4c6-4ecd-a6ae-5b7f816328ef">
        (function(w, d) {
            ! function(f, g, h, i) {
                f[h] = f[h] || {};
                f[h].executed = [];
                f.zaraz = {
                    deferred: [],
                    listeners: []
                };
                f.zaraz.q = [];
                f.zaraz._f = function(j) {
                    return function() {
                        var k = Array.prototype.slice.call(arguments);
                        f.zaraz.q.push({
                            m: j,
                            a: k
                        })
                    }
                };
                for (const l of ["track", "set", "debug"]) f.zaraz[l] = f.zaraz._f(l);
                f.zaraz.init = () => {
                    var m = g.getElementsByTagName(i)[0],
                        n = g.createElement(i),
                        o = g.getElementsByTagName("title")[0];
                    o && (f[h].t = g.getElementsByTagName("title")[0].text);
                    f[h].x = Math.random();
                    f[h].w = f.screen.width;
                    f[h].h = f.screen.height;
                    f[h].j = f.innerHeight;
                    f[h].e = f.innerWidth;
                    f[h].l = f.location.href;
                    f[h].r = g.referrer;
                    f[h].k = f.screen.colorDepth;
                    f[h].n = g.characterSet;
                    f[h].o = (new Date).getTimezoneOffset();
                    if (f.dataLayer)
                        for (const s of Object.entries(Object.entries(dataLayer).reduce(((t, u) => ({
                                ...t[1],
                                ...u[1]
                            }))))) zaraz.set(s[0], s[1], {
                            scope: "page"
                        });
                    f[h].q = [];
                    for (; f.zaraz.q.length;) {
                        const v = f.zaraz.q.shift();
                        f[h].q.push(v)
                    }
                    n.defer = !0;
                    for (const w of [localStorage, sessionStorage]) Object.keys(w || {}).filter((y => y.startsWith("_zaraz_"))).forEach((x => {
                        try {
                            f[h]["z_" + x.slice(7)] = JSON.parse(w.getItem(x))
                        } catch {
                            f[h]["z_" + x.slice(7)] = w.getItem(x)
                        }
                    }));
                    n.referrerPolicy = "origin";
                    n.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(f[h])));
                    m.parentNode.insertBefore(n, m)
                };
                ["complete", "interactive"].includes(g.readyState) ? zaraz.init() : f.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>
<script nonce="d64bf2d7-a10e-4e2c-bbf3-c1030e4ec67d">
    (function(w, d) {
        ! function(eK, eL, eM, eN) {
            eK.zarazData = eK.zarazData || {};
            eK.zarazData.executed = [];
            eK.zaraz = {
                deferred: [],
                listeners: []
            };
            eK.zaraz.q = [];
            eK.zaraz._f = function(eO) {
                return function() {
                    var eP = Array.prototype.slice.call(arguments);
                    eK.zaraz.q.push({
                        m: eO,
                        a: eP
                    })
                }
            };
            for (const eQ of ["track", "set", "debug"]) eK.zaraz[eQ] = eK.zaraz._f(eQ);
            eK.zaraz.init = () => {
                var eR = eL.getElementsByTagName(eN)[0],
                    eS = eL.createElement(eN),
                    eT = eL.getElementsByTagName("title")[0];
                eT && (eK.zarazData.t = eL.getElementsByTagName("title")[0].text);
                eK.zarazData.x = Math.random();
                eK.zarazData.w = eK.screen.width;
                eK.zarazData.h = eK.screen.height;
                eK.zarazData.j = eK.innerHeight;
                eK.zarazData.e = eK.innerWidth;
                eK.zarazData.l = eK.location.href;
                eK.zarazData.r = eL.referrer;
                eK.zarazData.k = eK.screen.colorDepth;
                eK.zarazData.n = eL.characterSet;
                eK.zarazData.o = (new Date).getTimezoneOffset();
                if (eK.dataLayer)
                    for (const eX of Object.entries(Object.entries(dataLayer).reduce(((eY, eZ) => ({
                            ...eY[1],
                            ...eZ[1]
                        }))))) zaraz.set(eX[0], eX[1], {
                        scope: "page"
                    });
                eK.zarazData.q = [];
                for (; eK.zaraz.q.length;) {
                    const e_ = eK.zaraz.q.shift();
                    eK.zarazData.q.push(e_)
                }
                eS.defer = !0;
                for (const fa of [localStorage, sessionStorage]) Object.keys(fa || {}).filter((fc => fc.startsWith("_zaraz_"))).forEach((fb => {
                    try {
                        eK.zarazData["z_" + fb.slice(7)] = JSON.parse(fa.getItem(fb))
                    } catch {
                        eK.zarazData["z_" + fb.slice(7)] = fa.getItem(fb)
                    }
                }));
                eS.referrerPolicy = "origin";
                eS.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));
                eR.parentNode.insertBefore(eS, eR)
            };
            ["complete", "interactive"].includes(eL.readyState) ? zaraz.init() : eK.addEventListener("DOMContentLoaded", zaraz.init)
        }(w, d, 0, "script");
    })(window, document);
</script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('images/girl_gede.png')}}" alt="AdminLTELogo" height="60" width="60">
        </div>

        @include('template.topbar')


        @include('template.sidebar')



        <div class="content-wrapper">

            @yield('dila')

        </div>

        @include('template.footer')


    </div>

    <script src="https://kit.fontawesome.com/78648d7102.js" crossorigin="anonymous"></script>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

    <script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>

    <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>

    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

    <script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

    <script src="{{asset('dist/js/adminlte.js?v=3.2.0')}}"></script>

    <script src="{{asset('dist/js/demo.js')}}"></script>

    <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

    <script src="{{asset('dist/js/adminlte.min.js?v=3.2.0')}}"></script>

    <script src="{{asset('dist/js/demo.js')}}"></script>

   @yield('chart')
</body>

</html>