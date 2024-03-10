<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['usn'];
    $password = $_POST['psw'];

    if ($username == 'bagas' && $password == 'sukses') {
        header('location: halaman.html');
        exit();
    }else{
        echo'username atau password anda salah mungkin';
    }
}
?>