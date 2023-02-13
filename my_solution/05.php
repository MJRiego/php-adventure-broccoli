<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->

<html>
  <head>
    <title>05</title>
  </head>
  <body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Enter numbers separated by a commas:
      <input type="text" name="numbers"><br><br>
      <input type="submit" value="Sum">
    </form>
  </body>
</html>

<?php
  if($_POST) {
    $input = explode(",", $_POST["numbers"]);
    
    $sum = array_sum($input);
    echo "The sum is: " . $sum;
  }
?>