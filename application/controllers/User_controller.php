<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('session');
		$name = $this->session->userdata('name');
		$lastname = $this->session->userdata('lastname');
		$admin = $this->session->userdata('admin');
		$ban = $this->session->userdata('ban');
		$email = $this->session->userdata('email');
		$phone = $this->session->userdata('phone');
		$data = array(
				'name' => $name,
				'lastname' => $lastname,
				'admin' => $admin,
				'ban' => $ban,
				'email' => $email,
				'phone' => $phone
		);

		if($admin == 1) {
			$this->load->model('user', '', TRUE);
			$result = $this->user->get_all();
			$this->load->model('reservation', '', TRUE);
			$result2 = $this->reservation->get_all();
			$data['users'] = $result;
			$data['reservations'] = $result2;
			$this->load->view('admin', $data);
		}
		else {
			$this->load->view('home', $data);
		}
	}

	public function edit_profile()
	{
		$this->load->library('session');
		$name = $this->session->userdata('name');
		$lastname = $this->session->userdata('lastname');
		$admin = $this->session->userdata('admin');
		$ban = $this->session->userdata('ban');
		$email = $this->session->userdata('email');
		$phone = $this->session->userdata('phone');
		$data = array(
				'name' => $name,
				'lastname' => $lastname,
				'admin' => $admin,
				'ban' => $ban,
				'email' => $email,
				'phone' => $phone
		);
		$this->load->view('edit_profile', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('home');
	}

	public function login()
	{
		$this->load->model('user', '', TRUE);
		$result = $this->user->authenticate();

		if($result == null){
			$data = array(
				'error' => "Error de autenticación"
			);
		} elseif($result['ban'] == 1){
			$data = array(
				'error' => "Usuario banneado"
			);
		} else{
			$data = array(
					'name' => $result['name'],
					'lastname' => $result['lastname'],
					'admin' => $result['admin'],
					'ban' => $result['ban'],
					'email' => $result['email'],
					'phone' => $result['phone']
			);
		}

		$this->session->set_userdata($data);

		if($result['admin'] == 1)
		{
			$this->load->model('user', '', TRUE);
			$result = $this->user->get_all();
			$this->load->model('reservation', '', TRUE);
			$result2 = $this->reservation->get_all();
			$data['users'] = $result;
			$data['reservations'] = $result2;
			$this->load->view('admin', $data);
		}
		else {
			$this->load->view('home', $data);
		}
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function save_admin()
	{
		$this->load->model('user', '', TRUE);
		$res = $this->user->ban_users();
		$result = $this->user->get_all();
		$this->load->model('reservation', '', TRUE);
		$result2 = $this->reservation->get_all();
		$data = array();
		$data['reservations'] = $result2;
	  	$data['users'] = $result;
		$data['msg'] = "Los usuarios han sido actualizados.";
		$this->load->view('admin', $data);
	}

	public function save_register()
	{
		$this->load->helper('form');
		$this->load->helper('url');

		$form_data = $this->input->post();
		$name = $this->input->post("dname");
		$lname = $this->input->post("dlname");
		$phone = $this->input->post("dphone");
		$email = $this->input->post("demail");
		$gender = $this->input->post("dgender");
		$pass = $this->input->post("dpassword");
		$username = $this->input->post("dusername");

		$data = array(
				'name' => $name
		);

		if(!($name != ''))
		{
			$data = array(
					'error' => "Ingrese su nombre."
			);
			$this->load->view('register', $data);
			return;
		}

		if(!($lname != ''))
		{
			$data = array(
					'error' => "Ingrese su apellido."
			);
			$this->load->view('register', $data);
			return;
		}

		if(!($phone != ''))
		{
			$data = array(
					'error' => "Ingrese su telefono."
			);
			$this->load->view('register', $data);
			return;
		}

		if(!($email != ''))
		{
			$data = array(
					'error' => "Ingrese su email."
			);
			$this->load->view('register', $data);
			return;
		}

		if(!($pass != ''))
		{
			$data = array(
					'error' => "Ingrese su contraseña."
			);
			$this->load->view('register', $data);
			return;
		}

		if(!($username != ''))
		{
			$data = array(
					'error' => "Ingrese su nombre de usuario."
			);
			$this->load->view('register', $data);
			return;
		}

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '2024';
		$config['max_height']  = '2068';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$data = array(
				'error' => $error
			);
			$this->load->view('register', $data);
			return;
		}
		else
		{
			$data = array(
				'upload_data' => $this->upload->data()
			);

			$data['path'] = $data['upload_data']['full_path'];
			$pos = strrpos ($data['path'],"/");
			$data['spath'] =  substr ($data['path'],$pos+1);
			$_POST['imagepath'] = $data['spath'];
		}

		$this->load->model('user', '', TRUE);

		$success = $this->user->register();

		if ($success)
		{
			$this->load->view('success_register');
		}
	}

	public function edit_user() {

		$this->load->library('session');
		$username = $this->session->userdata('username');
		$this->load->model('user', '', TRUE);
		$this->user->edit($username);

	}
}
