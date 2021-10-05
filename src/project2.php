<h1>Project 2</h1>

<?php

$arr = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);

foreach ($arr as $value) {
  $numStr = strval($value);
  // convert $value to a string and check if a 3 is present
  if (strpos($value, '3') !== false) {
      echo "lucky" . " ";
    } else if ( $value % 15 == 0 ) {
      echo "fizzbuzz" . " ";
    } else if ( $value % 5 == 0 ) {
      echo "buzz" . " ";
    } else if ( $value % 3 == 0 ) {
      echo "fizz" . " ";
    } else {
      echo $value . " ";
  }
}
?>
