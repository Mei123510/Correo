<?php 
if (isset($_POST['enviar'])) {
	if(!empty($_POST['nombres']) && !empty($_POST['apellidos']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['roles'])){
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$roles = $_POST['roles'];
		$header = "From: noreply@example.com" . "\r\n";
		$header = "Reply-To: noreply@example.com" . "\r\n";
		$header = "X-Mailer: PHP/" . phpversion();
		$mail = @mail($nombres,$apellidos,$username,$roles,$header);
		if ($mail) {
			echo "<h4> ¡Mail enviado exitosamente!</h4>";
		}
	}
}



 ?>
