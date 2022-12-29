<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['url'] = $this->uri->segment(2);
		$this->load->view('header/admin_header',$data);
		//$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/admin_login');
		$this->load->view('footer/footer');
	}
	
	public function admin_dashbaord()
	{
		$data['url'] = $this->uri->segment(2);
		$data1['data'] = $this->admin_model->dashboardata();
		$data['notifications'] = $this->admin_model->getnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/admin_dashboard',$data1);
		$this->load->view('footer/footer');
	}
	
	public function admin_projects()
	{
		$data['url'] = $this->uri->segment(2);
		$data['projects'] = $this->admin_model->getprojectslist();
		$data['notifications'] = $this->admin_model->getnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/admin_projects_list');
		$this->load->view('footer/footer');
	}
	
	public function add_projects()
	{
		if(isset($_POST['add_projects']))
		{
			$data['p_type'] 			= $this->input->post('project_type');
			$data['p_category'] 		= $this->input->post('project_category');
			$data['p_inter_category'] 	= $this->input->post('project_inter_category');
			$data['p_code'] 			= $this->input->post('project_code');
			$data['p_title'] 			= $this->input->post('project_title');
			$data['p_startdate'] 		= $this->input->post('project_startdate');
			$data['p_enddate'] 			= $this->input->post('project_enddate');
			$data['p_status_id'] 		= $this->input->post('project_status');
			$data['p_percentage'] 		= $this->input->post('project_percentage');
			$data['p_duration'] 		= $this->input->post('project_duration');
			$data['p_description'] 		= $this->input->post('project_description');
			$data['p_cost'] 			= $this->input->post('project_cost');
			$data['p_client_id'] 		= $this->input->post('client_or_company_name');
			$filedata = '';

			  if(!empty($_FILES['project_files']['name']) && count(array_filter($_FILES['project_files']['name'])) > 0){ 
                $filesCount = count($_FILES['project_files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['project_files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['project_files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['project_files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['project_files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['project_files']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = './files/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    //$config['max_size']    = '100'; 
                    //$config['max_width'] = '1024'; 
                    //$config['max_height'] = '768'; 
                     
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                     
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 
						
						$filedata .= $uploadData[$i]['file_name'].',';
                    }else{  
                        $errorUploadType .= $_FILES['file']['name'].' | ';  
                    } 
                }
				$data['p_files'] = rtrim($filedata,',');
			  }
			
			$result = $this->db->insert('projects',$data);
			if($result)
			{
				$this->admin_projects();
			}
			else
			{
				$data1['error'] = 'error';
			}
		}
		else
		{
			$data1['url'] = $this->uri->segment(2);
			$data1['pi_category'] = $this->admin_model->getpicategory();
			$data1['project_status'] = $this->admin_model->getprojectstatus();
			$data1['users'] = $this->admin_model->getuserlist();
			$data1['notifications'] = $this->admin_model->getnotifications();
			$this->load->view('header/admin_header',$data);
			$this->load->view('header/admin_menu',$data1);
			$this->load->view('admin/add_project');
			$this->load->view('footer/footer');
		}
	}
	
	public function admin_tickets()
	{
		$data['url'] = $this->uri->segment(2);
		$data1['tickets'] = $this->admin_model->getticketslist();
		$data['notifications'] = $this->admin_model->getnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/admin_tickets_list',$data1);
		$this->load->view('footer/footer');
	}
	
	public function admin_login_check()
	{
		$data['url'] = $this->uri->segment(2);
		$admin_email = $this->input->post('admin_email');
		$admin_password = $this->input->post('admin_password');
		$response = $this->admin_model->admin_login_check($admin_email,$admin_password);
		if(!empty($response))
		{
			$sessiondata = array(
									'admin_name'  => $response->admin_name,
									'admin_email' => $admin_email,
									'a_id'		  => $response->a_id,
									'logged_in'   => TRUE
								);

			$this->session->set_userdata($sessiondata);
			$this->admin_dashbaord();
		}
		else
		{
			$data['error'] = 'error';
			$this->load->view('header/admin_header',$data);
			$this->load->view('admin/admin_login',$data);
			$this->load->view('footer/footer');
		}
	}
	
	public function view_project()
	{
		$data['url'] = $this->uri->segment(2);
		$pid = $this->uri->segment(3);
		$data['p_details'] = $this->admin_model->getproject($pid);
		$data['tickets'] = $this->admin_model->getprojecttickets($pid);
		$data['notifications'] = $this->admin_model->getnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/view_project');
		$this->load->view('footer/footer');
	}
	
	public function delete_project()
	{
		$p_id = $this->input->post('p_id');
		$result = $this->admin_model->deleteproject($p_id);
		echo $result;die;
	}
	
	public function edit_project()
	{
		if(isset($_POST['edit_project']))
		{
			$p_id						= $this->input->post('p_id');
			$data['p_type'] 			= $this->input->post('project_type');
			$data['p_category'] 		= $this->input->post('project_category');
			$data['p_inter_category'] 	= $this->input->post('project_inter_category');
			$data['p_code'] 			= $this->input->post('project_code');
			$data['p_title'] 			= $this->input->post('project_title');
			$data['p_startdate'] 		= $this->input->post('project_startdate');
			$data['p_enddate'] 			= $this->input->post('project_enddate');
			$data['p_status_id'] 		= $this->input->post('project_status');
			$data['p_percentage'] 		= $this->input->post('project_percentage');
			$data['p_duration'] 		= $this->input->post('project_duration');
			$data['p_description'] 		= $this->input->post('project_description');
			$data['p_cost'] 			= $this->input->post('project_cost');
			$data['p_client_id'] 		= $this->input->post('client_or_company_name');
			$filedata = '';

			  if(!empty($_FILES['project_files']['name']) && count(array_filter($_FILES['project_files']['name'])) > 0){ 
                $filesCount = count($_FILES['project_files']['name']); 
                for($i = 0; $i < $filesCount; $i++){ 
                    $_FILES['file']['name']     = $_FILES['project_files']['name'][$i]; 
                    $_FILES['file']['type']     = $_FILES['project_files']['type'][$i]; 
                    $_FILES['file']['tmp_name'] = $_FILES['project_files']['tmp_name'][$i]; 
                    $_FILES['file']['error']     = $_FILES['project_files']['error'][$i]; 
                    $_FILES['file']['size']     = $_FILES['project_files']['size'][$i]; 
                     
                    // File upload configuration 
                    $uploadPath = './files/'; 
                    $config['upload_path'] = $uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                    
                     
                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 
                     
                    // Upload file to server 
                    if($this->upload->do_upload('file')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $uploadData[$i]['file_name'] = $fileData['file_name']; 
						
						$filedata .= $uploadData[$i]['file_name'].',';
                    }else{  
                        $errorUploadType .= $_FILES['file']['name'].' | ';  
                    } 
                }
				$data['p_files'] = rtrim($filedata,',');
			  }
			$this->db->where('p_id',$p_id);
			$result = $this->db->update('projects',$data);
			if($result)
			{
				$this->admin_projects();
			}
			else
			{
				$data1['error'] = 'error';
			}
		}
		else
		{
			$data['url'] = $this->uri->segment(2);
			$pid = $this->uri->segment(3);
			$data['p_details'] = $this->admin_model->getproject($pid);
			$data['pi_category'] = $this->admin_model->getpicategory();
			$data['project_status'] = $this->admin_model->getprojectstatus();
			$data['users'] = $this->admin_model->getuserlist();
			$data['notifications'] = $this->admin_model->getnotifications();
			$this->load->view('header/admin_header',$data);
			$this->load->view('header/admin_menu',$data);
			$this->load->view('admin/edit_project');
			$this->load->view('footer/footer');
		}
	}
	
	public function admin_users()
	{
		$data['url'] = $this->uri->segment(2);
		$data['users'] = $this->admin_model->getuserlist();
		$data['notifications'] = $this->admin_model->getnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/admin_users');
		$this->load->view('footer/footer');
	}
	
	public function add_users()
	{
		if(isset($_POST['add_users']))
		{
			$data['user_name'] 			= $this->input->post('user_name');
			$data['user_contact'] 		= $this->input->post('user_contact');
			$data['user_organization'] 	= $this->input->post('user_organization');
			$data['user_email'] 		= $this->input->post('user_email');
			$rand=rand(1000,9999);
			$data['user_password']		= 'WTC'.$rand.'@1';
			$data['is_access']			= 1;
			$result = $this->db->insert('users',$data);
			if($result)
			{
				$to = $data['user_email'];
				$nameto = $data['user_name'];
				$subject = 'WTC - User Invite Email Notifications';
				$message = "<center>World Technology Corporate - User Invite Email Notifications</center><br />".
							"Hai ".$data['user_name'].' ! <br /> '.
							'Your WTC useremail : '.$data['user_email'].'<br />'.
							'Your WTC userpassword : '.$data['user_password'].'<br />'.
							'Using above credentials to access  https://customercrm.worldtechnologycorporate.com/';
				$altmess = '';
				$mailsent = $this->sendemail($to,$nameto,$subject,$message,$altmess);
				if($mailsent==1)
				{
					$this->admin_users();
				}
				else
				{
					$data1['error'] = 'error';
				}				
			}
			else
			{
				$data1['error'] = 'error';
			}
		}
		else
		{
			$data1['url'] = $this->uri->segment(2);
			$data1['notifications'] = $this->admin_model->getnotifications();
			$this->load->view('header/admin_header',$data1);
			$this->load->view('header/admin_menu',$data1);
			$this->load->view('admin/add_users');
			$this->load->view('footer/footer');
		}
	}
	
	public function delete_user()
	{
		$u_id = $this->input->post('u_id');
		$result = $this->admin_model->deleteuser($u_id);
		echo $result;die;
	}
	
	public function admin_logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
	
	public function view_ticket()
	{
		$data['url'] = $this->uri->segment(2);
		$t_id = $this->uri->segment(3);
		$data1['ticket'] = $this->admin_model->getticketview($t_id);
		$data1['ticketchat'] = $this->admin_model->getticketchat($t_id);
		$data['notifications'] = $this->admin_model->getnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/view_ticket',$data1);
		$this->load->view('footer/footer');
	}
	
	public function edit_users()
	{
		if(isset($_POST['edit_users']))
		{
			$data['user_name'] 			= $this->input->post('user_name');
			$data['user_email'] 		= $this->input->post('user_email');
			$data['user_contact'] 		= $this->input->post('user_contact');
			$data['user_organization'] 	= $this->input->post('user_organization');
			$u_id 	= $this->input->post('u_id');
			$this->db->where('u_id',$u_id);
			$result = $this->db->update('users',$data);
			if($result)
			{
				$this->admin_users();
			}
		}
		else
		{
			$data['url'] = $this->uri->segment(2);
			$u_id = $this->uri->segment(3);
			$data1['user'] = $this->admin_model->getuserview($u_id);
			$data['notifications'] = $this->admin_model->getnotifications();
			$this->load->view('header/admin_header',$data);
			$this->load->view('header/admin_menu',$data);
			$this->load->view('admin/edit_users',$data1);
			$this->load->view('footer/footer');
		}
		
	}
	
	public function edit_ticket()
	{
		$data['url'] = $this->uri->segment(2);
		$t_id = $this->uri->segment(3);
		$data1['ticket'] = $this->admin_model->getticketview($t_id);
		$data1['ticketchat'] = $this->admin_model->getticketchat($t_id);
		$data1['ticket_status'] = $this->admin_model->getticketstatus();
		$data['notifications'] = $this->admin_model->getnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/edit_ticket',$data1);
		$this->load->view('footer/footer');
	}
	
	public function ticketstatusupdate()
	{
		$data['t_status_id'] = $this->input->post('ticket_status');
		$t_id = $this->input->post('t_id');
		$this->db->where('t_id',$t_id);
		$response = $this->db->update('tickets',$data);
		$not['t_id'] 		= $t_id;
		$not['u_id'] 		= $this->input->post('u_id');
		$t_code				= $this->input->post('t_code');
		$user_name       	= $this->input->post('user_name');
		$user_email			= $this->input->post('user_email');
		$not['n_type'] 		= 'ticket_status';
		$not['n_data'] 		= 'Your Ticket : '.$t_code.' - Status Changed pls check!';
		$not['a_id']		= 1;
		if($response)
		{
			$result = $this->db->insert('notifications',$not);
			if($result)
			{
				$to = $user_email;
				$nameto = $user_name;
				$subject = 'WTC - Ticket Status Change Notifications';
				$message = "<center>World Technology Corporate - ".$t_code." Ticket Status Change Notifications</center><br />".
							"Hai ".$user_name.' ! <br /> '.
							'Your '.$t_code.' - Ticket status Changes pls check https://customercrm.worldtechnologycorporate.com/';
				$altmess = '';
				$mailsent = $this->sendemail($to,$nameto,$subject,$message,$altmess);
			}
			echo 1;die;
		}
		else
		{
			echo 0;die;
		}
	}
	
	public function ticketchat()
	{
		$data['t_response'] = $this->input->post('t_response');
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
			 $path = $upload_location.$filename;

			 // Upload file
			 if(move_uploaded_file($_FILES['tc_files']['tmp_name'][$index],$path)){
				$files_arr[] = $path;
			 }
		   }

		}
		$data['tc_files'] = implode(',',$files_arr);
		$response = $this->db->insert('ticket_chat',$data);
		$not['tc_id'] 		= $this->db->insert_id();
		$not['t_id'] 		= $data['t_id'];
		$not['u_id'] 		= $data['u_id'];
		$t_code				= $this->input->post('t_code');
		$user_name       	= $this->input->post('user_name');
		$user_email			= $this->input->post('user_email');
		$not['n_type'] 		= 'ticket_chat';
		$not['n_data'] 		= 'New chat added for '.$t_code.' by Admin';
		$not['a_id']		= 1;
		if($response)
		{
			$result = $this->db->insert('notifications',$not);
			if($result)
			{
				$to = $user_email;
				$nameto = $user_name;
				$subject = 'WTC - Ticket Chat Response Notifications';
				$message = "<center>World Technology Corporate - ".$t_code." Ticket Chat Response Notifications</center><br />".
							"Hai ".$user_name.' ! <br /> '.
							'Your '.$t_code.' - Responded from Admin pls check https://customercrm.worldtechnologycorporate.com/';
				$altmess = '';
				$mailsent = $this->sendemail($to,$nameto,$subject,$message,$altmess);
			}
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
		$data['notifications'] = $this->admin_model->getallnotifications();
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/allnotifications');
		$this->load->view('footer/footer');
	}
	
	public function calender()
	{
		$data['url'] = $this->uri->segment(2);
		$data['notifications'] = $this->admin_model->getallnotifications();
		$data['projects'] = $this->admin_model->projectevent();
		//print_r($data['projects']);die;
		$this->load->view('header/admin_header',$data);
		$this->load->view('header/admin_menu',$data);
		$this->load->view('admin/calender');
		$this->load->view('footer/footer');
	}
	
	public function sendemail($to,$nameto,$subject,$message,$altmess)
	{
		require_once APPPATH.'third_party/PHPMailer-master/src/Exception.php';
		require_once APPPATH.'third_party/PHPMailer-master/src/PHPMailer.php';
		require_once APPPATH.'third_party/PHPMailer-master/src/SMTP.php';
		
		$from  = "customercrm@customercrm.worldtechnologycorporate.com"; 
		$namefrom = "World Technology Corporate";
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->SMTPDebug = 0;
		$mail->CharSet = 'UTF-8';
		$mail->isSMTP();
		$mail->SMTPAuth   = true;
		$mail->Host   = "customercrm.worldtechnologycorporate.com";
		$mail->Port       = 465;
		$mail->Username   = "customercrm@customercrm.worldtechnologycorporate.com";
		$mail->Password   = "customercrm@2020";
		$mail->SMTPSecure = "ssl";
		$mail->setFrom($from,$namefrom);
		$mail->Subject  = $subject;
		$mail->isHTML();
		$mail->Body = $message;
		$mail->AltBody  = $altmess;
		$mail->addAddress($to, $nameto);
		if($mail->send())
		{
		  return 1;
		}
		else
		{
		  return 0;
		} 
	}
	
}
