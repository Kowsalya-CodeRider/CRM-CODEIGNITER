<?php

class Admin_model extends CI_Model {

        public function admin_login_check($admin_email,$admin_password)
        {
            $sql = "select a_id,admin_name from admin_login where admin_email='$admin_email' and admin_password='$admin_password'";
			$query = $this->db->query($sql);
			$result = $query->row();
			if(!empty($result))
			{
				return $result;
			}
			else
			{
				return 0;
			}
        }
		
		public function getprojectslist()
		{
			$sql = "select * from projects 
					left join project_status on project_status.ps_id=projects.p_status_id
					left join users on users.u_id=projects.p_client_id";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function getpicategory()
		{
			$sql = "select * from project_inter_category";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function getprojectstatus()
		{
			$sql = "select * from project_status";
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
		
		public function deleteproject($pid)
		{
			$sql = "delete from projects where p_id='$pid'";
			$query = $this->db->query($sql);
			if($query)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		
		public function getuserlist()
		{
			$sql = "select * from users";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function deleteuser($uid)
		{
			$sql = "delete from users where u_id='$uid'";
			$query = $this->db->query($sql);
			if($query)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		
		public function getticketslist()
		{
			$sql = "select * from tickets
					left join users on users.u_id=tickets.t_created_by
					left join ticket_status on ticket_status.ts_id=tickets.t_status_id";
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
		
		public function getuserview($u_id)
		{
			$sql = "select * from users where u_id='$u_id'";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function dashboardata()
		{
			$sql = "SELECT
					(select count(p_id) from projects) as total_projects,
					(select count(t_id) from tickets) as total_tickets,
					(select count(u_id) from users) as total_clients,
					(select sum(p_cost) from projects) as total_cost
					FROM
					projects";
			$query =  $this->db->query($sql);
			$result = $query->row();
			return $result;
		}
		
		public function getticketstatus()
		{
			$sql = "select * from ticket_status";
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
		
		public function getnotifications()
		{
			$sql = "select * from notifications where a_id=0 and t_view=0 order by n_id desc limit 5";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function getallnotifications()
		{
			$sql = "select * from notifications where a_id=0 and t_view=0 order by n_id desc";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			return $result;
		}
		
		public function projectevent()
		{
			$sql = "select p_startdate as start,p_enddate as end,p_title as title,'green' as 'color', '#fff' as 'textColor' from projects";
			$query = $this->db->query($sql);
			$result = $query->result_array();
			$sql1 = "select t_created_date as start,t_created_date as end,t_title as title,'red' as 'color', '#000' as 'textColor' from tickets";
			$query1 = $this->db->query($sql1);
			$result1 = $query1->result_array();
			$result2 = array();
			$result2 = array_merge($result,$result1);
			return json_encode($result2);
		}

}

?>