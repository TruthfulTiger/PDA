<?php

class AboutController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','About');
		$this->f3->set('view','/about.html');
	}
}
