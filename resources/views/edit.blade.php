{{--@extends('layout')--}}

{{--@section('content')--}}
{{--    <div class="container card-color shadow rounded text-white px-4 py-3">--}}
{{--        @if(session('status'))--}}
{{--            <div class="alert alert-info mb-1 mt-1">--}}
{{--                {{ session('status') }}--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <form action="{{ route('urls.update', $url->id) }}" method="POST" id="myform">--}}
{{--            @csrf--}}
{{--            @method('PUT')--}}
{{--            <!-- title input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <label class="form-label" for="form4Example1">عنوان</label>--}}
{{--                <input type="text" name="title" id="form4Example1" class="form-control border-0 text-white"--}}
{{--                       style="background-color: #383838;" placeholder="عنوان لینک..." value="{{ $url->title }}"/>--}}
{{--                @error('title')--}}
{{--                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- link input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <label class="form-label" for="form4Example2">لینک</label>--}}
{{--                <input type="url" name="long_url" id="form4Example2" class="form-control border-0 text-white"--}}
{{--                       style="background-color: #383838;" placeholder="لینک را اینجا وارد کنید" required--}}
{{--                       value="{{ $url->long_url }}"/>--}}
{{--                @error('long_url')--}}
{{--                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- type input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <label class="form-label" for="form4Example9">نوع لینک</label>--}}
{{--                <select name="type" id="form4Example9" form="myform" class="form-control border-0 text-white"--}}
{{--                        style="background-color: #383838;" required>--}}
{{--                    <option value="ad" {{ ($url->type === 'ad' ? "selected":"") }}>تبلیغات</option>--}}
{{--                    <option value="direct" {{ ($url->type === 'direct' ? "selected":"") }}>لینک مستقیم</option>--}}
{{--                </select>--}}
{{--                @error('long_url')--}}
{{--                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- description input -->--}}
{{--            <div class="form-outline mb-4">--}}
{{--                <label class="form-label" for="form4Example3">توضیحات</label>--}}
{{--                <textarea class="form-control border-0 text-white" name="description" id="form4Example3"--}}
{{--                          style="background-color: #383838;" rows="4"--}}
{{--                          placeholder="توضیحات لینک">{{ $url->description }}</textarea>--}}
{{--                @error('description')--}}
{{--                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}

{{--            <!-- Submit button -->--}}
{{--            <button type="submit" class="btn btn-primary btn-block mb-4">ثبت تغییرات</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('layout')
@push('styles')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
@endpush
@section('content')
    <form class="form-container" action="{{ route('urls.update', $url->id) }}" method="POST">
        @csrf
        @method('PUT')
        @if(Session::has('status'))
            <div class="alert" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif
        <h1>لینک جدید</h1>
        <div class="input-container">
            <input id="title" name="title" class="form-input" type="text" placeholder="عنوان"
                   value="{{ $url->title }}"/>
        </div>
        <div class="input-container">
            <input id="long_url" name="long_url" class="form-input" type="text" placeholder="لینک" required
                   value="{{ $url->long_url }}"/>
        </div>
        <div class="input-container">
            <input id="description" name="description" class="form-input" type="text" placeholder="توضیحات"
                   value="{{ $url->description }}"/>
        </div>
        <button type="submit" class="form-button">ثبت تغییرات</button>
    </form>
@endsection
