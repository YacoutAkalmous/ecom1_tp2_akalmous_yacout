<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	header("Location: index.php"); 
	exit; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>affichage des formes</title>
</head>

<body>
	<form action="form.php" method="post">
		<?php
		$num_forms = isset($_GET['num_forms']) ? intval($_GET['num_forms']) : 0;

		for ($i = 1; $i <= $num_forms; $i++) {
			echo "<h3>Form $i</h3>";
			echo '<label for="street">Street:</label>';
			echo '<input type="text" name="street[]" maxlength="50">'; 

			echo '<label for="street_nb">Street Number:</label>';
			echo '<input type="number" name="street_nb[]">'; 

			echo '<label for="type">Type:</label>';
			echo '<select name="type[]">';
			echo '<option value="delivery">Delivery</option>';
			echo '<option value="billing">Billing</option>';
			echo '<option value="other">Other</option>';
			echo '</select>'; 

			echo '<label for="city">City:</label>';
			echo '<select name="city[]">';
			echo '<option value="Montreal">Montreal</option>';
			echo '<option value="Laval">Laval</option>';
			echo '<option value="Toronto">Toronto</option>';
			echo '<option value="Quebec">Quebec</option>';
			echo '</select>'; 

			echo '<label for="zipcode">Zipcode:</label>';
			echo '<input type="text" name="zipcode[]" maxlength="6">'; 
		}
		?>
		<input type="submit" name="confirm" value="Confirm"> 

		<a href="index.php"><button type="button">Go to Index</button></a> 
	</form>
</body>

</html>