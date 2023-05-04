<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Command extends CI_Controller
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        parent::__construct();
    }

    public function quickReply()
    {

        $message = json_encode($_POST['message']);

        $sql = "SELECT * from tabel_cb where isi_cb=$message ";
        $query = $this->db->query($sql);
        foreach ($query->result() as $row) {
            $replies = $row->reply_cb;
        }

        if ($query->result() != null) {
            $resp = array(
                'status' => 'success',
                'replies' => $replies
            );
            echo json_encode($resp);
        } else {
            $msg = 'Solutions not found, please contact customer service for further procedures';
            $resp = array(
                'status' => 'error',
                'replies' => $msg
            );
            echo json_encode($resp);
        }
    }

    public function chatReply()
    {
    }
}
