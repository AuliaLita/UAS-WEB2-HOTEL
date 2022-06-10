<?php if(isset($_GET['aksi']) && $_GET['aksi'] == 'hapus') : ?>
  <?php include_once('content/hapus_ruang_kamar.php'); ?>
<?php endif; ?>

<?php include_once('lib/header.php'); ?>
<div>
  <?php include_once('lib/sidebar.php'); ?>
  <div>
    <div>
      <div>
        <div>
          <?php if(isset($_GET['aksi']) && $_GET['aksi'] == 'edit') : ?>
            <?php include_once('content/edit_ruang_kamar.php'); ?>
          <?php else: ?>          
            <?php include_once('content/ruang_kamar.php'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>