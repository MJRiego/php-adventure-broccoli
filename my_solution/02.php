<!-- 
	Write a program that takes a string as input and outputs whether it is a palindrome.
-->

<!DOCTYPE html>
<html>

<head>
	<title>02</title>
</head>

<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="input" placeholder="Enter input">
		<br><br>
		<input type="submit" name="submit" value="Palindrome or Not">
	</form>
	<br>

	<?php
	if ($_POST) {

		$input['input'] = htmlentities($_POST['input']);
		$myInput = $input['input'];
		$revstring = strrev($myInput);
		if ($myInput == "") {
			echo "Please enter an input";
		} else if($myInput == $revstring){
			echo "Palindrome";
		} else{
			echo "Not Palindrome";
		}
	}

	?>

</body>

</html>