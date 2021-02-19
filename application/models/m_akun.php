<?php
class M_akun extends CI_Model{
    
    
    public function getAll() {
    $this->db->select('*'); 
    $this->db->from('akun');
	$this->db->where('jabatan !=','divisi it');
        
    $query=$this->db->get()->result();
    return $query;
    }

    public function create($data) {
        return $this->db->insert('akun', $data);
    }

    public function edit($nip){
        return $this->db->get_where('akun', ['nip' => $nip])->row();
    }

    public function update($data, $where){
        return $this->db->where($where)->replace('akun', $data);
    }

	public function delete($nip) {
		return $this->db->where('nip', $nip)->delete('akun');
	}

}