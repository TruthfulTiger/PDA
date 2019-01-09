<?php

class PortfolioController extends Controller {

	private $folio;

	public function __construct() {
		parent::__construct();
		$this->folio = new Portfolio($this->db);
	}

	public function index()
	{
		//$this->f3->set('ESCAPE',FALSE);
		$this->f3->set('folio1',$this->folio->find(array('id>=?',1),array('order'=>'finishDate DESC', 'limit'=>3, 'offset'=>3)));
		$this->f3->set('folio2',$this->folio->find(array('id>=?',4),array('order'=>'finishDate DESC', 'limit'=>3)));
		$this->f3->set('page_head','Portfolio');
		$this->f3->set('view','/portfolio.html');
	}
}
