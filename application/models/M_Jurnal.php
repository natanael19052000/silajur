<?php
class M_jurnal extends CI_Model
{

    // Ambil data JOIN Proposal dan Jurnal
    public function getAll(){
        $this->db->select('*');
        $this->db->from('jurnal');
        $this->db->join('proposal', 'proposal.id_proposal=jurnal.id_proposal');

        $query = $this->db->get()->result();
        return $query;
    }

    // Upload Jurnal
    public function upload($where,$data){
        return $this->db->where($where)->update('jurnal', $data);
    }

    // Ambil data Proposal
    public function proposal($id_proposal){
        return $this->db->get_where('proposal', ['id_proposal' => $id_proposal])->row();
    }
    // Ambil data Proposal
    public function datajurnal($id_proposal){
        return $this->db->get_where('jurnal', ['id_proposal' => $id_proposal])->row();
    }

    // Ambil data Jurnal
    public function jurnal($id_proposal){
        $this->db->select('*');
        $this->db->from('jurnal');
        $this->db->join('akun', 'akun.nip=jurnal.nip_jurnal');
        $this->db->where('id_proposal', $id_proposal);

        $query = $this->db->get()->row();
        return $query;
    }

    // Delete Proposal
    public function delete($where){
        return $this->db->where($where)->delete('proposal');
    }

    // JOIN GetAll dengan N/A
    public function direksi(){
        $this->db->select('*');
        $this->db->from('jurnal');
        $this->db->join('proposal', 'proposal.id_proposal=jurnal.id_proposal');
        $this->db->where('dok_jurnal !=', NULL);
        $query = $this->db->get()->result();
        return $query;
    }

    // Apabila Proposal Ditolak
    public function catatan($data, $where)
    {
        return $this->db->where($where)->update('jurnal', $data);
    }

    // JOIN data Proposal dan Akun
    public function dir_detail($id_proposal){
        $this->db->select('*');
        $this->db->from('proposal');
        $this->db->join('akun', 'akun.nip=proposal.nip');
        $this->db->where('id_proposal', $id_proposal);

        $query = $this->db->get()->row();
        return $query;
    }

    // LAPORAN
    public function laporan(){
        $this->db->select('*');
        $this->db->from('jurnal');
        $this->db->join('proposal', 'proposal.id_proposal=jurnal.id_proposal');
        $this->db->where(['status_jurnal' => '1']);

        $query = $this->db->get()->result();
        return $query;
    }
}
