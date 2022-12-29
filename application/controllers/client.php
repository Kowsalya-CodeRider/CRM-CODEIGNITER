<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index()
	{
		$data['url'] = $this->uri->segment(2);
		$this->load->view('header/header',$data);
		$this->load->view('client/client_login');
		$this->load->view('footer/footer');
	}
	
	public function client_dashboard()
	{
		$data['url'] = $this->uri->segment(2);
		$u_id = $this->session->userdata('u_id');
		$data1['projects'] = $this->client_model->getuserprojects($u_id);
		$data['notifications'] = $this->client_model->getnotifications($u_id);
		$this->load->view('header/header',$data);
		$this->load->view('header/menu',$data);
		$this->load->view('client/client_dashboard',$data1);
		$this->load->view('footer/footer');
	}
	
	public function projects_list()
	{
		$data['url'] = $this->uri->segment(2);
		$u_id = $this->session->userdata('u_id');
		$data1['projects'] = $this->client_model->getuserprojects($u_id);
		$data['notifications'] = $this->client_model->getnotifications($u_id);
		$this->load->view('header/header',$data);
		$this->load->view('header/menu',$data);
		$this->load->view('client/projects_list',$data1);
		$this->load->view('footer/footer');
	}
	
	public function ticket_list()
	{
		$data['url'] = $this->uri->segment(2);
		$u_id = $this->session->userdata('u_id');
		$data1['tickets'] = $this->client_model->gettickets($u_id);
		$data['notifications'] = $this->client_model->getnotifications($u_id);
		$this->load->view('header/header',$data);
		$this->load->view('header/menu',$data);
		$this->load->view('client/ticket_list',$data1);
		$this->load->view('footer/footer');
	}
	
	public function add_ticket()
	{
		if(isset($_POST['add_ticket']))
		{
			$data['p_id ']			= $this->input->post('p_id');
			$data['t_title'] 		= $this->input->post('t_title');
			$data['t_code'] 		= $this->input->post('t_code');
			$data['t_created_by'] 	= $this->input->post('t_created_by');
			$data['t_status_id'] 	= $this->input->post('t_status_id');
			$data['t_created_date'] = $this->input->post('t_created_date');
			$data['t_description'] 	= $this->input->post('t_description');
			$result = $this->db->insert('tickets',$data);
			$not['t_id'] 			= $this->db->insert_id();
			$not['u_id'] 			= $data['t_created_by'];
			$username		 		= $this->input->post('t_created_by_1');
			$not['n_type'] 			= 'add_ticket';
			$not['n_data'] 			= $data['t_code'].' - created by '.$username;
			if($result)
			{
				$this->db->insert('notifications',$not);
				$this->ticket_list();
			}
			else
			{
				$data1['error'] = 'error';
			}
		}
		else
		{
			$data['url'] = $this->uri->segment(2);
			$data1['projects'] = $this->client_model->getallproject();
			$u_id = $this->session->userdata('u_id');
			$data['notifications'] = $this->client_model->getnotifications($u_id);
			$this->load->view('header/header',$data);
			$this->load->view('header/menu',$data);
			$this->load->view('client/add_ticket',$data1);
			$this->load->view('footer/footer');
		}
	}
	
	public function view_ticket()
	{
		$data['url'] = $this->uri->segment(2);
		$t_id = $this->uri->segment(3);
		$data1['ticket'] = $this->client_model->getticketview($t_id);
		$data1['ticketchat'] = $this->client_model->getticketchat($t_id);
		$u_id = $this->session->userdata('u_id');
		$data['notifications'] = $this->client_model->getnotifications($u_id);
		$this->load->view('header/header',$data);
		$this->load->view('header/menu',$data);
		$this->load->view('client/view_ticket',$data1);
		$this->load->view('footer/footer');
	}
	
	public function edit_ticket()
	{
		$data['url'] = $this->uri->segment(2);
		$t_id = $this->uri->segment(3);
		$data1['ticket'] = $this->client_model->getticketview($t_id);
		$data1['ticketchat'] = $this->client_model->getticketchat($t_id);
		$u_id = $this->session->userdata('u_id');
		$data['notifications'] = $this->client_model->getnotifications($u_id);
		$this->load->view('header/header',$data);
		$this->load->view('header/menu',$data);
		$this->load->view('client/edit_ticket',$data1);
		$this->load->view('footer/footer');
	}
	
	public function client_login_check()
	{
		$user_email = $this->input->post('user_email');
		$user_password = $this->input->post('user_password');
		$response = $this->client_model->client_login_check($user_email,$user_password);
		if(!empty($response))
		{
			$sessiondata = array(
									'user_name'  => $response->user_name,
									'user_email' => $user_email,
									'u_id'		 => $response->u_id,
									'logged_in'  => TRUE
								);
			$this->session->set_userdata($sessiondata);
			$this->client_dashboard();
		}
		else
		{
				$data['url'] = $this->uri->segment(2);
				$data['error'] = 'error';
				$this->load->view('header/header');
				$this->load->view('client/client_login',$data);
				$this->load->view('footer/footer');
		}
	}
	
	public function view_project()
	{
		$data['url'] = $this->uri->segment(2);
		$pid = $this->uri->segment(3);
		$data['p_details'] = $this->client_model->getproject($pid);
		$data['tickets'] = $this->client_model->getprojecttickets($pid);
		$u_id = $this->session->userdata('u_id');
		$data['notifications'] = $this->client_model->getnotifications($u_id);
		$this->load->view('header/header',$data);
		$this->load->view('header/menu',$data);
		$this->load->view('client/view_project');
		$this->load->view('footer/footer');
	}
	
	public function client_logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
	
	public function ticketchat()
	{
		$data['t_response']  = $this->input->post('t_response');
		$data['t_id']		 = $this->input->post('t_id');
		$data['u_id']		 = $this->input->post('u_id');
		$data['a_id']		 = $this->input->post('a_id');
		// Count total files
		$countfiles = count($_FILES['tc_files']['name']);

		// Upload directory
		$upload_location = "files/ticketfiles/";

		// To store uploaded files path
		$files_arr = array();

		// Loop all files
		for($index = 0;$index < $countfiles;$index++){

		   // File name
		   $filename = $_FILES['tc_files']['name'][$index];

		   // Get extension
		   $ext = pathinfo($filename, PATHINFO_EXTENSION);

		   // Valid image extension
		   $valid_ext = array("png","jpeg","jpg");

		   // Check extension
		   if(in_array($ext, $valid_ext)){

			 // File path
			 $path = $filename;

			 // Upload file
			 if(move_uploaded_file($_FILES['tc_files']['tmp_name'][$index],$path)){
				$files_arr[] = $upload_location.$path;
			 }
		   }

		}
		$data['tc_files'] = implode(',',$files_arr);
		$response = $this->db->insert('ticket_chat',$data);
		if($response)
		{
			echo 1;die;
		}
		else
		{
			echo 0;die;
		}
	}
	
	public function allnotifications()
	{
		$data['url'] = $this->uri->segment(2);
		$u_id = $this->session->userdata('u_id');
		$data['notifications'] = $this->client_model->getallnotifications($u_id);
		$this->load->view('header/header',$data);
		$this->load->view('header/menu',$data);
		$this->load->view('client/allnotifications');
		$this->load->view('footer/footer');
	}
	
	public function notificationread()
	{
		$n_id = $this->input->post('n_id');
		$data = array('is_read' => 1);
		$this->db->where('n_id',$n_id);
		$this->db->update('notifications',$data);
	}
}
