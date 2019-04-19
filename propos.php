<?php
session_start();
require_once "includes/functions.php";
require_once "includes/navbar.php"; 

?>

<html>
<body>

<div class="container" >
<div class="alert alert-danger">
    <h1 class="text-center">La TEAM </h1> 
    <div class="row">
                <div class="col">
                    <p class="text-right">
                <img class="laTeam" src="images/???" title="Lolo" width=100px /> <br/> </p>
                </div>
                <div class="col">
                <img class="caro" src="images/caro.JPG" title="Caro" width=100px /><br/>
                Caroline CAVEL
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

