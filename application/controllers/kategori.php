<?php

class Kategori extends CI_Controller
{
    public function sarapan()
    {
        $data['sarapan'] = $this->model_kategori->data_sarapan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sarapan', $data);
        $this->load->view('templates/footer');
    }

    public function food()
    {
        $data['food'] = $this->model_kategori->data_food()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('food', $data);
        $this->load->view('templates/footer');
    }

    public function kue()
    {
        $data['kue'] = $this->model_kategori->data_kue()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kue', $data);
        $this->load->view('templates/footer');
    }

    public function minuman()
    {
        $data['minuman'] = $this->model_kategori->data_minuman()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman', $data);
        $this->load->view('templates/footer');
    }
}
