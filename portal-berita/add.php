<!--Header-->
<?php 
require_once "core/init.php";
require_once "view/header.php"; 
$error='';
if (isset($_POST['submit'])) {
	$judul 	= $_POST['judul'];
	$konten = $_POST['konten'];
	$tag 	= $_POST['tag'];

	//EmpityString
	$judulkosong = trim($judul);
	$kontenkosong = trim($konten);
		if(!empty($judulkosong) && !empty($kontenkosong)){
			if(tambah_data($judul,$konten,$tag)){
				header('Location:index.php');
			}
		}else{
			$error = 'Pastikan Semua Field Terisi';
		}
}
?>
<!--Body-->
<div class="container">
	<form action="" method="POST">
		<label for="judul">Judul</label><br>
		<input type="text" name="judul"><br><br>
		<label for="konten">Konten</label><br>
		<textarea name="konten" rows="8" cols="40"></textarea><br><br>
		<label for="tag">Tag</label><br>
		<input type="text" name="tag"><br><br>
		<div id="error"><?php echo $error; ?></div>
		<input type="submit" name="submit" value="POST">
	</form>
</div>
<!--Footer-->
<?php require_once 'view/footer.php'; ?>