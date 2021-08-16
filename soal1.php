<?php 
  // SOAL 1
  echo "SOAL 1 <br><br>";
  $array = [6,3,5,4,2,3];
  cariduaterbesar($array);
  function cariduaterbesar($array){
    //mengurutkan array terkecil-terbesal
    $panjang = count($array)-1;
    for($i=0;$i<=$panjang;$i++){
      for($j=$i;$j<=$panjang;$j++){
        if($array[$j]<$array[$i]){
          $tmp = $array[$j];
          $array[$j] = $array[$i];
          $array[$i] = $tmp;
        }
      }
    }

  }


?>