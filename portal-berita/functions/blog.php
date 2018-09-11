<?php
function tampilkan(){
	global $koneksi;

	$query = "SELECT * FROM f_tbpost";
	$result = mysqli_query($koneksi,$query) or die("Gagal Menampilkan Data");
	return $result;
}

function excerpt($string){
	$string = substr($string, 0, 300);
	return $string . "...";
}

function tampil_data_edit($id){
	global $koneksi;

	$query = "SELECT * FROM f_tbpost WHERE id_berita='$id'";
	$result = mysqli_query($koneksi,$query) or die("Gagal Menampilkan Data");
	return $result;
}

function edit($judul,$konten,$tag,$id){
	$query = "UPDATE f_tbpost SET judul = '$judul',isi = '$konten',tags = '$tag' WHERE id_berita = '$id'";
	return run($query);
}

function tambah_data($judul,$konten,$tag){
	$query = "INSERT INTO f_tbpost (judul,isi,tags) VALUES ('$judul','$konten','$tag')";
	return run($query);

}

function run($query){
	global $koneksi;

	if(mysqli_query($koneksi,$query)){
		return true;
	}else{
		return false;
	}

}
?>