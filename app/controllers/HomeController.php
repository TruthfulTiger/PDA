<?php

class HomeController extends Controller {

	public function index()
	{
        $feed = "https://www.phoenixdragon.co.uk/blog/feed/";
        $etsy = "https://www.etsy.com/shop/PhoenixDragonArcade/rss";
        $rss = Web::instance();
        $result[0] = $rss->rss($feed);
        $etsyres[0] = $rss->rss($etsy);
        $this->f3->set('rss',$result[0]['feed']);
        $this->f3->set('etsy',$etsyres[0]['feed']);
        $this->f3->set('page_head','Updates');
		$this->f3->set('page_head','Home');
		$this->f3->set('view','/home.html');
	}
}
