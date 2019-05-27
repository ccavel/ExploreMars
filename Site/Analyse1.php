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
    <li class="breadcrumb-item active" aria-current="page">Premières analyses : quantifier le Partage de Conscience de Situation</li>
  </ol>
</nav>


<div class="container">
<div class="jumbotron jumbotron-fluid bg-white" style="padding: 30px">
  <div class="container">
    <h1 class="left text-center">Analyses PHASE I</h1>
    <p class="lead text-justify">
      <br/>
      <strong>En détail : </strong> 
      <br/>Dans cet analyse nous avons porté une attention très particulière au positionnement des croix, entre elles, 
      et par rapport à la position réelle du rover dans la simulation. Il apparait des différences de performance quand
      on découpe les partiipants par groupes en fonction de la similitude de leur représentation (ie la proximité de 
      leurs croix entre elles) ou en fonction de l'exactitude de leur représentation (ie la proximité de leurs croix 
      avec la postion réelle).
      <br/><br/>
      <strong>Description des variables</strong>  
      <br/>
      Toutes les 15 secondes, la simulation notifie dans le fichier .txt exporté que le logiciel est en pause. C'est 
      à ce moment que le participant doit indiquer par une croix l'endroit où il pense ^étre sur la croix. Un logiciel 
      de pointage de scan permet ensuite de compenser les déformations et de les projeter sur un référentiel commun 
      afin de pouvoir les comparer. Nous avons regroupé les coordonnés des positions réels, et les coordonnés indiqués
      par les croix de chacun des membres des groupes. Il a ainsi été possible de faire des analyses reliant la 
      performance à l'appartenance aux groupes de bonne ou mauvaise exactitude, ces résultats ont mené à l'écriture 
      d'un article pour présenter ces résultats.
      <br/>
      Cette analyse, et ces résultats finaux intéressants, ont été précédée d'une série de tentatives et d'hypothèses 
      qui se sont révélées n'amener aucun résultats, comme par exemple nos essais de comparaison de la distance entre 
      les croix d'une même équipe à une même étape à la performance globale de l'équipe. Nous listons ci-dessous une 
      liste non-exhaustive des hypothèse que nous avons du rejeter lors de l'analyse :
      <ul class="lead">
        <li>Corrélation directe de la distance entre les croix (similitude) avec la performance</li>
        <li>Corrélation moyenne de la distance entre les croix (similitude moyenne) avec la performance</li>
        <li>Corrélation directe de la distance entre la position réelle et la position perçue (exactitude) avec la performance</li>
        <li>Corrélation moyenne de la distance entre la position réelle et la position perçue (exactitude moyenne) avec la performance</li>
        <li>identification de profils d'écarts entre les perception de localisation au cours du temps </li>
        <li>identification de profils d'écarts à la réalité au cours du temps</li>
      </ul>
 </p>
<br/>

<br/>

<br/>

    

<br>
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
