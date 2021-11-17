<?php
//include PayPalPro PHP library
require('PaypalPro.class.php');

	$paypal = new PaypalPro();
	
	//Payment details
    $paypalParams = array(
        'paymentAction' => 'Sale',
		'itemName' => 'Apple ipod',
		'itemNumber' => 'S0001',
        'amt' => '4.50',
        'taxamt' => '0.50',
		'itemamt' => '4.00',
        'currencyCode' => 'AUD',
        'creditCardType' => 'Visa',
        'creditCardNumber' => '4716123113346438',
        'expMonth' => '12',
        'expYear' => '2034',
        'cvv' => '123',
        'firstName' => 'Kartik',
        'lastName' => 'Kitrak',
        'city' => 'Chennai',
        'zip'	=> '600001',
        'countryCode' => 'IN'
    );
	
	echo "<hr />";
	print_r($paypalParams);	
	echo "<hr />";
	//exit;

	$response = $paypal->paypalCall($paypalParams);
	var_dump($response);

	exit;
?>