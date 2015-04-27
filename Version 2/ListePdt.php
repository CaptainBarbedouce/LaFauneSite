<!DOCTYPE php>
<html>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" type="text/javascript" href="news.js">	
</html>
<?php
	try{
	//On créé un objet $bd pour se connecter à la base de donné, le mot de passe est "secret".
	$bdd = new PDO('mysql:host=localhost;dbname=bdlf1;charset=utf8','lafaune','secret');
	}
	//Si erreur on execute catch qui affiche un message d'erreur
	catch(Exception $e){
		die('Erreur : '. $e->getMessage());
	}
	$SQL='SELECT pdt_image,pdt_ref,pdt_designation,pdt_prix FROM PRODUIT WHERE pdt_categorie = $_GET["categ"]';
	$reponse = array($bdd->query($SQL))or die('ERREUR SQL ! <br>'.$SQL.'<br>'.$bdd->errorinfo());
	//$reponse = $bdd->query($SQL) or die('ERREUR SQL ! <br>'.$SQL.'<br>'.$bdd->errorinfo());
	?>
	<tr>
		<td>Photo</td>
		<td>Référence</td>
		<td>Désigantion</td>
		<td>Prix</td>
	</td>
<?php
	//La boucle en dessous va générer un tableau affichant la BD concernée
	//Renvoie la valeur "false" lorsque y'a plus rien et fin de boucle
	//fetch permet d'afficher la 1er ligne puis les suivantes quand réappelée
	while($donnees = $reponse->fetch()){
?>
	<tr>
		<td><?php echo $donnees['pdt_image']; ?></td>
		<td><?php echo $donnees['pdt_ref']; ?></td>
		<td><?php echo $donnees['pdt_designation']; ?></td>
		<td><?php echo $donnees['pdt_prix']; ?></td>
	</tr>
<?php
	};
	//termine le traitement de la requête
	$reponse->closeCursor();
?>
?>