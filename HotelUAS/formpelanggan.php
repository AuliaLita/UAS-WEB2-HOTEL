<?php if(isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') : ?>
  <?php include_once('content/hapus_pelanggan.php'); ?>
<?php endif; ?>

<?php include_once('lib/header.php'); ?>
<div>
  <?php include_once('lib/sidebar.php'); ?>
  <div>
    <div>
      <div>
        <div>
          <?php if(isset($_GET['aksi']) && $_GET['aksi'] == 'edit') : ?>
            <?php include_once('content/edit_pelanggan.php'); ?>
          <?php else: ?>          
            <?php include_once('content/formpelanggan.php'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>