<?php
include 'koneksi.php';
if (isset($_POST['btnProses'])) {
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $harga_barang = $_POST['harga_barang'];



    if ($_POST['btnProses'] == "tambah") {
        $gambar_barang = $_FILES['gambar_barang']['name'];
        $dir = "picture/";
        $dirFile = $_FILES['gambar_barang']['tmp_name'];
        move_uploaded_file($dirFile, $dir . $gambar_barang);

        $query = "INSERT INTO tb_barang VALUES('','$nama_barang','$jenis_barang','$harga_barang','$gambar_barang')";
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            header('location:index.php');
        }
    } else {
        if ($_FILES['gambar_barang']['name'] != "") {
            $queryHapus = "SELECT gambar_barang FROM tb_barang WHERE id_barang='$_POST[id_barang]'";
            $sqlHapus = mysqli_query($koneksi, $queryHapus);
            $data = mysqli_fetch_array($sqlHapus);

            unlink("picture/" . $data['gambar_barang']);
            $gambar_barang = $_FILES['gambar_barang']['name'];
            $dir = "picture/";
            $dirFile = $_FILES['gambar_barang']['tmp_name'];
            move_uploaded_file($dirFile, $dir . $gambar_barang);

            $query = "UPDATE tb_barang SET nama_barang='$nama_barang',jenis_barang='$jenis_barang',harga_barang='$harga_barang',gambar_barang='$gambar_barang' WHERE id_barang='$_POST[id_barang]'";
        } else {
            $query = "UPDATE tb_barang SET nama_barang='$nama_barang',jenis_barang='$jenis_barang',harga_barang='$harga_barang' WHERE id_barang='$_POST[id_barang]'";
        }
        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            header('location:index.php');
        }
    }
} else if ($_GET['hapus']) {
    $queryHapus = "SELECT gambar_barang FROM tb_barang WHERE id_barang='$_GET[hapus]'";
    $sqlHapus = mysqli_query($koneksi, $queryHapus);
    $data = mysqli_fetch_array($sqlHapus);

    unlink("picture/" . $data['gambar_barang']);

    $query = "DELETE FROM tb_barang WHERE id_barang='$_GET[hapus]'";
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        header('location:index.php');
    }
}

if (isset($_POST['search'])) {
    $search_term = mysqli_real_escape_string($koneksi, $_POST['search_box']);
    $sql = "SELECT * FROM tb_barang WHERE nama_barang LIKE '%$search_term%'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['nama_barang'];
        }
    } else {
        echo "No results found for '$search_term'";
    }
}
