@extends('layout')

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center  ">
        @if(Session::has('status'))
            <div class="alert alert-info" role="alert">
                {{ Session::get('status') }}
            </div>
        @endif
        <div class="d-flex flex-column w-100 card-color shadow rounded text-white px-md-4 px-1 py-3 big-size">
        <h2>برداشت وجه</h2>
        <form action="{{ route('withdraw') }}" method="POST" id="myform" class="mt-3">
            @csrf

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">برداشت</button>
        </form>

            <div class="d-flex flex-column bg-dark shadow rounded w-100 m-auto f-size text-center text-white big-size overflow-auto p-3 my-5">
                <table class="table text-white">
                    <thead>
                    <tr>
                        <th scope="col">رسید</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">مبلغ</th>
                        <th scope="col">روش برداشت</th>
                        <th scope="col">شماره کارت</th>
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
                        <td>
                            {{ $receipt->withdraw_type }}
                        </td>
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
@endsection
