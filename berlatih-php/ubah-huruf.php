<?php
function ubah_huruf($string){
    //kode di sini
    $huruf = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o',
    'p','q','r','s','t','u','v','w','x','y','z'];
    $hurufExtend = "";
    if(!is_string ($string)) {
        return "Silahkan Inputkan String";
    }
    else{
        foreach(str_split($string) as $str){
            for($i =0; $i < count($huruf); $i++){
                if(strtolower($str) == $huruf[$i]){
                    $hurufExtend .= $huruf[$i +1];
                }
            }
        }
        return $hurufExtend. "<br>";
    }


}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu