<?php
include '../connexion.php';



//récupération de l'id de l'étudiant
$id_e = $_GET["id"];
$sql = "SELECT * FROM `abonne` WHERE `idAbonne`='$id_e';";
$resultat = $conn->query($sql);

if ($resultat->num_rows > 0) {
  if($row = $resultat->fetch_assoc()) {
	$idabonne= $row["idAbonne"];
    $nom =$row["nom"];
    $prenom=$row["prenom"];
    $adresse=$row["adresse"];
    $telephone=$row["telephone"];
  }
}
?>
<html>
	<head> 
		<title>EDIT SUBSCRIBERS</title>
		<link rel="stylesheet" href="../css/stylemodif.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
	</head>
	<body>
	<div class="container">
			<div class="glass">
		<form method="POST" action="modifAbonne.php">
			<h1>EDIT SUBSCRIBERS</h1>
			<p>Subscriber's ID</p><input type="number" classe = "rd" size="10" name="idabonne" value="<?php echo($idabonne); ?>"><br>
			<p>Last NAME</p> <input type="text" size="10" name="nom" value="<?php echo($nom); ?>"><br>
			<p>First NAME </p><input type="text" size="10" name="prenom" value="<?php echo($prenom); ?>"><br>
            <p>Address </p><input type="text" size="10" name="adresse" value="<?php echo($adresse); ?>"><br>
            <p>phone</p><input type="text" size="10" name="telephone" value="<?php echo($telephone); ?>"><br>
			<input type="submit" value="SAVE">	
	    </form>
		</div>
	</div>
	</body>
</html>