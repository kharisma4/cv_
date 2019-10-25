<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("portofolio_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["portofolio"] = $this->portofolio_model->getAll();
        $this->load->view("admin/portofolio/list", $data);
    }

    public function add()
    {
        $portofolio = $this->portofolio_model;
        $validation = $this->form_validation;
        $validation->set_rules($portofolio->rules());

        if ($validation->run()) {
            $portofolio->save();
            $this->session->set_flashdata('success', 'Data Portofolio Berhasil ditambahkan');
            redirect(site_url('admin/portofolio'));
        }

        $this->load->view("admin/portofolio/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/portofolio');
       
        $portofolio = $this->portofolio_model;
        $validation = $this->form_validation;
        $validation->set_rules($portofolio->rules());
        
        if ($validation->run()) {
            $portofolio->update();
            $this->session->set_flashdata('success', 'Data Portofolio Berhasil dirubah');            
            redirect(site_url('admin/portofolio'));
            
        }

        $data["portofolio"] = $portofolio->getById($id);
        if (!$data["portofolio"]) show_404();
        
        $this->load->view("admin/portofolio/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->portofolio_model->delete($id)) {
            redirect(site_url('admin/portofolio'));
        }
    }
}