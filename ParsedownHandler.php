<?php
	include ".\ParsedownInit.php";
	$basePath = $ParsedownHandler->basePath;
	$baseUrl = $ParsedownHandler->baseUrl;

	header('Content-type: text/html; charset=utf-8');
	require( $basePath . '/parsedown/Parsedown.php' );
?><!DOCTYPE html><!-- apache-markdown-handler -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- TODO: move bootstrap styles into assets/ -->
	<link rel="stylesheet" href="<?= $baseUrl ?>/bootstrap/bootstrap-3.2.0.min.css" />
	<link rel="stylesheet" href="<?= $baseUrl ?>gfm-css/github-markdown.css">
	<link rel="stylesheet" href="<?= $baseUrl ?>/assets/highlight-8.5.min.css">
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
	echo "begin processing." . "\n";
	echo $_SERVER['PATH_TRANSLATED'];
	
	$file = realpath($_SERVER['PATH_TRANSLATED']);

	if ( NULL != $file && file_exists($file)
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

	
	<script src="<?= $baseUrl ?>lib/jquery-1.11.3.min.js"></script>
	<script src="<?= $baseUrl ?>lib/highlight-8.5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('pre code').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		});
	</script>
</body>
</html>