<?php 
session_start();
if(empty($_SESSION['username'])) {
	header("location:../../index.php");
    exit;
}

require 'functions.php';
$id_user=$_GET['id_user'];
if (hapus($id_user)>0) {
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href='index.php';

		</script>


		";
}else{
	echo "<script>
				alert('data gagal dihapus');
				document.location.href='index.php';

		</script>
		";
}

?>