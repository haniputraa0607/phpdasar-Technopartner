<?php 
  // SOAL 1
  echo "SOAL 1 <br><br>";
  $array = ['A','B','C','B','A'];
  cariduplikatpertama($array);

  function cariduplikatpertama($array){
    for($i=0;$i<=count($array)-1;$i++){
      $angka = abjadkeangka($array[$i]);
      $array_angka[$i] = $angka;
    }
    var_dump($array_angka);
  }

  function abjadkeangka($huruf){
    $alphabet = [
      "A"=>0,"B"=>1,"C"=>2,"D"=>3,"E"=>4,"F"=>5,"G"=>6,"H"=>7,"I"=>8,"J"=>9,"K"=>10,"L"=>11,"M"=>12,"N"=>13,"O"=>14,"P"=>15,"Q"=>16,"R"=>17,"S"=>18,"T"=>19,"U"=>20,"V"=>21,"W"=>22,"X"=>23,"Y"=>24,"Z"=>25,
    ];
    return $angka = $alphabet["$huruf"];
  }

?>