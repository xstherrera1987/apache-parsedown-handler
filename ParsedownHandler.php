<?php
	include "ParsedownInit.php";
	$baseUrl = $ParsedownHandler->baseUrl;
	include 'libs/parsedown/Parsedown.php';

	header('Content-type: text/html; charset=utf-8');
?><!DOCTYPE html><!-- apache-parsedown-handler -->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link rel="stylesheet" href="<?= $baseUrl ?>libs/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?= $baseUrl ?>libs/highlight-js/src/styles/github.css">
	<style> .hljs { background: transparent; } </style>
</head>
<body>
	<script src="<?= $baseUrl ?>libs/jquery/dist/jquery.min.js"></script>
<?php
	$legalExtensions = array('md', 'markdown');
	$markdownFile = realpath($_SERVER['PATH_TRANSLATED']);

	if ( NULL != $markdownFile && file_exists($markdownFile)
		&& in_array( strtolower(substr($markdownFile, strrpos($markdownFile,'.')+1)), $legalExtensions)): ?>
		
		<div class='container'>
			<div class='row'>
				<div class='col-xs-8 col-xs-offset-2'>
				<?php
					$Parsedown = new Parsedown();
					echo $Parsedown->text( file_get_contents($markdownFile) );
				?>
				</div>
			</div>
		</div>
	<?php else: ?>
		<p>Bad filename given</p>
	<?php endif; ?>
	
	<script src="<?= $baseUrl ?>libs/highlight-js/src/highlight.js"></script>
	<script>
		$(document).ready(function() {
			$('pre code').each(function(i, block) {
				hljs.highlightBlock(block);
			});
		});
	</script>
</body>
</html>
