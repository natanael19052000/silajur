<?php
class M_jurnal extends CI_Model
{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('jurnal');
        $this->db->join('proposal', 'proposal.id_proposal=jurnal.id_proposal');

        $query = $this->db->get()->result();
        return $query;
    }

    public function upload($where,$data){
        return $this->db->where($where)->update('jurnal', $data);
    }

    public function proposal($id_proposal){
        return $this->db->get_where('proposal', ['id_proposal' => $id_proposal])->row();
    }
    public function jurnal($id_proposal){
        return $this->db->get_where('jurnal', ['id_proposal' => $id_proposal])->row();
    }

    public function delete($where)
    {
        return $this->db->where($where)->delete('proposal');
    }

    public function direksi()
    {
        $this->db->select('proposal.*, akun.nama');
        $this->db->from('proposal');
        $this->db->join('akun', 'akun.nip=proposal.nip');

        $query = $this->db->get()->result();
        return $query;
    }

    public function dir_detail($id_proposal)
    {
        $this->db->select('*');
        $this->db->from('proposal');
        $this->db->join('akun', 'akun.nip=proposal.nip');
        $this->db->where('id_proposal', $id_proposal);

        $query = $this->db->get()->row();
        return $query;
    }
}
