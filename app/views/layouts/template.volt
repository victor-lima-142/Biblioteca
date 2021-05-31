<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>
			{% block titulo_head %}{% endblock %}
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
		<link href="{{ static_url("css/style.css") }}" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>

	<body>
		{% include "components/navbar.volt" %}
		<div class="container-fluid mt-5 pt-2" id="main">
			{{ flash.output(true) }}
			{% block content %}{% endblock %}
		</div>
	</body>
</html></body></html></div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script></body></html>
