<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Consulter la liste des films</title>
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
		<?php
		$lignes = file("data/vod.csv");
		?>
		<h1>VOD</h1>
		<h2>Liste des acteurs</h2>
		<table>
			<thead>
				<tr>
					<th>Film</th>
					<th>Année</th>
					<th>Réalisateur</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($lignes as $uneLigne){
					echo "<tr>";
					$infos = explode( ":" , $uneLigne);
					echo "<td>" . strtoupper($infos[0]) . "</td>";
					echo "<td>" . ucfirst( strtolower( $infos[1] ) ) . "</td>";
					echo "<td>" . ucwords( strtolower( $infos[2] ) ) . "</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</body>
</html>
