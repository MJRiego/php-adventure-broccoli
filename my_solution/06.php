<!-- 
    Write a program that outputs the first n triangular numbers.
 -->

<!DOCTYPE html>
<html>

<head>
    <title>06</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="input" min=1 placeholder="Enter a number">
        <br><br>
        <input type="submit" name="submit" value="Show">
    </form>
    <br>

    <?php

    if ($_POST) {
        $myInput['input'] = htmlentities($_POST['input']);
        $input = $myInput['input'];
        $triNum = 0;

        for ($i = 0; $i < $input; $i++) {
            $triNum += $i + 1;

            echo $triNum . "<br>";
        }
    }

    ?>