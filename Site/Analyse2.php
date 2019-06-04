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
      <br/>
      <strong>But :</strong> On cherche ici a caractériser les groupes qui ont réussi la mission et ceux qui ont échoué en fonction des 
      réponses apportées au questionnaire post-expérimental. Plus concrètement, on cherche les variables qui ont une influence
      significatives au sein des groupes "Echec" et "Reussite", ce qui nous permettrait de dresser le profil type d'une équipe
      qui échoue (idem pour une équipe qui réussi).
			<a href="https://docs.google.com/forms/d/e/1FAIpQLSfEyqVYnAL97rY1LDiEKqnZfZoq7jw7s51pc_3r5liSUc8trw/viewform"><img src="images/fichier.png"  alt="Télécharger l'article" Title="Télécharger le questionnaire" width=16px></a>
      <br/>      
 </p>
<br/>
<h3 class="text-center">Description des variables</h3>
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
<p class="lead text-justify">
Au début du projet, on ne pensait pas avoir à analyser le questionnaire post-expérimental. Il avait pour unique but 
d’expliciter une anomalie dans les résultats sur les cartes. C’est pourquoi son analyse s’est révélée particulièrement 
difficile, l’ensemble des questions étant totalement biaisées par la réussite ou non de l’expérience. 
<br/>
Nous avons néanmoins testé plusieurs points de vue d’analyse dans le but de dégager un profil type d’équipe :<br/><br/>
<ul class="lead text-justify">
<li> <span class="big">Analyse descriptive </span> des données où l’on comparait les résultats des équipes qui ont réussies et elles qui
ont échouées pour chaque variable étudiées. Par exemple, on peut voir ci-dessous un histogramme représentant les 
réponses à la question “Pensez-vous avoir formé un bonne équipe”. On voit bien que les groupes ayant réussi répondent 
majoritairement OUI tandis qu’il n’y a pas de réponse privilégiée entre les groupes ayant échoué. </li>
<div class="text-center"><img src="images/stat1.PNG" alt="Expérience" width= 60% ></div><br/>
<li> <span class="big">Analyse par classification hiérarchique.</span> Chaque variable est sur une branche de l’arbre. Plus les variables sont 
proche sur une même branche et plus elles sont corrélées (ou anti-corrélée). De la même manière, on a comparé les 
arbres en séparant les groupes ayant réussis de ceux ayant échoué. </li>
<div class="text-center"><img src="images/tree.png" alt="clustervar" width= 50% ></div><br/>
<li> <span class="big"> Analyse en composante principale (ACP)</span> </li>
<div class="text-center"><img src="images/ACP.png" alt="ACP" width= 50% ></div><br/>
</ul>
<br/>  
<br/><br/>
<span class="big">Conclusion d'analyse :</span> 
<p class="lead text-justify">
<br/>
Contrairement à ce que nous souhaitions voir lors de cette étude, les questions les plus objectives (le sexe, le module…) de notre questionnaire ne permettaient pas d’expliquer la réussite ou l’échec à la tâche.
	Toutes les autres questions présentes dans le questionnaires étaient à interpréter en sachant qu’elles avaient été posées après la tâche, et étaient donc influencées par le fait que le sujet avait conscience d’avoir ou non réussi et sont donc subjectives. Toutefois, même parmi les questions plus subjectives, celles étant les plus indépendantes de la tâches n’ont pas permis de diviser la population entre les échecs et les réussites.
Nous avons donc choisi de nous intéresser de plus prêt au questions plus subjectives directement liées à la perception de la réussite et du déroulement de la tâche. Ces variables ont permis une bien meilleure discrimination des deux groupes. Les deux approches utilisées, la méthode ACP pure et la méthode ACP + ClustOfVar ont notamment permis d’identifier que les participants ayant réussi à la tâche répondaient ensuite tous de la même manières aux questions sur la qualité de leur communication et la qualité de leurs échanges en tant qu’équipe.
	  Ces résultats nous permettent donc de réfléchir aux expériences futurs, où on pourrait proposer aux participants de ne plus s'intéresser particulièrement à leur communication et à leur travail d’équipe pour voir si cela réduit le nombre d’échecs à la tâche. On pourrait aussi leur donner des méthodes de communication et de travail d’équipe à appliquer.
	  Ces deux paramètres permettent en tout cas de regrouper les participants selon les groupes qui nous intéressent. 
Les regroupements avec les paramètres DifficulteTrouverRoche, PerformancePerso, PerformanceCoeq se sont aussi trouvés être représentatifs, on a donc une bonne compréhension des objectifs de la tâche de la part des participants, et une bonne capacité à l’auto-évaluation particulièrement pertinente dans un contexte de mission martienne comme c’est le cas pour cette expérience.
<br/>
Avec le recul, notre questionnaire n’a pas permis lors de cette analyse de mettre en avant des statistiques intéressantes. Les corrélations et regroupements identifiés n’ont fait que nous indiquer des choses pouvant paraître évidentes sur le fait que les personnes échouant à une tâche le savent. Nous avons ainsi pu réorienter notre analyse vers une autre mise en forme des données, et d’autres hypothèses portant sur une comparaison entre membres de l’équipe notamment. 

</p>
</div>
</div>
</div>

<!--button-->
<div class="text-center ">
<a href="Analyses_Resultats.php" class="btn bg-light" role="button" style="color:rgb(121, 0, 0)">> Analyses & Résultats <</a>
</div>
<br/>

<?php require_once "includes/footer.php"; ?>

</body>

</html>
