<?php 


$ubicacion_actual = basename($_SERVER['PHP_SELF']);
$inicio = "";
$contacto = "";
$nosotros = "";
$proyectos = "";
$servicios = "";

if ($ubicacion_actual == "inicio.php") {
  $inicio = "active";
  $titulo = "ZUI MEDIC - Salud y Bienestar";
}
if ($ubicacion_actual == "contacto.php") {
  $contacto = "active";
  $titulo = "Contacto - ZUI MEDIC";
}
if ($ubicacion_actual == "nosotros.php") {
  $nosotros = "active";
  $titulo = "Nosotros - ZUI MEDIC";
}
if ($ubicacion_actual == "proyectos.php") {
  $proyectos = "active";
  $titulo = "Proyectos - ZUI MEDIC";
}
if ($ubicacion_actual == "servicios.php") {
  $servicios = "active";
  $titulo = "Servicios - ZUI MEDIC";
}


?>

<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title><?php echo $titulo;?></title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-8P3N6SK54Y"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'G-8P3N6SK54Y');
		</script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="https://kit.fontawesome.com/ede263ef31.js" crossorigin="anonymous"></script>		
		<script src="assets/bootstrap/js/bootstrap.js"></script>		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">	
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">	
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">		
		<!--magnific-popup Css-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!--animate Css-->
        <link rel="stylesheet" href="assets/css/animate.css">
		<!--slick Css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
	</head>

