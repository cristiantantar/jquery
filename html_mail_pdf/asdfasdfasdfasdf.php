<?php
	/*include("MPDF54/mpdf.php");
	$mpdf = new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list
	*/
	
	$html = <<<EOF
	<html> 
  <body bgcolor="#DCEEFC"> 
    <center> 
	<style>td{ border:0px;}</style>
	<table style="border:0px;top:150px;">
		<tr>
			<td> www.netgyani.com </td>
		</tr>
	</table>
	
	<p style="text-align:center; font-weight:bold; padding-top:5mm;"><img src="http://www.netgyani.com/wp-content/themes/netgyani/images/alletgyani.png" alt="" /></p>
	
	<table style="border:1px solid #000;padding:10px;margin-bottom:10px;" border="0" width="70%" cellspacing="2" cellpadding="2" align="center">
		<tr>
			<td colspan="2">
				<h1 class="content" style="display:none;">Support Offering:</h1>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align:center;padding:10px 0px 25px;border:0px;">
				<b><u>Transaction Acknowledgement</u></b>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="border-bottom:1px dotted #000;padding-bottom:5px;">
				Thank you! Your payment has been successfully received with the following details. You will receive Transaction Receipt on your Email Account.
			</td>
		</tr>
		<tr>
			<td colspan="2" style="border-bottom:1px dotted #000;">
				<table cellpadding="2" cellspacing="2">
					<tr>
						<td>Transaction Reference Number:</td>
						<td> 1Y305681EA684353L</td>
					</tr>
					<tr>
						<td>Transaction Date &amp; Time:</td>
						<td> 2012-08-10 13:10:59</td>
					</tr>
					<tr>
						<td>Amount Charged:</td>
						<td> USD 9.99</td>
					</tr>
					<tr>
						<td>Payment method:</td>
						<td> Visa Card Payment</td>
					</tr>
					<tr>
						<td>Transaction Status:</td>
						<td> Success</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="border-bottom:0px solid #000;">
				<table cellpadding="2" cellspacing="2" >
					<tr>
						<td>Card Number: **** **** **** 0516</td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2">Experation Date:  03/2018</td>
					</tr>
					<tr>
						<td colspan="2">Card Holder\'s Name: test%40test.com</td>
					</tr>
				</table>
			</td>
		</tr>
</table>
</body> 
</html> 
EOF; 
	echo "asdfasd";exit;
	$to = "uttam.u86@gmail.com"; 
    $from = "u86.uttam@gmail.com"; 
    $subject = "Test Mail"; 
    

$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
     
    // now lets send the email. 
    if(mail($to, $subject, $html, $headers)){
    	echo "Message has been sent....!"; 
    } else{
	    echo "Message not sent....!"; 
    }
	
	/*
	$mpdf->WriteHTML($html);
	$mpdf->Output();*/
?>