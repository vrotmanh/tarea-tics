<?php
	class User extends CI_Model {

		public $name;
		public $lastname;
		public $gender;
		public $username;
		public $password;
		public $email;
		public $phone;
		public $admin;
		public $ban;
		public $register_date;
		public $last_login;

    function __construct(){
        parent::__construct();
    }

    function register() {
			$this->name = $_POST['dname'];
			$this->lastname = $_POST['dlname'];
			$this->gender = $_POST['dgender'];
			$this->username = $_POST['dusername'];
			$this->password = $_POST['dpassword'];
			$this->email = $_POST['demail'];
			$this->phone = $_POST['dphone'];
			$this->admin = 0;
			$this->ban = 0;
			$this->register_date = date('Y-m-d H:y:s', time());
			$this->last_login = date('Y-m-d H:y:s', time());
			$this->db->insert('users', $this);

    }

	function edit() {

		$sql = "UPDATE users
				SET name = ".$name.",
					lastname = ".$lastname.",
					avatar = ".$avatar.",
					email = ".$email.",
					phone = ".$phone."
				WHERE username = ".$username;
		$qry = $this->db->query($sql);

    }

	function ban_users() {
		$users = $this->user->get_all();
		$res = array();
		foreach ($users as &$value) {
			$result = $_POST;
			$ban = 0;
			if(isset($result[$value['username']])){
				$ban = 1;
			}
			$res[$value['username']] = $ban;

			$sql = "UPDATE users
					 SET ban = ".$ban."
				     WHERE username = '".$value['username']."'";
			$qry = $this->db->query($sql);
		}
	}

	function authenticate() {
		$username = $_POST['dusername'];
		$password = $_POST['dpassword'];
		$sql = "SELECT username,name,lastname,admin,ban,email,phone
				FROM users
				WHERE username = '".$username."' AND password = '".$password."'";
		$qry = $this->db->query($sql);
		$result = $qry->row_array();
		if ($result != null) {
			$phpdate = time();
			$date = date( 'Y-m-d H:i:s', $phpdate );
			$sql2 = "UPDATE users
					 SET last_login = '".$date."'
					 WHERE username = '".$password."'";
			$qry2 = $this->db->query($sql2);
			return $result;
    }
		else {
      return null;
    }
  }

	function get_all() {
		$sql = "SELECT *
				FROM users";
		$qry = $this->db->query($sql);
		if ($qry->num_rows() > 0) {
			$index = 0;
			$result = array();
			foreach ($qry->result() as $row) {
				$aux = array(
					'username' => $row->username,
					'name' => $row->name,
					'lastname' => $row->lastname,
					'gender' => $row->gender,
					'email' => $row->email,
					'phone' => $row->phone,
					'ban' => $row->ban,
					'last_login' => $row->last_login
				);
				$result[$index] = $aux;
				$index++;
			}
			return $result;
		} else {
			return null;
		}
	}
}
?>
