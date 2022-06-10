<?php
  $tipe_kamar = mysqli_query($connect, "SELECT * FROM tipe_kamar");
?>
<a href="logout.php" onclick="return confirm('Yakin ingin logout?')">
      <p align="right">Logout</p>
</a>
  <div>
<div>
  <div>
    <div>
      <?php if (empty($tipe_kamar)): ?>
        Tidak ada tipe kamar yang tersedia <br/><br/><br/>
      <?php else: ?>
      <table border ="1">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Fasilitas</th>
            <th>Harga</th>
            <th>Aksi</th>
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
              <?php echo $v['fasilitas']; ?>
            </td>
            <td>
              <?php echo $v['harga']; ?>
            </td>
            <td>
              <a href="tipe_kamar.php?aksi=edit&id=<?php echo $v['idtipe_kamar']; ?>">Edit</a>
              <a href="tipe_kamar.php?aksi=hapus&id=<?php echo $v['idtipe_kamar']; ?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>
    </div>
  </div>
  </div>
  <br/><button><a href="formtipekamar.php">Tambah Tipe Kamar</a></button>
  </div>
  </div>