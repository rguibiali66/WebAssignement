<?php 
include '../connexion.php';
	session_start();
	
?>
<html>
	<head>
		<title>LIST OF BOOKS</title>
		<link rel="stylesheet" href="../css/StyleAffiches.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
	</head>
	<body>
	<?php
	    
		$sql = "SELECT * FROM `livre`;";
		$resultat = $conn->query($sql);
		

		?>
	
	<div class="container">
			<div class="glass">
			<?php
			if ($resultat->num_rows > 0) {

			?>
	
			<table>
			 <tr>
				<th>Id Book</th>
				<th>Title</th>
				<th>Author</th>
				<th>Publisher</th>
				<th>Col Book</th>
				<th>CHANGE</th>
			 </tr>
		<?php
			while($row = $resultat->fetch_assoc()) {	
		?>			
			 <tr>
				<td><?php echo($row["idLivre"]); ?></td>
				<td><?php echo($row["titre"]); ?></td>
				<td><?php echo($row["auteur"]); ?></td>
				<td><?php echo($row["editeur"]); ?></td>
				<td><?php echo($row["Livercol"]); ?></td>
				<td>
					
				<a href="supLivre.php?id=<?php echo($row["idLivre"]);?>" onclick="return confirm('Voulez-vous supprimer?')">Delete</a>
               <a href="modifLivre_edit.php?id=<?php echo($row["idLivre"]);?>">Edit</a></td> 
					
			 </tr>			 
	
	    <?php
			}
		?>
				<tr><td colspan = '6'><a href="saisieLivre.html">Add a Book</a></td> </tr>
		<?php


		}elseif($resultat->num_rows == 0){
		?>
		<div class="vide">
		<h4>There are no Books, Click to add Books</h4>
				<br>
		<a href="saisieLivre.html">Add A Book</a>

		</div>
		

		<?php	
			}

		?>
			
		</div>
		<div>
	</body>
</html>