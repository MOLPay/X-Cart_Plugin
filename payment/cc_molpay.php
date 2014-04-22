<?php
/*****************************************************************************\
+-----------------------------------------------------------------------------+
| MOLPay - http://www.molpay.com                        |
| April 2014                                                                |
| All rights reserved.                                                        |
+-----------------------------------------------------------------------------+
\*****************************************************************************/


if (!isset($REQUEST_METHOD))
	$REQUEST_METHOD = $HTTP_SERVER_VARS["REQUEST_METHOD"];

	if (!defined('XCART_START')) { header("Location: ../"); die("Access denied"); }

	if (!function_exists("func_nb_convert")) {
		function func_nb_convert($s) {
			return htmlspecialchars(str_replace("#"," ", $s));
		}
	}

	$orderid   = join("-",$secure_oid); 
	$merchant  = trim($module_params ["param01"]);
	$vkey      = trim($module_params ["param02"]);
	$returnurl = trim($module_params ["param03"]);
	
	if(!$duplicate)
		db_query("REPLACE INTO $sql_tbl[cc_pp3_data] (ref,sessionid,param1) VALUES ('".addslashes($orderid)."','".$XCARTSESSID."','".$cart["total_cost"]."')");


	while( list($key,$val)=each($cart['products']) ) {
		$pdetails.= "(".$val['productcode'].")\t:".$val['product']." x ".$val['amount']. "\n\n";	
	}


	$amount = $cart['total_cost'];
	$bill_name = func_nb_convert($bill_firstname." ".$bill_lastname);
	$bill_email = func_nb_convert($userinfo["email"]);
	$bill_mobile = func_nb_convert($userinfo["phone"]);
	$bill_desc  = $pdetails ;
	$currency = strtolower($GLOBALS['config']['General']['currency_symbol']);
	$rate = $GLOBALS['config']['General']['alter_currency_rate'];
	//$returnurl = $current_location."/payment/cc_molpay_process.php";


	/**
	 if ($currency=="myr" || $currency=="rm") {
	    $amount = $cart['total_cost'];
	 } else {
   	   $amount = $cart['total_cost']*$rate;
	 } 
	**/


$vcode = md5($amount.$merchant.$orderid.$vkey);

?>
<html>

<div style="text-align:center; padding:30px;">
	<br><img src='http://molpay.com/home/pic/molpay/molpayhor01_V2.gif' border=0 alt='MOLPay Online Payment Gateway(Visa, MasterCard, Maybnk2u, MEPS, FPX, etc)' title='MOLPay Online Payment Gateway(Visa, MasterCard, Maybank2u, MEPS, FPX, etc)'>
	<br><br><img src='https://www.onlinepayment.com.my/MOLPay/templates/images/connect.gif' width='44' length='44'>
	<br><br><h3>Please wait for a while. You'll redirect to MOLPay Online Payment Gateway...</h3>
</div>

<body onLoad="document.process.submit();">
<form action="https://www.onlinepayment.com.my/MOLPay/pay/<?php echo $merchant; ?>/" method="POST" name="process">
	<input type="hidden" name="amount" value="<?php echo $amount; ?>">
	<input type="hidden" name="orderid" value="<?php echo func_nb_convert($orderid); ?>">
	<input type="hidden" name="bill_name" value="<?php echo func_nb_convert($bill_name); ?>">
	<input type="hidden" name="bill_email" value="<?php echo func_nb_convert($bill_email); ?>">
	<input type="hidden" name="bill_mobile" value="<?php echo func_nb_convert($bill_mobile); ?>">
	<input type="hidden" name="bill_desc" value="<?php echo $pdetails; ?>">
	<input type="hidden" name="country" value="<?php echo func_nb_convert($userinfo['b_country']); ?>">
	<input type="hidden" name="currency" value="<?php echo $currency; ?>">
	<input type="hidden" name="returnurl" value="<?php echo func_nb_convert($returnurl); ?>">
	<input type="hidden" name="vcode" value="<?php echo $vcode; ?>">
</form>

</body>
</html>
<?php

	exit;
?>
