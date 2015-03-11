<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
	<script type="text/javascript" src="{{ asset('js/Ajax.js') }}" ></script>
</head>
<body>
	{{ Form::open(['route' => 'contact', 'method' => 'POST']) }}

	<input name="firstname" placeholder="nombre" type="text" /><br>
	<input name="lastname"  placeholder="apellidos" type="text" /><br>
	<input name="email"     type="email" placeholder="E-mail" /><br>
	<input name="message"   type="text" placeholder="Mensaje" /><br>
	<input name="noticeme"  type="checkbox" value="1" /> Mantenme informado de las novedades.<br>

	<input name="send" type="submit" value="Enviar" />

	{{ Form::close() }}
</body>
</html>