<?php
 
include '../../koneksi.php';

function tampil($query){
	global $conn;
	$i=mysqli_query($conn,$query);
	$rows=[];
	while ( $row=mysqli_fetch_assoc($i)) {
		$rows[]=$row;
	}
	return $rows;

}

function tambah($data){
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$gender = htmlspecialchars($data["gender"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$pendidikan = htmlspecialchars($data["pendidikan"]);
	$mata_pelajaran = htmlspecialchars($data["mata_pelajaran"]);
	$jenjang = htmlspecialchars($data["jenjang"]);

	$query=" INSERT INTO guru VALUES ('', '$nama' , '$tempat_lahir', '$tanggal_lahir', '$gender', '$alamat', '$pendidikan', '$mata_pelajaran', '$jenjang')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function hapus($data){
	global $conn;
	$query="SELECT * FROM guru WHERE id=$data";
	$sql=mysqli_query($conn,$query);
	$hapus=mysqli_fetch_assoc($sql);
	mysqli_query($conn,"DELETE FROM guru WHERE id=$data");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$gender = htmlspecialchars($data["gender"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$pendidikan = htmlspecialchars($data["pendidikan"]);
	$mata_pelajaran = htmlspecialchars($data["mata_pelajaran"]);
	$jenjang = htmlspecialchars($data["jenjang"]);
	
	$query="UPDATE guru SET 
			nama = '$nama',
			tempat_lahir = '$tempat_lahir',
			tanggal_lahir = '$tanggal_lahir',
			gender = '$gender',
			alamat = '$alamat',
			pendidikan = '$pendidikan',
			mata_pelajaran = '$mata_pelajaran',
			jenjang = '$jenjang'
			WHERE id = $id

		";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function cari($data){
	$query="SELECT * FROM guru
			WHERE 
			nama LIKE '%$data%' OR
			tempat_lahir LIKE '%$data%' OR
			tanggal_lahir LIKE '%$data%' OR
			gender LIKE '%$data%' OR
			alamat LIKE '%$data%' OR
			pendidikan LIKE '%$data%' OR
			mata_pelajaran LIKE  '%$data%' OR
			jenjang LIKE '%$data%'  
	";
	return tampil($query);
}
?>