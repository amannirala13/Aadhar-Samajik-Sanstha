<?php
require_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .razorpay-payment-button {
            color: #ffffff !important;
            background-color: #7266ba;
            border-color: #7266ba;
            font-size: 14px;
            padding: 10px;
        }
    </style>
    <title>Donate</title>
</head>

<body>

    <form action="charge.php" method="POST">
        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="<?php echo $razorApiKey; ?>" data-amount="10000" data-buttontext="Pay with Razorpay" data-name="Aadhar NGO" data-description="Donation" data-image="https://your-awesome-site.com/your_logo.jpg" data-prefill.name="Your Name" data-prefill.email="Your Email ID" data-theme.color="#F37254"></script>
        <input type="hidden" value="Hidden Element" name="hidden">
    </form>

</body>

</html>