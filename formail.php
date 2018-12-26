<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>iDevOps - Automated Solutions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="contactus.html">Contact Us</a>
						<a href="#">Who We Are</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>iDevOps</h2>
						<p>Automated Solutions</p>
					</header>


<!-- INICIO DO CÓDIGO -->

<?php require "config.ini"; ?>

<?php

ini_set ("SMTP","mail.idevops.cloud");


$nome=$_POST["name"];

$email=$_POST["email"];

$mensagem=$_POST["message"];

// Verifica se O Campo nome tá preenchido

if (empty($nome)){

// HTML que aparecera o ERRO

echo "<body bgcolor=\"#ffffff\">";

echo "<br><br><br>";

echo "<center>The <b>Name</b> field is required!</center>";

echo "<br><br><center><a href=\"javascript:history.back(1)\">Back</a></center>";

echo "</body></html>";

}

// Verifica o Campo E-mail Tá preenchido

elseif (empty($email)){

// HTML que aparecera o ERRO


echo "<body bgcolor=\"#ffffff\">";

echo "<br><br><br>";

echo "<center>The <b>E-mail</b> field is required.</center>";

echo "<br><br><center><a href=\"javascript:history.back(1)\">Back</a></center>";

echo "</body></html>";

}

// Verifoca Se o E-mail Contem @

elseif (!(strpos($email,"@")) OR strpos($email,"@") !=strrpos($email,"@")) {

// HTML que aparecera o ERRO


echo "<body bgcolor=\"#ffffff\">";

echo "<br><br><br>";

echo "<center>Please type a valid <b>e-mail</b> address.</center>";

echo "<br><br><center><a href=\"javascript:history.back(1)\">Back</a></center>";

echo "</body></html>";

}


// Verifica se o Campo Mensagem tá preenchido

elseif (empty($mensagem)){

// HTML que aparecera o ERRO


echo "<body bgcolor=\"#ffffff\">";

echo "<br><br><br>";

echo "<center>The <b>Message</b> field is required.</center>";

echo "<br><br><center><a href=\"javascript:history.back(1)\">Back</a></center>";

echo "</body></html>";

}

else{

// Comfirma o Envio Do E-mail

if ($certo== "1")

{

// Função de envio Do E-mail

//mail ("postmaster@idevops.cloud","nome","string message", "string additional_headers");

mail ("postmaster@idevops.cloud","Nome:$name\n Email:$email\n Mensagem:$message\n IP:$REMOTE_ADDR\n\n ...::: iDevOps Automated Solutions :::...","From:$nome<$email>");

}

// HTML do redirecionameto e se não redirecionar aparece um link

echo "<html><head>";

echo "<meta http-equiv=\"refresh\" content=\"0;url=$redirecionar\">";

echo "<title>Redirecting...</title>";

echo "</head><body bgcolor=\"#ffffff\">";

echo "<a href=\"$redirecionar\" target=\"_top\">Back</a>";

echo "</body></html>";

}

?>

<!-- FIM DO CODIGO -->

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.linkedin.com/company/idevops/" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
