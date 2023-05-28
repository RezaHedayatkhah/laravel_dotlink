<?php

namespace App\Http\Controllers;

use App\Models\WithdrawReceipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawReceiptController extends Controller
{
    public function index(){
        $receipts = WithdrawReceipt::where('user_id', Auth::id())->orderBy('updated_at', 'DESC')->get();
        return view('withdraw', compact('receipts'));
    }

    public function withdraw(Request $request){
        $user = Auth::user();
        if($user->wallet_balance > 10000){
            if($user->first_name !== null && $user->last_name !== null && $user->id_code !== null && $user->phone_number !== null && $user->card_number !== null){
                $receipt = new WithdrawReceipt();
                $receipt->user_id = Auth::id();
                $receipt->receipt_id = bin2hex(random_bytes(8));
                $receipt->amount = $user->wallet_balance;
                $receipt->card_number = $user->card_number;
                if($receipt->save()){
                    $user->wallet_balance = 0;
                    $user->save();
                    return back()->with('status', 'درخواست برداشت با موفقیت ثبت شد');
                }
            }else{
                return back()->with('status', 'لطفا اطلاعات حساب کاربری خود را تکمیل کنید');
            }

        }else{
            return back()->with('status', 'موجودی کافی نیست');
        }

    }
}
