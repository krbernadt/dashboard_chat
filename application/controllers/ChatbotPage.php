<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ChatbotPage extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('chatbot_model');
    }

    public function index()
    {

        $data['title'] = 'Chatbot';
        $data['chatbot'] = $this->chatbot_model->get_data('tabel_cb')->result();


        $this->load->view('templates/chatbotPage', $data);
    }
}
