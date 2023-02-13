<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<!DOCTYPE html>
<html>

<head>
    <title>09</title>
</head>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="input_string">Enter a string:</label>
        <input type="text" id="input_string" name="input_string">
        <input type="submit" name="submit" value="Remove Vowels">
    </form>

    <?php
    if ($_POST) {
        $input = $_POST['input_string'];
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $remove = str_replace($vowels, "", $input);

        echo "Output string: $remove";
    }
    ?>

</body>

</html>