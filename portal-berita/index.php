<!--Header-->
<?php 
require_once "core/init.php";
require_once "view/header.php"; 

$artikel = tampilkan();
?>
<!--Body-->
<div class="container">
	<?php while ($row = mysqli_fetch_assoc($artikel)) { ?>
	<div class="each_article">
	<h3><?= $row['judul'];?></h3>
	<p><?= excerpt($row['isi']);?></p>
	<p class="waktu">Waktu : <?= $row['waktu'];?></p>
	<p class="tag">Tag : <?= $row['tags'];?></p>
	<a href="edit.php?id=<?= $row['id_berita'];?>">Edit</a>
	</div>
<?php } ?>
</div>
<!--Footer-->
<?php require_once 'view/footer.php'; ?>