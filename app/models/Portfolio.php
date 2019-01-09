<?php

class Portfolio extends DB\SQL\Mapper {

	protected $table;

	public function __construct(DB\SQL $db) {
		$this->table = 'portfolio';
		parent::__construct($db,$this->table);
	}

	public function all() {
		$this->load();
		return $this->query;
	}

	public function add() {
		$this->copyFrom('POST');
		$this->save();
	}

	public function getById($id) {
		$this->load(array('id=?',$id));
		$this->copyTo('POST');
	}

	public function edit($id) {
		$this->load(array('id=?',$id));
		$this->copyFrom('POST');
		$this->update();
	}

	public function delete($id) {
		$lastInsertID = $this->get('_id');
		$this->load(array('id=?',$id));
		$this->erase();
		$this->db->exec(
			'ALTER TABLE $this->table AUTO_INCREMENT = '.intval($lastInsertID)
		);
	}
}
