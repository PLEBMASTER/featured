<?php
if($_POST['submit']) {
	  
		$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);
		$email =  substr(htmlspecialchars(trim($_POST['email'])), 0, 1000);
        $telefon =  substr(htmlspecialchars(trim($_POST['telefon'])), 0, 1000000);
        $mesaj =  substr(htmlspecialchars(trim($_POST['mesaj'])), 0, 1000000);
		$header = "From: ". $name . "--> Email: <" . $email . "> Telefon: <" . $telefon . ">\r\n";
        $to = '';
        
mail($to, $header, 'Your message: '.$mesaj);
		
}
 
header('Location: ');
?> 
