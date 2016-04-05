<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_control extends CI_Controller {

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('users/user_details_table');
	}

	public function show_user_details()
	{
		$this->load->database();
        $this->load->model('user_model/User_details_table');
        $response=$this->User_details_table->users_details();
        $this->db->close();
        echo json_encode($response);
	}

	public function show_user_profile()
	{
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('users/show_user_profile');
	}

	public function user_status_update_call()
	{
		$this->load->database();
        $data['status'] = $this->input->post('status');
        $data['user_id']=$this->input->post('user_tab_id');
        $this->load->model('user_model/User_details_table');
        $response=$this->User_details_table->user_status_update_call($data);
        echo json_encode($response);
	}

	public function show_user_details_xyz($id)
	{
		// echo $id;
		$data['id']=$id;
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->view('users/show_user_specific_profile',$data);
	}

}
