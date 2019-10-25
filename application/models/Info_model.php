<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Info_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'icon',
            'label' => 'Icon',
            'rules' => 'required'],

            ['field' => 'value',
            'label' => 'Value',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->get('info');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('info', ["info_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->info_id = uniqid();
        $this->judul   = $post["judul"];
        $this->icon    = $post["icon"];
        $this->value   = $post["value"];
        $this->db->insert('info', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->info_id = $post["id"];
        $this->judul   = $post["judul"];
        $this->icon    = $post["icon"];
        $this->value   = $post["value"];
        $this->db->update('info', $this, array('info_id' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('info', array("info_id" => $id));
    }

}