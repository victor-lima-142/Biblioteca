a:5:{i:0;s:157:"<!DOCTYPE html>
<html lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>
			";s:11:"titulo_head";N;i:1;s:3289:"
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
		<link href="<?= $this->url->getStatic('css/style.css') ?>" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>

	<body>
		<nav class="navbar p-0 fixed-top navbar-expand-lg bg-dark bg-gradient">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="<?= $this->url->getStatic('img/logo.png') ?>" id="logo-nav">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" title="Início" aria-current="page" href="/">
						<i class="material-icons material-icons-lg">home</i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/vendas" title="Histórico de vendas">
						<i class="material-icons material-icons-lg">shopping_bag</i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link btn border-0" title="Categorias" href="#" id="navbarDropdown" data-bs-toggle="dropdown">

						<i class="material-icons material-icons-lg">category</i>
					</button>
					<ul class="dropdown-menu bg-dark bg-gradient" aria-labelledby="navbarDropdown">
						<li>
							<a class="dropdown-item text-custom" href="#">Action</a>
						</li>
						<li>
							<a class="dropdown-item text-custom" href="#">Another action</a>
						</li>
						<li><hr class="dropdown-divider"></li>
						<li>
							<a class="dropdown-item text-custom" href="#">Something else here</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/adicionar-livro" title="Novo Livro">
						<i class="material-icons material-icons-lg">add</i>
					</a>
				</li>

			</ul>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
				<button class="btn btn-custom" type="submit">
					<i class="material-icons material-icons-md">search</i>
				</button>


			</form>
		</div>
	</div>
</nav>

		<div class="container-fluid mt-5 pt-1">
			<div class="row">
				<div class="col-3 coluna-page">
					<h2 class="fw-lighter text-center">Mais vendidos</h2>
					<ul class="list-group">
						<li class="list-group-item border-0 border-bottom">
							Eu
						</li>
						<li class="list-group-item border-0 border-bottom">
							Tu
						</li>
						<li class="list-group-item border-0 border-bottom">
							Ela
						</li>
					</ul>
				</div>

				<div class="col-3"></div>

				<div class="col-8">
					<div class="container-fluid" id="main">
						<?= $this->flash->output(true) ?>
						";s:7:"content";N;i:2;s:298:"
					</div>

				</div>
			</div>
		</body>
	</body>
</html></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script></body></html>
";}