<?php
include "../connect.php";
    $query = "SELECT id_mk, nama_mk, sks, semester, matakuliah.id_dosen FROM matakuliah LEFT JOIN dosen USING (id_dosen) ORDER BY id_mk";
    
    //$query = "SELECT * FROM matakuliah";
    
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
        <table border="1">
            <h2>Data Matakuliah</h2>
            <tr>
                <th>No.</th>
                <th>Kode<th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Dosen Pengajar</th>
                <th>Aksi</th>
            </tr>
          <?php
            if ($num>0) {
                $no = 1;
                while ($data = mysqli_fetch_assoc($result)) {?>
                <tr>
                    <<td><?php echo $no; ?></td>
                    <td><?php echo $data["id_mk"]; ?> </td>
                    <td><?php echo $data["nama_mk"]; ?></td>
                    <td><?php echo $data["sks"] ; ?></td>
                    <td><?php echo $data["semester"];?></td>
                    <!--<td><?php if($data['id_dosen' != NULL]){echo $data['nama_dosen'];}else{echo "-";}?></td>-->
                    <td><a href='form-update.php?id_mk="<?php echo $data['id_mk']; ?>"'>Edit</a> | <a href="delete.php?id_mk=<?php echo $data['id_mk'];?>" onclick="return confirm('Apakah anda yakin ingin menhapus data?')" >Hapus</a></td>
                </tr>";
                    <?php
                    $no++;
                }
                    ?>
                <?php
            }else {
                echo " <td colspan='6'> Tidak ada data</td>";
            }
            ?>
        </table>
    </body>
</html>