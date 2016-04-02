<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('home/home_page');
	}

	public function user_registration() {
        $this->load->database();
        $data['fname'] = $this->input->post('fname');
        $data['lname'] = $this->input->post('lname');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $data['gender'] = $this->input->post('gender');
        $data['month'] = $this->input->post('month');
        $data['day'] = $this->input->post('day');
        $data['year'] = $this->input->post('year');
        $this->load->model('sign_up_details/Sign_up_model');
        $response=$this->Sign_up_model->add_new_user($data);
        $this->db->close();
        echo json_encode($response);
    }
}
