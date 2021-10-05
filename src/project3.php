<h1>Project 3</h1>

<?php

$arr = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$numLucky = 0;
$numFizz = 0;
$numBuzz = 0;
$numFizzBuzz = 0;
$numInteger = 0;

foreach ($arr as $value) {
  $numStr = strval($value);
  // convert $value to a string and check if a 3 is present
  if (strpos($value, '3') !== false) {
      echo "lucky" . " ";
      $numLucky += 1;
    } else if ( $value % 15 == 0 ) {
      echo "fizzbuzz" . " ";
      $numFizzBuzz += 1;
    } else if ( $value % 5 == 0 ) {
      echo "buzz" . " ";
      $numBuzz += 1;
    } else if ( $value % 3 == 0 ) {
      echo "fizz" . " ";
      $numFizz += 1;
    } else {
      echo $value . " ";
      $numInteger += 1;
  }

}
echo "<br />";
echo "fizz: " . $numFizz . "<br />";
echo "buzz: " . $numBuzz . "<br />";
echo "fizzbuzz: " . $numFizzBuzz . "<br />";
echo "lucky: " . $numLucky . "<br />";
echo "integer: " . $numInteger . "<br />";


?>
