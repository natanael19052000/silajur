<?php
class M_proposal extends CI_Model
{
    // Daftar Proposal
    public function getAll(){
        $this->db->select('*');
        $this->db->from('proposal');

        $query = $this->db->get()->result();
        return $query;
    }

    // Tambah Proposal
    public function create($data){
        return $this->db->insert('proposal', $data);
    }

    // Data Edit Proposal
    public function edit($id_proposal){
        return $this->db->get_where('proposal', ['id_proposal' => $id_proposal])->row();
    }

    // Delete Proposal
    public function delete($id_proposal){
        $row = $this->db->where('id_proposal', $id_proposal)->get('proposal')->row();
        unlink('assets/uploads/proposal/'.$row->dok_proposal);
        $this->db->where('id_proposal', $id_proposal);
        $this->db->delete('proposal');
        return true;     
    }

    // Daftar proposal halaman direksi
    public function direksi(){
        $this->db->select('proposal.*, akun.nama');
        $this->db->from('proposal');
        $this->db->join('akun', 'akun.nip=proposal.nip');

        $query = $this->db->get()->result();
        return $query;
    }

    // Detail Proposal Halaman Direksi
    public function dir_detail($id_proposal){
        $this->db->select('*');
        $this->db->from('proposal');
        $this->db->join('akun', 'akun.nip=proposal.nip');
        $this->db->where('id_proposal', $id_proposal);

        $query = $this->db->get()->row();
        return $query;
    }

    // Apabila Propposal Diterima
    public function diterima($data){
        return $this->db->insert('jurnal', $data);
    }

    // Apabila Proposal Ditolak
    public function catatan($data, $where){
        return $this->db->where($where)->update('proposal', $data);
    }

}
