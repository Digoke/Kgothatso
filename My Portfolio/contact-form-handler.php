 <?php
$name= $_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];


$email_from='kgothatsopheladi1004@gmail.com'
    
    $email_subject="New Form Submission"
    
    $email_body="User Name: $name.\n".  
                 "User Email:$visitir_email.\n".
                 "User Message:$messege.\n";

$to= "kgothatso1004@gmail.com";
$headers="From: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");
