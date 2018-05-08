<?php
	$servername = "localhost"; // сервер комьютерийн хаяг буюу нэр
	$username = "root";     // MySQL-ийн бааз руу хандах хэрэглэгчийн нэр
	$password = ""; // MySQL-ийн бааз руу хандах нууц үг
	$database = "dreamhome"; // Баазын нэр

	// Өгөгдлийн сантай холбох объект үүсгэх
	$conn = new mysqli($servername, $username, $password, $database);

	// Холболтыг шалгах
	if ($conn->connect_error) {
		die("Алдаа гарлаа: " . $conn->connect_error);
	} 
	echo "<center>Амжилттай холбогдлоо</center><br>";
?>

<center></center>
<center><br>
<a href="branch.php">Салбар</a>
<br>
<a href="client.php">Харилцагч</a>
<br>
<a href="po.php">Үл хөдлөх хөрөнгийн эзэмшигч</a>
<br>
<a href="view.php">Үл хөдлөх хөрөнгө үзсэн</a>
<br></center>
<!-- <a href="propertyforrent.php">Үл хөдлөх хөрөнгө</a>
<br>
<a href="registration.php">Бүртгэл</a>
<br>
<a href="registration.php">Бүртгэл</a>
<br> -->
