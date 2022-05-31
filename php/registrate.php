<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$nombres= $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$telefono = $_POST['telefono'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$errores = '';

	if (empty($usuario) or empty($password) or empty($password2) or empty($nombres) or empty($apellidos) or empty($telefono)) {
		$errores .= '<script type="module" src="Modulo/Vacios.js"> </script>';
	} else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=registros', 'root', '');
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<script > alert(" Alguna cosa paso ");</script>';
		}

		

		if ($password != $password2) {
			$errores .= '<script>alert(" Las contraseñas no coinciden ");</script>';
		}
	}

	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO usuarios (id, nombres, apellidos, telefono, usuario, pass) VALUES (null, :nombres, :apellidos, :telefono, :usuario, :pass)');
		$statement->execute(array(
			':nombres' => $nombres,
			':apellidos' => $apellidos,
			':telefono' => $telefono,
			':usuario' => $usuario,
			':pass' => $password
		));

		header('Location: login.php');
	}
}

require '../registrate.view.php';

?>