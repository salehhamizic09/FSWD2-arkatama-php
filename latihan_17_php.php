<?php

function triangle_upside_left($n) {
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i+1; $j++) {
      echo "*";
    }
    echo "\n <br>";
  }
}

function triangle_downside_right($n) {
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i+1; $j++) {
      echo "*";
    }
    echo "\n <br>";
  }
}

function triangle_downside_left($n) {
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
      echo " ";
    }
    for ($j = $i; $j < $n; $j++) {
      echo "*";
    }
    echo "\n <br>";
  }
}

function triangle_downside_right2($n) {
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
      if ($j < $i) {
        echo "  ";
      } else {
        echo "* ";
      }
    }
    echo "<br>";
  }
}


// echo "Triangle Upside Left:\n <br>";
// triangle_upside_left(5);

// echo "\nTriangle Downside Right:\n <br>";
// triangle_downside_right(5);

// echo "\nTriangle Downside Left:\n <br>";
// triangle_downside_left(5);

// echo "Triangle Downside Right 2:\n <br>";
// triangle_downside_right2(5);

function print_pattern($func_name, $n) {
  if ($func_name == "triangle_upside_left") {
    triangle_upside_left($n);
  } else if ($func_name == "triangle_downside_right") {
    triangle_downside_right($n);
  } else if ($func_name == "triangle_downside_left") {
    triangle_downside_left($n);
  } else if ($func_name == "triangle_downside_right2") {
    triangle_downside_right2($n);
  } else {
    echo "Invalid function name";
  }
}

// contoh pemanggilan fungsi untuk mencetak triangle_upside_left
print_pattern("triangle_upside_left", 5);

// function print_pattern($symbol = '*', $row = 5) {
//   for ($i = 1; $i <= $row; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//       echo $symbol . ' ';
//     }
//     echo "<br>";
//   }
// }

// print_pattern('@', 3); // mencetak pola @ dengan 3 baris


