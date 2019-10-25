<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model
{
    private $_table = "user";

    public function login()
    {
        $post = $this->input->post();

        $this->db->select('user.id,user.uname,user.pass');
        $this->db->where('user.uname', $post['uname']);
        $login = $this->db->get('user')->row_array();  

        if ($login) {            
            if (md5($post["pass"], $login['pass'])) {
                $data =[
                    'uname'         => $login['uname'],
                    'id'   => $login['id']
                ];
                $this->session->set_userdata($data);
                redirect('admin/view');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah!</div>');
                //redirect('login');
                echo "salah";
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email tidak terdaftar!</div>');
            //redirect('login');
                echo "salah!!";
        }

    }
    public function register()
    {
        $post = $this->input->post();

            $this->register_id  = uniqid();
            $this->nama         = htmlspecialchars($post["nama"]);
            $this->email        = htmlspecialchars($post["email"]);
            $this->password     = password_hash($post["password"], PASSWORD_DEFAULT);

            $tambah_member = $this->db->insert($this->_table, $this);
            if ($tambah_member) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pendaftaran Berhasil, Silahkan Login</div>');
                redirect('login');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pendaftaran Gagal</div>');
                redirect('register');
            } 
    } 
}