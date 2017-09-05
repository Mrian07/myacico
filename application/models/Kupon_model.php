<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kupon_model extends CI_Model {

    public $db_tabel = 'salesrule_coupon';
	public $db_tabel2 = 'coupon_send';
	public $db_tabel3 = 'salesrule';
	
	public function all_no_used()
    {

		$ambil = $this->db->select('*')
                        ->from($this->db_tabel)  
						->join($this->db_tabel3, 'salesrule.rule_id = salesrule_coupon.rule_id', 'left')
						->where('salesrule_coupon.times_used !=','1')		
						->order_by('salesrule_coupon.coupon_id', 'DESC')
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function cari($coupon_id)
    {
        return $this->db->where('salesrule_coupon.coupon_id', $coupon_id)
						->join($this->db_tabel3, 'salesrule.rule_id = salesrule_coupon.rule_id', 'left')
                        ->limit(1)
                        ->get($this->db_tabel)
                        ->row();
    }
	
	public function cari_kode($code)
    {
		$ambil = $this->db->select('*')
                        ->from($this->db_tabel2)  
						->where('code',$code)		
                        ->get()
                        ->result();	
        return $ambil;  
    }
	
	public function kirim()
    {
		$date_time = gmdate("Y-m-d H:i:s", time()+60*60*7); 
        $data = array(
            'submit_date' => $date_time,
			'code' => $this->input->post('code'),
			'email' => $this->input->post('email'),
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
	
	
	public function kupon_no_used()
    {
		$this->db->select('*')
				->from($this->db_tabel);	
		$total_kupon = $this->db->count_all_results();
		
		$this->db->select('*')
				->from($this->db_tabel2);	
		$total_send = $this->db->count_all_results();
		
		return  $total_kupon-$total_send;
					
    }

}
/* 	
Author: Lalang Gumirang 
Website: lalangdesign.com
*/