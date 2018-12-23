<?php

class ContactController extends Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->f3->set('page_head','Contact');
		$this->f3->set('view','/contact.html');
	}

    public function send() {
        if (isset($_POST['send'])) {
            if (!empty($this->f3->get('POST.hptrap'))) {
                die('Nice try, Spam-A-Lot');
            } else {
                $this->f3->scrub($_POST,'p; br; span; div; a');
                $smtp = new SMTP ( 'smtp.livemail.co.uk', 465, 'ssl', 'website@phoenixdragon.co.uk', 'R3g3n3sis' );
                $smtp->set('To', '"Sam Phoenix" <sam@phoenixdragon.co.uk>');
                $smtp->set('From', '"PDA website" <website@phoenixdragon.co.uk>');
                $smtp->set('Reply-To', '"'.$this->f3->get('POST.name').'" <'.$this->f3->get('POST.email').'>');
                $smtp->set('Subject', $this->f3->get('POST.subject'));
                $send = $smtp->send($this->f3->get('POST.message'));
                $send;
                if ($send) {
                    $this->f3->set('page_head','Thank you');
                } else {
                    $this->f3->set('page_head','Sorry, there was a problem');
                }
                $this->f3->set('log', $smtp->log());
                $this->f3->set('smtp', $send);
                $this->f3->set('view','/send.html');
            }
        }
    }
}
