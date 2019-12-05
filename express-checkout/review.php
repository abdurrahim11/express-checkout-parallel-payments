<?php
require_once('../vendor/angelleye/paypal-php-library/includes/config.php');
?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PayPal Express Checkout - Parallel Payments | Order Review | PHP Class Library | Angell EYE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
<!--script src="../assets/js/less-1.3.3.min.js"></script-->
<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/images/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/images/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/images/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../../assets/images/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../../assets/images/favicon.png">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../assets/js/scripts.js"></script>
</head>

<body>
<div class="container">
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div id="header" class="row clearfix">

      <div class="row clearfix">
        <div class="col-md-4 column">
          <p><strong>Billing Information</strong></p>
          <p>
          	<?php
			echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'] . '<br />' . 
			$_SESSION['email'] . '<br />'. 
			$_SESSION['phone_number'] . '<br />';
			?>
          </p>
        </div>
        <div class="col-md-4 column">
          <p><strong>Shipping Information</strong></p>
          <p>
          	<?php 
			echo $_SESSION['shipping_name'] . '<br />' .
			$_SESSION['shipping_street'] . '<br />' .
			$_SESSION['shipping_city'] . ', ' . $_SESSION['shipping_state'] . '  ' . $_SESSION['shipping_zip'] . '<br />' . 
			$_SESSION['shipping_country_name']; 
			?>
          </p>
        </div>
        <div class="col-md-4 column">
          <table class="table">
            <tbody>
            <tr>
                <td><strong> Total</strong></td>
                <td>$<?php echo number_format($_SESSION['shopping_cart']['grand_total'],2); ?></td>
            </tr>
              <tr>
                  <td class="center" colspan="2"><a href="DoExpressCheckoutPayment.php" class="btn btn-success btn-lg" role="button">Complete Order</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>