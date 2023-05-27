@extends('layout')

@section('content')
<div class="container card-color shadow rounded text-white px-4 py-3">
<form  action="{{ route('urls.store') }}" method="POST">
    @csrf
    <!-- title input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example1">عنوان</label>
      <input type="text" name="title" id="form4Example1" class="form-control border-0" style="background-color: #383838;" placeholder="عنوان لینک..." />
    </div>

    <!-- link input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example2">* لینک</label>
      <input type="url" name="long_url" id="form4Example2" class="form-control border-0" style="background-color: #383838;" placeholder="لینک را اینجا وارد کنید" required />
    </div>

    <!-- description input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="form4Example3">توضیحات</label>
      <textarea class="form-control border-0" name="description" id="form4Example3" style="background-color: #383838;" rows="4" placeholder="توضیحات لینک"></textarea>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">کوتاه کن</button>
  </form>
</div>
@endsection
