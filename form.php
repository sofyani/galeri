<html>
<head>
<title>Tambah foto</title>
<link rel="stylesheet" href="style.css"/>
<?php include "koneksi.php";
?>
</head>
<body>
<div id="header">
<?php
include "header.php";
?>
</div>
<div id="pss">
<div id="form-upload">
    <form name="form1" action="save-gallery.php" method="post" enctype="multipart/form-data">
                File : <input type="file" name="file" id="file" /><br />
                deskription : <textarea name="deskripsi" id="deskripsi"></textarea><br />
                <input type="submit" name="save" value="Upload" />
    </form>
<a href="formbanyak.php">Tamabah banyak foto</a>
</div>
</div
</body>
</html>