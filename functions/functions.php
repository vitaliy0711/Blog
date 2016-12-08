<?php
require_once "connect.php";


////////////Додавання посту////////////
$put = $_SERVER['DOCUMENT_ROOT'].'/img/';
if(isset($_FILES['filename']['name']) && ($_FILES['filename']['name'] != '') && $_POST['Save'] && $_POST['title'])
{
	$name = $_FILES['filename']['name'];
	connectDB();
		$sql = "INSERT INTO news (title, intro_text, full_text, image)
VALUES ('$_POST[title]', '$_POST[intro_text]', '$_POST[full_text]', '$name')";
	
	if ($mysqli->query($sql)) {
	echo '<script> alert("New record created successfully"); </script>';
	closeDB();
  
}
 else {
		echo '<script> alert("Error!"); </script>';
		}
	move_uploaded_file($_FILES["filename"]["tmp_name"],$put.$name);
	
}

	







?>