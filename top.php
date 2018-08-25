<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'rakeshelamaran98@gmail.com';
    $subject = "New Form Submission";
$body = '<html>
            <body>
                <h2>FeedBack-example.com</h2>
                <hr>
                <p>Name:<br>'.$name.'</p>
                <p>Email:<br>'.$email.'</p>
                <p>Message:<br>'.$message.'</p>
            </body>
          </html>';
        
    //headers

    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";
    
    //send
    
    $send= mail($to,$subject,$body,$headers);
    if($send)
       {
       echo '<br>';
         echo "I Will Get Back To You Shortly.Thanks For Contacting Me" . $name . "<br>";
   
       } 
    else 
       {
       echo 'error';
       }
    }
}
?>

 