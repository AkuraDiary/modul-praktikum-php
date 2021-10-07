<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>:Home</title>
        <style media="screen">
            .link{
                font-family: sans-serif ;
                color: blue;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                                    alert('Silahkan Login Dahulu...')
                                    window.location='index.php';
                                </script>";
            }else{
                echo "<h3> Selamat Datang <label style='color:red'>".$_SESSION['username'].'</label> Anda Berhasil Login </h3>';
                echo "<a href='logout.php'> Logout </a>";
            }
        ?>
    </body>
</html>