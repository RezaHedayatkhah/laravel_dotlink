@extends('layout')

@section('content')
<div class="container-fluid">


    <div class="d-flex flex-row justify-content-center mt-5">
        <div class="col-lg-4 col-12">
            <div class="card card-color text-white">
                <div class="card-header">
                    <h1 class="card-title">ورود</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('status'))
                    <div class="alert alert-info" role="alert">
                        {{ Session::get('status') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">آدرس ایمیل</label>
                            <input type="email" name="email" class="form-control border-0 bg-dark-subtle" id="email"
                                required>
                            @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">رمز عبور </label>
                            <input type="password" name="password" class="form-control border-0 bg-dark-subtle"
                                id="password" required>
                            @error('password')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
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
