@extends('layout')

@section('content')
    <!-- cards -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">{{ $urlViews }}</div>
                <div class="cardName">بازدیدها</div>
            </div>
            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">{{ Auth::user()->withdraw_receipts->sum('amount') }}</div>
                <div class="cardName">برداشت ها</div>
            </div>
            <div class="iconBx">
                <ion-icon name="receipt-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">{{ Auth::user()->urls->count() }}</div>
                <div class="cardName">تعداد لینک ها</div>
            </div>
            <div class="iconBx">
                <ion-icon name="link-outline"></ion-icon>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">{{ Auth::user()->wallet_balance }}</div>
                <div class="cardName">درآمد</div>
            </div>
            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!-- data list -->
    <div class="details">
        <div class="recentLinks">
            <div class="cardHeader">
                <h2>جدیدترین لینک ها</h2>
                <a href="" class="btn">همه لینک ها</a>
            </div>
            <table>
                <thead>
                <tr>
                    <td>عنوان</td>
                    <td>لینک</td>
                    <td>بازدیدها</td>
                    <td>وضعیت</td>
                    <td>تغییرات</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($urls as $url)

                    <tr>
                        <td><a>{{ Str::limit($url->title, 20) }}</a></td>
                        <td>
                            <a href="{{ route('click', [$url->url_code]) }}">
                                {{ route('click', [$url->url_code])}}
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
                        <td><span class="status inactive-link"><a
                                    href="{{ route('urls.edit',[$url]) }}" style="color: #fff">ویرایش</a></span></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
