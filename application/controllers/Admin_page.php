<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_page extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('admin/admin_page');
	}

	public function show_user_details()
	{
		$this->load->database();
        $this->load->model('admin_model/Admin_page_details');
        $response=$this->Admin_page_details->admin_page_users_details();
        $this->db->close();
        return $response;
	}

	public function show_user_profile()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('admin/show_user_profile');
	}

}
