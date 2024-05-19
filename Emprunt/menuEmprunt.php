<?php 
	session_start();
	
?>
<html>
	<head>
		<title>LOANS LIST</title>
		<link rel="stylesheet" href="../css/StyleAffiches.css">
		<link rel="shortcut icon" href="../Accueil/images/img.png">
		
	</head>
	<body>
	<?php
	    include '../connexion.php';
		$sql = "SELECT * FROM `emprunt`;";
		$resultat = $conn->query($sql);
		//if ($resultat->num_rows > 0) {
			// affichage pour chaque ligne
		?>
	
	<div class="container">
			<div class="glass">
		<?php
		if ($resultat->num_rows > 0) {

		?>
			<table>
			 <tr>
				<th>Id Loan</th>
				<th>Borrowing Date</th>
				<th>Return Date</th>
				<th>id Subscriber</th>
				<th>id Book</th>
				<th>CHANGE</th>
			 </tr>
		<?php
			while($row = $resultat->fetch_assoc()) {	
		?>			
			 <tr>
				<td><?php echo($row["idEmprunt"]); ?></td>
				<td><?php echo($row["DateEmprunt"]); ?></td>
				<td><?php echo($row["DateRetour"]); ?></td>
				<td><?php echo($row["idAbonne"]); ?></td>
				<td><?php echo($row["idLivre"]); ?></td>
				<td>
				<a href="supEmprunt.php?id=<?php echo($row["idEmprunt"]);?>" onclick="return confirm('You want to delete?')">Delete</a>
                <a href="modifEmprunt_edit.php?id=<?php echo($row["idEmprunt"]);?>">Edit</a></td> 
					
			 </tr>	
			 <tr> <td colspan = '6'><a href="saisieEmprunt.html">Add a loan</</td> </tr>		 
	
	    <?php
		}
		?>
			<tr> <td colspan = '6'><a href="saisieEmprunt.html">Add a loan </td> </tr>
		<?php
		}elseif($resultat->num_rows == 0){
		
		?>
		
		<div class="vide">
		<h4>There are no Borrowings, Click to add Borrowings</h4>
				<br>
		<a href="saisieEmprunt.html">Add A Loan</a>

		</div>
		

		<?php	
	}

	?>
		
	</div>
	</div>

	<?php 
	
	
	?>

	
</body>
</html>