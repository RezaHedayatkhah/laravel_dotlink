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
    @stack('styles')
</head>
<body>
<div class="container">
    <!-- menu -->
    <div class="navigation">
        <ul>
            <li>
                <a href="https://dotlink.ir">
                    <span class="icon"><ion-icon name="unlink-outline"></ion-icon></span>
                    <span class="title">دات لینک</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('dashboard') ? 'hovered' : '' }}">
                <a href="{{ route('dashboard') }}">
              <span class="icon"
              ><ion-icon name="home-outline"></ion-icon
                  ></span>
                    <span class="title">خانه</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('urls.index') ? 'hovered' : '' }}">
                <a href="{{ route('urls.index') }}">
                    <span class="icon"><ion-icon name="link-outline"></ion-icon></span>
                    <span class="title">لینک ها</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('urls.create') ? 'hovered' : '' }}">
                <a href="{{ route('urls.create') }}">
                    <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                    <span class="title">لینک جدید</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('show_profile') ? 'hovered' : '' }}">
                <a href="{{ route('show_profile') }}">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">پروفایل</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('settings') ? 'hovered' : '' }}">
                <a href="{{ route('settings') }}">
              <span class="icon"
              ><ion-icon name="settings-outline"></ion-icon
                  ></span>
                    <span class="title">تنظیمات</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('withdrawView') ? 'hovered' : '' }}">
                <a href="{{ route('withdrawView') }}">
                    <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                    <span class="title">برداشت</span>
                </a>
            </li>
            <li>
                <a href="#">
              <span class="icon"
              ><ion-icon name="log-out-outline"></ion-icon
                  ></span>
                    <span class="title">
                        <form class="exit-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="exit-input" value="خروج">
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
                <form action="{{ route('searchUrl') }}" method="get">

                    <label for="">
                        <input type="text" name="search" required id="" placeholder="جستجوی لینک"/>
                        <button type="submit">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                    </label>
                </form>

            </div>
            <!-- userImg -->
            <div class="user">
                <a href="{{ route('show_profile') }}">
                    <img src="{{ asset('images/man.png') }}" alt=""/>
                </a>
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
    // let list = document.querySelectorAll(".navigation li");
    //
    // function activelink() {
    //     list.forEach((item) => {
    //         item.classList.remove("hovered");
    //         this.classList.add("hovered");
    //     });
    // }
    //
    // list.forEach((item) => {
    //     item.addEventListener("mouseover", activelink);
    // });
</script>
</body>
</html>
