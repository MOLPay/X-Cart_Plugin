{* $Id: cc_echo.tpl,v 1.6.2.3 2007/02/15 06:34:49 svowl Exp $ *}
<h3>MOLPay Online Payment Gateway</h3>
{$lng.txt_cc_configure_top_text}
<p />
{capture name=dialog}
<br>
1.  Put your MOLPay Merchant ID into 'MOLPay Merchant ID' field below. <br><br>
2.  Login to your MOLPay Merchant Account and get the value for MOLPay Verify Key from you Merchant Profile. Put it into 'MOLPay Verify Key' field below.<br><br>
3. Please provide MOLPay Return URL to verify order made using MOLPay Online Payment Gateway. i.e: <b>http://www.storedomain.com/payment/cc_molpay_process.php</b><br>Replace <u>www.storedomain.com</u> with your own xcart URL.
<br>
<form action="cc_processing.php?cc_processor={$smarty.get.cc_processor|escape:"url"}" method="post">
<center>
<table cellspacing="10">
<tr>
<td>MOLPay Merchant ID:</td>
<td><input type="text" name="param01" size="32" value="{$module_data.param01|escape}" />
</td>
</tr>
<tr>
<td>MOLPay Verify Key:</td>
<td><input type="text" name="param02" size="32" value="{$module_data.param02|escape}" /></td>
</tr>
<tr>
<td>MOLPay Return URL:</td>
<td><input type="text" name="param03" size="32" value="{$module_data.param03|escape}" /></td>
</tr>
</table>
<p />
<input type="submit" value="{$lng.lbl_update|strip_tags:false|escape}" />
</form>
</center>
{/capture}
{include file="dialog.tpl" title=$lng.lbl_cc_settings content=$smarty.capture.dialog extra='width="100%"'}