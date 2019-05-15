<?php
require_once "includes/functions.php";
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
      <br/>
      <strong>But :</strong> On cherche ici a caractériser les groupes qui ont réussi la mission et ceux qui ont échoué en fonction des 
      réponses apportées au questionnaire post-expérimental. Plus concrètement, on cherche les variables qui ont une influence
      significatives au sein des groupes "Echec" et "Reussite", ce qui nous permettrait de dresser le profil type d'une équipe
      qui échoue (idem pour une équipe qui réussi).
      <br/>
      <strong>Description des variables</strong>
      
 </p>
<br/>
<h3 class="text-center">COMPARAISON ECHEC/REUSSITE</h3>
<br/>
<table class="table table-danger">
		<tr>
			<th>Type</th><th>Nom</th><th>Description</th>
		</tr>
		<tr>
			<td rowspan=5>Quantitatives</td>
			<td>HabitudeTravaillerEnsemble</td>
			<td>Question : A quel point avez vous l’habitude de travailler avec votre coéquipier ? <br/>
Échelle : 1(jamais) à 5(très souvent)</td>	
		</tr>

    <tr>
			<td>PerformancePerso</td>
			<td>Question : Comment évalueriez-vous votre propre performance ? <br/>
Échelle : 1(très faible) à 5(très grande)</td>	
		</tr>

    <tr>
			<td>PerformanceCoeq</td>
			<td>Question : Comment évalueriez-vous la performance de votre coéquipier ?<br/>
Échelle : 1(très faible) à 5(très grande)</td>	
		</tr>

    <tr>
			<td>PdsC</td>
			<td>Question : Diriez-vous que vous et votre coéquipier aviez eu la même compréhension et la même perception des éléments de la mission ? <br/>
Échelle : 1(Non, pas du tout) à 5(Oui, totalement)</td>	
		</tr>

    <tr>
			<td>DifficulteTroverRoche</td>
			<td>Question : Trouver la roche a été ... ?
Échelle : 1(très facile) à 4(très difficile)</td>	
		</tr>

    <tr>
    <td rowspan=11> Qualitative </td>
    <td>Genre</td>
			<td>Homme ou Femme</td>	
		</tr>

    <tr>
			<td>BonneCommunication</td>
			<td>Question : Selon vous, y a t-il eu une bonne communication au sein de l’équipe ?
Réponse : Oui, Non, Je ne sais pas</td>	
		</tr>

    <tr>
			<td>EquilibreParole</td>
			<td>Question : Qui parlait le plus ?
Réponse : Moi, Mon coéquipier, Les échanges étaient équitables</td>	
		</tr>

    <tr>
			<td>EquilibreQuestions</td>
			<td>Question : Qui posait le plus de questions ?
Réponse : Moi, Mon coéquipier, Les échanges étaient équitables</td>	
		</tr>

    <tr>
			<td>BonneEquipe</td>
			<td>Question : Selon vous, avez-vous formé une bonne équipe ?
Réponse : Oui, Non, Je ne sais pas</td>	
		</tr>


    <tr>
			<td>HabitudeGuider</td>
			<td>Question : Avez-vous l'habitude de guider quelqu'un ?
Réponse : Oui, Non, de temps en temps</td>	
		</tr>

    <tr>
			<td>HabitudeEtreGuider</td>
			<td>Question : Avez-vous l'habitude d'être guidé par quelqu'un ? 
Réponse : Oui, Non, de temps en temps</td>	
		</tr>

    <tr>
			<td>SensOrientation</td>
			<td>Question : Diriez-vous que vous avez un bon sens de l’orientation ? (en général)
Réponse : Oui, Non, Je ne sais pas</td>	
		</tr>

    <tr>
			<td>GeneVisionCoeq</td>
			<td>Question : Avez-vous été gêné(e) par le fait de ne pas pouvoir voir votre coéquipier ?
Réponse : Oui, Non, Un peu, Je ne sais pas</td>	
		</tr>

    <tr>
			<td>Module</td>
			<td>Module 1 : Les participants sont de même genre
Module 2 : Les participants sont de genre opposé</td>	
		</tr>


    <tr>
			<td>TrouveRoche</td>
			<td>Oui : l’équipe a réussi la tâche
Non : l’équipe n’a pas réussi la tâche</td>	
		</tr>


		</table> 

<br/>
<br/>
<img src="images/Analyse1.JPG" alt="Expérience" width= 90% >
<br/>
<div class="text-center"> Figure 1 : </div>
    
<p class="lead text-justify"> 
<br/>BlaBlaBla ... </p>
<br/>
<hr>
<br/>
<h3>ACP(s) : </h3>
<p class="lead text-justify"> 
  Blablas... </p>
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
