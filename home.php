<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="all-page.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php include("header.php") ?>

	<div class="wraper">

		<div class="categories">
			<h2 class="title">Categories</h2>

			<a href="sanitaire.php">
				<div class="item">
					<div class="image">
						<img src="image/icons/sanitaire.png" alt="icon sanitaire" style="border-radius: 50%;">
					</div>
					<h3>Sanitaire</h3>
					<!-- mecanisme wc / detartrage canalisation sanitaire & ballon électriques / salle de bain realisation & réfection / installation & remplacement de robinetterie / -->
				</div>
			</a>
			
			<a href="chaudiere.php">
				<div class="item">
					<div class="image">
						<img src="image/icons/pompe à chaleur.png" alt="icon chaudière">
					</div>
					<h3>Chaudière</h3>
					<!-- Entretien / pose chaudière gaz / fioul nettoyage et ramonnage conduite fumées 
					Installation et intervension sur toutes chaudières basse températuer et condensation -->
				</div>
			</a>

			<a href="plomberie.php">
				<div class="item">
					<div class="image">
						<img src="image/icons/plomberie.png" alt="icon chauffage">
					</div>
					<h3>Plomberie</h3>
					<!-- Plomberie : recherche de fuite / dégorgement & réfection des canalisations des eaux usées -->
				</div>
			</a>
			<div></div>
			<a href="chauffage.php">
				<div class="item">
					<div class="image">
						<img src="image/icons/icon radiateur.png" alt="icon chauffage">
					</div>
					<h3>Chauffage</h3>
					<!-- desembouage chauffage / pose & remplacement de radiateur / pose et installation de thermostat d'ambiance -->
				</div>	
			</a>

			<!-- Plomberie : recherche de fuite / dégorgement & réfection des canalisations des eaux usées -->
			<!-- Faire une page nos réalions -->
		</div>

		<div class="certification">
			<h2 class="title">Certification</h2>

			<div class="image">
				<a href="file/ETS BOUCHET Appellation PG.pdf" target="_blank"><img src="image/icons/pro-du-gaz.png" alt="certification pro du gaz"></a>
			</div>
		</div>

		<div class="marque-deroulant">
			<h2 class="title">Les marques que nous utilisons</h2>

			<div class="caroussel">
				<img src="image/marques/elm-leblanc.png" alt="logo e.l.m leblanc" class="items 1" index="1">
				<img src="image/marques/sonier-duval.png" alt="logo saunier duval" class="items 2" index="2">
				<img src="image/marques/frisquet-logo.png" alt="logo saunier duval" class="items 3" index="3">
				<img src="image/marques/chaffoteaux-logo.png" alt="logo saunier duval" class="items 4" index="4">
				<img src="image/marques/chappee-logo.png" alt="logo saunier duval" class="items 5" index="5">
				<img src="image/marques/vaillant-logo.png" alt="logo saunier duval" class="items 6" index="6">
				<img src="image/marques/ideal-stadard.png" alt="logo saunier duval" class="items 7" index="7">
				<img src="image/marques/de-dietrich-logo.jpg" alt="logo saunier duval" class="items 8" index="8">
			</div>
		</div>
	</div>

    <?php include("footer.php") ?>

	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
</body>
</html>