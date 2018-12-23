<?php

class TestController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','Test page');
		$this->f3->set('view','/test.html');
	}
}
