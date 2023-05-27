@extends('layout')

@section('content')
<div >


    @if ($message = Session::get('success'))
    <div class="alert alert-success my-3">
        <p>{{ $message }}</p>
    </div>
    @endif


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
                @else
                <span class="badge bg-warning rounded-pill">
                    غیرفعال
                </span>
                @endif
            </div>

            <div class="col-1">
                <a href="{{ route('click', [$url->url_code]) }}">
                    <i class="bi bi-link fs-2 p-2"></i>
                </a>
            </div>

            <div class="col-2">{{ $url->views }}</div>

            <div class="col-4 d-flex flex-row justify-content-center gap-3">
                <a class="badge bg-info rounded-pill text-decoration-none px-2 py-1" href="{{ route('urls.edit', $url->id) }}">ویرایش</a>
                <form action="{{ route('urls.destroy', $url->id) }}" method="POST">


                    @csrf
                    @method('DELETE')

                    <button type="submit" class="badge bg-danger rounded-pill px-2 py-1">حذف</button>
                </form>

            </div>

        </div>

        @endforeach

    </div>
</div>

@endsection
