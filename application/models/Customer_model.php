<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Customer_model extends CI_Model {

    public $db_tabel = 'my_customer';
	
	public function all()
    {
		return $this->db->select('*')
                        ->from($this->db_tabel)	
						->order_by('customer_id', 'ASC')
                        ->get()->result();
    }
	
	public function input()
    {	
		$pass = MD5($this->input->post('password'));
		$data_group = array(
			'username' => $this->input->post('username'),
            'password' => $pass,
			'customer_group' => $this->input->post('customer_group'),
			'customer_email' => $this->input->post('customer_email'),
        );
        $this->db->insert($this->db_tabel, $data_group);
		
		 if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
		
    }
	
	public function cari($customer_id)
    {
        return $this->db->where('customer_id', $customer_id)
                        ->limit(1)
                        ->get($this->db_tabel)
                        ->row();
    }
	
	public function edit($customer_id)
    {
		if($this->input->post('password'))
		{
			$new_pass=md5($this->input->post('password'));
			
			
			$data_update = array(
				'password' => $new_pass,
			);
			
			 // update db
			$this->db->where('customer_id', $customer_id);
			$this->db->update($this->db_tabel, $data_update);
		}
		
        $data_update = array( 
			'customer_group'=>$this->input->post('customer_group'),
            'customer_email'=>$this->input->post('customer_email'),
        );

        // update db
        $this->db->where('customer_id', $customer_id);
		if($this->db->update($this->db_tabel, $data_update))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function delete($customer_id)
    {
		$this->db->where('customer_id', $customer_id)->delete($this->db_tabel);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	/*
	
	public function get_menu($url_admin_menu)
    {
		return $this->db->select('*')
						->where('url_admin_menu', $url_admin_menu)
                        ->from($this->db_tabel2)	
                        ->get()->result();
    }
	
	public function all_group()
    {
		
		return $this->db->select('*')
                        ->from($this->db_tabel)	
                        ->order_by('nm_group', 'asc')
                        ->get()->result();
    }

	
	
	
	
	public function edit($id_group)
    { 
        $data_update = array(            
			'id_parent_group' => $this->input->post('id_parent_group'),
            'nm_group'=>$this->input->post('nm_group')
        );

        // update db
        $this->db->where('id_group', $id_group);		
		if( $this->db->update($this->db_tabel, $data_update))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	

	public function tree($id_parent_group)
    {
		return $ambil = $this->db->select('*')
                        ->from($this->db_tabel)	
						->where('id_parent_group', $id_parent_group)
						->order_by('id_group', 'ASC')
                        ->get()
                        ->result();	
    }
	
	public function input_priv($id_group,$id_admin_menu)
    {	
		$data_group = array(
            'id_admin_menu' => $id_admin_menu,
			'id_group' => $id_group,
			'active_privilege' => 'N'
        );
        $this->db->insert($this->db_tabel4, $data_group);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function edit_priv($id_group,$id_admin_menu,$active_privilege)
    { 
	
		//cek Active
		$this->db->select('*')
				->from($this->db_tabel4)	
				->where('id_group', $id_group)
				->where('id_admin_menu', $id_admin_menu);
		$jml = $this->db->count_all_results();
		
		if($jml){
	
			$data_update = array(            
				'active_privilege' => $active_privilege
			);

			// update db
			$this->db->where('id_admin_menu', $id_admin_menu)->where('id_group', $id_group);		
			$this->db->update($this->db_tabel4, $data_update);
		
		}else{
			
			$data_group = array(
            'id_admin_menu' => $id_admin_menu,
			'id_group' => $id_group,
			'active_privilege' => $active_privilege
			);
			$this->db->insert($this->db_tabel4, $data_group);
		
		}
    }
	
	public function reset_priv($id_group)
    { 
        $data_update = array(            
			'active_privilege' => 'N'
        );

        // update db
        $this->db->where('id_group', $id_group);		
		if( $this->db->update($this->db_tabel4, $data_update))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function cek_priv($id_group,$id_admin_menu)
    {
		$this->db->select('*')
				->from($this->db_tabel4)	
				->where('active_privilege', 'Y')
				->where('id_group', $id_group)
				->where('id_admin_menu', $id_admin_menu);
		return $this->db->count_all_results();
    }
	
	public function cek_eksis($id_group)
    {
		$this->db->select('*')
				->from($this->db_tabel4)	
				->where('id_group', $id_group);
		return $this->db->count_all_results();
	}	*/
}
/* 	
Author: Lalang Gumirang 
Email: lalanggumirang@yahoo.com
*/