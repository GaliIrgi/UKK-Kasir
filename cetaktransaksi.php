<?php
include("header.php");
?>
      <body>
        
        <div class="p-4 col-6">
          <div class="card mt-5">
            <div class="card-body">
            <table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Tanggal Transaksi</th>
                <th>Nama Pemesan</th>
				<th>Menu</th>	
			</tr>
		</thead>
		<tbody>
        <?php
            include("conn/koneksi.php");

            $query = "SELECT idpenjualan,tanggal FROM penjualan ORDER BY idpenjualan DESC LIMIT 1";
            $result = mysqli_query($koneksi, $query);
            
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['idpenjualan'] . "</td>";
                echo "<td>" . $row['tanggal'] . "</td>";
                ?>
                <td>
                  <?php
                  $query1 = "SELECT nama FROM pelanggan WHERE id= '".$row['idpenjualan']."'";
                  $result1 = mysqli_query($koneksi, $query1);
                  
                  while ($row1 = mysqli_fetch_assoc($result1)) {
                    echo $row1['nama'];
                  }
                  ?>
                </td>
                <td>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th class="col-1">Jumlah</th>
                                <th class="col-1">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            // Fetch details for the current Penjualan
                            $query2 = "SELECT idproduk, idpenjualan, jumlahproduk, subtotal FROM detail WHERE iddetail = '" . $row['idpenjualan'] . "'";
                            $result2 = mysqli_query($koneksi, $query2);

                            // Inisialisasi total harga
                            $totalHarga = 0;

                            while ($detailrow = mysqli_fetch_assoc($result2)) {
                                echo "<tr>";
                                
                                // Fetch NamaProduk
                                $query3 = "SELECT nama FROM produk WHERE idproduk = '" . $detailrow['idproduk'] . "' ";
                                $result3 = mysqli_query($koneksi, $query3);

                                while ($row2 = mysqli_fetch_assoc($result3)) {
                                    echo "<td>" . $row2['nama'] . "</td>";
                                }

                                echo "<td>" . $detailrow['jumlahproduk'] . " Pcs</td>";
                                echo "<td>RP." . $detailrow['subtotal'] . "</td>";
                                echo "</tr>";

                                // Tambahkan Subtotal ke total harga
                                $totalHarga += $detailrow['subtotal'];
                            }

                            // Menampilkan total harga di luar loop
                            echo "<tr>";
                            echo "<td colspan='2'><strong>Total Harga:</strong></td>";
                            echo "<td colspan='2'><strong>RP." . $totalHarga . ",00</strong></td>";
                            echo "</tr>";
                        ?>
                            
                        </tbody>
                    </table>
                </td>
                <?php
                echo "</tr>";
              }
              
        ?>
		</tbody>
	</table>
            </div>
          </div>
        </div>
      </body>
      
      <script>
        window.print()
      </script>