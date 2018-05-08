<?php
	$servername = "localhost"; // сервер комьютерийн хаяг буюу нэр
	$username = "root";     // MySQL-ийн бааз руу хандах хэрэглэгчийн нэр
	$password = ""; // MySQL-ийн бааз руу хандах нууц үг
	$database = "dreamhome"; // Баазын нэр

	// Өгөгдлийн сантай холбох объект үүсгэх
	$conn = new mysqli($servername, $username, $password, $database);

	$id = isset($_GET['id']) ? $_GET['id'] : '';
	
	$qry = "select * from viewing where clientNo = '{$id}'";
	$result = $conn->query($qry);
	if($row = $result->fetch_assoc()){
		$clientno = $row['clientNo'];
		$propertyNo = $row['propertyNo'];
		$viewDate = $row['viewDate'];
		$comment1 = $row['comment1'];
	}else{
		$clientno = "";
		$propertyNo = "";
		$viewDate = "";
		$comment1 ="";
	}
?>
<a href="viewadd.php">Өгөгдөл нэмэх</a>
<br>
<form action="viewprocess.php?action=viewadd" method="post">
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<br>
	client No : <input type="text" name="clientNo" value="<?php echo $clientno;?>">
	<br>
	propertyNo : <input type="text" name="propertyNo" value="<?php echo $propertyNo;?>">
	<br>
	viewDate : <input type="text" name="viewDate" value="<?php echo $viewDate;?>">
	<br>
	comment1 : <input type="text" name="comment1" value="<?php echo $comment1;?>">
	<br>
	<button type="submit">Хадгалах</button>
</form>
<br>
<a href="view.php">Буцах</a>