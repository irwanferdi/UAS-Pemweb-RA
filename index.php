<!DOCTYPE html>
<?php
include 'koneksi.php';
?>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="style.css">
  
  <title>Toko Game Wann Gaming</title>
  <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>

<body>
  <div id="navbar">
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Data Barang</a>
 
      </div>
    </nav>

  </div>
  <figure class="text-center mt-5">
    <blockquote class="blockquote">
      <p>Data Barang Yang Tersedia di Toko Wann Gaming</p>
    </blockquote>
    <figcaption class="blockquote-footer" style="color:white">
      Admin Dapat <cite title="Source Title">Menambah, Menghapus, Mengubah,dan Menyimpan Data</cite>
    </figcaption>
  </figure>
  <div class="add-btn">
    <a href="olah.php" type="button" class="btn btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
      </svg> Tambah</a>
  </div>

  <div class="container">
    <table class="table table-borderless table-hover align-middle">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jenis</th>
          <th scope="col">Harga</th>
          <th scope="col">Barang</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM tb_barang";
        $sql = mysqli_query($koneksi, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $data['nama_barang']; ?></td>
            <td><?php echo $data['jenis_barang']; ?></td>
            <td><?php echo $data['harga_barang']; ?></td>
            <td>
              <img src="picture/<?php echo $data['gambar_barang']; ?>" alt="pict not found" style="width: 100px" />
            </td>
            <td><a style="color:darkgreen" href="olah.php?edit=<?php echo $data['id_barang']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                </svg> </a>
              <a style="color:darkred" href="proses.php?hapus=<?php echo $data['id_barang']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                </svg></a>
            </td>
          </tr>
        <?php
          $no++;
        } ?>
      </tbody>
    </table>
  </div>

</body>

</html>