<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página principal</title>
	<!-- GoogleFonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap" rel="stylesheet">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Css styles -->
	<link rel="stylesheet" href="build/css/app.css">
	<link rel="stylesheet" href="build/css/app.css.map">
</head>

<body>

	<section class="hero" id="hero">
		<div class="hero-text">
			<div class="hero-text-content container-sm">
				<h1><?= $title; ?></h1>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
			</div>
		</div>
		<div class="hero-img"></div>
	</section>

	<nav class="navbar">
		<div class="navbar-container container">
			<a href="/" class="logo">LogoLink</a>
			<button class="menuButton" id="menuButton">
				<i class="fa-solid fa-bars"></i>
			</button>
			<ul class="navbar-nav">
				<li class="navbar-item">
					<a href="#hero" class="navbar-link">Home</a>
				</li>
				<li class="navbar-item">
					<a href="#about" class="navbar-link">About</a>
				</li>
				<li class="navbar-item">
					<a href="#portfolio" class="navbar-link">Portfolio</a>
				</li>
				<li class="navbar-item">
					<a href="#news" class="navbar-link">News & events</a>
				</li>
				<li class="navbar-item">
					<a href="#contact" class="navbar-link">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

	<?php echo $content; ?>

	<!-- Jquery -->
	<script src="build/js/jquery.min.js"></script>
	<!-- Font awesome -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Custom js -->
	<script src="build/js/app.js"></script>
	<?= $script ?? ''; ?>
</body>

</html>