<!doctype html>
<?php
include 'koneksi.php';
$id_barang = "";
$nama_barang = "";
$jenis_barang = "";
$harga_barang = "";
//$gambar_barang = $data['gambar_barang'];
if (isset($_GET['edit'])) {
    $id_barang = $_GET['edit'];
    $query = "SELECT * FROM tb_barang WHERE id_barang='$id_barang'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    $nama_barang = $data['nama_barang'];
    $jenis_barang = $data['jenis_barang'];
    $harga_barang = $data['harga_barang'];
    $gambar_barang = $data['gambar_barang'];
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pengelolaan Data</title>
    <link rel="stylesheet" type="text/css" href="css/olah.css" />
</head>

<body>

    <div id="navbar">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="index.php" href type="button" class="btn btn-warning">HOME</a>
                <a class="navbar-brand">Data Barang</a>
            </div>
        </nav>
    </div>
    <figure class="text-center mt-5">
        <blockquote class="blockquote">
            <p>Data Barang Yang Tersedia di Toko Wann Gaming</p>
        </blockquote>
        <figcaption class="blockquote-footer" style="color:white">
            Pengelolaan <cite title="Source Title">data barang</cite>
        </figcaption>
    </figure>

    <form action="proses.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
        <div class="container">
            <div class="mb-3 row">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $nama_barang; ?>" placeholder="Masukan Nama Barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-10">
                    <select name="jenis_barang" id="jenis_barang" class="form-control">
                        <option value="console" <?php if ($jenis_barang == "console") echo "selected"; ?>>Console</option>
                        <option value="controller" <?php if ($jenis_barang == "controller") echo "selected"; ?>>Controller</option>
                        <option value="disc" <?php if ($jenis_barang == "disc") echo "selected"; ?>>Disc</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="harga_barang" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga_barang" name="harga_barang" value="<?php echo $harga_barang; ?>" placeholder="Masukan Harga Barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="gambar_barang" class="col-sm-2 col-form-label">Barang</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar_barang" name="gambar_barang">
                </div>
            </div>

            <div class="mb-3 row">
                <?php
                if (isset($_GET['edit'])) {
                    echo "<button type='submit' class='btn btn-success' name='btnProses' value='edit'>Simpan Perubahan</button>";
                } else {
                    echo "<button type='submit' class='btn btn-primary' name='btnProses' value='tambah'>Tambah Data</button>";
                }
                ?>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>