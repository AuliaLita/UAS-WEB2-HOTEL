<?php
if(isset($_POST['update'])) {	
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$no_ktp = $_POST['no_ktp'];
	$telepon = $_POST['telepon'];
	
	$result = mysqli_query($connect, "UPDATE pelanggan SET nama = '$nama', alamat = '$alamat', no_ktp = '$no_ktp', telepon = '$telepon' WHERE pelanggan.idpelanggan = $id;");

	header("Location: pelanggan.php");
}

$id = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM pelanggan WHERE idpelanggan=$id");

while($res = mysqli_fetch_array($result)) {
	$nama = $res['nama'];
	$alamat = $res['alamat'];
	$no_ktp = $res['no_ktp'];
	$telepon = $res['telepon'];
}

?>
  <div>
    <div>
      <div>
        <h3>Edit Data Tamu</h3>
      </div>
      <div>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div>
            <div>
              <div>
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Nama" value="<?php echo $nama; ?>">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>No KTP</label>
                <input type="text" name="no_ktp" placeholder="No KTP" value="<?php echo $no_ktp; ?>">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>Alamat</label>
                <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>No Telp</label>
                <input type="text" name="telepon" placeholder="No Telp" value="<?php echo $telepon; ?>">
              </div>
            </div>
          </div>
          <div>
            <br/><button type="submit" name="update">Update Pelanggan</button>
          </div>
          <div></div>
      </div>
    </div>
    </form>
  </div>

  </div>
  </div>
  </div>