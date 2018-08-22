<!DOCTYPE>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../index.css">
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" href="../node_modules/trumbowyg/dist/ui/trumbowyg.min.css">
    </head>
    <body>


    	<?php 

    		include 'headerTemplate.php'; 

			if(isset($_POST['text'])) {
				$name = $_POST['text'];
				date_default_timezone_set('UTC');
			    include 'newsTemplate.php';
			    $id = date("Y-m-d-H-i-s");
			    if($name != '') {
				    $handle = fopen('../News/'.$id.'.php', 'a');
				    fwrite($handle, $html);
				    fclose($handle);
				};
			};
		?>


		<form class="newsForm" method="post">
		    <textarea id="trumbowyg-demo" type="text" name="text"></textarea> 
		    <input class="createNewsButton" type="submit" name="submit" value="Smash this biatch!"/>
		</form>

		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
		<script src="../node_modules/trumbowyg/dist/trumbowyg.min.js"></script>
		<script src="../node_modules/trumbowyg/dist/plugins/cleanpaste/trumbowyg.cleanpaste.min.js"></script>
		<script src="../node_modules/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js"></script>
		<script src="../node_modules/trumbowyg/dist/plugins/base64/trumbowyg.base64.js"></script>
		<script src="admin.js"></script>
    </body>
</html>