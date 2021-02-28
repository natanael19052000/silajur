<?php
class M_akun extends CI_Model{
    
    // Ambil semua data di akun kecuali divisi IT
    public function getAll(){
    $this->db->select('*'); 
    $this->db->from('akun');
	$this->db->where('jabatan !=','divisi it');
    
    $query=$this->db->get()->result();
    return $query;
    }

    // Simpan Akun ke database
    public function create($data){
        return $this->db->insert('akun', $data);
    }

    // Menampilkan data akun di detail
    public function edit($nip){
        return $this->db->get_where('akun', ['nip' => $nip])->row();
    }

    // Update akun
    public function update($data, $where){
        return $this->db->where($where)->replace('akun', $data);
    }

    // delete akun
	public function delete($nip) {
		return $this->db->where('nip', $nip)->delete('akun');
	}

}