<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>

    <link rel="manifest" href="/manifest.json">
    <!-- Najva Push Notification -->
    <script type="text/javascript">
        (function() {
            var now = new Date();
            var version = now.getFullYear().toString() + "0" + now.getMonth() + "0" + now.getDate() +
                "0" + now.getHours();
            var head = document.getElementsByTagName("head")[0];
            var link = document.createElement("link");
            link.rel = "stylesheet";
            link.href = "https://van.najva.com/static/cdn/css/local-messaging.css" + "?v=" + version;
            head.appendChild(link);
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.async = true;
            script.src =
                "https://van.najva.com/static/js/scripts/new-website984835-website-47908-2cc05915-2708-4383-a21f-3613f8ee63af.js" +
                "?v=" + version;
            head.appendChild(script);
        })()
    </script>
    <!-- END NAJVA PUSH NOTIFICATION -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کوتاه کننده لینک دات لینک</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <!-- yektanet -->
    <script>
        ! function(e, t, n) {
            e.yektanetAnalyticsObject = n, e[n] = e[n] || function() {
                e[n].q.push(arguments)
            }, e[n].q = e[n].q || [];
            var a = t.getElementsByTagName("head")[0],
                r = new Date,
                c = "https://cdn.yektanet.com/superscript/hcWbfYTy/native-eddiecode.ir-26686/yn_pub.js?v=" + r.getFullYear()
                .toString() + "0" + r.getMonth() + "0" + r.getDate() + "0" + r.getHours(),
                s = t.createElement("link");
            s.rel = "preload", s.as = "script", s.href = c, a.appendChild(s);
            var l = t.createElement("script");
            l.async = !0, l.src = c, a.appendChild(l)
        }(window, document, "yektanet");
    </script>

    <style>
        * {
            font-family: 'Vazirmatn', sans-serif;
            font-size: 1rem;
        }

        body {
            height: 100vh;
        }
    </style>
    <link rel="manifest" href="/manifest.json">

    <script type='text/javascript' src='//pl19540384.highrevenuegate.com/f0/8c/54/f08c54d332212195dfadf9e7595b9510.js'>
    </script>
    <script>
        (function(zp) {
            var id = Math.floor(1e7 * Math.random() + 1),
                url = location.protocol + '//www.zarpop.ir/website/pp/null/6783/' + window.location.hostname + '/?' +
                id;
            zp.write('<div id="' + id + '"></div>');
            zp.write('<script type="text/javascript" src="' + url + '" async></scri' + 'pt>')
        })(document);
        var zarpop_userMax = 5;
    </script>


</head>

<body class="bg-light">
    <div class="container-fluid py-4 ">


        <div class="container mt-3">
            <div class="row justify-content-between">

                <div class="col p-3 text-center rounded-3 bg-body shadow" style="height: max-content;">
                    <!-- top banner -->
                    <div>
                        <div id="pos-article-display-73854"></div>
                    </div>

                    <div>
                        <div id="pos-article-text-83787"></div>
                    </div>
                    <!-- button -->
                    <form action="{{ route('adclick', $url->url_code) }}" method="post">
                        @csrf
                        <button type="button" onclick="onclk(event); this.onclick=null;" id="alink"
                            class="btn btn-primary  p-3">برای ادامه اینجا کلیک کنید
                        </button>
                    </form>

                    <div>
                        <div id="pos-article-text-83789"></div>
                    </div>

                    <!-- bottom banner -->
                    <div>
                        <div id="pos-article-display-73859"></div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <script>
        function onclk(event) {
            var timeleft = 10;
            event.preventDefault()

            var downloadTimer = setInterval(function function1() {
                document.getElementById("alink").innerHTML = timeleft +
                    "&nbsp" + "ثانیه باقی مانده";

                timeleft -= 1;
                if (timeleft <= 0) {
                    clearInterval(downloadTimer);
                    document.getElementById("alink").innerHTML = "برای ادامه اینجا کلیک کنید"
                    document.getElementById("alink").type = "submit"
                }
            }, 1000);
        }
    </script>
    <script type='text/javascript' src='//pl19579521.highrevenuegate.com/45/28/b6/4528b645c85b4199eac322bf2c0e7098.js'>
    </script>
</body>

</html>
