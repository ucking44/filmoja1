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

  <form>
    <div class="sun_input col-lg-6">
        <input name="amount_id" id="amount_id" type="text" value="" class="form-control input-md" placeholder="Username">
        <label class="plr15" for="amount">Amount</label>
    </div>
    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    {{-- <button type="button" >Pay Now</button> --}}

<!-- Text input-->
<div class="setting-panel row" style="padding-bottom: 0;">



 <div class="clear"></div>




</div>




  <div class="form-group last-sett-btn modal-footer lo">
    <div class="ball-pulse"><div></div><div></div><div></div></div><br>
    {{-- <button type="submit" class="btn btn-main setting-panel-mdbtn kk" id="update_user_data" style="">Deposit history</button> --}}

 <button type="submit" class="btn btn-main setting-panel-mdbtn " onClick="payWithRave()" >Continue</button>
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


<script>
    const API_publicKey = "FLWPUBK_TEST-2dfe7a6c20c66c2bce4f979db53f4b03-X";

    //var amount = $('#amount_id').val();
    function payWithRave() {
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "user@example.com",
            amount: amount,
            customer_phone: "234099940409",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"

            }],

            //alert('hello');
            onclose: function() {},
            callback: function(response) {
                var txref = response.data.txRef; // collect txRef returned and pass to a                    server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if (
                    response.data.chargeResponseCode == "00" ||
                    response.data.chargeResponseCode == "0"
                ) {
                    // redirect to a success page
                } else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }
</script>

