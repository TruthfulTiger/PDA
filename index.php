<?php
require 'vendor/autoload.php';
date_default_timezone_set( "Europe/London" );
$f3 = \Base::instance();
\Assets::instance();
$f3->set('copyyear', date("Y"));
$f3->config('config/config.ini');
$f3->config('config/menus.ini');
$f3->config('config/routes.ini');
new Session();

$f3->set('ONERROR',
	function($f3) {
		// recursively clear existing output buffers:
		while (ob_get_level())
			ob_end_clean();
		$f3->set('page_head', $f3->get('ERROR.status'));
		echo Template::instance()->render('error.html');
	}
);

$f3->run();
