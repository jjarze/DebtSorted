<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['phone']))
   
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Validation failed -  Missing Name or Phone!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$income = strip_tags(htmlspecialchars($_POST['income']));
$expense = strip_tags(htmlspecialchars($_POST['expense']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'ssamuels@addedbenefits.co.za';
$email_subject = "DebtSorted Contact Form:  $name";
$email_body = "We have received a lead form the DebtSorted contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nGross Income: $income\n\nGross Expenses: $expense\n\nMessage:\n$message";
$headers = "From: noreply@debtsorted.com\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
echo "Mail sent: Name: $name\n Number: $phone";
return true;         
?>
