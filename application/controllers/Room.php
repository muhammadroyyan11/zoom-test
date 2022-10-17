<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Room extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data['title'] = "Room Zoom";
        $data['room'] = $this->base_model->get('room')->result();
        $this->template->load('template', 'room/data', $data);
    }

    public function add()
    {
        $data['title'] = "Tambah Room";
        $this->template->load('template', 'room/add', $data);
    }

    public function prosesAdd()
    {
        $input = $this->input->post(null, true);
            $input_data = [
                'name'          => $input['name'],
                'host_key'      => $input['hostkey'],
                'link'          => $input['link']
            ];
            if ($this->base_model->insert('room', $input_data)) {
                set_pesan('data berhasil disimpan.');
                redirect('room');
            } else {
                set_pesan('data gagal disimpan', false);
                redirect('room/add');
            }
    }

    public function edit()
    {
        
    }

  
}
