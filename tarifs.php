<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="all-page.css">
	<link rel="stylesheet" type="text/css" href="css/tarifs.css">
	<meta charset="utf-8">
	<title></title>
</head>
<body style="position: relative;">

    <?php include("header.php") ?>

    <div class="wraper">
        <div class="column">
			<div class="item">
				<h2>Chauffe eau / Chauffe bain</h2>
				<div>
					<h3>Nettoyage simple</h3>
					<h3 class="prix">88</h3>
				</div>
			</div>
			<div class="item">
				<h2>Chaudieres gaz murales</h2>
				<div>
					<h3>Nettoyage simple + ramonage</h3>
					<h3 class="prix">109</h3>
				</div>
				<div>
					<h3>Nettoyage + ramonage <strong>Contrat d'entretien</strong></h3>
					<h3 class="prix">147</h3>
				</div>
			</div>
			<div class="item">
				<h2>Chaudieres gaz au sol</h2>
				<div>
					<h3>Chauffage seul - Nettoyage + ramonage</h3>
					<h3 class="prix">109</h3>
				</div>
				<div>
					<h3>Chauffage seul - <strong>Contrat d'entretien</strong></h3>
					<h3 class="prix">147</h3>
				</div>
				<div>
					<h3>Chauffage seul avec ballon gaz - <strong>Contrat d'entretien</strong></h3>
					<h3 class="prix">147</h3>
				</div>
				<div>
					<h3>Mixte Nettoyage</h3>
					<h3 class="prix">109</h3>
				</div>
				<div>
					<h3>Chauffage seul avec ballon gaz - Nettoyage</h3>
					<h3 class="prix">147</h3>
				</div>
				<div>
					<h3>Mixte <strong>Contrat d'entretien</strong></h3>
					<h3 class="prix">147</h3>
				</div>
			</div>
		</div>
		<div class="stick column"></div>
		<div class="column">
			<div class="item">
				<h2>Chaudieres fioul</h2>
				<div>
					<h3>Nettoyage simple + ramonage</h3>
					<h3 class="prix">175</h3>
				</div>
				<div>
					<h3>Nettoyage + ramonage <strong>Contrat d'entretien</strong></h3>
					<h3 class="prix">270</h3>
				</div>
			</div>
			<div class="item">
				<h2>Ramonages</h2>
				<div>
					<h3>Cheminée gaz</h3>
					<h3 class="prix">68</h3>
				</div>
				<div>
					<h3>Cheminée Fioul <strong>OU</strong> cheminée d'âtre</h3>
					<h3 class="prix">270</h3>
				</div>
			</div>
			<div class="item">
				<h2>DUO</h2>
				<div>
					<h3>Chaudiere gaz <strong>SANS</strong> contrat + artre</h3>
					<h3 class="prix">185</h3>
				</div>
				<div>
					<h3>Chaudiere gaz <strong>AVEC</strong> contrat + artre</h3>
					<h3 class="prix">223</h3>
				</div>
			</div>
			<div class="item">
				<h2>Forfait</h2>
				<div>
					<h3>Forfait detartage (6 litres à 33,86 ht/litre)<br>hors deplacement et main d'oeuvre</h3>
					<h3 class="prix">223,48</h3>
				</div>
			</div>
		</div>
    </div>

    <?php include("footer.php") ?>
	
	<style>
		strong{
			text-decoration: underline;
			font-weight: bold;
			color: rgba(255, 255, 255, 0.63);
			font-style: italic;
		}
	</style>

	<script src="js/script.js" defer></script>
	<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
	<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
</body>
</html>