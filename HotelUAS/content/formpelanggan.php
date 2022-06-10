<?php
  if(isset($_POST['submit'])) {	
    $nama = $_POST['nama'];
    $no_ktp = $_POST['no_ktp'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    $result = mysqli_query($connect, "INSERT INTO pelanggan (nama, alamat, no_ktp, telepon) VALUES ('$nama', '$alamat', '$no_ktp', '$telepon')");
    header("location: pelanggan.php");
  }
?>
  <div>
    <div>
      <div>
        <h3>Tambah Data Tamu</h3>
      </div>
      <div>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div>
            <div>
              <div>
                <label>Nama</label>
                <input type="text" name="nama" value="">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>No KTP</label>
                <input type="text" name="no_ktp" value="">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>Alamat</label>
                <input type="text" name="alamat" value="">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>No Telp</label>
                <input type="text" name="telepon" value="">
              </div>
            </div>
          </div>
          <div>
            <button type="submit" name="submit">Tambah Pelanggan</button>
          </div>
          <div></div>
      </div>
    </div>
    </form>
  </div>