<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کوتاه کننده لینک دات لینک</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">

    @vite(['resources/js/auth.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
          integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <!-- yektanet -->
    <script>
        !function(e,t,n){e.yektanetAnalyticsObject=n,e[n]=e[n]||function(){e[n].q.push(arguments)},e[n].q=e[n].q||[];var a=t.getElementsByTagName("head")[0],r=new Date,c="https://cdn.yektanet.com/superscript/hcWbfYTy/native-eddiecode.ir-26686/yn_pub.js?v="+r.getFullYear().toString()+"0"+r.getMonth()+"0"+r.getDate()+"0"+r.getHours(),s=t.createElement("link");s.rel="preload",s.as="script",s.href=c,a.appendChild(s);var l=t.createElement("script");l.async=!0,l.src=c,a.appendChild(l)}(window,document,"yektanet");
    </script>

    <style>
        *{
            font-family: 'Vazirmatn', sans-serif;
            font-size: 1rem;
        }
        body{
            height: 100vh;
        }
    </style>
    <link rel="manifest" href="/manifest.json">

    <script type='text/javascript' src='//pl19540384.highrevenuegate.com/f0/8c/54/f08c54d332212195dfadf9e7595b9510.js'></script>

</head>
<body class="bg-light" >
<div class="container-fluid py-4 ">


    <div class="container mt-3">
        <div class="row justify-content-between">

            <div class="col p-3 text-center rounded-3 bg-body shadow" style="height: max-content;">
                <!-- top banner -->
                <div>
                    <div id="pos-article-display-73854"></div>
                </div>

                <!-- button -->
                    <form action="{{ route('adclick', $url->url_code) }}" method="post">
                        @csrf
                        <button type="button" onclick="onclk(event); this.onclick=null;" id="alink" class="btn btn-primary my-5 p-3" >برای ادامه اینجا کلیک کنید</button>
                    </form>

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

</body>
</html>
