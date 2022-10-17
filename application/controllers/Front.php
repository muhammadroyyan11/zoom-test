<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data['title'] = "Room Zoom";
        $data['room'] = $this->base->get('room')->result();
        $this->template->load('tempfront', 'front/zoom', $data);
    }

  
}
