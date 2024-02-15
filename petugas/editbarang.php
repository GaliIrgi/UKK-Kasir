<?php

include_once("../conn/koneksi.php");

if (isset($_POST['update'])) {
    $id = $_GET['idproduk'];
    $nama_produk = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
  
  

    $result = mysqli_query($koneksi, "UPDATE produk SET nama='$nama_produk', harga='$harga', stok='$stok' WHERE idproduk=$id");

    header("Location: index.php?page=stok");
    echo "<script>alert('Berhasil')</script>";
}

$id = $_GET['idproduk'];

$result1 = mysqli_query($koneksi, "SELECT * FROM produk WHERE idproduk=$id");

while ($barang_data = mysqli_fetch_array($result1)) {
    $nama = $barang_data['nama'];
    $harga = $barang_data['harga'];
    $stok = $barang_data['stok'];
    

}
?>

<div class="row well">
    <div class="col-md-4">
        <div class="card well">
            <div class="card-header">
                <h3 class="">Update barang</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                <div class="mb-3 mt-3">
                        <label for="nama" class="form-label">Nama Produk:</label>
                        <input type="text" class="form-control" id="nama" value="<?php echo $nama; ?>" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga:</label>
                        <input type="text" class="form-control" id="harga" value="<?php echo $harga; ?>" placeholder="Masukkan Harga" name="harga">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok:</label>
                        <input type="text" class="form-control" id="stok" value="<?php echo $stok; ?>" placeholder="Masukkan Stok" name="stok">
                     </div>
                    
                    

                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
