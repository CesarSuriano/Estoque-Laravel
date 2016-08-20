<!DOCTYPE html>
<html>
<head>
	<title>Controle de estoque</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="container">

		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/laravel/estoque/public/produtos">Listagem</a></li>
					<li><a href="/laravel/estoque/public/produtos/novo">Novo</a></li>
				</ul>
			</div>
		</nav>

		@yield('conteudo')

		<footer class="footer">
			<p>Livro de Laravel</p>
		</footer>


	</div>
</body>
</html>