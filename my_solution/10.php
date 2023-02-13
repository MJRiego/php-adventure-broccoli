<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->

 <html>
  <head>
    <title>10</title>
  </head>
  <body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Enter numbers separated by a commas:
      <input type="text" name="numbers"><br><br>
      <input type="submit" value="Find Median">
    </form>
  </body>
</html>

<?php
  if($_POST) {
    $input = explode(",", $_POST["numbers"]);
    sort($input);
    $count = count($input);
    if($count % 2 == 0) {
      $median = ($input[$count/2 - 1] + $input[$count/2]) / 2;
    } else {
      $median = $input[($count-1)/2];
    }
    echo "The median is: " . $median;
  }
?>