<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฐิติยา พุทธลา (พรีม)</title>
</head>

<body>

<h1>งาน i -- ฐิติยา พุทธลา (พรีม)</h1>

<form method="post" action="">
	ชื่อภาค<input type="text" name="rname" autofocus required>
    <button type="submit" name="Submit">บันทึก</button>
</form><br><br>

<?php
if(isset($_POST['Submit'])) {
	include_once("connectdb.php");
	$sql2 = "INSERT INTO 'regions' ('r_id'),('r_name') VALUES (NULL,'{$rname}')";
	mysqli_query($conn,$sql2) or die ("เพิ่มข้อมูลไม่ได้");
}
?>

<table border="1">
	<tr>
    	<th>รหัสภาค</th>
        <th>ชื่อภาค</th>
        <th>ลบ</th>
     </tr>
<?php
include_once("../../connectdb.php");
$sql = "SELECT * FORM 'regions' ";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)){
?>
	<tr>
    	<td><?php echo $date['r_id'] ; ?></td>
        <td><?php echo $date['r_name'] ; ?></td>
        <td width="80" align="center"><img src="../../images/delete.ipg" width="20"></tr>
    </tr>
<?php } ?>
</table>

</body>
</html>