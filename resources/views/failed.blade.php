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
  <h2 class="title" style="text-align: center;">Failed Transaction</h2>


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
</div>



</div>


 </section>
 <!-- /wrapper -->
</section>


@stop


<html>

<head>
  <title>Rave Inline Demo</title>
  <link rel='stylesheet' href='/stylesheets/style.css' />
</head>

<body>
  <h1>Pay with Rave</h1>
  <div class="container" id="ravepay">
    <row>
      <div class="col-md-6 col-md-offset-4">
        <form>
          <div class="row">
            <div class="col-md-8">
              <label for="">Email address</label>
              <input type="text" name="email" id="email" class="form-control border-input" value="user@example.com" placeholder="Enter email address" style="margin-bottom: 30px;">
            </div>
          </div>

          <a class="flwpug_getpaid" data-PBFPubKey="FLWPUBK-cba53ee1341aba1ec03fcee26568ae0d-X" data-txref="rave-checkout-1500826869" data-amount="1000" data-customer_email="user@example.com" data-currency="NGN" data-pay_button_text="Pay Now" data-country="NG" data-custom_title="Demo" data-custom_description="" data-redirect_url="" data-custom_logo="" data-payment_method="both"></a>

<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
          <div class="clearfix"></div>
      </div>
      </form>

  </div>
  </row>
  </div>

</body>

</html>


