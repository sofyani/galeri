<?php
include "koneksi.php";
?>

<form method="POST" action="hapus.php">
<?php
$query= mysql_query("select * from foto");
$count=mysql_num_rows($query);
$i=3;
while($row = mysql_fetch_array($query)) {
?>
<input type="checkbox" name="<?php echo $row['id']; ?>" >
<img src="upload/<?php echo $row['nama_file'];?>" alt="" width="200" border="0"/>
<?php if($i % 3 ==0){
echo "<br>";
}
$i++;
}
?>
<input type="submit" value="hapus">
</form>
