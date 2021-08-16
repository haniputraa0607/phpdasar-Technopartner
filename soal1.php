<?php 
  // SOAL 1
  echo "SOAL 1 <br><br>";
  $array = [6,3,5,4,2,3,4];
  // var_dump($array);
  // echo "<br>";
  for($i=0;$i<=count($array)-1;$i++){
    $urut = $i+1;
    echo "Angka ke $urut adalah $array[$i] <br>";
  }
  $duaterbesar = cariduaterbesar($array);
  echo "Angka ke-2 terbesar dari array adalah $duaterbesar";
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
    // var_dump($array);
    echo "<br>";
    $index=0;
    for($i=0;$i<=$panjang;$i++){
      $awal = $array[$i];
      $akhir = $array[$i+1];
      if($awal!=$akhir){
        $tanpaduplikat[$index]=$awal;
        $index++;
      }    
    }
    // var_dump($tanpaduplikat);
    // echo "<br>";
    // echo $tanpaduplikat[count($tanpaduplikat)-2];
    return $tanpaduplikat[count($tanpaduplikat)-2];
  }


?>