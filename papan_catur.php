<?php

function papan_catur($angka) {
// tulis kode di sini
    for($row=1;$row<=$angka;$row++){
        for($col=1;$col<$angka*2;$col++){
            if(($row+$col)%2==0){
                echo "#";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }
}

// TEST CASES
papan_catur(4); 
/*
# # # #
 # # #
# # # #
 # # #
 */
echo "<br>";
papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo "<br>";
papan_catur(5); 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/