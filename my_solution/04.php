<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

<!DOCTYPE html>
<html>

<head>
    <title>04</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="input" min=0 placeholder="Enter a number">
        <br><br>
        <input type="submit" name="submit" value="Sum of every digits">
    </form>

    <?php

    if ($_POST) {

        $myInput['input'] = htmlentities($_POST['input']);

        $input = $myInput['input'];

        $sum = 0;

        for ($i = 0; $i < strlen($input); $i++) {

            $sum += $input[$i];

        }

        echo "<br>The sum is " . $sum;

    }
    ?>


</body>

</html>