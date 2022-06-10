<?php
  $bayar = mysqli_query($connect, "SELECT * FROM `histori_order`");
  while ($res = mysqli_fetch_assoc($bayar)) {
    $pemesanan[] = $res;
  }
?>
<a href="logout.php" onclick="return confirm('Yakin ingin logout?')">
      <p align="right">Logout</p>
</a>
      <div>
        <table border ="1">
          <thead>
            Berikut adalah daftar tamu yang telah berhasil melakukan pembayaran & check out.
            <br/><br/>
            <tr>
              <th>No</th>
              <th>Nama Tamu</th>
              <th>Tanggal Check-in</th>
              <th>Tanggal Check-out</th>
              <th>Biaya</th>
            </tr>
          </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($pemesanan as $k => $v): ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $v['nama']; ?></td>
                  <td><?php echo $v['tgl_check_in']; ?></td>
                  <td><?php echo $v['tgl_check_out']; ?></td>
                  <td><?php echo $v['biaya']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
