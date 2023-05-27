@extends('layout')

@section('content')
<div class="container">
    <div class="d-flex flex-row justify-content-center align-items-center vh-100">
        <div class="col-lg-5 col-11">
            <div class="card card-color text-white">
                <div class="card-header">
                    <h1 class="card-title">ثبت نام</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">نام</label>
                            <input type="text" name="name" class="form-control border-0 bg-dark-subtle" id="name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">آدرس ایمیل</label>
                            <input type="email" name="email" class="form-control border-0 bg-dark-subtle" id="email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">رمز عبور</label>
                            <input type="password" name="password" class="form-control border-0 bg-dark-subtle"
                                id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">ثبت نام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
