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
        $fichier = fopen("data/vod.csv", "a+");
        $ajtFilm = $_POST["titre"].":".$_POST["annee"].":".$_POST["realisateur"];
        fwrite($fichier,$ajtFilm);
        fclose($fichier);

        echo "Le film "."<b><i>".$_POST["titre"]."</b></i>"." a été ajouté.";

		?>
