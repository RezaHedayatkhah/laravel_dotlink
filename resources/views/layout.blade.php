<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    <title>پنل دات لینک</title>
</head>
<body>
<div class="container">
    <!-- menu -->
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="logo-apple"></ion-icon></span>
                    <span class="title">دات لینک</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="home-outline"></ion-icon
                  ></span>
                    <span class="title">خانه</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="people-outline"></ion-icon
                  ></span>
                    <span class="title">Customers</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="chatbubble-outline"></ion-icon
                  ></span>
                    <span class="title">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="help-outline"></ion-icon
                  ></span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="settings-outline"></ion-icon
                  ></span>
                    <span class="title">تنظیمات</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="lock-closed-outline"></ion-icon
                  ></span>
                    <span class="title">Password</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="log-out-outline"></ion-icon
                  ></span>
                    <span class="title">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="خروج">
                        </form>
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- main -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>
            <!-- search -->
            <div class="search">
                <label for="">
                    <input type="text" name="" id="" placeholder="Search here"/>
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            <!-- userImg -->
            <div class="user">
                <img src="user.jpg" alt=""/>
            </div>
        </div>
        @yield('content')
    </div>
</div>
<script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
></script>
<script
    nomodule
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
></script>

<script>
    // Menu Toggle
    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");

    toggle.onclick = function () {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
    };

    // add hovered class in selected list item
    let list = document.querySelectorAll(".navigation li");

    function activelink() {
        list.forEach((item) => {
            item.classList.remove("hovered");
            this.classList.add("hovered");
        });
    }

    list.forEach((item) => {
        item.addEventListener("mouseover", activelink);
    });
</script>
</body>
</html>
