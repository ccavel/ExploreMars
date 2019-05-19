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
      <br/> 
  
      <h3 class="text-center">L'ÉQUIPE EXPLORE MARS</h3>
      <div class="text-center">
      <img src="images/team.jpg"  alt="L'équipe Explore Mars" Title="L'équipe Explore Mars" width=80%>
      </div>
      <br/>
      <div class="row">
                <div class="col">
                <p class="lead text-right">
                <img class="Baptiste" src="images/prebot.jpg" title="Baptiste" height=150px /><br/> 
                Client : Baptiste Prébot</p>
                </div>
                <div class="col">
                <p class="lead ">
                <img class="Salotti" src="images/salotti.jpg" title="Salotti" height=150px /><br/>
                Tuteur : Jean-Marc SALOTTI
                </div>    
    </div>

</p>
<br/>
<h3 class="text-center">PLANNINGS
<a href="downloads/GANTT.PNG"><img src="images/fichier.png"  alt="Télécharger le Diagramme" Title="Télécharger le Diagramme de Gantt" width=16px></a>
</h3>
      1er semestre <br/> 
      <div class="text-center"><img src="images/gantt1.PNG"  alt="Diagramme de Gantt S1" Title="Diagramme de Gantt S1" width=80%></div>
      <br/>
      2ème semestre <br/>
      <div class="text-center">
      <img src="images/gantt2.PNG"  alt="Diagramme de Gantt S2" Title="Diagramme de Gantt S2" width=80%></div>
      <br/>


      <h3 class="text-center">NOTRE ORGANISATION</h3>
      <p class="text-justify">
      Réunion hebdomadaire de l'équipe <br/>




</div>
</div>
</div>

</body>
 <?php require_once "includes/footer.php"; ?>
</html>



