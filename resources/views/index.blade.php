@extends('layout')

@section('content')

    <!-- data list -->
    <div class="details">
        <div class="recentLinks">
            <div class="cardHeader">
                <h2>لینک ها</h2>
            </div>
            <table>
                <thead>
                <tr>
                    <td>عنوان</td>
                    <td>لینک کوتاه</td>
                    <td>بازدیدها</td>
                    <td>وضعیت</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($urls as $url)

                    <tr>
                        <td><a href="{{ route('urls.edit',[$url]) }}">{{ Str::limit($url->title, 20) }}</a></td>
                        <td>
                            <a href="{{ route('click', [$url->url_code]) }}">
                                {{ route('click', [$url->url_code]) }}
                            </a>
                        </td>
                        <td>{{ $url->views }}</td>

                        @if ($url->status === 'active')
                            <td><span class="status active-link">فعال</span></td>
                        @elseif($url->status === 'inactive')
                            <td><span class="status inactive-link">غیر فعال</span></td>
                        @elseif($url->status === 'deleted')
                            <td><span class="status deleted-link">حذف شده</span></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
