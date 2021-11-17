<?php
//include PayPalPro PHP library
require('PaypalPro.class.php');

	$paypal = new PaypalPro();
	
	//Payment details
    $paypalParams = array(
        'METHOD' => 'CallbackResponse',
	'CURRENCYCODE' => 'USD',
        'OFFERINSURANCEOPTION' => 'TRUE',
        'L_SHIPPINGOPTIONISDEFAULT0' => 'true',
        'L_SHIPPINGOPTIONNAME0' => 'Flat'
        'L_SHIPPINGOPTIONLABEL0' => 'Flat'
        'L_SHIPPINGOPTIONAMOUNT0' = '0.00'
	'OFFERINSURANCEOPTION' => 'true',
        'NO_SHIPPING_OPTION_DETAILS' => '1'

    );
	
	echo "<hr />";
	print_r($paypalParams);	
	echo "<hr />";
	//exit;

	$response = $paypal->paypalCall($paypalParams);
	var_dump($response);

	exit;
?>
