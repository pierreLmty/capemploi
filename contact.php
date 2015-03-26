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
			<h1>Nous contacter</h1>
			<form method="post" action="#">
				<fieldset>
				<legend>Informations personelles</legend>
				<label for="nom">Nom </label><input type="text" id="nom" required><br/>
				<label for="prenom">Prénom </label><input type="text" id="prenom" required><br/>
				<label for="mail">E-mail </label><input type="email" id="mail" required><br/>
				</fieldset>
				<fieldset>
				<legend>Objet de la demande</legend>
				<label for="sujet">Sujet </label><select id="sujet">
						<option selected>Sujet de la demande</option>
  						<option value="1">1</option>
  						<option value="2">2</option>
  						<option value="3">3</option>
  						</select><br/>
  				<label for="message">Message </label><textarea id="message">Corps du message...</textarea>
				</fieldset>
			</form>		
		</section>
		
		<footer>
			<?php include_once 'html-includes/footer.html'; ?>
		</footer>
		
	</body>
</html>
