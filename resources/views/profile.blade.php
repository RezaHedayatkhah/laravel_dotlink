@extends('layout')
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
@section('content')
    <form action="" class="form-container" method="POST">
        @csrf
        @method('PUT')
        @if(Session::has('status'))
            <div class="alert alert-info" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif
        <!-- title input -->
        <h1>پروفایل</h1>
        <div class="input-container">
            <input type="text" name="first_name" id="first_name" class="form-input" placeholder="نام کوچک"
                   value="{{ auth()->user()->first_name }}"/>
            @error('first_name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="input-container">
            <input type="text" name="last_name" id="last_name" class="form-input"
                   value="{{ auth()->user()->last_name }}"
                   placeholder="نام خانوادگی"/>
            @error('last_name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="input-container">
            <input type="email" name="email" id="email" class="form-input"
                   required value="{{ auth()->user()->email }}"
                   placeholder="ایمیل"/>
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="input-container">
            <input type="text" name="id_code" id="id_code" class="form-input"
                   value="{{ auth()->user()->id_code }}" placeholder="کد ملی"/>
            @error('id_code')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="input-container">
            <input type="text" name="phone_number" id="phone_number" class="form-input"
                   value="{{ auth()->user()->phone_number }}"
                   placeholder="شماره موبایل"/>
            @error('phone_number')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="input-container">
            <input type="text" name="card_number" id="card_number" class="form-input"
                   value="{{ auth()->user()->card_number }}" placeholder="شماره کارت بانکی"/>
            @error('card_number')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit button -->
        <button type="submit" class="form-button">ذخیره</button>
    </form>
@endsection
