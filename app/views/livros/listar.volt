{% extends "layouts/template.volt" %}

{% block titulo_head %}Sistema :: Biblioteca
{% endblock %}


{% block content %}
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
			{% for livro in livros %}
				<?php $estantes = Estante::find('id = ' . $livro->idEstante);?>

				<tr>
					<td>{{livro.id}}</td>
					<td>{{livro.titulo}}</td>
					<td>{{livro.autor}}</td>
					<td>{{livro.editora}}</td>
					<td>{{livro.precoDia}}</td>
					{% for estante in estantes %}
						<td>{{estante.linha}}/{{estante.coluna}}-{{estante.setor}}
						</td>
					{% endfor %}
					<td>
						<span class="option-book ps-2 pe-2 fw-lighter p-0 bg-gradient text-white bg-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Info</span>
						<span class="option-book ps-2 pe-2 fw-lighter p-0 bg-gradient text-white bg-success">Alugar</span>
					</td>

				</tr>
			{% endfor %}
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

{% endblock %}
