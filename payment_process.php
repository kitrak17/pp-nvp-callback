<?php

$rawData = file_get_contents("php://input");
$timstamp = "\n\n------------------------------------------------------------------------------------------------\n".date("Y-m-d H:i:s a")."\n------------------------------------------------------------------------------------------------\n\n";
$success = file_put_contents('logs.txt', $timstamp."\n".$rawData.PHP_EOL , FILE_APPEND | LOCK_EX);
if ($success)
{
	echo "success";
} else {
	echo "failed";
}


//include PayPalPro PHP library
require('PaypalPro.class.php');

	$paypal = new PaypalPro();
	
	//Payment details
    $paypalParams = array(
	'CALLBACKVERSION' => '61.0',
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

	$rawData = $response;
	$timstamp = "\n\n------------------------------------------------------------------------------------------------\n".date("Y-m-d H:i:s a")."\n------------------------------------------------------------------------------------------------\n\n";
	$success = file_put_contents('logs.txt', $timstamp."\n".$rawData.PHP_EOL , FILE_APPEND | LOCK_EX);
	if ($success)
	{
		echo "success";
	} else {
		echo "failed";
	}

	var_dump($response);

	exit;
?>
