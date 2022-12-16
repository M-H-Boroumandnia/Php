<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php

if(isset($_POST['submit'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $txt = "Contact Information:\n\nFirst Name : ".$fname."\nLast name : ".$lname."\nEmail : ".$email."\nSubject : ".$subject;
    for ($x=1; file_exists('./test/'.$x.'.txt'); $x++)
    {  
        
    }  
    $fp = fopen('./test/'.$x.'.txt', 'w');
    fwrite($fp, $txt);
    fclose ($fp);    
}
header("Location: Contact.html");



?>

</body>
</html>