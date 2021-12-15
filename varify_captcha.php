<?php
 

//   if(!empty($_POST['g-recaptcha-response']))
//   {
//         $secret = '6LchGaYdAAAAAIqmKraJaxl-o9J2aRi9kfV2rbmm';
//         $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
//         $responseData = json_decode($verifyResponse);
        
//         if($responseData->success)
// 	        $message = "g-recaptcha varified successfully";
//         else
// 	        $message = "Some error in vrifying g-recaptcha";
// 	echo $message;
//    }

   if (isset($_POST['g-recaptcha-response'])) {
		
    // require('component/recaptcha/src/autoload.php');		
    
    $recaptcha = new \ReCaptcha\ReCaptcha('6LchGaYdAAAAAIqmKraJaxl-o9J2aRi9kfV2rbmm');

    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);

      if (!$resp->isSuccess()) {
            $output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
            die($output);				
      }	
}


?>