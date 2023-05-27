<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\visitorIP;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClickController extends Controller
{
    public function click(Request $request, string $url_code)
    {
        if ($url = Url::where('url_code', $url_code)->first()) {

            if($url->type === 'ad'){
                return view('click', compact('url'));
            }else{
                $this->setView($request, $url);
                return Redirect::away($url->long_url);

            }
        }
    }

    public function adClick(Request $request, string $url_code){
        if ($url = Url::where('url_code', $url_code)->first()) {
            $this->setView($request, $url);
            return Redirect::away($url->long_url);

        }
    }

    public function setView(Request $request, Url $url)
    {
        if ($visitor = visitorIP::where('ip', $request->getClientIp())->first()) {
            if($visitor->chance > 0){
                if (Carbon::parse($visitor->last_login_at)->diffInHours(Carbon::now()) > 24) {
                    $visitor->last_login_at = Carbon::now()->toDateTimeString();
                    $visitor->chance = 2;
                    if ($visitor->save()) {
                        $url->increment('views');
                        $visitor->decrement('chance');
                        $url->user->increment('wallet_balance', 10);
                        $visitor->save();
                        $url->save();
                    }
                }elseif (Carbon::parse($visitor->last_login_at)->diffInHours(Carbon::now()) < 24) {
                    $url->increment('views');
                    $visitor->decrement('chance');
                    $url->user->increment('wallet_balance', 10);
                    $visitor->save();
                    $url->save();
                }
            }
        } else {
            $visitor = new visitorIP();
            $visitor->ip = $request->getClientIp();
            $visitor->last_login_at = Carbon::now()->toDateTimeString();
            if ($visitor->save()) {
                $url->increment('views');
                $visitor->decrement('chance');
                $url->user->increment('wallet_balance', 10);
                $visitor->save();
                $url->save();
            }
        }
    }
}


