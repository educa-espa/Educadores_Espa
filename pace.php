<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap JS y Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<title>NASA SPACE</title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-custom py-3">
		<div class="container">
			<!-- Logo y título -->
			<a href="#" class="navbar-brand navbar-brand-custom d-flex align-items-center" style="color: white;">
				<img src="img/NASA.png" alt="Logotipo" width="60" height="60" class="me-4">
				NASA SPACE
			</a>

			<!-- Buscador -->
			<form class="d-flex search-bar w-100">
				<div class="input-group w-100">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
					<input class="form-control search-input" type="search" placeholder="¿Qué estás buscando?"
						aria-label="Buscar">
				</div>
			</form>

			<!-- Menú -->
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a href="index.html" class="nav-link">Inicio</a>
					</li>
					<li class="nav-item">
						<a href="planton.php" class="nav-link">Plankton</a>
					</li>
					<li class="nav-item">
						<a href="aerosol.php" class="nav-link">Aerosoles</a>
					</li>
					<li class="nav-item">
						<a href="nube.php" class="nav-link">Nubes</a>
					</li>
					<li class="nav-item">
						<a href="ecosistema.php" class="nav-link">Ecosistemas</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container text-center">
		<h1 class="titulos-bold text-center my-3">
			<span class="linea-izquierda"></span> <!-- Línea izquierda -->
			ACERCA DE LA PACE
			<span class="linea-derecha"></span> <!-- Línea derecha -->
		</h1>
		<div class="row d-flex justify-content-center align-items-center mb-4">
			<div class="col-md-12 custom-img-container">
				<!-- Usando la clase de los márgenes -->
				<div class="card bg-block-dark border-0">
					<div class="card-body p-0">
						<img src="img/PACE1.jpg" class="img-fluid w-100 custom-img-size-full" alt="Imagen PACE">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container text-center">
		<h1 class="titulos-bold text-center my-3">
			<span class="linea-izquierda"></span> <!-- Línea izquierda -->
			ANECDOTAS
			<span class="linea-derecha"></span> <!-- Línea derecha -->
		</h1>
		<div class="row d-flex justify-content-center align-items-center mb-4">
			<div class="col-md-12 custom-img-container">
				<!-- Usando la clase de los márgenes -->
				<div class="card bg-block-dark border-0">
					<div class="card-body p-0">
					<img id="ecosystemAnimation" src="imG/Anecdota.gif" class="img-fluid w-100 custom-img-size-full" alt="Imagen PACE">
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="bg-dark mt-auto custom-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col text-white text-center py-3">
					<p class="mb-0">&copy; 2024 NASA SPACE. Todos los derechos reservados.</p>
					<p class="mt-3">Síguenos en nuestras redes sociales:</p>
					<a href="https://facebook.com" target="_blank" class="social-link"><i
							class="fab fa-facebook"></i></a>
					<a href="https://www.tiktok.com/@daniela_mora7" target="_blank" class="social-link"><i
							class="fab fa-tiktok"></i></a>
					<a href="https://www.youtube.com/@Educadores_Espaciales" target="_blank" class="social-link"><i
							class="fab fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</footer>


</body>

</html>