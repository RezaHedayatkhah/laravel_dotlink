@extends('layout')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-row justify-content-center mt-5">
        <div class="col-lg-4 col-12">
            <div class="card card-color text-white">
                <div class="card-header">
                    <h1 class="card-title">ثبت نام</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('status'))
                    <div class="alert alert-info" role="alert">
                        {{ Session::get('status') }}
                    </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">آدرس ایمیل</label>
                            <input type="email" name="email" class="form-control border-0 bg-dark-subtle" id="email"
                                required>
                            @error('email')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">رمز عبور</label>
                            <input type="password" name="password" class="form-control border-0 bg-dark-subtle"
                                id="password" required>
                            @error('password')
                            <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">تکرار رمز عبور</label>
                            <input type="password" name="password_confirmation" class="form-control border-0 bg-dark-subtle"
                                   id="password_confirmation" required>
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
