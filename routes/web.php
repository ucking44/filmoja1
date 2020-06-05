<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\DashboardUsersController;

Route::get('/', function () {
    return view('index');
});

Route::get('/depositing', function(){
    return view('depositing');

 });

Route::get('/dashboard/withdraw', function(){
    return view('dashboard.withdraw');

 });

 //Route::get('/dashboard/deposit', 'DepositController@deposit');

 Route::get('/dashboard/deposit', function(){
    return view('dashboard.deposit');

});

 Route::get('/dashboard/password_change', function(){
    return view('dashboard.password_change');

 });


 Route::get('/dashboard/coin_amount', function(){
    return view('dashboard.coin_amount');

 });

 Route::get('/dashboard/edit_profile', function(){
    return view('dashboard.edit_profile');

 });

//  Route::get('/dashboard/following', function(){
//     return view('dashboard.following');

//  });

Route::get('/dashboard/notification', function(){
    return view('dashboard.notification');

 });

// Route::get('/dashboard/follower', function(){
//     return view('dashboard.follower');

//  });

Route::get('/dashboard/upload_challenge', function(){
    return view('dashboard.upload_challenge');

 });

Route::get('/activate/{code}', 'ActivationController@activation')->name('user.activation');



Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/userAction', 'HomeController@userAction')->name('userAction');
Route::get('/checkNotification', 'HomeController@checkNotification')->name('checkNotification');
Route::get('/dashboard/edit_profile/{id}', 'DashboardUsersController@show');
Route::get('/reloadFollowers', 'HomeController@reloadFollowers')->name('reloadFollowers');
Route::get('/dashboard/following', 'HomeController@followin')->name('dashboard.following');
Route::get('/dashboard/follower', 'HomeController@follower')->name('dashboard.follower');
Route::get('/resend/code', 'ActivationController@coderesend')->name('code.resend');

//Facebook Socialite
Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');

//    FLUTTERWAVE ROUTE (RAVE)
Route::get('/welcome', 'RaveController@welcome')->name('welcome');

Route::post('/pay', 'RaveController@initialize')->name('pay');
Route::get('/pay', 'RaveController@initialize')->name('pay');
Route::post('/rave/callback', 'RaveController@callback')->name('callback');
Route::get('/success', 'RaveController@success')->name('success');
Route::get('/failed', 'RaveController@failed')->name('failed');





// Route::post('/pay', 'RaveController@initiate')->name('pay');
// Route::get('/pay', 'RaveController@initiate')->name('pay');
// Route::get('/checkout', 'RaveController@checkout')->name('checkout');
// Route::post('/checkout', 'RaveController@checkout')->name('checkout');
// Route::post('/webhook', 'RaveController@webhook');
// Route::post('/callback', 'RaveController@callback')->name('callback');
// Route::get('/onclose', 'RaveController@onclose')->name('onclose');

// Route::get('paying', function () {
//     return view('paying');
// });


// Route::get('/paying', 'RaveController@paying')->name('paying');

// Route::get('/success', function() {
//     return view('success');
// })->name('success');

// Route::get('/failed', function() {
//     return view('failed');
// })->name('failed');

// Route::post('/pay', 'RaveController@initiate')->name('pay');
// Route::get('/pay', 'RaveController@initiate')->name('pay');
// Route::get('/checkout', 'RaveController@checkout')->name('checkout');
// Route::post('/checkout', 'RaveController@checkout')->name('checkout');
// Route::post('/webhook', 'RaveController@webhook');
// Route::post('/callback', 'RaveController@callback')->name('callback');
// Route::get('/onclose', 'RaveController@onclose')->name('onclose');

