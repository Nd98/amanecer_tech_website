<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Paypal Checkout</title>
  <link rel="icon" href="../images/amanecer_logo.jpg">
</head>
<body style="text-align: center;">
    <header>
        <img src="../images/paypal-logo.jpg" alt="paypal" width="300px" height="300px">
    </header>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<div id="paypal-button-container"></div>

<div id="confirm" hidden="true">
    <div>Ship to:</div>
    <div><span id="recipient"></span>, <span id="line1"></span>, <span id="city"></span></div>
    <div><span id="state"></span>, <span id="zip"></span>, <span id="country"></span></div>
    <div><span id="amount"></span></div>

    <button id="confirmButton">Complete Payment</button>
</div>

<div id="thanks" hidden="true">
    Thanks, <span id="thanksname"></span>!
</div>
<div id="cancel">
    <button onclick="location.href ='error.php';">Cancel Transaction</button>
</div>

<script>
    paypal.Button.render({

        env: 'production', // sandbox | production

        client: {
            sandbox:    'Ae-vLJNAjLFwG94LGpwBXJJ2gw54Hpxm5mpU4ziMTwDztimGclOCGN8UarEXRLaHt8BmTLFDqZmhN_GQ',
            production: 'AQSyCkrrEqVLl2C7KYUe6LX8KxzcBLa9cPghyeBgexJgEoc8jRsCNiZJ9M4eP__YpOS_BwZQd72FKfnf'
        },

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: <?php echo $_SESSION['amount'];  ?>, currency: 'USD' }
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {

            // Get the payment details

            return actions.payment.get().then(function(data) {

                // Display the payment details and a confirmation button

                var shipping = data.payer.payer_info.shipping_address;

                document.querySelector('#recipient').innerText = shipping.recipient_name;
                document.querySelector('#line1').innerText     = shipping.line1;
                document.querySelector('#city').innerText      = shipping.city;
                document.querySelector('#state').innerText     = shipping.state;
                document.querySelector('#zip').innerText       = shipping.postal_code;
                document.querySelector('#country').innerText   = shipping.country_code;
                document.querySelector('#amount').innerText   = "<?php echo 'Amount: '.$_SESSION['amount'];?>" + " USD";


                document.querySelector('#paypal-button-container').style.display = 'none';
                document.querySelector('#confirm').style.display = 'block';

                // Listen for click on confirm button

                document.querySelector('#confirmButton').addEventListener('click', function() {

                    // Disable the button and show a loading message
                    document.querySelector('#cancel').style.display = 'none';
                    document.querySelector('#confirm').innerText = 'Loading...';
                    document.querySelector('#confirm').disabled = true;

                    // Execute the payment

                    return actions.payment.execute().then(function() {

                        // Show a thank-you note

                        document.querySelector('#thanksname').innerText = shipping.recipient_name;

                        document.querySelector('#confirm').style.display = 'none';
                        document.querySelector('#thanks').style.display = 'block';
                        location.href = 'thank-you.php';
                    });
                });
            });
        }

    }, '#paypal-button-container');
</script>
    