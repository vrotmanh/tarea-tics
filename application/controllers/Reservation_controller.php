<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation_controller extends CI_Controller {

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
		$this->load->view('reservation', $data);
	}

	public function save()
	{
		$form_data = $this->input->post();
		$name = $this->input->post("dname");
		$lname = $this->input->post("dlname");
		$date = $this->input->post("datetime");
		$block = $this->input->post("dblock");
		$phone = $this->input->post("dphone");
		$email = $this->input->post("demail");
		$service = $this->input->post("dservice");

		if(!($name != ''))
		{
			$data = array(
					'error' => "Ingrese su nombre.",
					'lastname' => $lname,
					'block' => $block,
					'phone' => $phone,
					'email' => $email
			);
			$this->load->view('reservation', $data);
			return;
		}

		if(!($lname != ''))
		{
			$data = array(
					'error' => "Ingrese su apellido.",
					'name' => $name,
					'block' => $block,
					'phone' => $phone,
					'email' => $email
			);
			$this->load->view('reservation', $data);
			return;
		}

		if(!($date != ''))
		{
			$data = array(
					'error' => "Ingrese la fecha.",
					'name' => $name,
					'lastname' => $lname,
					'block' => $block,
					'phone' => $phone,
					'email' => $email
			);
			$this->load->view('reservation', $data);
			return;
		}

		if(!($block != ''))
		{
			$data = array(
					'error' => "Ingrese el bloque.",
					'lastname' => $lname,
					'name' => $name,
					'phone' => $phone,
					'email' => $email
			);
			$this->load->view('reservation', $data);
			return;
		}

		if(!($phone != ''))
		{
			$data = array(
					'error' => "Ingrese su telefono.",
					'lastname' => $lname,
					'block' => $block,
					'name' => $name,
					'email' => $email
			);
			$this->load->view('reservation', $data);
			return;
		}

		if(!($email != ''))
		{
			$data = array(
					'error' => "Ingrese su email.",
					'lastname' => $lname,
					'block' => $block,
					'phone' => $phone,
					'name' => $name
			);
			$this->load->view('reservation', $data);
			return;
		}

		if(!($service != ''))
		{
			$data = array(
					'error' => "Ingrese el servicio que desea.",
					'name' => $name,
					'lastname' => $lname,
					'block' => $block,
					'phone' => $phone,
					'email' => $email
			);
			$this->load->view('reservation', $data);
			return;
		}

		$this->load->model('reservation', '', TRUE);
		$this->reservation->register();

		$this->load->library('session');
		$name = $this->session->userdata('name');
		$lastname = $this->session->userdata('lastname');
		$admin = $this->session->userdata('admin');
		$ban = $this->session->userdata('ban');
		$email = $this->session->userdata('email');
		$phone = $this->session->userdata('phone');
		$data = array(
				'info' => "Su hora fue reservada",
				'name' => $name,
				'lastname' => $lastname,
				'admin' => $admin,
				'ban' => $ban,
				'email' => $email,
				'phone' => $phone
		);

		$this->load->view('home', $data);
	}

}
