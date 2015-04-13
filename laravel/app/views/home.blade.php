<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,height=device-height, minimum-scale=1, maximum-scale=1"/>
	<title>Insous</title>
	<link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="{{ asset('/js/eventos.js') }}"></script>
</head>
<body onload="alturaProfiles()">
	<header class="header" id="home">
		<figure class="logoContainer">
			<img src="{{ asset('/images/logo.png') }}" alt="insous" class="logo" height="60" width="250">
		</figure>
		<p class="titulo">DUIS NON IPSUM</p>
		<p class="subtitulo">Sed ultricies in nibh at commodo.</p>
		<!-- <button class="headerButton">
			<a href="#slide" class="icon-chevron-down"></a>
		</button> -->

		
			<a href="#slide" class="home_link"><img src="{{ asset('/static/images/BotonHome2-2.png') }}" alt="home" width="6%" class="botonHome"></a>
		<!-- <div class="menuContainer"> -->
			<nav class="mainMenu" id="mainMenu">
				<figure class="mainMenu_imageContainer">
					<img src="{{ asset('/images/logo.png') }}" alt="insous" class="mainMenu_image">
				</figure>
				<ul class="mainMenu_list">
					<li id="linkHome" class="mainMenu_item"><a href="#home" class="mainMenu_link">Home</a></li>
					<li id="linkSlide" class="mainMenu_item"><a href="#slide" class="mainMenu_link">Servicios</a></li>
					<li id="linkNosotros" class="mainMenu_item"><a href="#nosotros" class="mainMenu_link">Nosotros</a></li>
					<li id="linkFormulario" class="mainMenu_item"><a href="#formularios" class="mainMenu_link">Formulario</a></li>
				</ul>
			</nav>
		<!-- </div> -->
		<div class="menuMovilContainer" onBlur="ocultar();">
			<a class="link_menu">
			<figure class="menuMovil_imageContainer">
				<img src="{{ asset('/images/menu.png') }}" alt="menu" class="menuMovil_image" width="50" onCLick="muestraMenu(this);">
			</figure>
			</a>
			<button class="btn botonF1"><a href="#home"></a></button>
			<span class="btn_desc descF1"><a href="#home">Home</a></span>
			<button class="btn botonF2"><a href="#slide"></a></button>
			<span class="btn_desc descF2"><a href="#slide">Servicios</a></span>
			<button class="btn botonF3"><a href="#nosotros"></a></button>
			<span class="btn_desc descF3"><a href="#nosotros">Nosotros</a></span>
			<button class="btn botonF4"><a href="#formularios"></a></button>
			<span class="btn_desc descF4"><a href="#formularios">Contactanos</a></span>
		</div>
		
	</header>

	<section id="slide" class="slide">

		<h2 class="slide_mainTitle">Todos nuestros servicios</h2>
		<a href="#next" onClick="muevelosIzq();" class="arrow_right icon-circle-right"></a>
		<a href="#prev" onClick="muevelosDer();" class="arrow_left icon-circle-left"></a>
		
		<div id="comp1">
			<div id="information" class="information" onClick="mostrarFormulario(this);">
				<h3 class="slide_title">
					<img src="{{ asset('/images/mas.png') }}" width="20" height="20" alt="desplegar" class="mas">
					<p>Diseño web</p>
				</h3>
				<p class="slide_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus incidunt, doloremque quod voluptate ullam molestias dolorem accusantium sed hic, minima aspernatur dolore delectus! Dolorem, harum, odit. Magni, et obcaecati quia.</p>
				<img src="{{ asset('/images/html5.png') }}" width="40" height="60" alt="Html5" class="logoDW">
				<img src="{{ asset('/images/js.png') }}" width="40" height="60" alt="Javascript" class="logoDW">
				<img src="{{ asset('/images/css3.png') }}" width="40" height="60" alt="css3" class="logoDW">
				<img src="{{ asset('/images/balsamiq.png') }}" width="120" height="40" alt="balsamiq" class="logoDWB">
			</div>
			<figure class="slide_imageContainer">
				<img src="{{ asset('/images/macbook.png') }}" alt="Diseño Web" width="400" class="slide_image">
			</figure>
		</div>
		<div id="comp2">
			<div id="information_right" class="information_right" onClick="mostrarFormulario(this);">
				<h3 class="slide_title_right">
					<img src="{{ asset('/images/mas.png') }}" width="20" height="20" alt="desplegar" class="mas">
					<p>Aplicaciones Móviles</p>
				</h3>
				<p class="slide_description_right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus incidunt, doloremque quod voluptate ullam molestias dolorem accusantium sed hic, minima aspernatur dolore delectus! Dolorem, harum, odit. Magni, et obcaecati quia.</p>
			</div>
			<figure class="slide_imageContainer_right">
				<img src="{{ asset('/images/iphone.png') }}" alt="Diseño movil" width="150" class="slide_imageIphone">
			</figure>
			<!-- <img src="../static/images/android.png" alt="Android" class="logoDW">
			<img src="../static/images/ios-logo.png" alt="Ios" class="logoDW"> -->
		</div>
		
	</section>

	<section id="nosotros" onresize("alturaProfiles();")>
		<p class="nosotros_title">Conoce nuestro equipo</p>
		<article id="juanma" class="profile">
			<div id="todo" class="todo">
				<div class="front face">
					<figure class="profile_imageContainer">
						<img src="{{ asset('/images/CuadradoJuanma.jpg') }}" width="200" alt="Juanma" class="profile_image">
					</figure>
				</div>
				<div class="back face">
					<p class="profile_name">Juan Manuel Serrano García</p>
					<p class="profile_job">Graphic Designer</p>
					<nav class="MenuSocial">
						<ul class="MenuSocial-lista">
							<li id="twitter" class="MenuSocial-item"><a href="twitter" target="_blank"></a></li>
							<li id="plus" class="MenuSocial-item"><a href="plus" target="_blank"></a></li>
							<li id="linkein" class="MenuSocial-item"><a href="linkedin" target="_blank"></a></li>
							<li id="github" class="MenuSocial-item"><a href="github" target="_blank"></a></li>
						</ul>
					</nav>
				</div>
			</div>
			
		</article>
		<article id="charlie" class="profile">
			<div id="todo" class="todo">
			<div class="front face">
				<figure class="profile_imageContainer">
					<img src="{{ asset('/images/CuadradoCharlie.jpg') }}" width="200" alt="Charlie" class="profile_image">
				</figure>
			</div>
			<div class="back face">
				<p class="profile_name">Juan Carlos Fernández Prior</p>
				<p class="profile_job">Backend</p>
				<nav class="MenuSocial">
					<ul class="MenuSocial-lista">
						<li id="twitter" class="MenuSocial-item"><a href="twitter" target="_blank"></a></li>
						<li id="plus" class="MenuSocial-item"><a href="plus" target="_blank"></a></li>
						<li id="linkein" class="MenuSocial-item"><a href="linkedin" target="_blank"></a></li>
						<li id="github" class="MenuSocial-item"><a href="github" target="_blank"></a></li>
					</ul>
				</nav>
			</div>
			</div>
		</article>
		<article id="juan" class="profile">
			<div id="todo" class="todo">
			<div class="front face">
				<figure class="profile_imageContainer">
					<img src="{{ asset('/images/CuadradoJuan.jpg') }}" width="200" alt="Juan" class="profile_image">
				</figure>
			</div>
			<div class="back face">
				<p class="profile_name">Juan Antonio Beato Quiñones</p>
				<p class="profile_job">Frontend</p>
				<nav class="MenuSocial">
					<ul class="MenuSocial-lista">
						<li id="twitter" class="MenuSocial-item"><a href="twitter" target="_blank"></a></li>
						<li id="plus" class="MenuSocial-item"><a href="plus" target="_blank"></a></li>
						<li id="linkein" class="MenuSocial-item"><a href="linkedin" target="_blank"></a></li>
						<li id="github" class="MenuSocial-item"><a href="github" target="_blank"></a></li>
					</ul>
				</nav>
			</div>
			</div>
		</article>
		<article id="joseca" class="profile">
			<div id="todo" class="todo">
			<div class="front face">
				<figure class="profile_imageContainer">
					<img src="{{ asset('../static/images/pikachu.jpg') }}" alt="Juan" width="200" class="profile_image">
				</figure>
			</div>
			<div class="back face">
				<p class="profile_name">Jose Carlos Rodriguez Fernández</p>
				<p class="profile_job">Backend</p>
				<nav class="MenuSocial">
					<ul class="MenuSocial-lista">
						<li id="twitter" class="MenuSocial-item"><a href="twitter" target="_blank"></a></li>
						<li id="plus" class="MenuSocial-item"><a href="plus" target="_blank"></a></li>
						<li id="linkein" class="MenuSocial-item"><a href="linkedin" target="_blank"></a></li>
						<li id="github" class="MenuSocial-item"><a href="github" target="_blank"></a></li>
					</ul>
				</nav>
			</div>
			</div>
		</article>
	</section>
	<section id="formularios" class="formulario">
		<h3 class="form_title">Contactanos</h3>
		<form action="" class="form">
				<input placeholder=" Nombre" type="text" class="form_name">
				<input placeholder=" Apellidos"type="text" class="form_lastName">
				<input placeholder=" Email" type="email" class="form_email">
				<textarea placeholder=" Motivo *" class="form_motivo"></textarea>
				<input type="checkbox" id="check" name="check" value="" class="check">
				<div class="texto">
					<label for="check" class="label">Deseo recibir ofertas y promociones.</label>
				</div>
			<div class="enviar">
				<button class="form_button">ENVIAR MENSAJE</button>
			</div>
		</form>
	</section>
	<script src="{{ asset('/js/jquery-2.1.3.min.js') }}"></script>
</body>
</html>