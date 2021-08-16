<?php 
  // SOAL 2
  echo "SOAL 2 <br><br>";
  $array = ['A','D','B','C','B','A','E','D','E'];
  echo "Array = ";
  for($i=0;$i<=count($array)-1;$i++){
    $urut = $i+1;
    echo "$array[$i] ";
  }
  $dup = cariduplikatpertama($array);
  echo "<br>Duplikat paling berderet adalah = $dup";

  function cariduplikatpertama($array){
    for($i=0;$i<=count($array)-1;$i++){
      $angka = abjadkeangka($array[$i]);
      $array_angka[$i] = $angka;
    }
    // var_dump($array_angka); echo "<br>";
    $duplikat = duplikat($array_angka);
    $huruf = UbahkeHuruf($duplikat);
    return $huruf;
  }

  function abjadkeangka($huruf){
    $alphabet = [
      "A"=>0,"B"=>1,"C"=>2,"D"=>3,"E"=>4,"F"=>5,"G"=>6,"H"=>7,"I"=>8,"J"=>9,"K"=>10,"L"=>11,"M"=>12,"N"=>13,"O"=>14,"P"=>15,"Q"=>16,"R"=>17,"S"=>18,"T"=>19,"U"=>20,"V"=>21,"W"=>22,"X"=>23,"Y"=>24,"Z"=>25,
    ];
    return $angka = $alphabet["$huruf"];
  }
  function duplikat($array)
  {
      $index=0;
      for ($i=0;$i<=count($array)-1;$i++) {
          for ($j=$i;$j<count($array)-1;$j++) {
              $k=$j+1;
              if ($array[$i]==$array[$k]) {
                  $duplikat[]=[$array[$i],$k-$i];
              }
          }
      }
      // var_dump($duplikat); echo "<br>";
      for ($i=0;$i<=count($duplikat)-1;$i++) {
        for ($j=$i;$j<count($duplikat)-1;$j++) {
          $k=$j+1;
          if($duplikat[$i][1]<=$duplikat[$k][1]){
            $dupdua[]=[
              $duplikat[$i][0],
              $duplikat[$i][1],
            ]; 
          }
        }
      }
      // var_dump($dupdua); echo "<br>";
      for ($i=0;$i<=count($dupdua)-1;$i++) {
          for ($j=$i;$j<=count($dupdua)-1;$j++) {
            $k=$j+1;
            // echo $dupdua[$i][1];echo "<br>"; echo $dupdua[$j][1];echo "<br>";
            if ($dupdua[$i][1]<$dupdua[$j][1]) {
              echo $dupdua[$i][0];
            } else {
              $deret = $dupdua[$j][0];
              // echo "a";
            }
          }
      }
      return $deret;  
  }
  function ubahkeHuruf($angka){
    $alphabet = range('A', 'Z');
    if($angka <= 25){
      return $alphabet[$angka];
    }
  }

?>