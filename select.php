<?php
include "koneksi.php";
?>
<form method="POST" action="check.php">

<?php
$query= mysql_query("select * from foto");
$i=3;
while($row = mysql_fetch_array($query)) {
?>
<input type="checkbox" name="<?php echo $row['nama_file']; ?>" value="<?php echo $row['deskripsi']; ?>" >
<img src="upload/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/>
<?php if($i % 3 ==0){
echo "<br>";
}
$i++;
}
?>
</form>