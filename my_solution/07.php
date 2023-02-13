<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->

<!DOCTYPE html>
<html>

<head>
  <title>07</title>
</head>

<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="strings">Enter strings, separated by commas:</label>
    <input type="text" id="strings" name="strings">
    <input type="submit" value="Find Longest">
  </form>
  <?php
  if ($_POST) {
    $arrstr = explode(",", $_POST["strings"]);
    function longest_string($arrstr)
    {
      $longest = "";
      foreach ($arrstr as $string) {
        if (strlen($string) > strlen($longest)) {
          $longest = $string;
        }
      }
      return $longest;
    }
    $result = longest_string($arrstr);
    echo "The longest string is: " . $result;
  }
  ?>
</body>

</html>