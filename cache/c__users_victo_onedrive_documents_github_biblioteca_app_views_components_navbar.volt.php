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
