<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Recherche</title>
		<link rel="stylesheet" href="style/vod.css">
	</head>
	<body>
		<!-- Site navigation menu -->
		<ul class="navbar">
			<li><a href="vod.html">Accueil</a>
			<li><a href="consulterFilms.php">Consulter un film</a>
			<li><a href="saisieTitreRecherche.html">Rechercher un film</a>
			<li><a href="saisieFilm.html">Ajouter un film</a>
			<li><a href="saisieTitreSuppression.html">Supprimer un film</a>
		</ul>
		<h1>RECHERCHE</h1>
		<?php
		$films = file("data/vod.csv");
		$trouver = false;
		foreach($films as $ligne => $film){
			list($nomFilm,$annee,$rea) = explode(":", $film);
			//~ $infos = explode( ":" , $uneLigne);
			//~ $nomFilm  = strtoupper($infos[0]);
			//~ $annee = ucfirst( strtolower( $infos[1] ) );
			//~ $rea   = ucwords( strtolower( $infos[2] ) );

			if(strtolower(trim($nomFilm)) == strtolower(trim($_POST["nomFilm"]))){
				echo "Voici les informations pour le film : ". "<b>" . $nomFilm . "</b><br/>";
				echo "Année : ". "<i>" .$annee. "</i><br/>";
				echo "Réalisateur : ".$rea . "<br/>";
				$trouver = true;
				break;
			}
			$trouver = false;
		}
		if(!$trouver){
			echo "Désolé, votre film n'est pas dans la liste.";
		}
		?>
	</body>
</html>
