<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->

<html>

<head>
    <title>11</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter numbers separated by commas: <input type="text" name="numbers">
        <input type="submit" value="Calculate Average">
    </form>
    <?php

    if ($_POST) {
        $input = explode(',', $_POST['numbers']);
        $sum = 0;
        foreach ($input as $num) {
            $sum += $num;
        }
        $ave = $sum / count($input);
        $average = round($ave, 2);
        echo "The average of the numbers is: $average";
    }
    ?>
</body>

</html>