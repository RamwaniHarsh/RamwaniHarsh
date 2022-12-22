<?php

use LDAP\Result;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = mysqli_connect($hostname,$username,$password,$dbname); 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

function sendMail($email,$name,$message){
    require("PHPMailer/PHPMailer.php");
    require("PHPMailer/SMTP.php");
    require("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    try{
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'harshramwani.portfolio@gmail.com';
        $mail->Password   = 'mwjwsgzhgvttufod';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        //Recipients
        $mail->setFrom('harshramwani.portfolio@gmail.com', 'Harsh Ramwani');
        $mail->addAddress($email);     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Alert";
        $mail->Body    = "This Message from
        <br> Email : ". $email . 
        "<br> His/Her Name is : ". $name .
        "<br> Message : ". $message;
        $mail->send();
        return true;
    }catch(Exception $e){
        return false;
    }
} 

if(isset($_POST['name']) && isset($_POST['email'])){
    $query = "insert into contactme(name, email, message) values('$name','$email','$message')";
    $result = (mysqli_query($conn,$query) && sendMail($_POST['email'],$_POST['name'],$_POST['message'])) or die("Error Querying Database.....");
    if($result){
        header("Location: index.php#contact?mailsend=success");
    }else{
        header("Location: index.php#contact?mailsend=failed");
    }
}


?>