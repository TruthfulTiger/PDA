<?php

class UpdateController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
        $feed = "https://www.phoenixdragon.co.uk/blog/feed/";
        $rss = Web::instance();
		$this->f3->set('page_head','Updates');
        $result[0] = $rss->rss($feed);
        $this->f3->set('ESCAPE',FALSE);
        $this->f3->set('rss',$result[0]['feed']);
		$this->f3->set('view','/updates.html');
      //  var_dump($result[0]);
	}
}
