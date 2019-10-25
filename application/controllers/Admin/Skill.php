<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("skill_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["skill"] = $this->skill_model->getAll();
        $this->load->view("admin/skill/list", $data);
    }

    public function add()
    {
        $skill = $this->skill_model;
        $validation = $this->form_validation;
        $validation->set_rules($skill->rules());

        if ($validation->run()) {
            $skill->save();
            $this->session->set_flashdata('success', 'Data Skill Berhasil ditambahkan');
            redirect(site_url('admin/skill'));
        }

        $this->load->view("admin/skill/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/skill');
       
        $skill = $this->skill_model;
        $validation = $this->form_validation;
        $validation->set_rules($skill->rules());
        
        if ($validation->run()) {
            $skill->update();
            $this->session->set_flashdata('success', 'Data Skill Berhasil dirubah');            
            redirect(site_url('admin/skill'));
            
        }

        $data["skill"] = $skill->getById($id);
        if (!$data["skill"]) show_404();
        
        $this->load->view("admin/skill/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->skill_model->delete($id)) {
            redirect(site_url('admin/skill'));
        }
    }
}