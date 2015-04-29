<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="stylesheet" type="text/css" href="/parsedown-handler/gfm-css/github-markdown.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/styles/default.min.css">
	<style>
	    .markdown-body {
	        min-width: 200px;
	        max-width: 790px;
	        margin: 0 auto;
	        padding: 30px;
	    }
	</style>
</head>
<body>
<?php
	require( dirname(__FILE__) . '/parsedown/Parsedown.php' );
	$legalExtensions = array('md', 'markdown');
	$file = realpath($_SERVER['PATH_TRANSLATED']);

	if($file
		&& in_array( strtolower(substr($file, strrpos($file,'.')+1)), $legalExtensions)) {

		$Parsedown = new Parsedown();
		echo '<article class="markdown-body">';
		echo $Parsedown->text( file_get_contents($file) );
		echo '</article>';

	} else { echo "<p>Bad filename given</p>"; }
?>
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.5/highlight.min.js"></script>
	<script>
		$(document).ready(function() {
			$('pre code').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		});
	</script>
</body>
</html>