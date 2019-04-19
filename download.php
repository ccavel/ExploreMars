<?php
require_once "includes/functions.php";
require_once "includes/navbar.php"; 
?>

<!doctype html>
<html>
<body>

<br/>
<br/>
<div class="container text-center">
<div class="jumbotron jumbotron-fluid bg-white">
<div class="container">
		<h1>Livrables</h1>
		<p>Ici, vous pourrez télécharger l'ensemble de nos livrables.</p> <br/>
		
		<table class="table table-danger">
		<tr>
			<th>Nom du livrable</th><th>Description</th><th>Poids</th><th>Télécharger</th>		
		</tr>
		<tr>
			<td>Cahier des charges</td>
			<td>Décrit les objectifs du premier semestre ainsi que les spécifications techniques du manuel utilisateur</td>
			<td>524 Ko</td>
			<td width=10% class="text-center">
			<a href="downloads/CdC.pdf"><img src="images/upload.png" alt="7th slide" width=30%></a>
			</td>
	
		</tr>
		<tr>
			<td>Etat de l'art</td>
			<td>Bibliographie explicitant les études réalisée sur les sujets de la Conscience de Situation et du Partage de Conscience de Situation</td>
			<td>1,3 Mo</td>
			<td width=10% class="text-center">
			<a href="downloads/EdA.pdf"><img src="images/upload.png"  alt="7th slide" width=30%></a>
			</td>				
		</tr>
		<tr>
			<td>Protocole</td>
			<td>Document détaillant le protocole (matériel, déroulement) de l'expérience effectuée</td>
			<td>0,2 Mo</td>
			<td width=10% class="text-center">
			<a  href="downloads/Protocole.pdf"><img src="images/upload.png" alt="7th slide" width=30%></a>
			</td>				
		</tr>
		<tr>
		<td>Questionnaire</td>
			<td>Questionnaire post-expérimental rempli online par chacun des participants et complété par leur(s) examinateur/trice(s)</td>
			<td>0,2 Mo</td>
			<td width=10% class="text-center">
			<a href="downloads/Questionnaire.pdf"><img src="images/upload.png" alt="7th slide" width=30%></a>
			</td>				
		</tr>

		</table> 
		
		</div>
		</div>

</div>
	
    <?php require_once "includes/footer.php"; ?>

</body>

</html>