<?php

$to = $data['mail'];
$from = 'alex@naturalremedieshumanhealth.com';
$fromName = 'Natural Remedies';

$subject = "Natural Remedies Test Results | Athens Sleep Test";
$sleep = $data['score'];
if($sleep){
if($sleep<=25) {$sleep_val ="Healthy Sleep"; }
else if($sleep<=50) {$sleep_val ="Moderate Sleep"; }
else if($sleep<=75) {$sleep_val ="Needs Improvement"; }
else {$sleep_val ="Good Practice Required"; }
}
$htmlContent = '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#c3f582">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">m
<tbody>
	<tr>
		<td>
			<table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee" style="width:750px!important">
			<tbody>
				<tr>
					<td>
						<table width="690" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff">
						<tbody>
							<tr>
								<td colspan="3" align="center">
									<table width="630" align="center" border="0" cellspacing="0" cellpadding="0">
									<tbody>
										<tr>
											<td colspan="3" height="60"></td></tr><tr><td width="25"></td>
											<td align="center">
<style>
.imageContainer {
float: left;
}
</style>

<div class="image123">
<div class="imageContainer">
	<img src="https://naturalremedieshumanhealth.org/assets/logo.png" width="500" >
</div>

</div>   <br><br><br> 
											<hr>
											</td>
										  
										</tr>
									 <tr><td colspan="5" align="center"><br>
												<h3>Know your sleep - Report</h3>
												<p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0;font-weight:bolder">Thank you for participating in "Holixer Know Your Sleep Scale" <br>by Athens Sleep Test</p><br>


												
		
		<div class="image123">
<div class="imageContainer"><br>
<p>Your Sleep score is <b>'.$data['score'].'</b><br>
<b>'.$sleep_val.'</b> </p><br>
				
			
		
</div>

	<img src="https://naturalremedieshumanhealth.org/assets/sleep.png" width="500" style="style="text-align:left;">

</div>   <br><br><br>
	 

	</td>
										</tr>
										<tr>
											<td colspan="4">
												<div style="width:100%;text-align:center;margin:30px 0">
													<table align="center" cellpadding="0" cellspacing="0" style="font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0">
													<tbody>
														<tr>
															<td align="center" style="margin:0;text-align:center"><a href="http://www.codexworld.com/" style="font-size:11px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#999;padding:5px 10px;display:block;letter-spacing:1.2px" target="_blank">
															Disclaimer - This is a scientific test based on your responses. For any health condition(s) please contact your medical practitioner.</a></td>
														</tr>
													</tbody>
													</table>
												</div>
											</td>
										</tr>
										<tr><td colspan="3" height="30"></td></tr>
									</tbody>
									</table>
								</td>
							</tr>
						  </tbody>
						</table>
						
						  
					  </td>
				</tr>
			  </tbody>
			</table>
		</td>
	</tr>
 </tbody>
</table>
</div>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
$headers .= 'Cc: welcome@example.com' . "\r\n";
$headers .= 'Bcc: welcome2@example.com' . "\r\n";

// Send email
if(mail($to, $subject, $htmlContent, $headers)){
   echo 'Email has sent successfully.';
}else{
   echo 'Email sending failed.';
}

?>