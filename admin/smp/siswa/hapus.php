<?php 
session_start();
if(empty($_SESSION['username'])) {
	header("location:../../form_login.php");
    exit;
}

require 'functions.php';
$id=$_GET['id'];
if (hapus($id)>0) {
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