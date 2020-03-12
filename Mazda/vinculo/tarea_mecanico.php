<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";

exit;
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Administrador</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}


hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>
	
</head>
<body>

	<!-- Header -->
	<header>

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/mazda-logo1.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="tarea_mecanico.php">Tareas</a></li>
					<li><a href="cerrar.php#contact">Salir</a></li>
                   
                    
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- header wrapper -->
		<div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				<a href="" class="logo"><?php echo"Bienvenido Mecánico: "; echo $_SESSION['user'];?></a>
				<ul class="breadcrumb">
					<img class="img-responsive" src="./img/admon.png" alt="">
				</ul>
			</div>
		</div>
		<!-- /header wrapper -->

	</header>
	<!-- /Header -->

	<!-- Blog -->
	<div id="blog" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
              
               
				<main id="main" class="col-md-9">
					<div class="blog">
					
						<hr>
						<h2>Tareas Asignadas</h2>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i><?php echo "Mecánico:"; echo $_SESSION['user'];?></li>
								<li><i class="fa fa-clock-o"></i><?php $fechaActual = date('d-m-Y H:i:s'); echo $fechaActual;?></li>
								<li><i class="fa fa-comments"></i>57</li>
                            </ul>
							<div class="main-wrapper" lass="reply-form">

                                <br><br>

                                <?php
                                    include("funcion_tareas.php");
                                ?>
                                <table border="1" width="100%">
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="10%">Nombre Jefe</th>
                                        <th width="10%">Apellido P</th>
                                        <th width="20%">Tarea Asignada</th>
                                        <th width="10%">Nombre Mecánico</th>
                                        <th width="9%">Apellido P</th>
                                        <th width="9%">Estado</th>
                                        <th width="15%">Fecha</th>
                                        <th width="9%">Editar</th>
                                    </tr>
                                <?php 
                                    $sql = "SELECT * FROM mecanico_actividad";
                                    $result = db_query($sql);
                                    while($row = mysqli_fetch_object($result)){
                                    ?>
                                    <tr>
                                        <td><?php echo $row->id_actividad;?></td>
                                        <td><?php echo $row->nombre_jefe;?></td>
                                        <td><?php echo $row->apellido_jefe;?></td>
                                        <td><?php echo $row->tarea;?></td>
                                        <td><?php echo $row->nombre_mec;?></td>
                                        <td><?php echo $row->apellido_mec;?></td>
                                        <td><?php echo $row->estado;?></td>
                                        <td><?php echo $row->fecha;?></td>
                                        <td>
                                   <a class="btn btn-primary" href="Editar_tarea_mec.php?id_actividad=<?php echo $row->id_actividad;?>"><img src="img/lapiz.png"></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
                                </div>
                                <div class="reply-form">
                                    <hr>
						<h2>Registrar Servicio</h2>
						<form action="altas_ser_m.php" method="post">
						<input class="input" type="text" name="tipo_s" placeholder="Tipo de Servicio"><br><br>
						<input class="input" type="date" name="fecha_e" placeholder="Fecha Entrada">	
						<input class="input" type="date" name="fecha_s" placeholder="Fecha Salida">
						<input class="input" type="text" name="factura" placeholder="Factura">
						<input class="input" type="text" name="garantia" placeholder="Garantía">
						<input class="input" type="text" name="id_gerente" placeholder="ID Gerente">
						<input class="input" type="text" name="id_automovil" placeholder="ID Automóvil"><br><br>
                            <textarea class="input" name="descrip" placeholder="Descripción"></textarea>
						<br><br>
						<input type="submit" class="main-btn" value="Registrar">	
							
						</form>	
						</div>
						</div>

						<!-- blog tags -->
						<div class="blog-tags">
							<h5>Tags :</h5>
							<a href="#"><i class="fa fa-tag"></i>Web</a>
							<a href="#"><i class="fa fa-tag"></i>Diseño</a>
							<a href="#"><i class="fa fa-tag"></i>Marketing</a>
							<a href="#"><i class="fa fa-tag"></i>Fotografias</a>
						</div>
						<!-- blog tags -->
					</div>
				</main>
				<!-- /Main -->
				<!-- Aside -->
				<aside id="aside" class="col-md-3">

					<!-- Search -->
					<div class="widget">
						<div class="widget-search">
							<input class="search-input" type="text" placeholder="Buscar">
							<button class="search-btn" type="button"><i class="fa fa-search"></i></button>
						</div>
					</div>
					<!-- /Search -->


				</aside>
				<!-- /Aside -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="img/mazda1.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by <a href="" target="_blank">MAZDA</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
