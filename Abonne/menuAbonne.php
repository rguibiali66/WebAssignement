<?php 
	session_start();
	
?>
<html>
	<head>
		<title>Subscribers List</title>
		<link rel="stylesheet" href="../css/StyleAffiches.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
		
	</head>
	<body>
	<?php
	    include '../connexion.php';
		$sql = "SELECT * FROM `abonne`;";
		$resultat = $conn->query($sql);
		
			// affichage pour chaque ligne
		?>
	<div class="container">
			<div class="glass">
			<?php
			if ($resultat->num_rows > 0) {

			?>

			<table>
			 <tr>
				<th>ID</th>
				<th>NAME</th>
				<th>First Name</th>
				<th>ADDRESS</th>
				<th>PHONE</th>
				<th>EDITTING</th>
				
			 </tr>
		<?php
			while($row = $resultat->fetch_assoc()) {	
		?>			
			 <tr>
				<td><?php echo($row["idAbonne"]); ?></td>
				<td><?php echo($row["nom"]); ?></td>
				<td><?php echo($row["prenom"]); ?></td>
				<td><?php echo($row["adresse"]); ?></td>
				<td><?php echo($row["telephone"]); ?></td>
				<td>	
				<a href="supAbonne.php?id=<?php echo($row["idAbonne"]);?>" onclick="return confirm('You want to delete?')">Delete</a>
				<a href="modifAbonne_edit.php?id=<?php echo($row["idAbonne"]);?>">Edit</a></td>  
				
					
			 </tr>
			 
			 	
			 		 
	    <?php
			}
			?>
				<tr> <td colspan = '6'><a href="saisieAbonne.html">Add a subscriber</a></td> </tr>
			<?php
		}elseif($resultat->num_rows == 0){
		?>
		<div class="vide">
		<h4>There is no subscriber, click to add one</h4>
				<br>
		<a href="saisieAbonne.html">Add a subscriber</a>

		</div>
		<?php	
	}

	?>
		
		</div>
	</div>
	</body>
</html>