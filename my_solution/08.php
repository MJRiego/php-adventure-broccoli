<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->

<html>

<head>
    <title>08</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a string: <input type="text" name="string"><br><br>
        <input type="submit" value="Total Words">
    </form>

    <?php
    if ($_POST) {
        $string = $_POST['string'];
        $word_count = str_word_count($string);
        echo "The number of words in the string: $word_count";
    }
    ?>
</body>

</html>