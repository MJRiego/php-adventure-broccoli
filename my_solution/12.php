<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->

<!DOCTYPE html>
<html>

<head>
    <title>12</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="input" min=1 placeholder="Enter a length">
        <br><br>
        <input type="submit" name="submit" value="Generate Password">
    </form>

    <?php

    if ($_POST) {
        $myInput['input'] = htmlentities($_POST['input']);
        $length = $myInput['input'];

        function generatePassword($length)
        {
            $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?~`/";
            $password = substr(str_shuffle($chars), 0, $length);
            return $password;
        }

        $password = generatePassword($length);

        echo "<br>Your random password is: " . $password;
    }

    ?>
</body>

</html>