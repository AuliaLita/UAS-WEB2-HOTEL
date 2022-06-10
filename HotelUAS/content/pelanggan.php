<?php
  $pelanggan = mysqli_query($connect, "SELECT * FROM pelanggan ORDER BY idpelanggan DESC");
?>
<a href="logout.php" onclick="return confirm('Yakin ingin logout?')">
      <p align="right">Logout</p>
</a>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
 <label>Cari :</label>
 <?php
    $kata_kunci="";
    if (isset($_POST['kata_kunci'])) {
            $kata_kunci=$_POST['kata_kunci'];
    }
  ?>
 <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" required/>
 <input type="submit" value="Cari">
</form><br/>
  <div>
<div>
  <div>
    <div>
    <button><a href="formpelanggan.php">Tambah Pelanggan</a></button><br/><br/>
      <?php if (empty($pelanggan)): ?>
      Tidak ada daftar tamu yang tersedia<br/><br/><br/>
      <?php else: ?>
        <table border ="1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No KTP</th>
            <th>Telepon</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($pelanggan as $k => $v): ?>
          <tr>
            <td>
              <?php echo $v['idpelanggan']; ?> 
            </td>
            <td>
              <?php echo $v['nama']; ?> 
            </td>
            <td>
              <?php echo $v['alamat']; ?> 
            </td>
            <td>
              <?php echo $v['no_ktp']; ?> 
            </td>
            <td>
              <?php echo $v['telepon']; ?>
            </td>
            <td>
              <a href="pelanggan.php?aksi=edit&id=<?php echo $v['idpelanggan']; ?>">Edit</a>
              <a href="pelanggan.php?aksi=hapus&id=<?php echo $v['idpelanggan'];?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php endif; ?>
    </div>
  </div>
  </div><br/>
  <br/>
  Hasil Pencarian :
  <?php

        include "lib/connect.php";
        if (isset($_POST['kata_kunci'])) {
            $kata_kunci=trim($_POST['kata_kunci']);
            $sql="select * from pelanggan where idpelanggan like '%".$kata_kunci."%' or nama like '%".$kata_kunci."%' or no_ktp like '%".$kata_kunci."%'  or telepon like '%".$kata_kunci."%' order by idpelanggan asc";

        }else {
            $sql="select * from pelanggan order by idpelanggan asc";
        }

        $hasil=mysqli_query($connect,$sql);
        $no=0;
        
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <table border>
            <tr>
                <td><?php echo "ID Pelanggan : " . $data["idpelanggan"]; ?></td>
                <td><?php echo "Nama : " . $data["nama"];   ?></td>
                <td><?php echo "Alamat : " . $data["alamat"];   ?></td>
                <td><?php echo "No ktp : " . $data["no_ktp"];   ?></td>
                <td><?php echo "Telepon : " . $data["telepon"];   ?></td>
                <td><a href="pelanggan.php?aksi=edit&id=<?php echo $v['idpelanggan']; ?>">Edit</a></td>
                <td><a href="pelanggan.php?aksi=hapus&id=<?php echo $v['idpelanggan'];?>" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
            </tr>
            </tbody>
        </table>
            <?php
        }
        ?>
        <br> <br>
  </div>