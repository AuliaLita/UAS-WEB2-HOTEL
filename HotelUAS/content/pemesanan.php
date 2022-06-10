<?php
  $pelanggan = mysqli_query($connect, "SELECT idpelanggan, nama, no_ktp FROM `pelanggan`");
  $tipe_kamar = mysqli_query($connect, "SELECT * FROM tipe_kamar");
  $ruang_kamar = mysqli_query($connect, "SELECT * FROM ruang_kamar WHERE status = 1");
  while ($res = mysqli_fetch_assoc($ruang_kamar)) {
    $idruang_kamar_arr[] = $res;
  }
?>
<?php $include_js = "kamar = ". json_encode($idruang_kamar_arr); ?>
<a href="logout.php">
      <p align="right">Logout</p>
</a>
<div>
  <div>
    <div>
      <h4>Pemesanan Kamar</h4>
    </div>
    <div>
      <form method="post" action="proses_pesan.php">
        <div>
          <div>
            <div>
              <label>Jumlah</label>
                <input type="number" placeholder="" value="" min="1" name="jml_kamar"  id="jml_kamar">
            </div>
          </div>
          <div>
            <div>
              <label>Tanggal Check In</label>
              <input type="date" name="tgl_check_in" value="" required>
            </div>
          </div>
          <div>
            <div>
              <label>Tanggal Check Out</label>
              <input type="date" name="tgl_check_out" value="" required>
            </div>
          </div>
        </div>
        <div>
          <div>
            <div>
              <label>Pilih Tipe Kamar</label>
              <select name="idtipe_kamar" id="idtipe_kamar" required>
                <option value="">Pilih Tipe Kamar</option>
                <?php while($res = mysqli_fetch_assoc($tipe_kamar)): ?>
                  <option value="<?php echo $res['idtipe_kamar']; ?>"><?php echo $res['nama']; ?> ( Rp. <?php echo $res['harga'] ?> )</option>
                <?php endwhile; ?>
              </select>
            </div>
          </div>
        </div>
        <div>
          <label>Tamu</label>
          <select name="idpelanggan_lama" id="">
            <option>Pilih Tamu</option>
            <?php while($res = mysqli_fetch_assoc($pelanggan)): ?>
              <option value="<?php echo $res['idpelanggan']; ?>"><?php echo $res['nama']; ?></option>
              <?php endwhile; ?>
            </select>
          </div>
        <div></div>
      </div>
    </div>
        <div>
          <button type="submit">Pesan Kamar</button>
        </div>
      </form>
    </div>
  </div>
</div>
