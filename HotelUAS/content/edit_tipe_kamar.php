<?php
if(isset($_POST['update'])) {	
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$fasilitas = $_POST['fasilitas'];
	$harga = $_POST['harga'];
	
	$result = mysqli_query($connect, "UPDATE tipe_kamar SET nama = '$nama', fasilitas = '$fasilitas', harga = '$harga' WHERE tipe_kamar.idtipe_kamar = $id");

	header("Location: tipe_kamar.php");
}

$id = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM tipe_kamar WHERE idtipe_kamar=$id");

while($res = mysqli_fetch_array($result)) {
	$nama = $res['nama'];
	$fasilitas = $res['fasilitas'];
	$harga = $res['harga'];
}

?>
  <div>
    <div>
      <div>
        <h4>Tipe Kamar</h4>
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
                <label>Fasilitas</label>
                <input type="text" name="fasilitas" placeholder="Fasilitas" value="<?php echo $fasilitas; ?>">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>Harga</label>
                <input type="text" name="harga" placeholder="Harga" value="<?php echo $harga; ?>">
              </div>
            </div>
          </div>
          <div>
            <button type="submit" name="update">Update Tipe Kamar</button>
          </div>
          <div></div>
      </div>
    </div>
    </form>
  </div>

  </div>
  </div>
  </div>