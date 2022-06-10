<?php
  $bayar = mysqli_query($connect, "SELECT * FROM `lihat_bayar`");
  while ($res = mysqli_fetch_assoc($bayar)) {
    $pemesanan[] = $res;
  }
?>
<a href="logout.php" onclick="return confirm('Yakin ingin logout?')">
      <p align="right">Logout</p>
</a>
<div>
  <div>
    <div>
      <div>
        <?php if (empty($pemesanan)): ?>
          Tidak ada data pembayaran yang tersedia <br/><br/><br/>
          <a href="pemesanan.php">Tambah Pemesanan</a>
          <?php else: ?>
            <table border ="1">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Biaya</th>
                  <th>Tanggal Checkin</th>
                  <th>Tanggal Checkout</th>
                  <th>Aksi</th>
                </tr>
              </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($pemesanan as $k => $v): ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $v['nama']; ?> ( <?php echo $v['no_ktp']; ?> )</td>
                      <td><?php echo $v['biaya']; ?></td>
                      <td><?php echo $v['tgl_check_in']; ?></td>
                      <td><?php echo $v['tgl_check_out']; ?></td>
                      <td>
                        <a href="proses_pembayaran.php?id=<?php echo $v['idorder']; ?>">Check Out</a>
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
