<?php
function palindrome($string){
  $banding = strrev($string);
  if($string == $banding){
      $output = true;
  } else {
      $output = false;
  }
  return $output;
}

function palindrome_angka($angka) {
  // tulis kode di sini
  if($angka >= 1 && $angka >=8){
    $angka++;
  }
  while(palindrome($angka) == false){
    $angka++;
  }
  return $angka;
}

// TEST CASES
echo "<br>". palindrome_angka(8); // 9
echo "<br>". palindrome_angka(10); // 11
echo "<br>". palindrome_angka(117); // 121
echo "<br>". palindrome_angka(175); // 181
echo "<br>". palindrome_angka(1000); // 1001

?>