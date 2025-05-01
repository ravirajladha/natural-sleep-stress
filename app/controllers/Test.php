<?php
class Test extends Controller 
{

    public function __construct()
	{
	    $this->testModel = $this->model('Tests'); 
	}


	public function index()
    {
        
        $_SESSION['sleep1'] = 0;
        $_SESSION['sleep2'] = 0;
        $_SESSION['sleep3'] = 0;
        $_SESSION['sleep4'] = 0;
        $_SESSION['sleep5'] = 0;
        
        $_SESSION['stress1'] = 0;
        $_SESSION['stress2'] = 0;
        $_SESSION['stress3'] = 0;
        $_SESSION['stress4'] = 0;
        $_SESSION['stress5'] = 0;

        $this->view('test/index');

    }


    public function home()
    {
        
        $_SESSION['sleep1'] = 0;
        $_SESSION['sleep2'] = 0;
        $_SESSION['sleep3'] = 0;
        $_SESSION['sleep4'] = 0;
        $_SESSION['sleep5'] = 0;
        
        $_SESSION['stress1'] = 0;
        $_SESSION['stress2'] = 0;
        $_SESSION['stress3'] = 0;
        $_SESSION['stress4'] = 0;
        $_SESSION['stress5'] = 0;

        $this->view('test/home');

    }


    public function sleep($test)
    {
        $sleep = $this->testModel->get_sleep($test); 
        $data = [ 
            'test'=>$test,
            'sleep'=>$sleep,
        ];
        $this->view('test/sleep',$data);
    }



    public function sleep_submit($test)
    {
        $sleep_val = $_POST['range'];
        $_SESSION['sleep'.$test] = $sleep_val;
        $cur_test = $test;
        $next_test = $test + 1;
        if($next_test < 6){
            redirect('test/sleep/'.$next_test);
        }
        else {
            redirect('test/sleep_result');
        }
        

    }

    public function sleep_result()
    {
        $total_sleep = $_SESSION['sleep1'] + $_SESSION['sleep2'] + $_SESSION['sleep3'] + $_SESSION['sleep4'] + $_SESSION['sleep5'];
        if($total_sleep >= 5){
            $sleep = round($total_sleep/5);
            } else {
            $sleep = 1;
        }
        session_destroy();
        $data = [ 
            'sleep'=>$sleep
        ];
        $this->view('test/sleep_result',$data);
    }



    public function stress($test)
    {
        $stress = $this->testModel->get_stress($test); 
        $data = [ 
            'test'=>$test,
            'stress'=>$stress,
        ];
        $this->view('test/stress',$data);
    }



    public function stress_submit($test)
    {
        $stress_val = $_POST['range'];
        $_SESSION['stress'.$test] = $stress_val;
        $cur_test = $test;
        $next_test = $test + 1;
        if($next_test < 6){
            redirect('test/stress/'.$next_test);
        }
        else {
            redirect('test/stress_result');
        }
        

    }

    public function stress_result()
    {
        $total_stress = $_SESSION['stress1'] + $_SESSION['stress2'] + $_SESSION['stress3'] + $_SESSION['stress4'] + $_SESSION['stress5'];
        if($total_stress >= 5){
        $stress = round($total_stress/5);
        } else {
        $stress = 1;
        }
        $data = [ 
            'stress'=>$stress
        ];
        $this->view('test/stress_result',$data);
    }



    public function mail_stress($mail,$score)
    {

        echo "sdfsd";
        die();
        $data = [ 
            'score'=>$score,
            'mail'=>$mail
        ];
        
   

            $to = $data['mail'];
            $from = 'noreply@naturalremedieshumanhealth.com';
            $fromName = 'Natural Remedies';
            
            $subject = "Natural Remedies Test Results | Perceived Stress Test";
            
            $stress = $data['score'];
            if($stress){
            if($stress<=20) { $stress_val = "Cheerful Lifestyle"; }
            else if($stress<=40) { $stress_val = "Normal Lifestyle"; }
            else if($stress<=60) { $stress_val = "Moderate Lifestyle"; }
            else if($stress<=80) { $stress_val = "Average Quality of Life"; }
            else { $stress_val = "Good Practice Required"; }
            }
            
            $htmlContent = '<div style="font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#c3f582">
            <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
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
            												<h3>Know your stress - Report</h3>
            												<p style="color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0;font-weight:bolder">Thank you for participating in "Holixer Know Your Stress Scale" <br>by Perceived Stress Test</p><br>
            
            
            												
            								   
            		
            		<div class="image123">
            <div class="imageContainer"><br>
            <p>Your Stress score is <b>'.$data['score'].'</b><br>
            <b>'.$stress_val.'</b> </p>
            		
            </div>
            
            <img src="https://naturalremedieshumanhealth.org/assets/stress.png" width="500" style="style="text-align:left;">
            
            </div>   <br><br><br>
            	 
            
            	</td>
            										</tr>
            										<tr>
            											<td colspan="4">
            												<div style="width:100%;text-align:center;margin:30px 0">
            													<table align="center" cellpadding="0" cellspacing="0" style="font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0">
            													<tbody>
            														<tr>
            															<td align="center" style="margin:0;text-align:center"><a href="" style="font-size:11px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#999;padding:5px 10px;display:block;letter-spacing:1.2px" target="_blank">
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
            
            
            
            // Send email
            if(mail($to, $subject, $htmlContent, $headers)){
               echo 'Email has sent successfully.';
            }else{
               echo 'Email sending failed.';
            }

echo "success";
    }

    public function mail_sleep($mail,$score)
    {
        $data = [ 
            'score'=>$score,
            'mail'=>$mail
        ];
        
   

            $to = $data['mail'];
            $from = 'noreply@naturalremedieshumanhealth.com';
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
            <table align="center" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#eeeeee">
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
            
            
            
            // Send email
            if(mail($to, $subject, $htmlContent, $headers)){
               echo 'Email has sent successfully.';
            }else{
               echo 'Email sending failed.';
            }


    }

    

}