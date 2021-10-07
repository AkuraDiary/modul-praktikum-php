<html>
    <head>
        <title>Set Cookies</title>
    </head>
    <body>
        <?php
            // Men-set nilai cookie
            setcookie("nama_cookie", "nilai_cookie");
            //mendapatkan nilai cookie
            echo $_COOKIE["nama_cookie"];
        ?>
    </body>
    <p>Tekan Refresh (F5)</p>
</html>