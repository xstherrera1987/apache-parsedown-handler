<?php
	class ParsedownHandlerSettings {
		public $baseUrl = '/apache-markdown-handler/';
		public $docRootPath = '/var/www/';
		public $appBasePath = '/var/www/apache-markdown/handler';
	}

	$ParsedownHandler = new ParsedownHandlerSettings();

	if ( file_exists('settings.php') ) { include 'settings.php'; }
?>
