<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: ../indexsesion.php');
} else {
	header('Location: ../index.html');
}

 ?>