@extends('layouts.dashboard')
@section('content')

<section class="filmoja-breadcrumb-area section_70">
    <div class="container">
       <div class="row">
            <div class="breadcrumb-box" style="height: 250px;"><br><br><br><br>
                <h2>Upload Cover Picture</h2>
                <div class="upload-btn-wrapper dd">
                   <button class="btn" style="padding: 7px 12px;">Upload</button>
                     <input type="file" name="myfile" />
                 </div>


<style type="text/css">

</style>
             </div>
       </div>
    </div>
 </section>
 <!-- Breadcrumb Area End -->
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
   MAIN CONTENT
   *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
 <section class="wrapper">
   <!-- page start-->
   <div class="row mt">

     <div class="col-sm-1"></div>
     <div class="col-sm-10">
     <div class="wo_settings_page sun_sett_page">
  <h3 style="text-align: center;">Deposit</h3>

    <form method="POST" action="{{ route('pay') }}" id="paymentForm">
        @csrf
        <input type="hidden" name="amount" value="{{ $amount }}" /> <!-- Replace the value with your transaction amount -->
        <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
        <input type="hidden" name="country" value="{{ $country }}" /> <!-- Replace the value with your transaction country -->
        <input type="hidden" name="currency" value="{{ $currency }}" /> <!-- Replace the value with your transaction currency -->
        <input type="hidden" name="email" value="{{ $user->email }}" /> <!-- Replace the value with your customer email -->
        <input type="hidden" name="name" value="{{ $user->name }}" /> <!-- Replace the value with your customer firstname -->
        <input type="hidden" name="metadata" value="" > <!-- Meta data that might be needed to be passed to the Rave Payment Gateway -->
        <div class="sun_input col-lg-6">
            <input name="amount" type="text" class="form-control input-md" placeholder="Username">
            <label class="plr15" for="amount">Amount</label>
        </div>

<!-- Text input-->
<div class="setting-panel row" style="padding-bottom: 0;">



 <div class="clear"></div>




</div>




  <div class="form-group last-sett-btn modal-footer lo">
    <div class="ball-pulse"><div></div><div></div><div></div></div><br>
    <button type="submit" class="btn btn-main setting-panel-mdbtn kk" id="update_user_data" style="">Deposit history</button>

 <button type="submit" class="btn btn-main setting-panel-mdbtn " id="update_user_data" value="Buy" >Continue</button>
    </div><br>
<style type="text/css">
  .lo .btn-main {
color: #ffffff;
background-color: #4d91ea;
border-color: #4d91ea;
}
.lo .btn-main:hover {
color: #ffffff;
background-color: #2e7be5;
border-color: #2e7be5;
}
@media only screen and (min-width: 1170px) {
.kk{
float: left;
}
}

</style>
</form>
</div>



</div>


 </section>
 <!-- /wrapper -->
</section>


@stop
