<html>
    <head>
        <title>Cek Dukungan Cookie</title>
    </head>
    <body>
        <?php
            if (isset($_GET["q"]) && $_GET["q"]==1) {
                if (isset($_COOKIE["test"])) {
                    echo "support";
                }else {
                    echo "tidak support";
                }
            }else {
                setcookie("test", "value");
                $self = $_SERVER["PHP_SELF"];
                //redireksi ke current scrpt
                header("Location: ". $self . "?q=1");
                exit;
            }
        ?>
    </body>
    <p>Tekan Refresh (F5)</p>
</html>