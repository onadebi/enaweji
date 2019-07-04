<?php
$full_name = "";
$message = "";
$email_address = "";

if(isset($_POST["full_name"]))
{
     $full_name= $_POST["full_name"];
}
if(isset($_POST["message"]))
{
   $message = $_POST["message"];
}
    
if(isset($_POST["email_address"])){
    $email_address = $_POST["email_address"];
}

//==========MAIL SENDER DETAILS===============
$to_address = "onaefee@gmail.com";
$email_subject = "Emmanuel Consulting Guest Contact";
$email_body = $message;
mail($to_address,$email_subject,$email_body);
//==========EEND OF MAIL SENDER DETAILS=======



?>