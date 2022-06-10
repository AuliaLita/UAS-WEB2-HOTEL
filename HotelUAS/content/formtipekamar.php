<?php
  if(isset($_POST['submit'])) {	
    $nama = $_POST['nama'];
    $fasilitas = $_POST['fasilitas'];
    $harga = $_POST['harga'];

    $result = mysqli_query($connect, "INSERT INTO tipe_kamar ( nama, fasilitas, harga) VALUES ('$nama', '$fasilitas', '$harga');");
    header("location: tipe_kamar.php");
  }
?>
  <div>
    <div>
      <div>
        <h3>Tambah Tipe Kamar</h3>
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
                <label>Fasilitas</label>
                <input type="text" name="fasilitas" value="">
              </div>
            </div>
          </div>
          <div>
            <div>
              <div>
                <label>Harga</label>
                <input type="text" name="harga" value="">
              </div>
            </div>
          </div>
          <div>
            <button type="submit" name="submit">Tambah Tipe Kamar</button>
          </div>
          <div></div>
      </div>
    </div>
    </form>
  </div>