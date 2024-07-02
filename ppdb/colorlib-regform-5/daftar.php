<?php

include '../../koneksi.php';

function tampil($query) {
    global $conn;
    $i=mysqli_query ($conn, $query);
    $rows=[];
    while ($rows=mysqli_fetch_assoc($i)) {
     $rows[]=$rows;
    }
    return $rows;


}

function tambah($data) {
    global $conn;
    $NIK = htmlspecialchars ($data['NIK']);
    $nama = htmlspecialchars ($data['nama']);
    $tempat_lahir = htmlspecialchars ($data['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars ($data['tanggal_lahir']);
    $gender = htmlspecialchars ($data['gender']);
    $alamat = htmlspecialchars ($data['alamat']);
    $no_telepon = htmlspecialchars ($data['no_telepon']);
    $jenjang = htmlspecialchars ($data['jenjang']);

    $query ="INSERT INTO kontak VALUES ('', '$NIK', '$nama', '$tempat_lahir', '$tanggal_lahir', '$gender', '$alamat', '$no_telepon', '$jenjang')";
    mysqli_query ($conn, $query);
    return mysqli_affected_rows($conn);

}

function hapus($data) {
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