<?php
 include("config.php");
 session_start();
  // Variable to hold success message
if(isset($_POST["submit"])){
    $name=$_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $zipcode= $_POST['zipcode'];
    $message= $_POST['message'];

    $insertquery= "INSERT INTO contact_user(name,email,mobile,zipcode,message)
    VALUES('$name','$email','$mobile','$zipcode','$message')";
    
    $result=mysqli_query($conn,$insertquery);
    if($result){
        $_SESSION['status']= "Thank you for your message. It has been sent.";
        header("Location: contact.php");
       
    }
    else{
        $_SESSION['status']= "Contact Form not Submit";
        header("Location: contact.php");
    }
}


?>

