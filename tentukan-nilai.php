<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function tentukan_nilai($nilai){
        if ($nilai >= 85 and $nilai <= 100) {
    echo "Nilai Sangat Baik";
  } elseif ($nilai >= 70 & $nilai<=85) {
    echo "Nilai Baik";
  }
   elseif ($nilai >= 60 & $nilai <=70) {
    echo "Nilai Cukup";
  }
else {
    echo "Nilai kurang";
  }
  echo "<br>";
}
tentukan_nilai(80);
tentukan_nilai(85);
tentukan_nilai(60);
tentukan_nilai(40);
     ?>
  </body>
</html>
