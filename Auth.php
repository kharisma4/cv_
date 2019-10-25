<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model
{
    private $_table = "member";

    public function login()
    {
        $post = $this->input->post();

        $this->db->select('member.register_id, member.upline, member.email, member.role_id, member.password, member.is_active, member.ref_code, profile.wa');
        $this->db->join('profile', 'profile.register_id=member.register_id');
        $this->db->where('member.email', $post['email']);
        $member = $this->db->get('member')->row_array();  

       // $member = $this->db->get_where($this->_table, array('email' => $post['email']))->row_array();

        if ($member) {            
            if (password_verify($post["password"], $member['password'])) {
                $data =[
                    'email'         => $member['email'],
                    'role_id'       => $member['role_id'],
                    'ref_code'      => $member['ref_code'],
                    'register_id'   => $member['register_id']
                ];
                $this->session->set_userdata($data);
                if ($member['is_active'] != 1) {
                    if(!preg_match('/[^+0-9]/',trim($member['wa']))){
                    // cek apakah no hp karakter 1-3 adalah +62
                        if(substr(trim($member['wa']), 0, 3) == '+62'){
                            $wa = '62'.substr(trim($member['wa']), 1);
                        }
                        // cek apakah no hp karakter 1 adalah 0
                        elseif(substr(trim($member['wa']), 0, 1)=='0'){
                            $wa = '62'.substr(trim($member['wa']), 1);
                        }
                    }
                    $str = "https://wa.me/".$wa."?text=Hallo *".$member['upline']."*, Saya downline anda dengan username ".$member['ref_code'].". Mohon segera aktivasi akun saya. Trimakasih";
                    $ganti = str_replace(" ", "%20", $str);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Lengkapi data Profile agar akun anda bisa diaktifkan oleh upline anda!! 
                        <a href="' . $ganti . '" target="_blank" class="btn btn-success " style="color: white;text-decoration: none;">Chat ' . $member['upline'] . '</a></div>');
                    redirect('profile');
                }
                redirect('member');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah!</div>');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email tidak terdaftar!</div>');
            redirect('login');
        }

    }
    public function register()
    {
        $post = $this->input->post();

        $ref = htmlspecialchars(strtolower($this->input->post('ref', true)));
        $status = 1;
        //echo $ref;
        $this->db->select('register_id');
        $this->db->where('member.is_active', $status);
        $this->db->where('member.ref_code', $ref);
        $referal = $this->db->get('member')->row_array();  
        //var_dump($referal);
        //$referal = $this->db->get_where($this->_table, ['ref_code' => $ref])->row_array();

        if ($referal['register_id'] != NULL) {
            $reg_id         = uniqid();
            $alamat_id      = uniqid();
            $bank_member_id = uniqid();
            $profil_id      = uniqid();

            $this->register_id  = $reg_id;
            $this->upline       = htmlspecialchars(strtolower($post["ref"]));
            $this->ref_code     = htmlspecialchars(strtolower($post["username"]));
            $this->nama         = htmlspecialchars($post["nama"]);
            $this->email        = htmlspecialchars($post["email"]);
            $this->password     = password_hash($post["password"], PASSWORD_DEFAULT);
            $this->role_id      = 2;
            $this->is_active    = 0;            

            $tambah_member = $this->db->insert($this->_table, $this);
            //var_dump($tambah1);
            if ($tambah_member) {
                
                $data = [
                    'profile_id'        => $profil_id,
                    'register_id'       => $reg_id,
                    'alamat_id'         => $alamat_id,
                    'bank_member_id'    => $bank_member_id,
                    'foto_ktp'          => 'ktp.jpg',
                    'foto_profil'       => 'default.jpg'
                ];
                $alamat = [
                    'alamat_id' => $alamat_id
                ];
                $bank_member = [
                    'bank_member_id' => $bank_member_id
                ];

                $tambah_alamat  = $this->db->insert('alamat', $alamat);
                if ($tambah_alamat) {
                    //$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat Pendaftaran Berhasil!</div>');
                    //redirect('login'); 

                    $bank_member_id = $this->db->insert('bank_member', $bank_member);
                    if ($bank_member_id) {
                                
                        $tambah_profil  = $this->db->insert('profile', $data);
                        if ($tambah_profil) {
                            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat Pendaftaran Berhasil!</div>');
                            redirect('login');                      
                        }else{                      
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pendaftaran Gagal! kode[profil]</div>');
                            redirect('register');
                        }
                    }else{
                        echo "member bank gagal"; 
                            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pendaftaran Gagal! kode[bank]</div>');
                            redirect('register');
                    }

                }else{                      
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pendaftaran Gagal! kode[alamat]</div>');
                    redirect('register');
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pendaftaran Gagal! kode[member]</div>');
                redirect('register');
            }

        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Kode Referal tidak terdaftar atau belum aktif!</div>');
            redirect('register');
        }
    
    }
}