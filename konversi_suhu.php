<?php

    $suhu = 0;//(int)$_REQUEST['suhuC'];

    $Scelcius = 0;
    $Sreamur = 0;//$suhu*4/5;
    $Skelvin = 0;//$suhu+273.16;
    $Sfahrenheit = 0;//($suhu*9/5)+32;

    if (is_numeric($_REQUEST['suhuC'])) {

        $suhu = (int)$_REQUEST['suhuC'];
        $Scelcius = $suhu;

        $Sreamur = $Scelcius*4/5;
        $Skelvin = $Scelcius+273.16;
        $Sfahrenheit = ($Scelcius*9/5)+32;

    } elseif (is_numeric($_REQUEST['suhuR'])){

        $suhu = (int)$_REQUEST['suhuR'];
        $Sreamur = $suhu;

        $Scelcius = $Sreamur*5/4;
        $Skelvin = ($Sreamur*5/4)+273.16;
        $Sfahrenheit = ($Sreamur*9/4)+32;

    } elseif (is_numeric($_REQUEST['suhuF'])){

        $suhu = (int)$_REQUEST['suhuF'];
        $Sfahrenheit = $suhu;
        
        $Sreamur = ($Sfahrenheit*4/9)-32;
        $Scelcius = ($Sfahrenheit*5/9)-32;
        $Skelvin = ($Sfahrenheit-32)*5/9+273.16;

    } elseif (is_numeric($_REQUEST['suhuK'])){

        $suhu = (int)$_REQUEST['suhuK'];
        $Skelvin = $suhu;

        $Sreamur = ($Skelvin-273.16)*4/5;
        $Scelcius = $Skelvin-273.16;
        $Sfahrenheit = ($Skelvin-273.16)*9/5+32;
        
    }

/*    
    echo "$suhu <br>";
    echo "$Scelcius <br>";
    echo "$Sreamur <br>";
    echo "$Skelvin <br>";
    echo "$Sfahrenheit <br>";

    echo isset($_REQUEST['suhuC']) == true;
    echo isset($_REQUEST['suhuR']) == true;
  */  

    //untuk formnya
    echo "<fieldset style=\"display: inline-block;\">";
    echo"<form>";
    
    echo "Suhu (Celcius) : <input type=\"text\" value =\"$Scelcius\">";
        echo"<br>";
    
    echo "Suhu (Reamur) : <input type=\"text\" value =\"$Sreamur\">";
        echo"<br>";

    echo "Suhu (Fahrenheit) : <input type=\"text\" value =\"$Sfahrenheit\">";
        echo"<br>";
    
    echo "Suhu (Kelvin) : <input type=\"text\" value =\"$Skelvin\">";
        echo"<br>";

    
    echo"<a href=form_suhu.html>kembali</a>";
    echo"</form>";
    echo"</fieldset>";
?>