@extends('layout')

@section('content')
<div class="container card-color shadow rounded text-white px-4 py-3">
    @if(Session::has('status'))
        <div class="alert alert-info" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif
<form  action="{{ route('urls.store') }}" method="POST">
    @csrf
    <!-- title input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">عنوان</label>
      <input type="text" name="title" id="form4Example1" class="form-control border-0 text-white" style="background-color: #383838;" placeholder="عنوان لینک..." />
        @error('title')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- link input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example2">* لینک</label>
      <input type="text" name="long_url" id="form4Example2" class="form-control border-0 text-white" dir="ltr" style="background-color: #383838;" placeholder="https://www.google.com :نمونه" required />
        @error('long_url')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- description input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">توضیحات</label>
        @error('description')
        <span>{{ $message }}</span>
        @enderror
      <textarea class="form-control border-0 text-white" name="description" id="form4Example3" style="background-color: #383838;" rows="4" placeholder="توضیحات لینک"></textarea>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">کوتاه کن</button>
  </form>
</div>
@endsection
