@extends('layout')
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
@section('content')
    <form class="form-container" action="{{ route('urls.store') }}" method="POST">
        @csrf
        @if(Session::has('status'))
            <div class="alert" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif
        <h1>لینک جدید</h1>
        <div class="input-container">
            <input id="title" name="title" class="form-input" type="text" placeholder="عنوان"/>
        </div>
        <div class="input-container">
            <input id="long_url" name="long_url" class="form-input" type="text" placeholder="لینک" required/>
        </div>
        <div class="input-container">
            <input id="description" name="description" class="form-input" type="text" placeholder="توضیحات"/>
        </div>
        <button type="submit" class="form-button">کوتاه کن!</button>
    </form>
@endsection
