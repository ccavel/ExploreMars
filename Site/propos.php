<?php
session_start();
require_once "includes/functions.php";
require_once "includes/navbar.php"; 

?>

<html>
<body>
<br/>
<div class="container" >
<div class="jumbotron jumbotron-fluid bg-white" style="padding: 30px">
  <div class="container">
    <h1 class="lead text-center">La TEAM </h1> 
    <div class="row">
                <div class="col">
                    <p class="text-right">
                <img class="laTeam" src="images/???" title="photo" width=100px /> <br/> </p>
                </div>
                <div class="col">
                <img class="caro" src="images/caro.PG" title="Caro" width=100px /><br/>
                membre de la team
                </div>    
    </div>
</div>
</div>

<div class="alert">
    <h1 class="text-center">A PROPOS </h1> 
    <p class="text-center">
        <br/> Citation : <em> La vie c'est compliqué, mais pas autant que le PHP. </em>
     </p>
</div>

</div>
<?php require_once "includes/footer.php"; ?>

</body>
</html>

