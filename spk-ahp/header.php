<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

		* {
			margin: 0;
			padding: 0;
		}

		body {
			font-family: 'Poppins', sans-serif;
		}

		.banner {
			background: url(img/jumbotron.jpg);
			background-position: center;
			background-size: cover;
			background-repeat: no-repeat;
			height: 100vh;
			margin-top: -120px;
			text-align: center;
		}

		.banner>* {
			color: white;
		}

		.container .text-1 {
			padding-top: 200px;
			line-height: 70px;
			font-size: 20px;
			font-weight: normal;
		}

		.container .text-2 {
			font-weight: 700;
		}

		.container .text-3 {
			font-weight: 400;
		}

		.paragraf {
			font-size: 15px;
			font-weight: 400;
			letter-spacing: 1px;
		}

		hr {
			border: 2px solid #0D6EFD;
			color: #0D6EFD;
			width: 70px;
			opacity: 1;
			border-radius: 3px;
			margin: 30px auto 20px;
		}

		.start {
			font-weight: 700;
			letter-spacing: 1px;
			margin-top: 30px;
			transition: .3s;
			border-radius: 10px;
			font-size: 22px;
		}

		.start:hover {
			border: 3px solid #0D6EFD;
			background: none;
			color: #0D6EFD;

			box-shadow: 0px 0px 20px rgba(13, 110, 253, .5);
		}

		img.about {
			border-radius: 50px;
		}

		@media (min-width: 992px) {
			.container .text-1 {
				padding-top: 200px;
				line-height: 70px;
				font-size: 45px;
				font-weight: normal;
			}

			.container .text-2 {
				font-weight: 700;
			}

			.container .text-3 {
				font-weight: 400;
			}

			.paragraf {
				font-size: 20px;
				font-weight: 400;
				letter-spacing: 1px;
			}

			hr {
				border: 2px solid #0D6EFD;
				color: #0D6EFD;
				width: 70px;
				opacity: 1;
				border-radius: 3px;
				margin: 30px auto 20px;
			}

			.start {
				font-weight: 700;
				letter-spacing: 1px;
				margin-top: 30px;
				transition: .3s;
				border-radius: 10px;
				font-size: 22px;
			}
		}

		@media (max-width: 992px) {
			.container .text-1 {
				padding-top: 200px;
				line-height: 50px;
				font-size: 30px;
			}

			.start {
				font-size: 18px;
			}
		}

		@media (max-width: 768px) {
			.container .text-1 {
				padding-top: 200px;
				line-height: 40px;
				font-size: 25px;
			}

			.paragraf {
				font-size: 12px;
			}

			.start {
				font-size: 16px;
			}
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-warning fs-5 fw-bold mb-5">
		<div class="container">
			<a class="navbar-brand fs-3" href="#">SPK AHP</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse fw-normal" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="kriteria.php">Kriteria
							<div class="ui tiny label bg-primary text-white" style="float: right; margin-left: 5px;"><?php echo getJumlahKriteria(); ?></div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="alternatif.php">Alternatif
							<div class="ui tiny label bg-primary text-white" style="float: right; margin-left: 5px;"><?php echo getJumlahAlternatif(); ?></div>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="bobot_kriteria.php">Perbandingan Kriteria</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="bobot.php?c=1">
							Perbandingan Alternatif
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php
							if (getJumlahKriteria() > 0) {
								for ($i = 0; $i <= (getJumlahKriteria() - 1); $i++) {
									echo "<li><a class='dropdown-item' href='bobot.php?c=" . ($i + 1) . "'>" . getKriteriaNama($i) . "</a></li>";
								}
							}
							?>
						</ul>
					<li class="nav-item">
						<a class="nav-link" href="hasil.php">Hasil</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>