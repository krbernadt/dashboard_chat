<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chatbot_model extends CI_Model
{
    public function get_replies($message)
    {
        $sql = "SELECT * FROM tabel_cb where isi_cb='$message'";
        $query = $this->db->query($sql);
        return $query->result();
        $this->db->close();
    }
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_cb', $data['id_cb']);
        $this->db->update($table, $data);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
