<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sosmed extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("sosmed_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["sosmed"] = $this->sosmed_model->getAll();
        $this->load->view("admin/sosmed/list", $data);
    }

    public function add()
    {
        $sosmed = $this->sosmed_model;
        $validation = $this->form_validation;
        $validation->set_rules($sosmed->rules());

        if ($validation->run()) {
            $sosmed->save();
            $this->session->set_flashdata('success', 'Data Sosmed Berhasil ditambahkan');
            redirect(site_url('admin/sosmed'));
        }

        $this->load->view("admin/sosmed/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/sosmed');
       
        $sosmed = $this->sosmed_model;
        $validation = $this->form_validation;
        $validation->set_rules($sosmed->rules());
        
        if ($validation->run()) {
            $sosmed->update();
            $this->session->set_flashdata('success', 'Data Sosmed Berhasil dirubah');            
            redirect(site_url('admin/sosmed'));
            
        }

        $data["sosmed"] = $sosmed->getById($id);
        if (!$data["sosmed"]) show_404();
        
        $this->load->view("admin/sosmed/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->sosmed_model->delete($id)) {
            redirect(site_url('admin/sosmed'));
        }
    }
}