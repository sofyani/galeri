<?php
include "koneksi.php";
	$id     =   $_GET['id'];    
	$sql    =   "delete from foto where id='$id'";
	$query  =   mysql_query($sql);
	if($query){
	    echo "<meta http-equiv=\"Refresh\" content=\"1;url=gallery.php\">";
	}else{
	    echo "Hapus data gagal";
	}

header("Location : gallery.php")
?>