<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Marmitas Dona Rita</title>

	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}
		img{
			width: 150px;
			height: 150px;
			
		}
		#container{
			width: 100%;

		}
		header{
			background-color:#FFBF00 ;
		}
		#conteudo{
			display: flex;
			background-color: white;			
			justify-content: space-around;
		}
		.item{
			height: 300px;
			width: 300px;
			border: 2px solid black;
		}
		nav a{
			margin: 30px;
			text-decoration: none;
			float: right;	
			color: red;		
		}
		#conteudo2{
			display: flex;
			background-color: white;
			justify-content: space-around;
		}
		.item1{
			height: 300px;
			width: 300px;
			border: 2px solid black;
		}
		footer{
			background-color: orange;
			height: 230px;	
			padding: 30px;		
		}
		footer a{
			text-decoration: none;
			color: #FF0000;
		}
		.centralizar{
			text-align: center;
			background-color: #DF7401;
			
		}
		h1{
			text-align: center;
		}
		a:hover{
			color: white;
			text-decoration: underline overline;
			background: red;
			font-size: 110%;
		}
		h1{
			float:left;
			padding: 30px;
			font-size: 60px;
			color: #8A0808;
		}
		.item img{
			width: 300px;
			height: 200px;
		}
		.item1 img{
			width: 300px;
			height: 200px;
		}
		#c{
			text-align: center;
		}
		button{
			padding: 8px;
			background-color: #F79F81;
			color: red;
		}



		
	
	</style>
</head>
	
		<body>
			<h1>MARMITAS DA DONA RITA </h1>
			<div id="container">
				<header>
					<nav class="imagem"> 
						<img src="marmitadarita.png">
						<a href="">CONTATO </a>
						<a href="">ONDE NOS ENCONTRAR  </a>
						<a href="">QUEM SOMOS  </a>
						<a href="index.php">HOME</a>
						
						<div>

						</div>
						
					</nav>
				</header>
				<section id="conteudo">
					<article class="item">
								<img src="marmita1.jpg">
							<div id="c">
								<h3> Marmita de Frango Assado:</h3>
								<br>
								<a href="marmita1.php">	<button>Ver mais</button></a>
							</div>
					</article >
					<article class="item"> 
							<img src="marmita2.jpg">
							<div id="c">
								<h3> Marmita Vegana:</h3>
								<br>
									<a href="marmita2.php">	<button>Ver mais</button></a>
						
					</article>
					<article  class="item">						
						<img src="marmita3.jpg">
						<div id="c">
								<h3> Marmita Agridoce:</h3>
								<br>
									<a href="marmita3.php">	<button>Ver mais</button></a>
					</article >
					<article  class="item">
						<img src="marmita4.jfif">
						<div id="c">
								<h3> Marmita de Batata:</h3>
								<br>
								<a href="marmita4.php">	<button>Ver mais</button></a>
					</article>

				</section>
				<section id="conteudo2">
					<article  class="item1">
						<img src="marmita5.jpg">
						<div id="c">
								<h3> Marmita de Brócolis:</h3>
								<br>
									<a href="marmita5.php">	<button>Ver mais</button></a>
					</article>
					
					<article  class="item1">
						<img src="marmita6b.webp">
						<div id="c">
								<h3> Marmita Integral:</h3>
								<br>
									<a href="marmita6.php">	<button>Ver mais</button></a>
					</article>
					
					<article  class="item1">
						<img src="marmita7.png">
						<div id="c">
								<h3> Carne de boi:</h3>
								 <br>
									<a href="marmita7.php">	<button>Ver mais</button></a>
					</article>
					<article  class="item1">
						<img src="marmita8.jfif">
						<div id="c">
								<h3>Especial c om batata frita:</h3>
								 <br>
									<a href="marmita8.php">	<button>Ver mais</button></a>
					</article>

										
				</section>

				<footer>
						<h2>Quer saber mais?</h2><br>

					<p><a href="">Quem somos</a>
				    <p><a href="">Blog</a>
				    <p><a href="">Contato</a>
				    <p><a href="">Conheça Dona Rita</a>
				    <h2>Entre em contato</h2>
				    <form>
				    	E-mail <input type="email"  name="E-mail" placeholder="E-mail">
				    	Assunto: <input type="text" name="text" placeholder="Fale conosco">
				    	 <button>Enviar</button>
				    </form>
				    	
				    	<br><br><br>					
				</footer>
				<footer class="centralizar">
					Todos direitos reservados a Vanderlei chepanski RA:21131539-5
				</footer>

			 </div>
		</body>
	
</html>