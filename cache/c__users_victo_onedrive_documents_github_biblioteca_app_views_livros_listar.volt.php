<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>
			Sistema :: Biblioteca

		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
		<link href="<?= $this->url->getStatic('css/style.css') ?>" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>

	<body>
		<nav class="navbar p-0 fixed-top navbar-expand-lg bg-dark bg-gradient">
	<div class="container-fluid">
		<?= $this->tag->linkTo([['for' => 'livro.lista', 'name' => 'livro.lista'], '<img src="img/logo.png" id="logo-nav">', 'class' => 'navbar-brand', 'title' => 'Início']) ?>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<?= $this->tag->linkTo([['for' => 'livro.lista', 'name' => 'livro.lista'], '<i class="material-icons material-icons-lg">home</i>', 'class' => 'nav-link', 'title' => 'Início', 'aria-current' => 'page']) ?>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/vendas" title="Histórico de vendas">
						<i class="material-icons material-icons-lg">shopping_bag</i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<button class="nav-link bg-transparent border-0" title="Categorias" href="#" id="categoriaDropdown" data-bs-toggle="dropdown">

						<i class="material-icons material-icons-lg">category</i>
					</button>
					<ul class="dropdown-menu bg-dark bg-gradient" aria-labelledby="categoriaDropdown">
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
				<li class="nav-item dropdown">
					<button class="nav-link bg-transparent border-0" title="Adicionar" href="#" id="adicionarDropdown" data-bs-toggle="dropdown">
						<i class="material-icons material-icons-lg">add</i>
					</button>
					<ul class="dropdown-menu bg-dark bg-gradient" aria-labelledby="adicionarDropdown">
						<li>
							<?= $this->tag->linkTo([['for' => 'livro.novo', 'name' => 'livro.novo'], 'Novo Livro', 'class' => 'dropdown-item text-custom']) ?>
						</li>
						<li>
							<?= $this->tag->linkTo([['for' => 'livro.novo', 'name' => 'livro.novo'], 'Novo setor', 'class' => 'dropdown-item text-custom']) ?>
						</li>
						<li>
							<?= $this->tag->linkTo([['for' => 'livro.novo', 'name' => 'livro.novo'], 'Novo Cliente', 'class' => 'dropdown-item text-custom']) ?>

						</li>
					</ul>
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

		<div class="container-fluid mt-5 pt-2" id="main">
			<?= $this->flash->output(true) ?>
			
	<h1 class="text-center fs-1 display-4">Lista de livros</h1>

	<table class="table border-0 table-primary table-striped">
		<thead>
			<tr>
				<th>
					<i class="material-icons">confirmation_number</i>
				</th>
				<th>
					<i class="material-icons">title</i>
				</th>
				<th>
					<i class="material-icons">person</i>
				</th>
				<th>
					<i class="material-icons">local_offer</i>
				</th>
				<th>
					<i class="material-icons">inventory</i>
				</th>
				<th>
					<i class="material-icons">table_rows</i>
				</th>

				<th>
					<i class="material-icons">settings</i>
				</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($livros as $livro) { ?>
				<?php $estantes = Estante::find('id = ' . $livro->idEstante);?>

				<tr>
					<td><?= $livro->id ?></td>
					<td><?= $livro->titulo ?></td>
					<td><?= $livro->autor ?></td>
					<td><?= $livro->editora ?></td>
					<td><?= $livro->precoDia ?></td>
					<?php foreach ($estantes as $estante) { ?>
						<td><?= $estante->linha ?>/<?= $estante->coluna ?>-<?= $estante->setor ?>
						</td>
					<?php } ?>
					<td>
						<span class="option-book ps-2 pe-2 fw-lighter p-0 bg-gradient text-white bg-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Info</span>
						<span class="option-book ps-2 pe-2 fw-lighter p-0 bg-gradient text-white bg-success">Alugar</span>
					</td>

				</tr>
			<?php } ?>
		</tbody>
	</table>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


		</div>
	</body>
</html></body></html></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script></body></html>
