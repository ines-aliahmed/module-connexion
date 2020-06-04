<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="index.css"/>
		<title>Acceuil</title>
	</head>
	<body >
		<header>
		<?php include('header.php') ?>

		</header>
		
		<?php

		if(isset($_SESSION['login']) || isset($_SESSION['pass']))
					{
						echo "<section><h2 class='titre'>Bienvenue ".$_SESSION['login']." Dans la communauté</h2></section>

						<section><h3>Tenez-vous pret</h3>
				<img  class='img'src='http://idata.over-blog.com/0/25/52/69/2015/53817.gif'>
				<h3>Ca arrive</h3> </img>
			
		</section>";
					}
					else{
						echo " <section><h2> Rejoindre la communauté </h2></section>
				<section><nav><ul class='titre'><li class='lee'><a href='inscription.php'>Inscrivez-vous</a></li>
						<li class='lee'><a href='connexion.php'>connectez-vous</a></li>
						</ul></nav></section>
						";
					}
				?>
				
				
				
	</body>	
</html>