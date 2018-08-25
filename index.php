<?php
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'rakeshelamaran98@gmail.com';
    $subject = "New Form Submission";
$body = '<html>
            <body>
                <h2>FeedBack</h2>
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
         echo "Thanks For Contacting Me" . $name . "<br>";
         echo "I Will get back to ou shortly"
       } 
    else 
       {
       echo 'error';
       }
    }
?>

<!--Html-->



<!doctype html>
<html>
<head>
  <title>Contact Form Design</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="ccc.css">
</head>
<body>
    <div class="contact">
          <h1>GET IN TOUCH</h1>
            <h2>If You Like My Website,You Need One
            Leave Out A Message,I Will Get Back To You
            </h2>        
        </div>
        
        <div class="contact-form">
           <form id="contact-form" method="post" action="">
               <input name="name" type="text" class="f" placeholder="Name" required><br>  
               <input name="email" type="email" class="f" placeholder="E-Mail" required><br>  
               <textarea name="message" class="f"  placeholder="Message" rows="4" required></textarea><br>
               <input type="submit" class="submit" value="SEND MESSAGE">
            </form>
      
        </div>
    </body>
</html>