<html>
<head>
<link rel="stylesheet" href="style.css"/>
<title></title>
</head>
<body>
<div>
<?php 
include "koneksi.php";
include "header.php"; ?>
</div>
<div id="pss">
<div id="form-upload">
<form action="save-gallery.php" method="post" enctype="multipart/form-data">
  <h3 align="center">Isikan judul dan pilih file yang akan di upload :</h3>
  <p> File  
<?php $a= mysql_query("select * from foto order By id desc");
                $row=mysql_fetch_array($a);
                ?> <?php for($i=1;$i<=3;$i++){ ?>
<input type="hidden" name="id<?php echo $row['id']+$i; ?>" value="<?php echo $row['id']+$i ;?>"/><br />Judul : <input name="deskripsi" type="text" size="30" maxlength="30" />  <input type="file" name="file" id="file" /> </p> <?php   echo 'id '.$row['id']+$i; } ?>
  <p>* Hanya file gambar jpg/gif/png</p>
<p align="center"><input type="submit" name="save" value="Upload" /></p>
</form>
</div>
</div>
</body>
</html>