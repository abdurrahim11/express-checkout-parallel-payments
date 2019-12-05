<?php
require_once('../vendor/angelleye/paypal-php-library/includes/config.php');

/**
 * A unique identifier for the merchant.  
 * For parallel payments, this field is required and must contain the Payer ID 
 * or the email address of the merchant.
 *
 * Here we have two separate PayPal sandbox accounts setup as receivers, so that
 * we can see the split take place during the demo.
 */
$seller_a = 'sb-ayrhm669680@personal.example.com';
$seller_b = 'sb-gxvld669798@personal.example.com';
$seller_c = 'sb-43f47c4669878@personal.example.com';

/**
 * Here we are building a very simple, static shopping cart to use
 * throughout this demo.  In most cases, you will working with a dynamic
 * shopping cart system of some sort.
 *
 * For the purposes of this Parallel Payments demo we have added a
 * "seller_id" to the cart items.
 */
$_SESSION['items'][0] = array(
    'id' => '123-ABC',
    'name' => 'Widget',
    'qty' => '1',
    'price' => '10.00',
    'seller_id' => $seller_a,
);

$_SESSION['items'][1] = array(
    'id' => 'XYZ-456',
    'name' => 'Gadget',
    'qty' => '1',
    'price' => '0.50',
    'seller_id' => $seller_b,
);
$_SESSION['items'][2] = array(
    'id' => 'XYK-433',
    'name' => 'three',
    'qty' => '1',
    'price' => '25.00',
    'seller_id' => $seller_c,
);


$_SESSION['shopping_cart'] = array(
	'items' => $_SESSION['items'],
	'subtotal' => 35.50,
	'shipping' => 0,
	'handling' => 0,
	'tax' => 0,
);
$_SESSION['shopping_cart']['grand_total'] = number_format($_SESSION['shopping_cart']['subtotal'] + $_SESSION['shopping_cart']['shipping'] + $_SESSION['shopping_cart']['handling'] + $_SESSION['shopping_cart']['tax'],2);
header("Location: SetExpressCheckout.php")
?>
