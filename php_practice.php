<?php
    for ($i = 100; $i >= 1; $i--) {
      echo $i;
      echo '<br>';
    }
  for ($i = 1; $i <= 9; $i++) {
    echo $i * 3 .' ';
    }
    for ($i = 1; $i <= 100; ++$i) {
      if ($i % 3 === 0 && $i % 5 === 0) {
          echo 'FizzBuzz';
      } elseif ($i % 5 === 0) {
          echo 'Buzz';
      } elseif ($i % 3 === 0) {
          echo 'Fizz';
      } else {
          echo $i;
      }
      echo '<br>';
    }
    for ($i = 1; $i <= 100; $i++) {
      echo $i.' ';
      if ($i % 10 === 0) {
          echo '<br>';
      }
    }
    $alpha = ['E', 'A', 'D', 'B', 'A', 'C', 'A', 'B', 'E', 'E', 'A', 'A', 'C'];
    $i = 0;

    foreach ($alpha as $v) {
        if ($v === 'A') {
            $i++;
        }
    }
    $english = 70;
    $math = 70;
    $total = $english + $math;

    if ($english >= 60 && $math >= 60 && $total >= 140) {
        echo '合格';
    } else {
        echo '残念';
    }
    for ($i = 1; $i <= 9; $i++) {
      for ($j = 1; $j <= 9; $j++) {
          $res = $i * $j . ' ';
          echo $res;
      }
      echo '<br>';
  }
?>