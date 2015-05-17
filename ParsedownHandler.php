<?php include "ParsedownInit.php";
	header('Content-type: text/html; charset=utf-8');
	require( dirname(__FILE__) . '/parsedown/Parsedown.php' );
?><!DOCTYPE html><!-- Parsedown Handler -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link href="/tmpl/css/bootstrap-3.2.0.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="/web-lib/apache-parsedown-handler/parsedown-handler/gfm-css/github-markdown.css">
	<link rel="stylesheet" href="/web-lib/apache-parsedown-handler/lib/highlight-8.5.min.css">
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
	$legalExtensions = array('md', 'markdown');
	$file = realpath($_SERVER['PATH_TRANSLATED']);

	if ($file
		&& in_array( strtolower(substr($file, strrpos($file,'.')+1)), $legalExtensions)): ?>
		
		<div class='container'>
			<div class='row markdown-body'>
				<?php
					$Parsedown = new Parsedown();	
					echo $Parsedown->text( file_get_contents($file) );
				?>
			</div>
		</div>
	<?php else: ?>
		<p>Bad filename given</p>
	<?php endif; ?>

	
	<script src="/web-lib/apache-parsedown-handler/lib/jquery-1.11.3.min.js"></script>
	<script src="/web-lib/apache-parsedown-handler/lib/highlight-8.5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('pre code').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		});
	</script>
</body>
</html>