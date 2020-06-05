<html>

<head>
  <title>Rave Inline Demo</title>
  <link rel='stylesheet' href='/stylesheets/style.css' />
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
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
              <input type="text" name="" id="amount" class="form-control border-input" value="" placeholder="Enter email address" style="margin-bottom: 30px;">
            </div>
          </div>

          <a class="flwpug_getpaid" data-PBFPubKey="FLWPUBK-cba53ee1341aba1ec03fcee26568ae0d-X" data-txref="rave-checkout-1500826869" data-amount="" data-customer_email="user@example.com" data-currency="NGN" data-pay_button_text="Pay Now" data-country="NG" data-custom_title="Demo" data-custom_description="" data-redirect_url="" data-custom_logo="" data-payment_method="both"></a>


          <script>
          $(document).ready(function(){

            $("#amount").keyup(function(){

            var amu = $("#amount").val();
            var ken = data("amount").val(amu);
            console.log(ken);
            });

          });


          </script>
<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
          <div class="clearfix"></div>
      </div>
      </form>

  </div>

  </div>
</row>
</body>

</html>
