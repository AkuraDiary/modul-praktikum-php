<?php
    include "../connect.php";
    session_start();
    //login process
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" or $password == "") {
        echo "<script>alert('Username atau Password kosong');location.href='form_login.php';</script>";
        //header("location: form_login.php");
    }else {
        $anuPass = md5($password);
        $query = "SELECT * from user where username = '$username' and password = '$anuPass'";
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            $data = mysqli_fetch_array($result);
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = $data['level'];

            if ($_SESSION['level'] == "admin") {
                header("location: home_admin.php");
            }elseif($_SESSION['level'] == "petugas") {
                header("location: home_petugas.php");
            }else{
                header("location: home_user.php");
            }

        }else {
            echo "<script>alert('Username atau Password salah!');location.href='form_login.php';</script>";
            //header("location: form_login.php");
        }
    }
?>