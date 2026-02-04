<?php
    session_start();
	include_once("check_login.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>จัดการสินค้า - ฐิติยา</title>
</head>

<body>

<h1>หน้าหลักเเอดมิน - ฐิติยา</h1>

<?php echo "เเอดมิน: " . $_SESSION['aname']; ?> <br>

</ul>
	<a href="products.php"><li>จัดการสินค้า</li></a>
    <a href="orders.php"><li>จัดการออเดอร์</li></a>
    <a href="customers.php"><li>จัดการลูกค้า</li></a>
    <a href="logout.php"><li>ออกจากระบบ</li></a>
</ul>
</body>
</html>