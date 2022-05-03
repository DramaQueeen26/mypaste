<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?= $baseUrl ?>img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?= $baseUrl ?>img/favicon.ico" type="image/x-icon">
	<title>My Paste | Share your texts</title>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= $baseUrl ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $baseUrl ?>bootstrap/icons/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= $baseUrl ?>css/sweetalert2.css">
	<link rel="stylesheet" href="<?= $baseUrl ?>css/home.css">

</head>
<body>
	<header class="header" id="home">

		<!-- NAV -->

		<nav class="navbar fixed-top navbar-expand-lg bg-transparent">
			<div class="container-fluid nav-content">
				<a class="navbar-brand" href="<?= $baseUrl ?>">
			     	<i class="bi bi-journal-text"></i>
			      	My Paste
			    </a>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			      <i class="bi bi-three-dots-vertical"></i>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				        <li class="nav-item">
				          <a class="nav-link" aria-current="page" href="<?= $baseUrl ?>home/signin/">Sign In <i class="bi bi-box-arrow-in-right"></i></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" aria-current="page" href="<?= $baseUrl ?>home/signup/">Sign Up <i class="bi bi-clipboard-check"></i></a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" aria-current="page" href="https://github.com/DramaQueeen26/mypaste" target="_blanck">Github <i class="bi bi-github"></i></a>
				        </li>
				    </ul>
				</div>
			</div>
		</nav>
	</header>

