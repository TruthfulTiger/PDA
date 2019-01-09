<?php

class SuccessController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','Thank you');
		$this->f3->set('view','/shop/success.html');
	}
}
