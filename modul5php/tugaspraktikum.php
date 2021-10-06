<?php
    //nomor 11 : membuat rumus luas dan volume kerucut

    function luas_kerucut($rusuk, $selimut){
        $PI = 3.14;
        $luas = $PI*$rusuk * ($rusuk * $selimut);
        return $luas;
    }

    function volume_kerucut($rusuk, $tinggi){
        $PI = 3.14;
        $La = ($PI*($rusuk*$rusuk));
        $volume = ($La*$tinggi)/3;
        return $volume;
    }

    $rusuk = 10;
    $tinggi = 20;
    $selimut = 15;

    $luas = luas_kerucut($rusuk, $selimut);
    $volume = volume_kerucut($rusuk, $tinggi);
    echo "kerucut dengan <br> rusuk = $rusuk <br> tinggi = $tinggi <br> selimut = $selimut <br>";
    echo "Luas = $luas";
    echo "<br>";
    echo "Volume = $volume";
?>