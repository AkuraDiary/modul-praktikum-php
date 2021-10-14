<?php
    include "../connect.php";

    $nama_mk = $_POST["nama_mk"];
    $sks = $_POST["sks"];
    $semester = $_POST["semester"];


    $query = "INSERT INTO natakuliah(nama_mk, sks, semester) VALUES('$nama_mk', '$sks', '$semester')";

    $result = mysqli_query($connect, $query);

    if ($num > 0) {
        echo "Berhasil menambah data";
    }else {
        echo "Gagal menambah data";
    }

    echo "<a href='read.php'>lihat data</a>";
?>
