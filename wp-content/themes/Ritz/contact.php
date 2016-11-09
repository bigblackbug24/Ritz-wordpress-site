<!DOCTYPE html>
<html lang="en">
<head>
  
  </head>
  <body>
  <?php      
      $name  = $_POST['contact_name'];
      $email = $_POST['email_address'];
      $web   = $_POST['website'];
      $sub   = $_POST['subject'];
      $com   = $_POST['comments'];

         $to = "csaddictive@gmail.com";
         $subject ="Subject :" . $sub;
   
         $message = "Message here :" .$com ;
         $message .= "<br/>contact Name :" .$name;
         $message .= "<br/>Website :" .$web;
         
         $header = "From:\r\n" .$email;
         $header = "Cc:csaddictive@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         if($name && $email && $web && $sub && $com != '') {
         $retval = mail ($to,$subject,$message,$header);
         }
         else{
         }
         if( $retval == true && $name && $email && $web && $sub && $com != '') {
            //header("Location:contact-us.php");
            echo "<script>";
            echo "alert('Data Informationt sent successfully');";
            echo "</script>";
            echo "Thanks for sharing details";
         }else {
            echo "<script>";
            echo "alert('Data Informationt not sent successfully');";
            echo "</script>";
            exit;
         }
      ?>
      </body>
  </html>