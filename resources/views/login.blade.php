@extends('layout')

@section('content')
<div class="container">


    <div class="d-flex flex-row justify-content-center align-items-center vh-100">
        <div class="col-lg-5 col-11">
            <div class="card card-color text-white">
                <div class="card-header">
                    <h1 class="card-title">ورود</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">آدرس ایمیل</label>
                            <input type="email" name="email" class="form-control border-0 bg-dark-subtle" id="email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">رمز عبور </label>
                            <input type="password" name="password" class="form-control border-0 bg-dark-subtle"
                                id="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">ورود</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
