<?php 
session_start();
require_once("core/Database.php");
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="Assets/bootstrap-4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="Assets/fontawesome-free-5.12.0/css/all.min.css">
	<script src="Assets/jquery/dist/jquery.js"></script>
	<script src="Assets/bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script src="Assets/chart.js/dist/Chart.min.js"></script>
	<script src="Assets/fontawesome-free-5.12.0/js/all.min.js"></script>

</head>

<body>
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="dashboard.php">
					<img src="Assets/logoo.png" alt="Iki Logo" width="60" height="60" />
				</a>
				<h2 style="font-family: Comfortaa; margin-top: 10pt; color: white;"><b>SIPERAG</b></h2>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
					aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown" id="loginForm"
								method="post" action="service/apiservices.php">
								<?=$_SESSION['username']?>
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="service/apiservices.php?req=logout">Logout</a>
								<button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Call
									Center</button>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Call Center</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Hubungi nomor : 081615473321
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
					</div>
				</div>
			</div>
		</div>
	</header>
