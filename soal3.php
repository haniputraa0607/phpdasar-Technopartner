<?php 
  // SOAL 3
  echo "SOAL 3 <br><br>";
  $array = [-9.3,-0.5, 0.25,0.3,1.34];
  $hasil = -7.96;
  echo "Array = ";
  for($i=0;$i<=count($array)-1;$i++){
    $urut = $i+1;
    echo "$array[$i] ";
  }
  echo "<br>Yang dicari jika 2 angka dijumlahkan = $hasil<br>";
  $cek = cekarray($array,$hasil);
  echo $cek;
  function cekarray($array,$hasil){
    for ($i=0;$i<=count($array)-1;$i++) {
      for ($j=$i;$j<count($array)-1;$j++) {
        $k=$j+1;
          if(is_float($hasil)){
            if ($array[$i]+$array[$k]=$hasil) {
              $nilai[] = [
                $array[$i], $array[$k] , true,
              ];
              return "True (karena $array[$i] + $array[$k] = $hasil)";
          } else {
            $nilai = false;
          }
          } else {
            if ($array[$i]+$array[$k]==$hasil) {
              $nilai[] = [
                $array[$i], $array[$k] , true,
              ];
              return "True (karena $array[$i] + $array[$k] = $hasil)";
            } else {
              $nilai = false;
            }
          } 
      }
    }
    return "False (tidak ada pasangan yang dijumlah = $hasil)";
  }
?>