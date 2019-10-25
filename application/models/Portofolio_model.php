<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio_model extends CI_Model
{
    private $_table = "portofolio";

    public $portofolio_id;
    public $nama;
    public $katagori;
    public $link;
    public $foto = "kkk.jpg";
    public $perubahan;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'katagori',
            'label' => 'Katagori',
            'rules' => 'required'],

            ['field' => 'link',
            'label' => 'Link',
            'rules' => '']
        ];
    }

    public function getAll()
    {
        return $this->db->get('portofolio')->result();
    }
    public function getKatagori()
    {
        $this->db->select('portofolio.katagori');
		$this->db->distinct();
		$hasil = $this->db->get('portofolio'); 
		return $hasil->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('portofolio', ["portofolio_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->portofolio_id = uniqid();
        $this->nama     = $post["nama"];
        $this->katagori = $post["katagori"];
        $this->link     = $post["link"];
        $this->foto     = $this->_uploadImage();
        $this->db->insert('portofolio', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->portofolio_id = $post["id"];
        $this->nama     = $post["nama"];
        $this->katagori = $post["katagori"];
        $this->link     = $post["link"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update('portofolio', $this, array('portofolio_id' => $post['id']));
        
    }

    public function delete($id)
    {
        return $this->db->delete('portofolio', array("portofolio_id" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './assets/img/portofolio/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['file_name']            = $this->portofolio_id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('foto')) {
        return $this->upload->data("file_name");
    }
    
    return "kkk.jpg";
    }
}