<?php
	class ParsedownHandlerSettings {
		public $baseUrl = '/apache-markdown-handler/';
		public $docRootPath;
		public $appBasePath = __DIR__;

		function __construct() {
			$this->docRootPath = $_SERVER["DOCUMENT_ROOT"];
		}
	}

	$ParsedownHandler = new ParsedownHandlerSettings();

	if ( file_exists('settings.php') ) { include 'settings.php'; }
?>
