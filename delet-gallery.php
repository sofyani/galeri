<?php
include "koneksi.php";
	$id     =   $_GET['id'];    
	$sql    =   "delete from foto where id='$id'";
	$query  =   mysql_query($sql);
	if($query){
	    echo "Hapus data berhasil";
	}else{
	    echo "Hapus data gagal";
	}

header("Location : gallery.php")
?>