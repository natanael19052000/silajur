<?php
class M_proposal extends CI_Model{
    
    
    public function getAll() {
    $this->db->select('*'); 
    $this->db->from('proposal');
        
    $query=$this->db->get()->result();
    return $query;
    }

    public function create($data) {
        return $this->db->insert('proposal', $data);
    }

    public function edit($id_Proposal){
        return $this->db->get_where('proposal', ['id_proposal' => $id_proposal])->row();
    }

    public function update($data, $where){
        return $this->db->where($where)->replace('proposal', $data);
    }

	public function delete($where) {
		return $this->db->where($where)->delete('proposal');
	}

}