<?php 

   $firstname = $_POST['fname'];
   $lastname = $_POST['lname'];
   $gender = isset($_POST['gender']) ? $_POST['gender'] : NULL;
   $email = $_POST['email'];
   $mobileno = $_POST['phoneno'];
   $address1 = $_POST['Street'];
   $country = isset($_POST['country']) ? $_POST['country'] : NULL;

   $message = "";
   if(isset($_POST["Submit"]))
{
   if (empty($firstname)) {
      $message .= "First Name is Empty";
      $message .= "<br>";
   }
   if (empty($lastname)) {
      $message .= "Last Name is Empty";
      $message .= "<br>";
   }
   if (!isset($gender) or empty($gender)) {
      $message .= "Gender not Selected";
      $message .= "<br>";
   }
   if (empty($email)) {
      $message .= "Email is Empty";
      $message .= "<br>";
   }
   if (empty($mobileno)) {
      $message .= "Mobileno is Empty";
      $message .= "<br>";
   }
   if (empty($address1)) {
      $message .= "Street/House/Road is Empty";
      $message .= "<br>";
   }

   if ($message === "") {
      echo "Your Registration is Successful";
   }
   else {
      echo $message;
   }
}
?>