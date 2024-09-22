
<?php

// *
// **
// ***
// ****
// ***** 


$n = 5;
for ($i = 0; $i <= $n; $i++) {
  echo str_repeat("*", $i) . "\n";
}

// *****
// ****
// ***
// **
// *

$a = 5;
for ($i = $a; $i >= 0; $i--) {
  echo str_repeat("*", $i) . "\n";
}

//     *
//    **
//   ***
//  ****
// *****

$b = 5;

for ($i = 1; $i <= $b; $i++) {
  echo str_repeat(" ", $b - $i) . str_repeat("*", $i) . "\n";
}

//inverted

for ($i = $b; $i >= 0; $i--) {
  echo str_repeat(" ", $b - $i) . str_repeat("*", $i) . "\n";
}

//      *
//     ***
//    *****
//   *******
//  *********

$e = 5;

for ($i = 1; $i <= $e; $i++) {
  echo str_repeat(" ", $e - $i) . str_repeat("*", 2 * $i - 1) . "\n";
}

//inverted

for ($i = $e - 1; $i >= 1; $i--) {
  echo str_repeat(" ", $n - $i) . str_repeat("*", 2 * $i - 1) . "\n";
}

// *****
// *   *
// *   *
// *   *
// *****

for ($i = 1; $i <= $e; $i++) {
  if ($i == 1 || $i == $e) {
    echo str_repeat("*", $n) . "\n";
  } else {
    echo "*" . str_repeat(" ", $n - 2) . "*\n";
  }
}


//     *
//    * *
//   *   *
//  *     *
// *********

for ($i = 1; $i <= $e; $i++) {
  echo str_repeat(' ', $e - $i);
  if ($i == 1) {
    echo "*\n";
  } elseif ($i == $e) {
    echo str_repeat("*", 2 * $i - 1) . "\n";
  } else {
    echo "*" . str_repeat(' ', 2 * $i - 3) . "*\n";
  }
}


// 1
// 12
// 123
// 1234
// 12345

$u = 5;

for ($i = 1; $i <= $u; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $j;
  }
  echo "\n";
}


?>