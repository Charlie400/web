<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,height=device-height, minimum-scale=1, maximum-scale=1"/>
	<title>Insous</title>
	<link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="header" id="home">
		<figure class="logoContainer">
			<img src="{{ asset('/images/logo.png') }}" alt="insous" class="logo">
		</figure>
		<p class="titulo">DUIS NON IPSUM</p>
		<p class="subtitulo">Sed ultricies in nibh at commodo.</p>
		<button class="headerButton">
			<a href="#productos" class="icon-chevron-down"></a>
		</button>
		<div class="menuContainer">
			<nav class="mainMenu" id="mainMenu">
				<figure class="mainMenu_imageContainer">
					<img src="{{ asset('/images/logo.png') }}" alt="insous" class="mainMenu_image">
				</figure>
				<ul class="mainMenu_list">
					<li class="mainMenu_item"><a href="#home" class="mainMenu_link">Home</a></li>
					<!-- <li class="mainMenu_item"><a href="#presentaciones" class="mainMenu_link">Presentaciones</a></li> -->
					<li class="mainMenu_item"><a href="#services" class="mainMenu_link">Servicios</a></li>
					<li class="mainMenu_item"><a href="#nosotros" class="mainMenu_link">Nosotros</a></li>
					<li class="mainMenu_item"><a href="#formularios" class="mainMenu_link">Formulario</a></li>
				</ul>
			</nav>
		</div>
		<div class="menuMovilContainer" onBlur="ocultar();">
			<a class="link_menu">
			<figure class="menuMovil_imageContainer">
				<img src="{{ asset('/images/menu.png') }}" alt="menu" class="menuMovil_image" onCLick="muestraMenu(this);">
			</figure>
			</a>
			<button class="btn botonF1"><a href="#home"></a></button>
			<span class="btn_desc descF1"><a href="#home">Home</a></span>
			<button class="btn botonF2"><a href="#productos"></a></button>
			<span class="btn_desc descF2"><a href="#productos">Productos</a></span>
			<button class="btn botonF3"><a href="#nosotros"></a></button>
			<span class="btn_desc descF3"><a href="#nosotros">Nosotros</a></span>
			<button class="btn botonF4"><a href="#formularios"></a></button>
			<span class="btn_desc descF4"><a href="#formularios">Contactanos</a></span>
		</div>
		
	</header>
	<!-- <section id="presentaciones" class="moduls">
		<p class="video_title">
			Sed ultricies in nibh at commodo.
		</p>
		<video controls class="video">
   			<source src="../static/video/video.m4v" type="video/mp4" />
   			<source src="../static/video/video.webm" type="video/webm"/>             
   			<p>Fallback code if video isn't supported</p>
 		</video>
	</section> -->
	<!-- <section id="productos" class="moduls">
		<section class="container">
		  <div id="carousel">
		  	<p class="main-title">Contrata uno de nuestros productos</p>
		    <article id="0" class="cero product_item izquierda" onClick="rotar(this);">
		    	<p class="product-title">Medium</p>
		    	<p class="product-category-plata"></p>
		    	<ul class="product-list">
		    		<li class="product-component-mini">Menú principal</li>
		    		<li class="product-component-mini">Posicionamiente</li>
		    		<li class="product-component-mini">Formulario</li>
		    		<li class="product-component-mini">Control de usuario</li>
		    		<li class="product-component-mini">Responsive Desing</li>
		    	</ul>
		    </article>
		    <article id="1" class="uno product_item derecha" onClick="rotar(this);">
		    	<p class="product-title">Premium</p>
		    	<p class="product-category-oro"></p>
		    	<ul class="product-list">
		    		<li class="product-component-mini">Menú principal</li>
		    		<li class="product-component-mini">Posicionamiente</li>
		    		<li class="product-component-mini">Formulario</li>
		    		<li class="product-component-mini">Control de usuario</li>
		    		<li class="product-component-mini">Responsive Desing</li>
		    	</ul>
		    </article>
		    <article id="2" class="dos product_item centro" onClick="rotar(this);">
		    	<p class="product-title">Basic</p>
		    	<p class="product-category-bronce"></p>
		    	<ul class="product-list">
		    		<li class="product-component">Menú principal</li>
		    		<li class="product-component">Posicionamiente</li>
		    		<li class="product-component">Formulario</li>
		    		<li class="product-component">Control de usuario</li>
		    		<li class="product-component">Responsive Desing</li>
		    	</ul>
		    </article>
		  </div>
		</section>
	</section> -->

	<section id="services" class="services">
		<h3 class="services_title">
			Todos los servicios que ofrecemos
		</h3>
		<div class="services_article">
			<div class="services_contenido_left">
			<p class="services_webTitle">
			Desarrollo Web
			</p>
			<p class="services_webDesc">
				Diseño personalizado de web con la última tecnología:</br></br>Cliente: HTML5, CSS3, JavaScript, etc </br>Servidor: PHP, Node JS, Python, etc.
			</p>
			</div>
			<figure class="services_imgContainer_left">
				<img src="{{ asset('/images/mretina.png') }}" alt="desarrollo web" class="services_image">
			</figure>
		</div>
		
		<div class="services_article">
			<div class="services_contenido_right">
			<p class="services_webTitle">
			Desarrollo de Aplicaciones Móviles
			</p>
			<p class="services_webDesc">
				Diseño personalizado de aplicaciones móviles (Android, Ios y Windows Phone).
			</p>
			</div>
			<figure class="services_imgContainer_right">
				<img src="{{ asset('/images/iphone.png') }}" alt="desarrollo movil" class="services_image">
			</figure>
		</div>
		
	</section>
	<section id="nosotros">
		<p class="nosotros_title">
			<!-- Sed ultricies in nibh at commodo. -->
			Conoce nuestro equipo
		</p>
		<article id="juanma" class="profile">
			<div id="todo" class="todo">
				<div class="front face">
					<figure class="profile_imageContainer">
						<img src="{{ asset('/images/CuadradoJuanma.jpg') }}" alt="Juanma" class="profile_image">
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
					<img src="{{ asset('/images/CuadradoCharlie.jpg') }}" alt="Charlie" class="profile_image">
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
					<img src="{{ asset('/images/CuadradoJuan.jpg') }}" alt="Juan" class="profile_image">
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
					<img src="{{ asset('/images/pikachu.jpg') }}" alt="Juan" class="profile_image">
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
				<input placeholder=" Apellidos y Nombre" type="text" class="form_name">
				<input placeholder=" Email" type="email" class="form_email">
				<textarea placeholder=" Motivo *" class="form_motivo"></textarea>
				<input type="checkbox" id="check" name="check" value="" class="check">
				<div class="texto">
					<label for="check" class="label">Deseo recibir ofertas y promociones.</label>
				</div>
			<div class="enviar">
				<button class="form_button">ENVIAR MENSAJE</button>
			</div>
			<!-- <div class="social">
				<p class="siguenos">Siguenos en</p>
				<nav class="siguenos-menu">
				<ul class="siguenos-lista">
					<li class="siguenos-item"><a href="twitter" target="_blank"></a></li>
					<li class="siguenos-item"><a href="plus" target="_blank"></a></li>
					<li class="siguenos-item"><a href="linkedin" target="_blank"></a></li>
					<li class="siguenos-item"><a href="github" target="_blank"></a></li>
				</ul>
			</nav>
			</div> -->
		</form>
	</section>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="{{ asset('/js/eventos.js') }}"></script>
</body>
</html>