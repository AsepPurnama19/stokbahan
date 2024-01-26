<?php
class MBahan extends CI_Model
{
    public $table = 'tbbahan';

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // get all data
    function get_all()
    {
        $this->db->order_by('id_bahan', 'DESC');
        return $this->db->get($this->table)->result();
    }

    function delete($id)
    {
        $this->db->where('id_bahan', $id);
        $this->db->delete($this->table);
    }    

    function get_by_id($id)
    {
        $this->db->where('id_bahan', $id);
        return $this->db->get($this->table)->row();
    }

    function update($id, $data)
    {
        $this->db->where('id_bahan', $id);
        $this->db->update($this->table, $data);
    }
}
