<html>
    <head>
        <title>Hapus Cookie</title>
    </head>
    <body>
        <?php
            //setcookie("nama_cookie", "nilai_cookie", time()+1*20);
            if (isset($_COOKIE["nama_cookie"])) {
                
                echo "cookie di-set <br>";
                echo "cookie : ";
                echo $_COOKIE["nama_cookie"];
                echo "<br>";

                //menghapus cookie dengan masa berlaku 1 jam yang lalu setcookie('nama_cookie', '', time()-1*3600);

                //mengapus cookie lama
                setcookie("nama_cookie", "nilai_baru", time()-1*20);
                echo "cookie dihapus <br> refresh to see the effect";

                /*echo "cookie baru : ";
                echo $_COOKIE["nama_cookie"];*/

            }else{
                echo "unset <br>";
                setcookie("nama_cookie", "nilai_cookie", time()+1*20);
                echo "creating cookie <br> refresh to see the effect";
            }
        ?>
    </body>
    <p>Tekan Refresh (F5)</p>
</html>