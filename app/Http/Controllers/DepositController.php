<?php

namespace App\Http\Controllers;

use App\Followship;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function deposit()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)->get();
        $followers = Followship::where('user2_id', auth()->user()->id)->get();
        $following = followship::where('user1_id', auth()->user()->id)->get();
        $user = Auth::user();
        $currency = "NGN";
        $country = "NG";
        $amount = "";
        return view('/dashboard/deposit', compact('notifications', 'followers', 'following', 'user', 'currency', 'country', 'amount'));
    }

}
