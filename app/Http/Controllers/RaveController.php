<?php
namespace App\Http\Controllers;

use App\Followship;
use App\Notification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use the Rave Facade
use Rave;

class RaveController extends Controller
{
    public function welcome()
    {
            $followers = Followship::where('user2_id', auth()->user()->id);
            $following = followship::where('user1_id', auth()->user()->id)->get();
            $notifications = Notification::where('user_id', auth()->user()->id)->get();
            $users = User::where('id', '!=', auth()->id())->get();
            $user = Auth::user();
            $amount = "";
            $currency = "NGN";
            $country = "NG";

        return view('welcome', compact('followers', 'following', 'notifications', 'users', 'user', 'amount', 'currency', 'country'));

    }

  public function initialize() {
    //This initializes payment and redirects to the payment gateway
    //The initialize method takes the parameter of the redirect URL
    Rave::initialize(route('callback'));
  }

  public function callback() {
    // This verifies the transaction and takes the parameter of the transaction reference
    $data = Rave::verifyTransaction(request()->txref);


    $chargeResponsecode = $data->data->chargecode;
    $chargeAmount = $data->data->amount;
    $chargeCurrency = $data->data->currency;


    $amount = "";
    $currency = "NGN";

    if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount)  && ($chargeCurrency == $currency)) {
    // transaction was successful...
    // please check other things like whether you already gave value for this ref
    // if the email matches the customer who owns the product etc
    //Give Value and return to Success page

        //return redirect('/success');

    } else {
        //Dont Give Value and return to Failure page

        //return redirect('/failed');
    }

        dd($data->data);


  }
}
