<?php
include "koneksi.php";
//upload file
if(!empty($_FILES) && $_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
    $fileName = $_FILES['file']['name'];
    $move = move_uploaded_file ($_FILES['file']['tmp_name'], 'upload/'.$fileName);
    if($move){
        //simpan deskripsi
        $sql = "insert into foto(nama_file,deskripsi) values
                ('$fileName', '".$_POST['deskripsi']."')";
        mysql_query($sql);
    }
}
//mysql_query("ALTER TABLE foto drop 'id'");
//mysql_query("ALTER TABLE `foto` ADD `id` INT(3) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
echo "<meta http-equiv=\"Refresh\" content=\"1;url=index.php\" >";
?>