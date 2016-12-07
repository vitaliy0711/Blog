<!DOCTYPE html>
<html>
<head>
<meta charset = "windows-1251"/>
	<?php
	
	$title = "Site about all";
	require_once "blocks/head.php";	
	?>
</head>
<body>
<?php require_once "blocks/header.php"?>
	  <div id = "wrapper">
		  <div id = "leftCol">  
	<div class = "add">
<form method="POST" action ="PostCreationPage.php"
enctype = "multipart/form-data">
<input size="10" type="text" name="title" placeholder="Title" required><br>
 <br><textarea  name = "intro_text" placeholder="Short description" required></textarea><br>
 <br><textarea  name = "full_text"  placeholder="Full description" required></textarea><br>
<p> Add image:  <input type = 'file' name = 'filename'></p><br>
<input  type="submit" name="Save" value="Save" />
</form>
</div>
		    	</div>
    	<?php require_once "blocks/rightCol.php"?>
		</div>
<?php require_once "blocks/footer.php"?>
</body>
</html>