<?php
	class Reservation extends CI_Model {

		public $id;
		public $name;
		public $lastname;
		public $date;
		public $block;
		public $phone;
		public $email;
		public $service;
		public $comment;

    function __construct(){
        parent::__construct();
    }

    function register() {
			$sql = "SELECT MAX(id) as id
					FROM reservations";
			$qry = $this->db->query($sql);
			$result = $qry->row_array();

			if(isset($result['id'])){ $id =  ($result['id'] + 1);}
			else {$id = 1;}

			$this->id = $id;
			$this->name = $_POST['dname'];
			$this->lastname = $_POST['dlname'];
			$this->date = $_POST['datetime'];
			$this->block = $_POST['dblock'];
			$this->phone = $_POST['dphone'];
			$this->email = $_POST['demail'];
			$this->service = $_POST['dservice'];
			$this->comment = $_POST['dmsg'];
			$this->db->insert('reservations', $this);

    }
}
?>
