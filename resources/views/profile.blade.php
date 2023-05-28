@extends('layout')

@section('content')
    <div class="container card-color shadow rounded text-white px-4 py-3">
        @if(Session::has('status'))
            <div class="alert alert-info" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif
        <form  action="" method="POST">
            @csrf
            @method('PUT')

            <!-- title input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="first_name">نام کوچک</label>
                <input type="text" name="first_name" id="first_name" class="form-control border-0 text-white" style="background-color: #383838;" value="{{ auth()->user()->first_name }}" />
                @error('first_name')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="last_name">نام خانوادگی</label>
                <input type="text" name="last_name" id="last_name" class="form-control border-0 text-white" style="background-color: #383838;" value="{{ auth()->user()->last_name }}" />
                @error('last_name')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">ایمیل</label>
                <input type="email" name="email" id="email" class="form-control border-0 text-white" style="background-color: #383838;" required value="{{ auth()->user()->email }}" />
                @error('email')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="id_code">کد ملی</label>
                <input type="text" name="id_code" id="id_code" class="form-control border-0 text-white" style="background-color: #383838;" value="{{ auth()->user()->id_code }}" />
                @error('id_code')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="phone_number">شماره موبایل</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control border-0 text-white" style="background-color: #383838;" value="{{ auth()->user()->phone_number }}" />
                @error('phone_number')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="card_number">شماره کارت بانکی</label>
                <input type="text" name="card_number" id="card_number" class="form-control border-0 text-white" style="background-color: #383838;" value="{{ auth()->user()->card_number }}" />
                @error('card_number')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">ذخیره</button>
        </form>
    </div>
@endsection
