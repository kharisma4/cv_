<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Experiencce extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("experiencce_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["experiencce"] = $this->experiencce_model->getAll();
        $this->load->view("admin/experiencce/list", $data);
    }

    public function add()
    {
        $experiencce = $this->experiencce_model;
        $validation = $this->form_validation;
        $validation->set_rules($experiencce->rules());

        if ($validation->run()) {
            $experiencce->save();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil ditambahkan');
            redirect(site_url('admin/experiencce'));
        }

        $this->load->view("admin/experiencce/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/experiencce');
       
        $experiencce = $this->experiencce_model;
        $validation = $this->form_validation;
        $validation->set_rules($experiencce->rules());
        
        if ($validation->run()) {
            $experiencce->update();
            $this->session->set_flashdata('success', 'Data Pengalaman Berhasil dirubah');            
            redirect(site_url('admin/experiencce'));
            
        }

        $data["experiencce"] = $experiencce->getById($id);
        if (!$data["experiencce"]) show_404();
        
        $this->load->view("admin/experiencce/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->experiencce_model->delete($id)) {
            redirect(site_url('admin/experiencce'));
        }
    }
}