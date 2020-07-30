<?php
function ubah_huruf($string){
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
echo ubah_huruf('wow'); // xpx
echo "<br>". ubah_huruf('developer'); // efwfmpqfs
echo "<br>". ubah_huruf('laravel'); // mbsbwfm
echo "<br>". ubah_huruf('keren'); // lfsfo
echo "<br>". ubah_huruf('semangat'); // tfnbohbu

?>