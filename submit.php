<?php 
if(isset($_POST['submit'])){
    $to = ""; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];
	$name = $_POST['name'];
 $email = $_POST['email']; 
 $cname = $_POST['cname']; 
 $city = $_POST['city'];
 $country = $_POST['country']; 
 $zip = $_POST['zip']; 
 $phone = $_POST['phone']; 
 $url = $_POST['url']; 
 $address = $_POST['address']; 
   $message = $_POST['message'];
   $subject = "Message from Website";
   
    $message = "You have received a new message. ".
	" Here are the details:\n Name:  $name \n Email: $email \n Company name: $cname \n City: $city \n Country: $country \n zip: $zip \n Phone: $phone \n URL: $url \n Address: $address  \n Message: $message"; 
     mail($to,$subject,$message);
    // sends a copy of the message to the sender
   // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
   header('Location: thanks.html');
    }
?>