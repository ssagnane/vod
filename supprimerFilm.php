<!DOCTYPE html>
<html lang="fr">
	<!-- SI6 -->
	<head>
		<title>SI6 - Fichiers texte</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
		<h1>VOD</h1>
		<?php
		$fichier = file("data/vod.csv");
		//~ $supprFilm = "";
		//~ $fichier= fopen("data/vod.csv", "w");
		foreach($fichier as $ligne => $film){
			list($nomFilm, $annee, $realisateur) = explode(":", $fichier);
			if(trim($nomFilm) == trim($_POST["nomFilm"])){
				$contenuFilm = file_get_contents($fichier);
				$contenuFilm = str_replace($film, "", $contenuFilm);
				file_put_contents($fichier, $contenuFilm);
				//~ fputs($fichier[$film],$supprFilm);
				//~ fclose($fichier);
				echo "Le film "."<b><i>".$nomFilm."</b></i>"." a été supprimé.";
				break;
			}
		}

		?>
	</body>
</html>
