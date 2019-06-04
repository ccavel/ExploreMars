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
    <li class="breadcrumb-item active" aria-current="page">Premières analyses : quantifier le Partage de Conscience de Situation</li>
  </ol>
</nav>


<div class="container">
<div class="jumbotron jumbotron-fluid bg-white" style="padding: 30px">
  <div class="container">
    <h1 class="left text-center">Analyses PHASE I</h1>
    <p class="lead text-justify">
      <br/>
      <strong>En détail </strong> 
      <br/>Dans cette analyse nous avons porté une attention très particulière au positionnement des croix entre elles, 
      et par rapport à la position réelle du rover dans la simulation. Il apparait des différences de performance quand
      on découpe les participants par groupes en fonction de la similitude de leur représentation (ie la proximité de 
      leurs croix entre elles) ou en fonction de l'exactitude de leur représentation (ie la proximité de leurs croix 
      avec la postion réelle).
      <br/><br/>
      <strong>Le procédé d'analyse</strong>  
      <br/>
      Toutes les 15 secondes, la simulation notifie dans le fichier .txt exporté que le logiciel est en pause. C'est 
      à ce moment que le participant doit indiquer par une croix l'endroit où il pense être sur la carte. Un logiciel 
      de pointage permet ensuite de compenser les déformations liées au scanne de la carte et de projeter les croix dans un référentiel commun 
      afin les comparer. Nous avons regroupé les coordonnées des positions réelles et les coordonnées indiquées
      par les croix de chacun des membres des groupes. Il a ainsi été possible de faire des analyses reliant la 
      performance à l'appartenance aux groupes de bonne ou mauvaise exactitude, ces résultats ont mené à l'écriture 
      d'un article pour présenter ces résultats.
      <br/>
      Cette analyse, et ces résultats finaux intéressants, ont été précédé d'une série de tentatives et d'hypothèses 
      qui se sont révélées n'amener aucun résultats, comme par exemple nos essais de comparaison de la distance entre 
      les croix d'une même équipe à une même étape à la performance globale de l'équipe. 
      <a href="downloads/tableur.xlsx"><img src="images/fichier.png"  Title="Accéder au traitement des données (Excel)" width=16px></a>
      <br/>
      Nous listons ci-dessous une 
      liste non-exhaustive des hypothèses que nous avons du rejeter lors de l'analyse :
      <ul class="lead">
        <li>Corrélation directe et moyenne de la distance entre les croix (similitude) avec la performance</li>
        <div class="text-center"><img src="images/graphe1.PNG" alt="graph1" width=70%></div>
        <br/>
        <br/>
        <li>Corrélation directe et moyenne de la distance entre la position réelle et la position perçue (exactitude) avec la performance</li>
        <div class="text-center"><img src="images/graphe2.PNG" alt="graph2" width=70%></div>
        <br/>
        <br/>
        <li>Identification de profils d'écarts à la réalité au cours du temps</li>
        <li>Identification de profils d'écarts entre les perception de localisation au cours du temps </li>
        <div class="text-center"><img src="images/EvolutionSimilariteTemps.PNG" alt="graph2" width=70%></div>
        <br/>
        <br/>

      </ul>
      </p>
      <p class="lead">
      D'un autre côté, nous avons également fait des analyses qui ne faisaient que confirmer des résultats évidents. Par exemple, ci-dessous 
      on peut voir une comparaison de l'exactitude d'Astro avec celle de CapCom. On observe qu'Astro à en moyenne un meilleure exactitude, ce 
      qui paraît logique car c'est lui qui a accès à la simulation et qui voit (et controle) directement la position du rover étudiée. 
        <div class="text-right"><img src="images/graphe3.PNG" alt="graph2" width=84%></div>
        <br/>
        <br/>
        <br/>
        <span class="big">Conclusion d'analyse :</span> 
  <p class="lead text-justify">
        Après analyses sur le lien entre le PDCS spatial et la performance en terme de durée, 
        on distingue deux groupes : l'un avec inexactitude et différent et l'autre avec inexactitude mais similaire.
        Même si ces différences ne sont pas assez pour expliqué les différences entre les équipes par rapport à leur performance,
        les résultats des analyses montrent que PDCS spatial peut être utilisé comme un indicateur linéaire pour anticiper les performance en temps des équipes.
 </p>
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
