<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
	{
        $data['title']='Auth';
        $data['kelas']= $this->db->get('kelas')->result();
        $this->load->view('templates/header', $data);
	    	$this->load->view('auth', $data);
        $this->load->view('templates/footer');
	}
    
   public function registrasi()
{
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
      'required' => '%s masih kosong'
    ]);

    $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[user.email]', [
        'required' => '%s masih kosong',
        'is_unique' => '%s sudah ada'
      ]);

    $this->form_validation->set_rules('password', 'password', 'trim|required', [
        'required' => '%s masih kosong'
      ]);


   if ($this->form_validation->run() == FALSE) {
       $this->index();
   } else {
        $data = [
            'id_kelas' => $this->input->post('id_kelas', true),
            'nama' => $this->input->post('nama', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'level' => 'siswa'
        ];

        
        $this->db->insert('user', $data);
        if ($this->db->affected_rows() > 0) {
             echo "<script>
                alert('Akun berhasil diregistrasi');
                window.location.href = '" . site_url('auth') . "';
              </script>";
        }

   }
   
   }





	public function login()
     {
         $email = $this->db->get_where('user', ['email' => $this->input->post('email1', true)])->row();

    if ($email) { // jika ada emailnya
    if(password_verify($this->input->post('password1'), $email->password)){ //jika password sama

    if ($email->level == 'admin') { // admin
            $data_session = [
                'id' => $email->id,
                'nama' => $email->nama,
                'level' => $email->level,
            ];
                 $this->session->set_userdata($data_session );
                 redirect('admin/dashboard');
        } else { // siswa
          $data_session = [
            'id' => $email->id,
            'nama' => $email->nama,
            'level' => $email->level,
        ];
             $this->session->set_userdata($data_session );
             redirect('home');
        }


        }else { // jika tidak
                echo "<script>
                alert('Password anda salah');
                window.location.href = '" . site_url('auth') . "';
                </script>";
            
        }     
        
        } else { // jika ada
          echo "<script>
          alert('Email anda salah');
          window.location.href = '" . site_url('auth') . "';
          </script>";
        }
     }

  public function logout()
  {
      $this->session->sess_destroy();
      redirect('auth');
  }
}
