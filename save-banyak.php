<?PHP
include "koneksi.php";
for($s=1;$s<=3;$s++){
if(!empty($_FILES) && $_FILES['file'.$s]['size'] > 0 && $_FILES['file'.$s]['error'] == 0){
    $fileName = $_FILES['file'.$s]['name'];
    $move = move_uploaded_file ($_FILES['file'.$s]['tmp_name'], 'upload/'.$fileName);
	$desk= $_POST['deskripsi'.$s];
        //simpan deskripsi
        $sql = "insert into foto(nama_file,deskripsi) values
                ('$fileName', '$desk')";
        mysql_query($sql);
}
}
mysql_query("ALTER TABLE foto drop 'id'");
mysql_query("ALTER TABLE `foto` ADD `id` INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
echo "<meta http-equiv=\"Refresh\" content=\"1;url=index.php\" >";
?>