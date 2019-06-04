<?php
require_once "includes/navbar.php"; 

?>

<!doctype html>
<html>
<body>

<!--breadcrumb pour avoir le nom des pages précédentes -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="formerlink" href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Analyses & Résultats</li>
  </ol>
</nav>


<div class="container">
<div class="jumbotron jumbotron-fluid bg-white" style="padding: 30px">
  <div class="container">
    <h1 class="left text-center">Analyses & Résultats</h1>
    <p class="lead text-justify">

			<br/><i>
      On peut diviser l'ensemble des analyses réalisées en 2 phases d'analyses distinctes. En effet, nous avons dans un premier temps analyser
			les résultats de l'expérience : les chemins du rover tracés, comparé au chemin réel enregistré par la simulation. Dans un second 
			temps nous avons analysé les questionnaires post-expérimentaux dans l'optique de caractériser un profil type de "bonne" et de "mauvaise" équipe.</i>
      </p>
			<br/>
			<br/>
			<h2> PHASE I : </h2>
			<p class="lead text-justify">
			<strong>But :</strong> Cette première étude a pour but de quantifier le Partage de Conscience de Situation entre les 2 individus d'un binôme
			ayant réalisé l'expérience à travers les chemins tracés respectivement. On a cherché à comparé le distance entre les croix des individus indiquant 
			la position du rover à l'instant t (similitude). Plus l'écart est grand et plus on admet que le partage de conscience de situation était mauvais. 
			On a également comparé individuellement la croix reportées à l'instant t sur la carte avec la position exacte du rover dans la simulation au même 
			instant (exactitude). On a donc pu observer la similarité moyenne de chaque groupe en fonction de leur performane temporelle ainsi que l'évolution 
			de la similarité et de l'exactitude de la représentation des individus au cours de l'expérience.<br>
			<div class="row">
			<div class="col-xl-4">
			<img src="images/CarteAnalyseDistance.PNG" alt="Carte montrant la distance entre les repères marqués par Astro et CapCom" title="Carte montrant la distance entre les repères marqués par Astro et CapCom" width= 100%>
			</div>
			<div class="col">
			<img src="images/EvolutionSimilariteTemps.PNG" alt="Evolution de la similarité et de l'Exactitude en fonction du temps" title="Evolution de la similarité et de l'Exactitude en fonction du temps"  width= 100%>
			</div>
			</div>
			<p class="lead text-justify">
			<br/>
			<span class="big">Conclusion d'analyse :</span> 
			L'utilisation de critères de spatialité (distances) permet de réaliser une évaluation quantitative du partage de conscience de situation. On observe 
			notamment une corrélation positive entre les équipes ayant une plutôt bonne performance et leur partage effectif de conscience de situation, c'est-à-dire 
			un binôme qui a en moyenne des écarts très faibles avec la réalité, soit une bonne exactitude.
			<br/><br/>
			Cette première phase à aboutit à la mise en forme de toutes les données quantitatives collectées qui ont servit de base de travail à Baptiste Prébot et à Coralie Vennin 
			pour la rédaction d'un article destiné à la conférence AHFE intitulé <em>Shared Spatial Situation Awareness as a Team Performance Indicator in Collaborative Spatial Orientation Task</em>.
			<a href="downloads/AHFE.PNG"><img src="images/fichier.png"  alt="Télécharger l'article" Title="Télécharger l'article" width=16px></a>
			</p>
			<br/>
			 	<div class="text-center ">
				<a href="Analyse1.php" class="btn bg-light" role="button" style="color:rgb(121, 0, 0)">En savoir plus </a>
				</div>
			</p>


			<br/>
			<br/>
      <br/>
			<h2> PHASE II : </h2>
			<p class="lead text-justify">
      <strong>But :</strong> On cherche ici a caractériser les groupes qui ont réussi la mission et ceux qui ont échoué en fonction des 
      réponses apportées au questionnaire post-expérimental. Plus concrètement, on cherche les variables qui ont une influence
      significatives au sein des groupes "Echec" et "Reussite", ce qui nous permettrait de dresser le profil type d'une équipe
      qui échoue (idem pour une équipe qui réussi).	</p>
			<div class="col">
			<img src="images/stat1.PNG" alt="" title="Réponse des participants à la question 'Pensez-vous avoir formé une bonne équipe ?' en fonction de la réussite ou non de la mission"  width= 90%>
			</div>
			<br/>
			<p class="lead text-justify">
			<span class="big">Conclusion d'analyse :</span> 
			Contrairement à ce que nous espérions montrer, nos analyses ne peuvent pas expliquer l'échec ou la réussite des équipes. Néanmoins, les méthodes d'analyses ont pu montrer que les participants ayant réussi à la tâche répondaient, en moyenne, ensuite tous de la même manières aux questions sur la qualité de leur communication et la qualité de leurs échanges au sein de l’équipe. Ainsi, l'étude a confirmé que les équipes ayant échouées pensaient en moyenne être une mauvaise équipe, et inversement pour les équipes ayant réussi la mission.
			</p>
			 	<div class="text-center ">
				<a href="Analyse2.php" class="btn bg-light" role="button" style="color:rgb(121, 0, 0)">En savoir plus </a>
				</div>

      

<br>
</div>
</div>
</div>

<!--button-->
<div class="text-center ">
<a href="GESP.php" class="btn bg-light" role="button" style="color:rgb(121, 0, 0)">Voir la suite >> </a>
</div>
<br/>

<?php require_once "includes/footer.php"; ?>

</body>

</html>
