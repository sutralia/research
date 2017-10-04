<!DOCTYPE html>
<html>
<head>
	<title>
		doku
	</title>
	<script type="text/javascript" src ="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="http://localhost/tes/jquery.fancybox.pack.js"></script>
<link href="http://localhost/tes/jquery.fancybox.min.css"
rel="stylesheet">
<script src="http://localhost/tes/doku.js"></script>
<link href="http://localhost/tes/dokumod.css" rel="stylesheet">
</head>
<body>






<script type="text/javascript">
$(function() {
 var data = new Object();
 data.req_merchant_code = '1405	';
 data.req_chain_merchant = 'NA';
 data.req_payment_channel = '15';
 data.req_transaction_id = '59d44a3ce359116b29edb4f1';
 data.req_currency = '360';
 data.req_amount = '100.00';
 data.req_words = '6b7eed11f3397ebb407d394af4abc00cbf2a0e82';
 data.req_form_type = 'full';
 data.req_customer_id = null;
 data.req_server_url = 'http://128.199.227.239:1390/instantpay/ccpayment';
	getForm(data);
});
</script>
</body>

</html>