<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
	# code...



	$email = addcslashes($_POST['email']);
	$nome = addcslashes($_POST['nome']);
	$mesage = addcslashes($_POST['mesage']);


	$to = "caiquezogbi2@gmail.com";

	$subject = "contato - programador Br";

	$body = "email: ".$email. "\r\n".
	        "nome: ".$nome. "\r\n".
	        "mesage: ".$mesage;

	$header = "from: anaanuarbela6@gmail.com". "\r\n".
	          "replay-to: " .$email. "\r\n".
	          "x=mailer:php/" .phpversion();

	if (mail($to, $subject, $body, $header)) {

		echo ("Email enviado com sucesso");
	} else {
		echo ("Email nao pode ser enviado");
	}



}

?>

