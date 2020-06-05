<!DOCTYPE html>
<html>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> --}}
<form>
    <input type="hidden" name="amount" value="amount" required/>

    <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
    <div class="sun_input col-lg-6">
        <input name="amount" type="text" class="form-control input-md" id="amount" value="" data-type="amount" placeholder="Amount">
        <label class="plr15" for="amount">Amount</label>
        <button type="button" onClick="payWithRave()">Pay Now</button>
    </div>

</form>
<?php
$email = 'kenny@gmail.com';
$phone = '08097658765';
//$amount = "";
?>
</html>

<script>
    const API_publicKey = "FLWPUBK_TEST-2dfe7a6c20c66c2bce4f979db53f4b03-X";
        $("#amount").on({keyup: function() {
                //alert('amount');
                var amount = $("#amount").val();




            },
        });
        var price = amount;
    function payWithRave() {
        //var price = out;
        // alert(price);
        // var input_val = input.val();
        // if (input_val === "") {
        //     return;
        //     }

    //$(document).ready(function () {
        // $("#amount").keyup(function () {
        //     var amount = $("amount").val();
            //alert(amount);
        //});
    //});
    //var amount;
        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: "{{ $email }}",
            amount: 
            //amount: price,
            customer_phone: "{{ $phone }}",
            currency: "NGN",
            txref: "rave-123456",
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            //onclose: function() {},
            // callback: function(response) {
            //     var txref = response.data.txRef; // collect txRef returned and pass to a server page to complete status check.
            //     console.log("This is the response returned after a charge", response);
            //     if (
            //         response.data.chargeResponseCode == "00" ||
            //         response.data.chargeResponseCode == "0"
            //     ) {
            //         // redirect to a success page
            //         window.location = '{{ url('paying') }}';
            //     }else{
            //         // redirect to a failure page.
            //         window.location = '{{ url('depositing') }}';
            //     }

            //     x.close(); // use this to close the modal immediately after payment.
            // }
        });
    }
</script>
