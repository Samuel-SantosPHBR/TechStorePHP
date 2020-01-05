<?php
	session_start();
	unset($_SESSION['logado']);
	unset($_SESSION['tipo']);
	unset($_SESSION['nome']);
	echo "<script> window.location.href = '../../index.php';</script>";
?>