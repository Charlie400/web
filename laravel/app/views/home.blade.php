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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
	<header class="header" id="home">
		<figure class="logoContainer">
			<img src="{{ asset('../static/images/logo.png') }}" alt="insous" class="logo">
		</figure>
		<p class="titulo">DUIS NON IPSUM</p>
		<p class="subtitulo">Sed ultricies in nibh at commodo.</p>
		<button class="headerButton">
			<a href="#slide" class="icon-chevron-down"></a>
		</button>
		<div class="menuContainer">
			<nav class="mainMenu" id="mainMenu">
				<figure class="mainMenu_imageContainer">
					<img src="{{ asset('../static/images/logo.png') }}" alt="insous" class="mainMenu_image">
				</figure>
				<ul class="mainMenu_list">
					<li id="linkHome" class="mainMenu_item"><a href="#home" class="mainMenu_link">Home</a></li>
					<!-- <li class="mainMenu_item"><a href="#presentaciones" class="mainMenu_link">Presentaciones</a></li> -->
					<li id="linkSlide" class="mainMenu_item"><a href="#slide" class="mainMenu_link">Servicios</a></li>
					<!-- <li class="mainMenu_item"><a href="#portfolios" class="mainMenu_link">Portfolios</a></li> -->
					<li id="linkNosotros" class="mainMenu_item"><a href="#nosotros" class="mainMenu_link">Nosotros</a></li>
					<li id="linkFormulario" class="mainMenu_item"><a href="#formularios" class="mainMenu_link">Formulario</a></li>
				</ul>
			</nav>
		</div>
		<div class="menuMovilContainer" onBlur="ocultar();">
			<a class="link_menu">
			<figure class="menuMovil_imageContainer">
				<img src="{{ asset('../static/images/menu.png') }}" alt="menu" class="menuMovil_image" onCLick="muestraMenu(this);">
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

	<!-- <section id="services" class="services">
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
				<img src="../static/images/mretina.png" alt="desarrollo web" class="services_image">
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
				<img src="../static/images/iphone.png" alt="desarrollo movil" class="services_image">
			</figure>
		</div>
		
	</section> -->

	<section id="slide" class="slide">

		<h2 class="slide_mainTitle">Todos nuestros servicios</h2>
		
		<div id="comp1">
			<h3 class="slide_title">Diseño web</h3>
			<p class="slide_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus incidunt, doloremque quod voluptate ullam molestias dolorem accusantium sed hic, minima aspernatur dolore delectus! Dolorem, harum, odit. Magni, et obcaecati quia.</p>
			<figure class="slide_imageContainer">
				<img src="{{ asset('../static/images/macbook.png') }}" alt="Diseño Web" class="slide_image">
			</figure>
			<img src="{{ asset('../static/images/html5.png') }}" alt="Html5" class="logoDW">
			<img src="{{ asset('../static/images/js.png') }}" alt="Javascript" class="logoDW">
			<img src="{{ asset('../static/images/css3.png') }}" alt="css3" class="logoDW">
			<img src="{{ asset('../static/images/balsamiq.png') }}" alt="balsamiq" class="logoDWB">
		</div>
		<div id="comp2">
			<h3 class="slide_title_right">Aplicaciones Móviles</h3>
			<p class="slide_description_right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus incidunt, doloremque quod voluptate ullam molestias dolorem accusantium sed hic, minima aspernatur dolore delectus! Dolorem, harum, odit. Magni, et obcaecati quia.</p>
			<figure class="slide_imageContainer_right">
				<img src="{{ asset('../static/images/iphone.png') }}" alt="Diseño movil" class="slide_imageIphone">
			</figure>
			<!-- <img src="../static/images/android.png" alt="Android" class="logoDW">
			<img src="../static/images/ios-logo.png" alt="Ios" class="logoDW"> -->
		</div>
		<a href="#next" onClick="muevelosIzq();" class="arrow_right icon-circle-right"></a>
		<a href="#prev" onClick="muevelosDer();" class="arrow_left icon-circle-left"></a>
		
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
						<img src="{{ asset('../static/images/CuadradoJuanma.jpg') }}" alt="Juanma" class="profile_image">
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
					<img src="{{ asset('../static/images/CuadradoCharlie.jpg') }}" alt="Charlie" class="profile_image">
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
					<img src="{{ asset('../static/images/CuadradoJuan.jpg') }}" alt="Juan" class="profile_image">
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
					<img src="{{ asset('../static/images/pikachu.jpg') }}" alt="Juan" class="profile_image">
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
	<script src="{{ asset('/js/jquery-2.1.3.min.js') }}"></script>
    <!--<script src="https://code.jquery.com/jquery-1.10.2.js"></script>-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="{{ asset('/js/eventos.js') }}"></script>
</body>
</html>