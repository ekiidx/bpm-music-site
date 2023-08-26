<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="theme-color" content="#000000">

	<!-- Search Engine -->
	<meta name="description" content="">
	<meta name="image" content="">
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="website-preview.jpg">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="">
	<meta name="og:description" content="">
	<!--<meta name="og:image" content="">-->
	<meta name="og:url" content="">
	<meta name="og:site_name" content="">
	<meta name="og:locale" content="en_US">
	<meta name="og:type" content="website">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">

	<!--Bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- Fonts -->
	<!--<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">-->
                
	<!-- Stylesheets -->
	<?php $phpVersion = '?v=1.0.0'; ?>
    <link rel="stylesheet" href="<?php echo '/assets/css/main.css' . $phpVersion; ?>">
	<link rel="stylesheet" href="<?php echo '/assets/css/responsive.css' . $phpVersion; ?>">

	<script src="<?php echo '/assets/js/modernizr.js' . $phpVersion; ?>"></script>

	<!--
	 _   __           ___          _
	| | / /_ _____   / _ \___ ___ (_)__ ____
	| |/ / // / -_) / // / -_|_-</ / _ `/ _ \
	|___/\_,_/\__/ /____/\__/___/_/\_, /_//_/
							      /___/
	-->

</head>

<body id="top">

	<header>
		<nav class="navbar navbar-dark navbar-expand-lg" data-bs-theme="dark">
			<div class="container-fluid">

				<a class="navbar-brand" href="/">BPM</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="/">Home</a></li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul></li>
						<li class="nav-item">
							<a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
					</ul>
					
					<!-- <form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form> -->
				</div>
			</div>
		</nav>
	</header>