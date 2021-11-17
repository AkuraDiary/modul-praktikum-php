<html>
    <head>
        <title>Hapus Session</title>
    </head>
    <body>
        <?php
           //inisialisasi data session
           session_start();
           //set session jika belum ada
           if(isset($_SESSION['test'])){
               //$_SESSION['test'] = 'value';
               //hapus session
               unset($_SESSION['test']);
               echo "session dihapus";
           }else {
               echo "unset<br>";
               //Mencetak semua elemen session
               print_r($_SESSION);
           }
        ?>
    </body>
    <p>Tekan Refresh (F5)</p>
</html>