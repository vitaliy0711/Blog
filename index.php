<!DOCTYPE html>
<html>
<head>

	<?php
	error_reporting(0);
	require_once "functions/functions.php";
	$title = "Home Page";
	require_once "blocks/head.php";

	$news = getNews(3);


	?>
</head>
<body>
<?php require_once "blocks/header.php"?>
	  <div id = "wrapper">
		  <div id = "leftCol">
	 	   <?php
		   for($i=0; $i<count($news); $i++)
		   {

				   echo '<div id = "Article">';
			   echo '<img src="img/'.$news[$i]["image"].'" alt = "article
			   '.$news[$i]["id"].'" title = "Article '.$news[$i]["id"].'">
				  <h2>'.$news[$i]["title"].'</h2>
                 <p>'.$news[$i]["intro_text"].'</p>
				 <a href = "PostPage.php?id='.$news[$i]["id"].'">
					 <div class="more">More</div>
                 </a>
                 </div>';
			 if($i == 0){
					echo '<div class = "clear"><br></div>';
			 }

		   }

		   ?>

		    	</div>


    	<?php require_once "blocks/rightCol.php"?>

		</div>
		<div class="pagination">
					<?php
				 echo "<center><a href='index.php?page=1'>".'First Page'."</a> ";
				for ($i=1; $i<=$total_pages; $i++) {

				echo "<a href='index.php?page=".$i."'>".$i."</a> ";
				};
				// Going to last page
				echo "<a href='index.php?page=$total_pages'>".'Last Page'."</a></center> ";

				?>
		</div>


<?php require_once "blocks/footer.php"?>
</body>
</html>
