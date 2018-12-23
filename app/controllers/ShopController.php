<?php

class ShopController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','Shop');
		$this->f3->set('view','/shop.html');
	}
}
