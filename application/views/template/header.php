<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title><?php echo $judul; ?></title>
</head>
<style media="screen">
	a {
		color: #fff;
	}
</style>

<body>
	<nav class="navbar navbar-expand-lg bg-primary">
		<div class="container"> <a class="navbar-brand" href="<?= base_url(); ?>">INVENTORY</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="<?= base_url('view'); ?>">Produk</a>
				</div>
			</div>
		</div>
	</nav>
