<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'place',
            'label' => 'Place',
            'rules' => 'required'],

            ['field' => 'date',
            'label' => 'Date',
            'rules' => 'required'],

            ['field' => 'address',
            'label' => 'Address',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'location',
            'label' => 'Location',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required'],

            ['field' => 'religion',
            'label' => 'Religion',
            'rules' => 'required'],

            ['field' => 'resume',
            'label' => 'Resume',
            'rules' => 'required'],

            ['field' => 'sex',
            'label' => 'Sex',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get('biodata')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('biodata', ["biodata_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->biodata_id = uniqid();
        $this->name     = $post["name"];
        $this->place    = $post["place"];
        $this->date     = $post["date"];
        $this->address  = $post["address"];
        $this->moto     = $post["moto"];
        $this->email    = $post["email"];
        $this->location = $post["location"];
        $this->phone    = $post["phone"];
        $this->religion = $post["religion"];
        $this->resume   = $post["resume"];
        $this->sex      = $post["sex"];
        $this->foto     = $this->_uploadImage();
        $this->db->insert('biodata', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->biodata_id = $post["id"];
        $this->name     = $post["name"];
        $this->place    = $post["place"];
        $this->date     = $post["date"];
        $this->address  = $post["address"];
        $this->moto     = $post["moto"];
        $this->email    = $post["email"];
        $this->location = $post["location"];
        $this->phone    = $post["phone"];
        $this->religion = $post["religion"];
        $this->resume   = $post["resume"];
        $this->sex      = $post["sex"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update('biodata', $this, array('biodata_id' => $post['id']));
        
    }

    public function delete($id)
    {
        return $this->db->delete('biodata', array("biodata_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/about/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->biodata_id;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }
}