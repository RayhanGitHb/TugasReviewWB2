<?php
class M_data extends CI_Model{
	
	public $harga;

    public function proses($data)
    {
        if ($data == "NIKE") {
            $this->harga = 375000;
        } elseif ($data == 'ADIDAS') {
            $this->harga = 300000;
        } elseif ($data == "KICKERS") {
            $this->harga = 250000;
        } elseif ($data == "EIGER") {
            $this->harga = 275000;
        } else {
            $this->harga = 400000;
        }

        return $this->harga;
    }
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
		
	}
	
	function tampil_data(){
		return $this->db->get('transaksi');
	}

	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}

?>