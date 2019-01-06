<?php

class SubscribeController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','Subscribe');
		$this->f3->set('view','/subscribe.html');
	}
}
