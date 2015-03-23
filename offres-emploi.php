<!DOCTYPE html>
<html>
	<head>
		<title>CAP EMPLOI 44 Nantes - Ressources Handicaps - Organismes de placement spécialisés au service des personnes handicapées et des employeurs pour l'adéquation de l'emploi, compétences et handicap</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/script.js"></script>
    	<link rel="stylesheet" type="text/css" href="style/style.css"/>
		<meta charset="utf-8"/>
	</head>
	
	<body>
		
		<header>
			<?php include_once 'html-includes/header.html'; ?>
		</header>
		
		<nav>
			<?php include_once 'html-includes/menu.html'; ?>
		</nav>
		
		
		<section>
			<article>
				<h2 id="titre_offres_emploi">Offres Cap emploi réservées aux Travailleurs Handicapés</h2>
				<h3 id="indication_offres_emploi">Cliquez sur une offre pour voir sa fiche détaillée</h3>
				<table id="tableau_offres_emploi">
					<thead>
						<tr><th>Intitulé du poste</th><th>N° de l'offre</th><th>Contrat</th><th>Rythme</th><th>Lieu de travail</th></tr>
					</thead>
					<tbody>
						<tr onclick="window.location.href = 'offre1.php'"><td>Agent des services hospitaliers</td><td>7156A</td><td>CDD</td><td>Temps partiel</td><td>LE LOROUX BOTTEREAU</td></tr>
						<tr onclick="alert('Détails de l\'offre...');"><td>Juriste conseiller clientèle H/F</td><td>7154A</td><td>CDD</td><td>Temps complet</td><td>ST HERBLAIN</td></tr>
						<tr onclick="alert('Détails de l\'offre...');"><td>Opérateur logistique</td><td>356A FM</td><td>CDI</td><td>en équipe</td><td>MONTOIR DE BRETAGNE</td></tr>
					</tbody>
				</table>
			</article>
		</section>
		
		
		<footer>
			<?php include_once 'html-includes/footer.html'; ?>
		</footer>
		
	</body>
</html>
