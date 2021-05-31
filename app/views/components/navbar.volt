<nav class="navbar p-0 fixed-top navbar-expand-lg bg-dark bg-gradient">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="{{ static_url("img/logo.png") }}" id="logo-nav">
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
