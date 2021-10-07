<html>
    <head>
        <title>Hapus Cookie</title>
    </head>
    <body>
        <?php
            setcookie("nama_cookie", "nilai_cookie");
            if (isset($_COOKIE["nama_cookie"])) {
                
                echo "cookie di-set <br>";
                echo "cookie : ";
                echo $_COOKIE["nama_cookie"];
                echo "<br>";

                //menghapus cookie dengan masa berlaku 1 jam yang lalu setcookie('nama_cookie', '', time()-1*3600);

                //mengapus cookie lama
                setcookie("nama_cookie", "", time()-1*20);
                echo "cookie dihapus <br>";
                /*

                echo "cookie baru : ";
                echo $_COOKIE["nama_cookie"];*/
            }else{
                echo "unset";
            }
        ?>
    </body>
    <p>Tekan Refresh (F5)</p>
</html>