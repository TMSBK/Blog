<?php

	$html = "
				<!DOCTYPE>
				<html>
					<head>
						<meta name='viewport' content='width=device-width,initial-scale=1'>
						<link href='https://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet'>
						<link rel='stylesheet' type='text/css' href='../index.css'>
					    <link rel='stylesheet' type='text/css' href='news.css'>
					</head>
					<body>
						<?php 
							include '../Admin/headerTemplate.php';
					        echo '<br><h3>' . date('l jS \of F Y h:i:s A') . '</h3>';
					    ?>
					    <br>
					    <hr>
					    <br>
					    $name			        
					</body>
				</html>
			";

	preg_match_all( '@src="([^"]+)"@' , $html, $match );
	$src = array_pop($match);

?>