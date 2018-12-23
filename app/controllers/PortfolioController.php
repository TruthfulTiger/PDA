<?php

class PortfolioController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','Portfolio');
		$this->f3->set('view','/portfolio.html');
	}
}
