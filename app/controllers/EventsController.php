<?php

class EventsController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','Events');
		$this->f3->set('view','/events.html');
	}
}
