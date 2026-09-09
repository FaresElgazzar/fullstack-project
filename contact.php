<?php include("header.php");?>

<?php
$conn =mysqli_connect("localhost","root","","full_stack_db");

if(isset($_POST['send_message'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query="INSERT INTO `contact` ( `name`, `email`, `subject`, `message`) 
    VALUES ('$name', '$email', '$subject', '$message')";
    mysqli_query($conn ,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/lbs/animate.css">
</head>
<body>
    <div class="contact">
      <h1><span class="icon"><i class="fa-solid fa-phone"></i></span>
      Contact Us </h1>
      <p>Have a question or feedback? ,we'd love to hear from you </p>
     
     <div class="containercontact">
      <div class="information">
        <h4><span><i class="fa-solid fa-map-pin" id="i1"></i></span>Address : <span><a href="https://maps.app.goo.gl/g9TzVmyU3DPMsD7SA " target="_blank" >Our Address</a></span></h4>
        <h4><span><i class="fa-solid fa-phone" id="i2"></i></span>Phone : +01000000000</h4>
        <h4><span><i class="fa-solid fa-square-envelope" id="i3"></i></span>Email :<span> <a href="mailto:fars89231@gmail.com" target="_blank">Send US</a></span></h4>
        <h4><span><i class="fa-regular fa-clock" id="i4"></i></span>Opening Hours : From 12:00 pm To 3:00 am </h4>
      </div>
      <div class="contactform">
        <form method="POST">
         <input type="text" placeholder="enter your name" name="name"/>
         <input type="email" placeholder="enter your email" name="email"/>
         <input type="text" placeholder="subject" name="subject"/>
         <input type="text" placeholder="message"  name="message"/>
         <input type="submit" value="Send Message" name="send_message" />
     </form>
      </div>
     </div>
   </div>
  


    
</body>
</html>
