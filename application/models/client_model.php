<?php

class Client_model extends CI_Model {

        public function client_login_check($user_email,$user_password)
        {
            $sql = "select u_id,user_name,user_organization from users where user_email='$user_email' and user_password='$user_password' and is_access='1'";
			$query = $this->db->query($sql);
			$result = $query->row();
			if($result)
			{
				$u_id = $result->u_id;
				$sql1 = "select p_id,p_enddate from projects where p_client_id=$u_id";
				$query1 = $this->db->query($sql1);
				$result1 = $query1->row();
				$enddate = $result1->p_enddate;
				$today = date('Y-m-d');
				$test = strtotime($enddate) - strtotime($today);
				if($test<0)
				{
					$sql2 = "update users set is_access=0 where u_id='$u_id'";
					$query2 = $this->db->query($sql2);
					if($query2)
					{
						return 0;
					}
				}
				else
				{
					return $result;
				}
			}
			else
			{
				return 0;
			}
        }
		
		public function getuserprojects($u_id)
		{
			$sql = "select * from projects 
					left join project_status on project_status.ps_id=projects.p_status_id					
					where projects.p_client_id='$u_id'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}		
		
		public function getproject($pid)
		{
			$sql = "select * from projects 
					left join project_status on project_status.ps_id=projects.p_status_id 
					left join project_inter_category on project_inter_category.pi_id=projects.p_category
					where p_id='$pid'";
			$query = $this->db->query($sql);
			$result = $query->row();
			return $result;
		}
		
		public function getallproject()
		{
			$sql = "select p_id,p_title from projects";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function gettickets($u_id)
		{
			$sql = "select * from tickets 
					left join ticket_status on ticket_status.ts_id=tickets.t_id
					where t_created_by='$u_id'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function getticketview($t_id)
		{
			$sql = "select * from tickets 
					left join ticket_status on ticket_status.ts_id=tickets.t_id
					left join projects on projects.p_id=tickets.p_id
					left join users on users.u_id=tickets.t_created_by
					where t_id='$t_id'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function getprojecttickets($pid)
		{
			$sql = "select * from tickets 
					left join ticket_status on ticket_status.ts_id=tickets.t_id
					left join users on users.u_id=tickets.t_created_by
					where p_id='$pid'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function getticketchat($t_id)
		{
			$sql = "select * from ticket_chat where t_id='$t_id'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function getnotifications($u_id)
		{
			$sql = "select * from notifications where a_id=1 and t_view=0 and u_id='$u_id' order by n_id desc limit 5";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		public function getallnotifications($u_id)
		{
			$sql = "select * from notifications where a_id=1 and t_view=0 and u_id='$u_id' order by n_id desc";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
}

?>