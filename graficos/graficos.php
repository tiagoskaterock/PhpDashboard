<!DOCTYPE html>
<html>
<head>
	<title>Gráficos</title>
	<meta charset="utf-8">

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<script src="http://code.jquery.com/jquery-3.5.1.js"
			  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			  crossorigin="anonymous">			  	
  </script>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="shortcut icon" href="favicon.ico" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>
		.grafico{
			height: 500px;
		}
		body{
			background: #eee;
			overflow: auto;
		}
	</style>

</head>

<body>


<div class="container-fluid">
	<h1 class="text-center">Gráficos</h1>
</div>





<div class="container">
		

	<div class="row">	


		<div class="col-sm-12 col-md-4">
			<?php include 'primeiro_grafico.php' ?>
		</div>




		<div class="col-sm-12 col-md-4">
			<?php include 'segundo_grafico.php' ?>
		</div>	


		<hr>


		<div class="col-sm-12 col-md-4">
			<?php include 'terceiro_grafico.php' ?>
		</div>

	</div>

</div>





</body>
</html>