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
    <li class="breadcrumb-item active" aria-current="page">Notre Expérience</li>
  </ol>
</nav>


<div class="container">
<div class="jumbotron jumbotron-fluid bg-white" style="padding: 30px">
  <div class="container">
    <h1 class="left text-center">Notre Expérience</h1>
    <p class="lead text-justify">
      <br/>
Deux individus vont devoir collaborer pour récupérer une roche particulière dissimulée dans une simulation martienne. <br/>
CapCom connait l'emplacement de la roche grâce à une carte 2D en papier de la simulation sur laquelle est reportée la
localisation précise de la roche. L'Astronaute pilote un rover qui se déplace dans la simulatio. Il a également à sa
disposition une carte papier de la simulation mais il ne connait pas l'emplacement de la roche. Les deux individus 
ne peuvent pas se voir. En n'utilisant que la voix, CapCom doit guider l'Astro jusqu'à la roche dans un temps imparti
de 15min. Toutes les 45s, la simulation se met en pause, les 2 individus arrêtent de communiquer et reportent sur le
carte respective la localisation du rover à cet instant (X1, X2, ...). L'expérience se termine lorsque l'Astro à 
trouvé la roche ou que le temps soit écoulé. Ils vont alors immédiatement, sans avoir échanger entre eux, remplir 
indivduellement un questionnaire sur le ressenti de l'expérience. </p>
<br/>

<div class="row">
  <div class="col">
    <img src="images/expe1.jpg" alt="Expérience" width=100%>
  </div>
  <div class="col-xl-5">
<table class="table1">
  <thead>
		<tr>
			<th>MATERIEL</th>		
    </tr>
  </thead>
  <tbody>
		<tr>
			<td>1 ordinateur (au moins)</td>
    </tr>
    <tr>
			<td>Executable de la simulation</td>
    </tr>
    <tr>
			<td>Questionnaire post-expérimental (online)</td>
    </tr>
    <tr>
			<td>1 carte CapCom (avec l'emplacement de la roche)</td>
    </tr>
    <tr>
			<td>1 carte Astro</td>
    </tr>
    <tr>
			<td>2 stylos</td>
    </tr>
    <tr>
			<td>1 chronomètre</td>
    </tr>
    <tr>
			<td>1 panneau de séparation</td>
    </tr>
    <tr>
			<td>Nécessaire pour la prise des notes d'observation</td>
    </tr>
</tbody>
</table>
</div>
</div>
<br/>
<hr>
<br/>

<div class="row">
  <div class="col-xl-3">
  <img src="images/carteAstro.jpg" alt="Expérience" width= 100% >
  <img src="images/croix2.JPG" alt="croix" width= 100%>
</div>
<div class="col-xl-8">
    <div class="container">
    <h3>RECOLTE DES DONNEES :</h3>
<p class="lead text-justify"> 
  Après traitement des 2 cartes obtenues en fin d'expérience, nous pouvons faire apparaître les localisations du rover 
à l'instant t d'après l'Astro et d'après CacCom. La distance entre 2 points à un instant t donnée peut dès lors être 
mesurée. Plus la distance est grande et plus les 2 individus ne partageaient pas la même représentation de la situation. 
Nous pouvons également comparer les localisation d'astro et de Capcom respectivemnt avec la véritable localisation du 
rover à un instant précis enregistrée par la simulation. On peut alors quantifier l'exactitude de la représentation de 
la situation pour chacun des participants. </p>
</div>
</div>
</div>


<br/>
<hr>
<br/>
<div class="container">
<h3>LE RECRUTEMENT :</h3>
<p class="lead text-justify"> 
  Au départ : on avait prévu tout un plan de passation, avec un questionnaire d'inscription envoyé 1 mois avant l'expérience.
ça n'a pas fonctionner. Personne ne sait autant à l'avance s'il sera disponible pour une expérience pouvant atteindre 
45min. <br>
C'est pourquoi nous avons opter majoritaire pour le recrutement à la sauvette. Nous avons fait le pari de bloquer toute
 une après-midi, voir une journée entière durant laquelle nous allons à la rencontre des personnes pour les inviter à
  passer l'expérience directement ou à n nous rejoindre un peu plus tard dans la journée. Cette technique c'est révélée 
  très performante (en plus de participer au rayonnment de l'ENSC). Ainsi nous avons fait passer des élèves de l'ENSC
   mais également des élèves de l'ENSCBPP et du personnel de l'admnisitration. <br>
COOKIES </p>
<br>
<h3>LA PASSATION DE L'EXPERIENCE :</h3>
<p class="lead text-justify">
Un examinateur explique le déroulement de l'expérience aux 2 volontaires, assigne les rôles, répond aux questions et ouvre 
la simulation. Une fois les candidat prêt, il lance l'expérience ainsi que le chronomètre. Toutes les 45s, lorsque la simulation
se mettra en pause, il rappelera aux 2 candidats de reporter sur la carte une croix numéroté à l'endroit où ils pensent trouver
le rover sans communiquer avec leur partenaire. Après avoir vérifier que les 2 coequipiers ont bien suivi la consigne, il fera
signe à l'Astronaute de relancer la simulation et qu'il peut à nouveau communiquer. Pendant ce temps, un deuxième examinateur 
notera toutes les information qu'il jugera pertinentes (stratégie mise en place, problème rencontré pendant l'expérienec, 
vocabulaire spécifique utilisé, etc.). Après que l'Astro eu roulé sur la roche ou que le temps impartie soit écoulé, 
l'examinateur met fin à la simulation et à la communication entre les 2 coéquipiers et leur fait remplir individuellement
le questionnaire sur l'ordinateur
 </p>
  </div>
</div>
</div>
</div>

<!--button-->
<div class="text-center ">
<a href="Analyses_Resultats.php" class="btn bg-light" role="button" style="color:rgb(121, 0, 0)">Voir la suite >> </a>
</div>
<br/>

<?php require_once "includes/footer.php"; ?>

</body>

</html>