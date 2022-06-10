<?php
  $tipe_kamar = mysqli_query($connect, "SELECT * FROM tipe_kamar");
  $last_id = mysqli_query($connect, "SELECT idruang_kamar FROM ruang_kamar ORDER BY idruang_kamar DESC");
  $res_id = mysqli_fetch_assoc($last_id);
?>
<a href="logout.php">
      <p align="right">Logout</p>
</a>
<?php
  if(isset($_POST['submit'])) {	
    $idkamar = $_POST['idkamar'];
    $tipe_kamar = $_POST['tipe_kamar'];

    $result = mysqli_query($connect, "INSERT INTO ruang_kamar (idruang_kamar, id_tipe_kamar, `status`) VALUES ('$idkamar', '$tipe_kamar', '1')");
    header("location: ruang_kamar.php");
  }
?>
  <div>
    <div>
      <div>
        <h4>Ruang Kamar</h4>
      </div>
      <div>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
          <div>
            <div>
              <div>
                <label>ID Kamar</label>
                <input type="text" name="idkamar" nama="idkamar" placeholder="ID Kamar" value="<?php echo $res_id['idruang_kamar'] + 1?>" autofocus>
              </div>
            </div>
          </div>
          <div>
              <div>
                <div>
                  <label>Tipe Kamar</label>
                  <select name="tipe_kamar" id="" >
                    <option>Pilih Tipe Kamar</option>
                      <?php while($res = mysqli_fetch_assoc($tipe_kamar)): ?>
                      <option value="<?php echo $res['idtipe_kamar']; ?>"><?php echo $res['nama']; ?> </option>
                    <?php endwhile; ?>
                  </select>
                </div>
              </div>
            </div>
          <div>
            <br/>
            <button type="submit" name="submit">Tambah Ruang Kamar</button>
          </div>
          <div></div>
      </div>
    </div>
    </form>
  </div>
  <div>
<div>
  <div>
    <div>
      <?php if (empty($tipe_kamar)): ?>
      Tidak ada tipe kamar yang tersedia <br/><br/><br/>
      <?php else: ?>
      <table border="1">
        <thead>
          <tr>
            <th>No</th>
            <th>Tipe Kamar</th>
            <th>Ruang Kamar</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($tipe_kamar as $k => $v): ?>
          <tr>
            <td>
              <?php echo $i++; ?>
            </td>
            <td>
              <?php echo $v['nama']; ?>
            </td>
            <td>
              <?php
                $sql_kamar = mysqli_query($connect, "SELECT * FROM `ruang_kamar` WHERE `id_tipe_kamar` = {$v['idtipe_kamar']}");
              ?>
              <?php while($res = mysqli_fetch_assoc($sql_kamar)): ?>
                <a href="ruang_kamar.php?aksi=edit&id=<?php echo $res['idruang_kamar']; ?>"><?php echo $res['idruang_kamar']; ?></a>
              <?php endwhile; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>
    </div>
  </div>
  </div>
  </div>
  </div>