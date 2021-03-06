<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/calendario/css/calendario.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/calendario/css/estilos.css') }}">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body class="admin-body" >
<div class="container">	
	@include('admin.template.partials.nav')
	

	<section class="section-admin" >
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">@yield('title')</h3>
			</div>
			<div class="panle-body">
				
				@include('flash::message')
				@include('admin.template.partials.errors')
				@yield('content')
			</div>			
		</div>
		
	</section>

	<footer class="admin-footer">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
					<p class="navbar-text"> Todos los derechos Reservados &copy {{ date('Y') }} </p>
					<p class="navbar-text navbar-right"><b>WorkshopLabs</b></p>
				</div>
			</div>
		</nav>
	</footer>


	<script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>	
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/calendario/js/calendario.js') }}"></script>

	<script src="{{ asset('js/qrcode.js') }} "></script>
  	<script src="{{ asset('js/qrcode_SJIS.js') }}"></script>
  	<script src="{{ asset('js/sample.js') }} "></script>
  	<script src="{{ asset('js/plusone.js') }}"></script>

	@yield('js')


	
	</div>
</body>

</html>