<?php
function tukar_besar_kecil($string){
//kode di sini
    $alfabet = "abcdefghijklmnopqrstuvwxyz";
    $output = "";
    for($i=0;$i<strlen($string);$i++){
        $posisi = strpos($alfabet,$string[$i]);
        $output .= substr($alfabet, $posisi+1,1);
    }
    return $output;
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo "<br>". tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo "<br>". tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo "<br>". tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo "<br>". tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>