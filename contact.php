<?php
// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST['save']) || $_POST['save'] != 'contact') { 
    header('Location: contact'); exit; 
} 
     
// get the posted data 
$name = $_POST['contact_name']; 
$email_address = $_POST['contact_email']; 
$message = $_POST['contact_message']; 
     
// check that a name was entered 
if (empty($name)) 
    $error = 'Vul uw volledige naam in.'; 
// check that an email address was entered 
elseif (empty($email_address))  
    $error = 'Vul uw emailadres in.'; 
// check for a valid email address 
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address)) 
    $error = 'Geef een geldig emailadres op.'; 
// check that a message was entered 
elseif (empty($message)) 
    $error = 'Het bericht is leeg en kan niet verstuurd worden. Probeer het opnieuw.'; 
         
// check if an error was found - if there was, send the user back to the form 
if (isset($error)) { 
    header('Location: http://www.unload.nl/contact'); exit; 
} 
         
// write the email content 
$email_content = "Naam: $name\n"; 
$email_content .= "Email adres: $email_address\n"; 
$email_content .= "Bericht:\n\n$message"; 
     
// send the email 
mail ("tim.schadenberg@gmail.com", "Unload.nl: nieuw bericht", $email_content); 
     
// send the user back to the form
header('Location: http://www.unload.nl/contact'); exit;  
?>  