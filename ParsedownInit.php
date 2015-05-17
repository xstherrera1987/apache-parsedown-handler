<?php
	class ParsedownHandlerSettings {
		public $basedir = '';

	}

	$ParsedownHandler = new ParsedownHandlerSettings();

	if ( file_exists('settings-user.php') ) {
		include 'settings.php'
	}

<!-- basedir <?= $ParsedownHandler->basedir ?> -->
