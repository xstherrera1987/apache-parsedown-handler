<?php
	class ParsedownHandlerSettings {
		public $baseUrl = '/apache-markdown-handler/';
		public $docRootPath;
		public $appBasePath;

		function __construct() {
			$this->appBasePath = __DIR__;
			$this->docRootPath = $_SERVER["DOCUMENT_ROOT"];
		}
	}

	$ParsedownHandler = new ParsedownHandlerSettings();

	if ( file_exists('settings.php') ) { include 'settings.php'; }
?>
