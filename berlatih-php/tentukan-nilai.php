<?php
function tentukan_nilai($number)
{
    //  kode disini
    if($number <= 100) {$tentukan_nilai = "Sangat Baik <br>";}
    if($number < 77) {$tentukan_nilai = "Baik <br>";}
    if($number < 70) {$tentukan_nilai = "Cukup <br>";}
    if($number < 50) {$tentukan_nilai = "Kurang <br>";}

    return $tentukan_nilai;

}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang