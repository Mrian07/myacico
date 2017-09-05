<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Quotation_model extends CI_Model {

    public $db_tabel = 'my_quotation';
	public $db_tabel2 = 'my_quotation_feedback';
	
	public function all()
    {
		$ambil = $this->db->select('*')
                        ->from($this->db_tabel)  
						->order_by('quotation_id', 'DESC')
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function all_by_user($username)
    {

		$ambil = $this->db->select('*')
						->where('username',$username)
                        ->from($this->db_tabel)  
						->order_by('quotation_id', 'DESC')
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function cari_by_user($username)
    {
		$ambil = $this->db->select('*')
                        ->from($this->db_tabel)  
						->where('username',$username)		
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function cari_by_id($quotation_id)
    {
		$ambil = $this->db->select('*')
                        ->from($this->db_tabel)  
						->where('quotation_id',$quotation_id)		
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function input($quotation_id,$quotation_feedback_file)
    {		
		$date_time = gmdate("Y-m-d H:i:s", time()+60*60*7); 
		$data = array(
			'quotation_feedback_submit_date' => $date_time,
			'quotation_feedback_file' => $quotation_feedback_file,
			'quotation_id' => $quotation_id
        );
        $this->db->insert($this->db_tabel2, $data);

        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function total()
    {
        return $this->db->count_all($this->db_tabel);
	}	
	
	public function cari($quotation_id)
    {
        return $this->db->where('quotation_id', $quotation_id)
                        ->limit(1)
                        ->get($this->db_tabel)
                        ->row();
    }

	public function delete($quotation_id)
    {
		$this->db->where('quotation_id', $quotation_id)->delete($this->db_tabel);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function cari_f_id($quotation_id)
    {
		$ambil = $this->db->select('*')
                        ->from($this->db_tabel2)  
						->where('quotation_id',$quotation_id)		
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function cari_id($quotation_feedback_id)
    {
		$ambil = $this->db->select('*')
                        ->from($this->db_tabel2)  
						->where('quotation_feedback_id',$quotation_feedback_id)		
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function delete_feedback($quotation_feedback_id)
    {
		$this->db->where('quotation_feedback_id', $quotation_feedback_id)->delete($this->db_tabel2);
        if($this->db->affected_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
	
	public function all_quota()
    {
		$this->db->select('*')
				->from($this->db_tabel);	
		$total = $this->db->count_all_results();
		
		
		return  $total;
					
    }
}
/* 	
Author: Lalang Gumirang 
Website: lalangdesign.com
*/