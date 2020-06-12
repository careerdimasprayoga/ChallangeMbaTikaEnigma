<?php

foreach(range(1, 20) as $angka) {
  if ($angka % 3 != 0 && $angka % 5 != 0) {
    echo $angka . '<br>';
    continue;
  }
  if ($angka % 3 == 0) echo 'Boot';
  if ($angka % 5 == 0) echo 'Camp';
  echo '<br>';
}

?>