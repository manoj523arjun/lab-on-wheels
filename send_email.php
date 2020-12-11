<?php

   $fName = $_REQUEST["firstName"];
   $lName = $_REQUEST["lastName"];
   $email = $_REQUEST["email"];
   $phoneNumber = $_REQUEST["phoneNumber"];
   $companyName = $_REQUEST["companyName"];
   $messageValue = $_REQUEST["message"];

   $to = "ashwini@saicorp.in";
   $subject = "Contact details of $fName";
   
   $message = "<table>";

   $message .= "<tr><td>First Name</td><td>:</td><td>$fName</td></tr>";
   $message .= "<tr><td>Last Name</td><td>:</td><td>$lName</td></tr>";

   $message .= "<tr><td>Email</td><td>:</td><td>$email</td></tr>";
   $message .= "<tr><td>Phone Number</td><td>:</td><td>$phoneNumber</td></tr>";

   $message .= "<tr><td>Company Name</td><td>:</td><td>$companyName</td></tr>";
   $message .= "<tr><td>Message</td><td>:</td><td>$messageValue</td></tr>";

   $message .= "</table>";
   
   $header = "From:ashwini@saicorp.in \r\n";
   // $header .= "Cc:afgh@somedomain.com \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $header .= "Access-Control-Allow-Origin: *\r\n";
   
   $retval = mail ($to,$subject,$message,$header);
   
   if( $retval == true ) {
      echo "Message sent successfully...";
   }else {
      echo "Message could not be sent...";
   }
?>