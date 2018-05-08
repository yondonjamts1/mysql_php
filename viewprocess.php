<?php
	$servername = "localhost"; // сервер комьютерийн хаяг буюу нэр
	$username = "root";     // MySQL-ийн бааз руу хандах хэрэглэгчийн нэр
	$password = ""; // MySQL-ийн бааз руу хандах нууц үг
	$database = "dreamhome"; // Баазын нэр

	// Өгөгдлийн сантай холбох объект үүсгэх
	$conn = new mysqli($servername, $username, $password, $database);

	// Ямар үйлдэл хийх гэж байгааг GET хүсэлтээр хүлээж авна
	$action = isset($_GET['action']) ? $_GET['action'] : '';
	
	// Хүснэгтийн primarykey-г id-аар дамжуулна
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	
	if($action == "viewadd"){
		if($id == ''){
			$qry = "
				INSERT INTO viewing(clientNo,propertyNo,viewDate,comment1)
				VALUES ('{$_POST['clientNo']}','{$_POST['propertyNo']}','{$_POST['viewDate']}','{$_POST['comment1']}')";
		}else{
			$qry = "
				update viewing set
				clientNo = '{$_POST['clientNo']}',
				propertyNo = '{$_POST['propertyNo']}',
				viewDate = '{$_POST['viewDate']}',
				comment1 = '{$_POST['comment1']}'
				where clientNo = '{$id}'
			";
		}
		if ($conn->query($qry) === true) {
			header('location: view.php');
		}else{
			echo $conn->error;
		}
	}
	if($action == "viewdel"){
		$id = isset($_GET['id']) ? $_GET['id'] : '';
		$qry = "delete from viewing where clientNo = '{$id}'";
		if ($conn->query($qry) === true) {
			header('location: view.php');
		}else{
			echo $conn->error;
		}
	}
	
?>