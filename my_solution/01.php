<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->

<!DOCTYPE html>
<html>

<head>
    <title>01</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="input" maxlength="1" placeholder="Enter input">
        <br><br>
        <input type="submit" name="submit" value="Vowel or Consonant">
    </form>
    <br>


    <?php
    if ($_POST) {
    
        $myInput['input'] = htmlentities($_POST['input']);

        $input = $myInput['input'];

        if (
            $input == 'a' || $input == 'e' || $input == 'i' ||
            $input == 'o' || $input == 'u' || $input == 'A' ||
            $input == 'E' || $input == 'I' || $input == 'O' ||
            $input == 'U'
        ) {
            echo $input. " : Vowel";
        } else if ($input){
            echo $input. " : Consonant";
        }else{
            echo "Please enter an input";
        }

    }
    ?>
</body>

</html>