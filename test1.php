<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $a = $n = $_GET['soni'];
  $a = $a - 1;
  $b = 0;
  while ($a > 0) {


    if ($_GET["x$a"] == $_GET["natija$a"]) {
      $b++;
    }

    $a--;
  }
  $n--;
  header('location:natija.php?tj=' . $b . '&b=' . $n);
}
