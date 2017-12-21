<?php
if($_POST['submit']) {
	  
		$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);
		$email =  substr(htmlspecialchars(trim($_POST['email'])), 0, 1000);
		$header = "From: ". $name . "--> Email: <" . $email . "> 
		
}
 
header('Location: ');
?php> 
