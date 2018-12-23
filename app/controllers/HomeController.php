<?php

class HomeController extends Controller {

	public function index()
	{
        $feed = "https://www.phoenixdragon.co.uk/blog/feed/";
        $rss = Web::instance();
		$this->f3->set('page_head','Updates');
        $result[0] = $rss->rss($feed, 4);
        $this->f3->set('rss',$result[0]['feed']);
		$this->f3->set('page_head','Home');
		$this->f3->set('view','/home.html');
	}
}
