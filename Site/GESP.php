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
      <br/>
      <br/>
      <div class="row">
        <div class="col">
          <p class="lead text-center">
              <img class="Baptiste" src="images/Laeti.png" title="Laetitia Calice" height=200px /><br/> 
                Laetitia Calice
          </p>
        </div>
        <div class="col">
          <p class="lead text-center">
                <img class="Baptiste" src="images/caro.JPG" title="Caroline Cavel" height=200px /><br/> 
                Caroline Cavel</p>
        </div>
        <div class="col">
          <p class="lead text-center">
                <img class="Baptiste" src="images/adrien1.jpeg" title="Adrien Leduque" height=200px /><br/> 
                Adrien Leduque</p>
        </div>
        <div class="col">
          <p class="lead text-center">
                <img class="Baptiste" src="images/mateo.jpg" title="Matéo Mahaut" height=200px /><br/> 
                Matéo Mahaut</p>
        </div>
      </div>
      <br/>
      <div class="row">
        <div class="col">
          <p class="lead text-center">
          <img class="Baptiste" src="images/prebot.jpg" title="Baptiste Prébot" height=200px /><br/> 
          Client : Baptiste Prébot</p>
        </div>
        <div class="col">
          <p class="lead text-center">
          <img class="Salotti" src="images/salotti.jpg" title="Jean-Marc Salotti" height=200px /><br/>
          Tuteur : Jean-Marc SALOTTI
        </div>    
      </div>
      <br/>
      <br/>

    <h3 class="text-center">NOTRE ORGANISATION</h3>
      <p class=" lead text-justify">
      Réunion hebdomadaire de l'équipe <br/>
      Réunion toutes les 2 semaines minimum avec le client et le tuteur <br/>
      Mise en commun des travaux sur Google Drive <br/>
      Répartition des tâches :  <br/>
</p>

<br/>


<h3 class="text-center">PLANNINGS
<a href="downloads/GANTT.PNG"><img src="images/fichier.png"  alt="Télécharger le Diagramme" Title="Télécharger le Diagramme de Gantt" width=16px></a>
</h3>
<p class="lead">
      1er semestre <br/> 
      <div class="text-center"><img src="images/gantt1.PNG"  alt="Diagramme de Gantt S1" Title="Diagramme de Gantt S1" width=80%>
      </div> </p>
      <br/>
      <p class="lead"> 2ème semestre <br/>
      <div class="text-center">
      <img src="images/gantt2.PNG"  alt="Diagramme de Gantt S2" Title="Diagramme de Gantt S2" width=80%></div>
      <br/>
</p>

<br/>
      <br/>

    <h3 class="text-center">MATRICE DES RISQUES</h3>

</div>
</div>
</div>

</body>
 <?php require_once "includes/footer.php"; ?>
</html>



