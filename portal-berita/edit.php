<!--Header-->
<?php 
require_once "core/init.php";
require_once "view/header.php"; 
$error='';
$id = $_GET['id'];
if(isset($_GET['id'])){
    $artikel = tampil_data_edit($id);
    while($field = mysqli_fetch_assoc($artikel)){
        $judul = $field['judul'];
        $konten = $field['isi'];
        $tag = $field['tags'];
    }
}

if (isset($_POST['submit'])) {
	$judul 	= $_POST['judul'];
	$konten = $_POST['konten'];
    $tag 	= $_POST['tag'];
    $error='';
    $judulkosong = trim($judul);
	$kontenkosong = trim($konten);
		if(!empty($judulkosong) && !empty($kontenkosong)){
			if(edit($judul,$konten,$tag,$id)){
				header('Location:index.php');
			}else{
                $error = 'Error Menambah Data';
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
		<input type="text" name="judul" value="<?=$judul ?>"><br><br>
		<label for="konten">Konten</label><br>
		<textarea name="konten" rows="8" cols="40"><?=$konten ?></textarea><br><br>
		<label for="tag">Tag</label><br>
		<input type="text" name="tag"  value="<?=$tag ?>"><br><br>
		<div id="error"><?php echo $error; ?></div>
		<input type="submit" name="submit" value="POST">
	</form>
</div>
<!--Footer-->
<?php require_once 'view/footer.php'; ?>