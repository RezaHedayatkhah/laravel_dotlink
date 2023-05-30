<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js'])


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>لیست لینک ها</title>
    <style>
        *{
            font-family: 'Vazirmatn', sans-serif;
            font-size: 1rem;
        }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('main.css') }} ">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark rounded-bottom-5">
        <div class="container-fluid">
            <a class="navbar-brand mx-5 text-primary" href="https://www.dotlink.ir">
                <i class="bi bi-link-45deg fs-3 "></i>
                <span class="">دات لینک</span>
            </a>
            <button class="navbar-toggler text-bg-info" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item">
                            <p class="nav-link rounded-pill bg-success " aria-current="page" href="{{ route('dashboard') }}">
                                <span class="px-2 text-white fs-6">موجودی {{ number_format(auth()->user()->wallet_balance,) }} تومان </span>
                            </p>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
                                <i class="bi bi-house text-primary fs-4"></i>
                                <span class="px-2 text-white">خانه</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('show_profile') }}">
                                <i class="bi bi-person text-primary fs-4"></i>
                                <span class="px-2 text-white">پروفایل</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('urls.index') }}">
                                <i class="bi bi-card-list text-primary fs-4"></i>
                                <span class="px-2 text-white">لینک ها</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('urls.create') }}">
                                <i class="bi bi-plus-square text-primary fs-4"></i>
                                <span class="px-2 text-white">لینک جدید</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('settings') }}">
                                <i class="bi bi-gear text-primary fs-4"></i>
                                <span class="px-2 text-white">تنظیمات</span>
                            </a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="{{ route('withdrawView') }}">
                                <i class="bi bi-coin text-primary fs-4"></i>
                                <span class="px-2 text-white">برداشت</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="nav-link btn btn-danger rounded-pill " type="submit">
                                    <i class="bi bi-box-arrow-left text-primary fs-5"></i>
                                    <span class="px-1 text-white ">خروج</span>
                                </button>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth') }}">
                                <i class="bi bi-box-arrow-in-left text-primary fs-4"></i>
                                <span class="px-2 text-white">ورود</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth') }}">
                                <i class="bi bi-pencil-square text-primary fs-4"></i>
                                <span class="px-2 text-white">ثبت نام</span>
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid pt-4">
        @yield('content')

    </div>

</body>

</html>
