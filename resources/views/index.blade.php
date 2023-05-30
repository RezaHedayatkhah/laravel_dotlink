@extends('layout')

@section('content')

<div >


    @if(Session::has('status'))
        <div class="alert alert-info" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif

        <div class="container card-color shadow rounded text-white px-4 py-3 big-size">
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
                    <textarea class="form-control border-0 text-white" name="description" id="form4Example3" style="background-color: #383838;" rows="2" placeholder="توضیحات لینک"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">کوتاه کن</button>
            </form>
        </div>

    <div class="d-flex flex-column w-100 m-auto f-size text-center text-white big-size">
        <div class="card-color d-flex flex-row justify-content-between shadow rounded p-2 my-2">
            <p class="col-3">عنوان</p>
            <p class="col-2">وضعیت</p>
            <p class="col-1">لینک کوتاه</p>
            <p class="col-2">تعداد بازدید</p>
            <p class="col-4">تغییرات</p>
        </div>

        @foreach ($urls as $url)
        <div class="d-flex flex-row justify-content-between align-items-center mb-2 py-3 card-color shadow rounded">

            <div class="d-flex align-items-center justify-content-center col-3">
                <div class="ms-3">
                    <p class="">{{ Str::limit($url->title, 20) }}</p>
                </div>
            </div>

            <div class="col-2">
                @if ($url->status === 'active')
                <span class="badge bg-success rounded-pill ">
                    فعال
                </span>
                @elseif()
                <span class="badge bg-warning rounded-pill">
                    غیرفعال
                </span>
                @endif
            </div>

            <div class="col-1">
                <a href="{{ route('click', [$url->url_code]) }}">
                    <i class="bi bi-link fs-1 p-2"></i>
                </a>
            </div>

            <div class="col-2">{{ $url->views }}</div>

            <div class="col-4 d-flex flex-row justify-content-center gap-3">
                <a class="badge bg-info rounded-pill text-decoration-none px-2 py-1" href="{{ route('urls.edit', $url) }}">ویرایش</a>
                <form action="{{ route('urls.destroy', $url->id) }}" method="POST">


                    @csrf
                    @method('DELETE')

                    <button type="submit" class="badge bg-danger rounded-pill px-2 py-1">حذف</button>
                </form>

            </div>

        </div>

        @endforeach

    </div>
        <div class="d-flex flex-row align-items-center justify-content-center my-3 m-auto w-100">
            {!! $urls->links() !!}
        </div>

</div>

@endsection
