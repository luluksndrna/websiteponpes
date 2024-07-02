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



function hapus($data){
	global $conn;
	$query="SELECT * FROM pendaftaran WHERE id=$data";
	$sql=mysqli_query($conn,$query);
	$hapus=mysqli_fetch_assoc($sql);
	mysqli_query($conn,"DELETE FROM pendaftaran WHERE id=$data");
	return mysqli_affected_rows($conn);
}



function cari($data){
	$query="SELECT * FROM pendaftaran
			WHERE 
			nama LIKE '%$data%' OR
			email LIKE '%$data%' OR
			nomor LIKE '%$data%' OR
			pesan LIKE '%$data%'
			
	";
	return tampil($query);
}
?>