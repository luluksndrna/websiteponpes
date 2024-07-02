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
	$NIK = htmlspecialchars($data["NIK"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$gender = htmlspecialchars($data["gender"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telepon = htmlspecialchars($data["no_telepon"]);

	$query=" INSERT INTO siswa VALUES ('', '$NIK', '$nama' , '$tempat_lahir', '$tanggal_lahir', '$gender', '$alamat', '$no_telepon')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function hapus($data){
	global $conn;
	$query="SELECT * FROM siswa WHERE id=$data";
	$sql=mysqli_query($conn,$query);
	$hapus=mysqli_fetch_assoc($sql);
	mysqli_query($conn,"DELETE FROM siswa WHERE id=$data");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$id = $data["id"];
	$NIK = htmlspecialchars($data["NIK"]);
	$nama = htmlspecialchars($data["nama"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$gender = htmlspecialchars($data["gender"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telepon = htmlspecialchars($data["no_telepon"]);
	
	$query="UPDATE siswa SET 
			NIK = '$NIK',
			nama = '$nama',
			tempat_lahir = '$tempat_lahir',
			tanggal_lahir = '$tanggal_lahir',
			gender = '$gender',
			alamat = '$alamat',
			no_telepon = '$no_telepon'
			WHERE id = $id

		";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function cari($data){
	$query="SELECT * FROM siswa
			WHERE 
			NIK LIKE '%$data%' OR
			nama LIKE '%$data%' OR
			tempat_lahir LIKE '%$data%' OR
			tanggal_lahir LIKE '%$data%' OR
			gender LIKE '%$data%' OR
			alamat LIKE '%$data%' OR
			no_telepon LIKE '%$data%'  
	";
	return tampil($query);
}
?>