<?php
  $nameer=$emailer=$msger="";
  
  if($_SERVER["REQUEST METHOD"]=="POST"){
	  if(empty($_POST["name"])){
		  $nameer="Don't feel free to say your good name :)";
	  }
	  else{
		  $name= test_input($_POST["name"]);
		   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Please make use of only letters on your keyboard :)";
     }
	  }
      if(empty $_POST["email"]){
		  $emailer="Kindly allow us to get back to you by saying your email id :)"
	  }	  
         else{
			 $email= test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email "; 
		 }
		 }
	  if(empty($_POST["msg"])) {
		  $msger="Kindly say us something when you wish to say";
	  }
	  else {
		  $msg= test_input($_POST["subject"]);  
	  }
	  }
    function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$to="rahila.nusrath@gmail.com"
$sub="Message From The PL Website"
$msg = wordwrap($msg,70);
$from=$_POST["$email"];
mail($to,$sub,$msg,$from);
?>