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
    <li class="breadcrumb-item active" aria-current="page">Le Partage de Conscience de Situation</li>
  </ol>
</nav>


<div class="container">
<div class="jumbotron jumbotron-fluid bg-white" style="padding: 30px">
  <div class="container">
    <h1 class="left text-center">Notre Expérience</h1>
    <p class="lead text-justify">
      <br/>
Deux individus vont devoir collaborer pour récupérer une roche particulière dissimulée dans une simulation martienne. <br/>
CapCom connaît l'emplacement de la roche grâce à une carte 2D en papier de la simulation sur laquelle est reportée la
localisation précise de la roche. L'Astronaute pilote un rover qui se déplace dans la simulation. Il a également à sa
disposition une carte papier mais ne connait pas l'emplacement de la roche. Les deux coéquipiers 
ne peuvent pas se voir. En n'utilisant que sa voix, CapCom doit guider l'Astro jusqu'à la roche dans un temps imparti
de 15min. Toutes les 45s, la simulation se met en pause, les 2 individus ne doivent pas communiquer et reportent sur leur
carte respective la localisation suposée du rover à cet instant (X1, X2, ...). L'expérience se termine lorsque l'Astro a 
trouvé la roche ou que le temps est écoulé. Ils vont alors immédiatement, sans avoir échangé entre eux, remplir 
indivduellement un questionnaire sur leur ressenti de l'expérience. </p>
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
			<td>Nécessaire pour la prise de notes d'observation</td>
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
  D'après le traitement de la carte de l'Astro et du CapCom, nous pouvons faire apparaître les localisations du rover 
à un instant t. Nous pouvons alors mesurer la distance entre 2 points à un instant t donné.
Plus la distance est grande plus cela signifie que les 2 individus ne partageaient pas la même représentation de la situation. 
Nous pouvons également comparer respectivement les localisations de l'Astro et de Capcom avec la véritable localisation du 
rover enregistrée par la simulation. On peut alors quantifier l'exactitude de la représentation de 
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
 Nous avions prévu un plan de passation avec un questionnaire d'inscription envoyé 1 mois avant l'expérience.
Ceci n'a pas fonctionné, en effet il est rare de savoir autant à l'avance ses disponibilités pour une expérience pouvant atteindre 
45min. <br>
C'est pourquoi nous avons opté majoritairement pour un recrutement à la sauvette. Nous nous sommes réservés des après-midis et 
parfois des journées entières, selon nos disponibilités, pour aller à la rencontre des personnes afin de les inviter à
  passer l'expérience immédiatement ou à nous rejoindre un peu plus tard dans la journée. Cette technique s'est révélée 
  très efficace (en plus de participer au rayonnment de l'ENSC). Ainsi nous avons récruté des élèves de l'ENSC
   mais également des élèves et du personnel de l'admnisitration de l'ENSCBP. <br>
COOKIES </p>
<br>
<h3>LA PASSATION DE L'EXPERIENCE :</h3>
<p class="lead text-justify">
Un examinateur explique le déroulement de l'expérience aux 2 volontaires, assigne les rôles, répond aux questions et ouvre 
la simulation. Une fois les candidats prêts, il lance l'expérience ainsi que le chronomètre. Toutes les 45s, lorsque la simulation
se met en pause, il rappel aux 2 candidats de reporter sur la carte une croix numéroté à l'endroit où ils pensent que le
le rover se trouve sans communiquer avec leur partenaire. Après avoir vérifié que les 2 coéquipiers ont bien respecté la consigne, il signale
à l'Astronaute qu'il peut relancer la simulation et qu'ils peuvent à nouveau communiquer. Pendant ce temps, un deuxième examinateur 
note toutes les informations qu'il juge pertinentes (la stratégie mise en place, problèmes rencontrés pendant l'expérienec, 
vocabulaire spécifique utilisé, etc.). Après que l'Astro ait roulé sur la roche ou que le temps imparti soit écoulé, 
l'examinateur met fin à la simulation et à la communication entre les 2 coéquipiers. Il leur fait remplir individuellement
le questionnaire sur l'ordinateur.
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
