<!-- 
    Write a program that takes a input as input and outputs the frequency of each character in the input.
-->

<!DOCTYPE html>
<html>

<head>
    <title>03</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="input" placeholder="Enter input">
        <br><br>
        <input type="submit" name="submit" value="Show Frequency">
    </form>

    <?php

    if ($_POST) {

        $myInput['input'] = htmlentities($_POST['input']);

        $input = $myInput['input'];

        $sum = array();

        for ($i = 0; $i < strlen($input); $i++) {
            array_push($sum, 1);
            for ($j = $i + 1; $j < strlen($input); $j++) {
                if ($input[$i] == $input[$j]) {
                    $sum[$i]++;
                    $input[$j] = '0';
                }
            }
        }

        for ($i = 0; $i < count($sum); $i++) {
            if ($input[$i] != ' ' && $input[$i] != '0') {
                echo ($input[$i] . ": " . $sum[$i]);
                echo ("<br>");
            }
        }
    }
    ?>

</body>

</html>