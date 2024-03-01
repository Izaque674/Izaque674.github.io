<?php

session_start();
require_once'../chamadoReal/src/controller/loginController.php';
$loginController = new LoginController();
$loginController ->auntenticar($_POST['email'], $_POST['senha']);

?>