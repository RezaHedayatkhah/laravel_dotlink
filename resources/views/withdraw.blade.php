@extends('layout')

@section('content')
    <div class="details">
        <div class="recentLinks">



            <div>
                @if (Session::has('status'))
                    <div style="color: white; border-radius: 25px; background-color: gray; margin-bottom: 10px; padding-right: 5px;"
                        role="alert">
                        {{ Session::get('status') }}
                    </div>
                @endif
                <div class="cardHeader">
                    <h2>برداشت وجه</h2>
                    <form action="{{ route('withdraw') }}" method="POST" id="myform" class="mt-3">
                        @csrf

                        <!-- Submit button -->
                        <button type="submit" style="border:none; cursor: pointer;" class="btn">برداشت</button>
                    </form>
                </div>


                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>رسید</th>
                                <th>وضعیت</th>
                                <th>مبلغ</th>
                                {{-- <th>روش برداشت</th> --}}
                                <th>شماره کارت</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($receipts as $receipt)
                                <tr>
                                    <th scope="row">
                                        {{ $receipt->receipt_id }}
                                    </th>
                                    <td>
                                        {{ $receipt->status }}
                                    </td>
                                    <td>
                                        {{ $receipt->amount }}
                                    </td>
                                    {{-- <td>
                                        {{ $receipt->withdraw_type }}
                                    </td> --}}
                                    <td>
                                        {{ $receipt->card_number }}
                                    </td>
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
