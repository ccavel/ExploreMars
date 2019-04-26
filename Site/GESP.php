<?php
require_once "includes/functions.php";
require_once "includes/navbar.php"; 
?>

<html>
  <!--breadcrumb pour avoir le nom des pages précédentes -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a class="formerlink" href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Gestion de Projet</li>
  </ol>
</nav>

<body>
<div class="container">
<div class="jumbotron jumbotron-fluid bg-white" style="padding: 30px">
  <div class="container">
    <h1 class="left text-center">GESTION DE PROJET</h1>
    <p class="lead text-justify">
      <br/> 
      <h3 class="text-center">REPARTITION DES TÂCHES</h3>
      Organigramme ? Tableau de l'équipe ? 
</p>
<br/>
<h3 class="text-center">PLANNINGS
<a href="downloads/Protocole.pdf"><img src="images/fichier.png"  alt="Télécharger le Diagramme" Title="Télécharger le Diagramme de Gantt" width=16px></a>
</h3>
      1er semestre <br/> 
      <div class="text-center"><img src="images/gantt1.JPG"  alt="Diagramme de Gantt S1" Title="Diagramme de Gantt S1"></div>
      <br/>
      2ème semestre <br/>
      <div class="text-center">
      <img src="images/gantt2.JPG"  alt="Diagramme de Gantt S2" Title="Diagramme de Gantt S2"></div>
      <br/>

</div>
</div>
</div>

</body>
 <?php require_once "includes/footer.php"; ?>
</html>



