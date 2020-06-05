<?php

namespace App\Http\Controllers;

use App\Followship;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Rave44Controller extends Controller
{
    public function paying()
    {
        $notifications = Notification::where('user_id', auth()->user()->id)->get();
        $followers = Followship::where('user2_id', auth()->user()->id)->get();
        $following = followship::where('user1_id', auth()->user()->id)->get();
        $user = Auth::user();
        $currency = "NGN";
        $country = "NG";
        $amount = "";
        return view('paying', compact('notifications', 'followers', 'following', 'user', 'currency', 'country', 'amount'));
    }

    public function initiate(Request $request)
    {

         $pubKey = 'FLWPUBK_TEST-2dfe7a6c20c66c2bce4f979db53f4b03-X';
        // $raveUrl = "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay";
        if($request->input('submit')){
            $data = [];
            $raveresponse = $client->request('POST', $raveUrl, [
                'form_params' => [
                    'txref' => $data['merchant_order_id']
                    'PBFPubKey' => $data[$pubKey],
                    'customer_email' => $data['email'],
                    'amount' => $data['total'],
                    'currency' => $data['currency_code'],//currency_code
                    'redirect_url' => $redirect_url[],
                    'onclose'=> $this->onclose(),
                ],

                ]);

            // $pubKey = 'FLWPUBK_TEST-647f6289f74aba024f10cc12f71bd6a2-X';
            // $email = $request->input('customer_email');
            // $amount = (int) $request->input('amount');
            // $currency = $request->input('currency');
            // $redirect_url = $request->input('redirect_url');

        //https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay

        // $client = new \GuzzleHttp\Client();
        // $raveUrl = "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay";
        // $raveresponse = $client->request('POST', $raveUrl, [
        //     'form_params' => [
        //         //'txref' => $data['merchant_order_id'],
        //         'txref' => uniqid().uniqid(),
        //         'PBFPubKey' => $pubKey,
        //         'customer_email' => $email['email'],
        //         'amount' => $amount['amount'],
        //         'currency' => $currency['currency'],//currency_code
        //         'redirect_url' => $redirect_url,
        //         'onclose'=> $this->onclose()
        // ]

        // $client = new \GuzzleHttp\Client();
        // $pubKey = 'FLWPUBK_TEST-647f6289f74aba024f10cc12f71bd6a2-X';
        // $url = "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay";
        // $email = $request->input('customer_email');
        // $amount = (int) $request->input('amount');
        // $currency = $request->input('currency');
        // $redirect_url = $request->input('redirect_url');
        // $request = $client->post($pubKey, $url, ['customer_email' => $email], ['amount' => $amount], ['currency' => $currency], ['redirect_url' => $redirect_url]);
        // $response = $request->send();

        // $response = Http::post('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay', [
        // 'txref' => uniqid().uniqid(),
        // 'PBFPubKey' => 'FLWPUBK_TEST-647f6289f74aba024f10cc12f71bd6a2-X',
        // 'customer_email' => $cemil,
        // 'amount' => $amount,
        // 'currency' => $currency,
        // 'redirect_url' => $redirect_url,
        // 'onclose'=> $this->onclose()
        // ]);

        $raveresponse['data'];

        if(isset($raveresponse['data']['link'])){
            $link = $raveresponse['data']['link'];
        }

        //return response(json_encode($result), 200)->header('Content-Type', 'text/plain');
        return redirect()->away($link);

        }
    }

    public function checkout(Request $request){

        //$uri = $request->path();

        $flwref = $request->query('flwref');
        $txref = $request->query('txref');


        $return_data = array('flwref'=> $flwref,'txref'=> $txref);


        if($request->query('resp')){
            $resp   = $request->query('resp');
            $return_data['resp'] = $resp;
        }else{
            echo 'resp query not set';
        }

        if($request->query('cancelled')){
            return $this->onclose();
        }

        return $this->callback();
    }

    public function webhook(){

         // Retrieve the request's body
        $body = @file_get_contents("php://input");

        // retrieve the signature sent in the reques header's.
        $signature = (isset($_SERVER['HTTP_VERIF']) ? $_SERVER['HTTP_VERIF'] : '');

        /* It is a good idea to log all events received. Add code *
        * here to log the signature and body to db or file       */

        if (!$signature) {

            // only a post with rave signature header gets our attention
            exit();
        }

        // Store the same signature on your server as an env variable and check against what was sent in the headers
        $local_signature = env('SECRET_HASH');

        // confirm the event's signature
        if ($signature !== $local_signature) {
            // silently forget this ever happened
            exit();
        }

        http_response_code(200); // PHP 5.4 or greater
        // parse event (which is json string) as object
        // Give value to your customer but don't give any output
        // Remember that this is a call from rave's servers and
        // Your customer is not seeing the response here at all
        $response = json_decode($body, true);
        // return dd($response);
        $status = $response['status'];
        $customer = $response['customer'];

        if($status === 'successful'){
            //update paid field to true where customer email = $customer['email']
            //to test if the webhook works locally make a post request to it using postman
            //if the local request echo what is inside this block then it works..
            return $customer['email'];

        }

    }

    public function callback() {
    /*
    Check if your database has been updated and that the user has been give value
    */
        $db_paid_field = true;

    if($db_paid_field === true){
        return redirect()->route('success');
    }

  }

    public function onclose(){
        #redirect them back to the homepage
        return back()->withInput();

    }

}
