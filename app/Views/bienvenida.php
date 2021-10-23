<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>Nuevo Porvenir</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('public/styles/estilos.css') ?>">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fondo">
			<div class="container-fluid">
				<a class="navbar-brand fuente" href="<?= base_url()?>">
					<i class="fas fa-paw"></i>
					Nuevo Porvenir
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?=site_url('/Animales')?>">Registro Animales</a>
						</li>
						<li class="nav-item">
							<!-- <a class="nav-link" href="Producto">Registrar Productos</a> -->
							<a class="nav-link" href="<?=site_url('/Producto')?>">Registrar Productos</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<section>
		<div class="container mt-5">
			<div class="row">
				<div class="col col-12">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
								class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
								aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
								aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= base_url('public/img/imagen1.jpg') ?>" class="d-block w-100" alt="foto1">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen2.jpg') ?>" class="d-block w-100" alt="foto2">
							</div>
							<div class="carousel-item">
								<img src="<?= base_url('public/img/imagen3.jpg') ?>" class="d-block w-100" alt="foto3">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Anterior</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
							data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Siguiente</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-2">
			<div class="row">
				<div class="col col-12 d-flex justify-content-center">
					<h2 class="fuente">Hogar de animales <span class="parrafo">NUEVO PORVENIR</span> </h2>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-2">
			<div class="row d-flex justify-content-center">
				<div class="col col-5 text-center">
					<p>
					Casa hogar Nuevo Porvenir, atiende desde 1996 animales y fauna silvestre en estado de  abandono, ofreciendo atención integral, además somos fabricantes de comida y accesorios para todo tipo de mascotas.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container mt-5">
			<div class="row d-flex justify-content-center">
				<div class="col col-1">
					<img src="<?= base_url('public/img/dog-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Perros</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/cat-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Gatos</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/bird-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Aves</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/fish-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">reptiles</p>
				</div>
				<div class="col col-1">
					<img src="<?= base_url('public/img/horse-icon.png') ?>" class="img-fluid w-100 zoom">
					<p class="fuente text-center">Caballos</p>
				</div>
			</div>
		</div>
	</section>
	<section class="fondoAplicacion">
	</section>
	<section>
		<div class="container mb-5">
			<div class="row mt-5">
				<div class="col-12 col-md-6">
					<img src="<?= base_url('public/img/refugio.jpg') ?>" class="img-fluid w-100 rounded">
				</div>
				<div class="col-12 col-md-6 align-self-center">
					<p>
					Somos una organización protectora de animales especializada, desde 1996, en la ayuda a perros y gatos maltratados y/o abandonados; una organización española totalmente independiente que no recibe subvenciones de organismos oficiales, empresas ni partidos políticos. Las cuotas de nuestros socios y las donaciones de nuestros simpatizantes permiten que nuestra labor sea sostenible y preservan nuestra libertad de acción. Contamos con un centro veterinario en Medellín abierto al público, que destina sus ingresos íntegramente al cuidado de los animales abandonados, y un centro de acogida en El Espinar.
						<br>
						Defendemos el “sacrificio cero”. Esto significa que establecemos una línea muy clara entre “el sacrificio” y “la eutanasia”. Nunca sacrificamos cachorros recién nacidos, ni animales cojos, ciegos, sordos o con enfermedades crónicas que sean tratables. Exclusivamente en caso de enfermedad en fase terminal que produzca un sufrimiento irreversible, se recurre a la eutanasia con toda la dignidad, el respeto y el amor que ellos merecen.
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<footer class="fondoDos p-5">

		<div class="container-fluid">

		<div class="row">
			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Horario de atención:</h3>
				<p>Lunes a viernes 7:00 am - 3:00 pm / Sábado: 7:00 am - 2:30 pm / Domingos y festivos 8:00 am - 3:00 pm</p>
				<br>
				<h3 class="fw-bold">Dirección:</h3>
				<p>Belén Altavista Calle 8A # 112-82 </p>
			</div>

			<div class="col-12 col-md-4">
				<h3 class="fw-bold">Ayudas:</h3>
				<p>Glosario / Correo remoto  /  Monitoreo y desempeño de uso del sitio web</p>
				<br>
				<h3 class="fw-bold">Protección de datos:</h3>
				<p>Protección de datos personales en el Municipio de Medellín </p>
			</div>

			<div class="col-12 col-md-4">
				<h1 class="fw-bold fuente"><span><i class="fas fa-paw"></i></span>Nuevo Porvenir</h1>
				<br>
				<i class="fab fa-facebook fa-3x"></i>
				<i class="fab fa-instagram fa-3x"></i>
				<i class="fab fa-youtube fa-3x"></i>
				<br>
				<p class="mt-4">© 2021 / NIT: 890905211-1 / Código DANE: 05001 / Código Postal: 050015</p>
				
			</div>
		</div>

		</div>

	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
	</script>
	<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>

</html>