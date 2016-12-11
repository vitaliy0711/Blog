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
/////////////////Пагінація///////////////////////
if (isset($_GET['page']))
	{
$page = $_GET['page'];
}
else {
$page=1;
}
$per_page = 3;
// Page will start from 0 and Multiple by Per Page
$start_from = ($page-1) * $per_page;
connectDB();
//Selecting the data from table but with limit
$query = "SELECT * FROM news LIMIT $start_from, $per_page";
$result = $mysqli->query ($query);
connectDB();
	$query = "select * from news";
$result = $mysqli->query($query);

// Count the total records
$total_records = mysqli_num_rows($result);
//Using ceil function to divide the total records on per page
$total_pages = ceil($total_records / $per_page);


///////////////////////////////////
function getNews($per_page, $id)
{
	if (isset($_GET['page'])) {
$page = $_GET['page'];
}
else {
$page=1;
}

$start_from = ($page-1) * $per_page;
	global $mysqli;
	connectDB();
	if($id)
		$where = "WHERE `id` = ".$id;
	$result = $mysqli->query("SELECT * FROM `news`$where ORDER BY `id` LIMIT $start_from, $per_page");
	
	closeDB();
	if(!$id)
	return resultToArray($result);
	else 
		return $result->fetch_assoc();
}
function resultToArray($result)
{
	$array = array();
	while (($row = $result->fetch_assoc())!=false)
		$array[] = $row;
	return $array;
}
	

	







?>