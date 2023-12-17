<?php
$koneksi = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($koneksi, "wann gaming");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM db_login WHERE username='$username',password='$password'");
    $sql = mysqli_query($koneksi, $query);
}
