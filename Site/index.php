<?php
require_once "includes/head.php";
?>

<html>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <!--Wrapper for slides-->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/badass.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/team.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/expe1.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Mateo.PNG" alt="4th slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end of carousel-->


<?php require_once "includes/navbar.php"; ?>

<body>

<br/>
<br/>

<div class="container">
<div class="jumbotron jumbotron-fluid" style="background:linear-gradient(90deg, white, 95%, transparent)">
  <div class="container">
    <h1><a href="PdCdS.php" class="left">Le Partage de Conscience de Situation</a></h1>
    <p class="lead"> Comment définir le Partage de Conscience de Situation ? Quelles sont les études déjà réalisées sur le sujet ?</p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background:linear-gradient(90deg, transparent 0%, white 5%)">
  <div class="container right">
    <h1><a href="notreExpe.php" class="right">Notre Expérience</a></h1>
    <p class="left"><div class="content">Le principe de l'expérience est simple : un commandant doit guider un astronaute pilotant un rover
      jusqu'à l'emplacement d'une roche particulière dans une simulation 3D du paysage martien</p>
</div>
  </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background:linear-gradient(90deg, white, 95%, transparent)">
  <div class="container">
    <h1><a href="Analyses&Resultats.php" class="left">Anlayses & Résultats</a></h1>
    <p class="lead">Une analyse détaillée des réponses au questionnaire post-expérimental rempli par les participants à permis de montrer ...</p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background:linear-gradient(90deg, transparent 0%,  white 5%)">
  <div class="container right">
    <h1><a href="GESP.php" class="right">Gestion de Projet</a></h1>
    <p class="content">Pour gérer se projet d'une durée de 9 mois nous avons, dès le commencement, établit un diagramme de Gantt sur lequel nous nous sommes appuyés toute l'année... </p>
  </div>
</div>

<div class="jumbotron jumbotron-fluid" style="background:linear-gradient(90deg, white, 95%, transparent)">
  <div class="container">
    <h1><a href="AllerPlusLoin.php" class="left">Aller + loin</a></h1>
    <p class="lead">Pour pousser l'expérience plus loin, il serait intéressant de regarder l'impact d'un échange dans lequel les participants n'hésitent pas à exprimer... </p>
  </div>
</div>

</div>
 <?php require_once "includes/footer.php"; ?>
 
 </body>
</html>



