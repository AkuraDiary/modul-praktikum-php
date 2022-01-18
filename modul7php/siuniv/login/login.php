<?php
    include "connect.php";
    session_start();
    //login process
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "" || $password == "") {
        echo "<script>alert('Username atau Password masih kosong!')</script>";
        header("location: form_login.php");
    }else {
        $query = "SELECT * from user where username = '$username' and password = 'md5($password)'";
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $data = mysqli_fetch_array($result);
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = $data['level'];
            
            if ($_session['level'] == "admin") {
                header("location: home_admin.php");
            }elseif($_session['level'] == "petugas") {
                header("location: home_petugas.php");
            }elseif($_session['level'] == "user") {
                header("location: home_user.php");
            }

        }else {
            echo "<script>alert('Username atau Password salah!')</script>";
        }
    }
?>