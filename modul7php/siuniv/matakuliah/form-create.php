<?php
    include '../connect.php';

    $query = "SELECT id_dosen, nama_dosen FROM dosen";
    $result = mysqli_query($connect, $query);
    //some changes
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h3>Tambah Data Matakuliah</h3>
        <form action="create.php" method="POST">
            Nama mata kuliah : <input type="text" name="nama_mk" value="">
            <br>
            SKS : <input type="text" name="sks" value="">
            <br>
            Semester : <input type="text" name="semester" value="">
            <br>
            <select name="id_dosen" id="nama_dosen">
            <option value="-">--Pilih Salah Satu--
                <?php
                    while($data = mysqli_fetch_assoc($result)){?>
                    <option value="<?php echo $data['id_dosen'];?>">
                    <?php echo $data['nama_dosen'];?>
                </option>
                    <?php
                    }
                ?>
            </option>
            </select>
            <br>
            <input type="submit" name="btnSimpan" value="Simpan">
        </form>
    </body>
</html>