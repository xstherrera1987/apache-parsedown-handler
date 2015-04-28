<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="/parsedown-handler/gfm-css/github-markdown.css">
</head>
<body>
<?php
	require('parsedown-handler/parsedown/Parsedown.php');
	$legalExtensions = array('md', 'markdown');
	$file = realpath($_SERVER['PATH_TRANSLATED']);

	if($file
		&& in_array(strtolower(substr($file,strrpos($file,'.')+1)), $legalExtensions)
		&& substr($file,0,strlen($_SERVER['DOCUMENT_ROOT'])) == $_SERVER['DOCUMENT_ROOT']) {

		$Parsedown = new Parsedown();
		echo $Parsedown->text( file_get_contents($file) );

	} else { echo "<p>Bad filename given</p>"; }
?>
</body>
</html>