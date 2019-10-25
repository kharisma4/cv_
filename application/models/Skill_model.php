<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'icon',
            'label' => 'Icon',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('skill');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('skill', ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama         = $post["nama"];
        $this->icon         = $post["icon"];
        $this->keterangan   = $post["keterangan"];
        $this->db->insert('skill', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->nama         = $post["nama"];
        $this->icon         = $post["icon"];
        $this->keterangan   = $post["keterangan"];
        $this->db->update('skill', $this, array('id' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("id" => $id));
    }

}