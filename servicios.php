<!DOCTYPE html>
<html lang="es">
    <?php
        $enlace = mysqli_connect("localhost", "root", "", "zuimedic");
        if (!$enlace) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        if (isset($_GET["tipo"])){
            $tipo_servicio = $_GET["tipo"];
            $consulta = 'SELECT * FROM servicios WHERE clave_servicios = "'.$tipo_servicio.'" ';
            $resultado = $enlace->query($consulta);
            $fila = mysqli_fetch_row($resultado);
          }
    ?>
	<?php include('assets/estructura/links.php');?>
	<body>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
		
			<!-- START PRELOADER -->
			<div class="atf-preloader">
				<div class="atf-status">
					<div class="atf-status-mes"></div>
				</div>
			</div> 
			<!-- END PRELOADER -->	
			
			<!-- START back-to-top -->	
			<button class="atf-scroll-top atf-back-to-top" data-targets="html">
				<i class="fa fa-angle-up atf-scrollup-icon"></i>
			</button>
			<!-- END back-to-top-->	
			<div class="body-overlay" id="body-overlay"></div>
			
			<!-- search popup area start -->

			<!-- //. search Popup -->
		
            <?php include('assets/estructura/header.php'); ?>
			

            <?php include("$fila[3]");?>
			<!--- END CONTENT -->
			
			
			

        <?php include('assets/estructura/foot.php');?>
        </div>
				   
	    <?php include('assets/estructura/link-foot.php');?>

	</body>
</html>