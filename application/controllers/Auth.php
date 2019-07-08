<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  /**
   * Conctruct all required loaded codeigniter and parented
   * 
   * codeigniter
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("M_guru");
    $this->load->model('M_admin');
  }

  /**
   * Show login page if the user don't login 
   * And show if the validation form is false
   * 
   * 
   * @return view
   */
  public function index()
  {
    $this->_cekLogin();

    if ($this->form_validation->run('auth') == false) {
      $this->load->view('auth/login');
    } else {
      $this->_login();
    }
  }

  /**
   * Call this method if the user has give validation form is true
   * 
   * 
   * @return boolen
   */
  private function _login()
  {
        $password = $this->input->post('password',true);
        $username = $this->input->post('username',true);

        $user = $this->M_guru->_verify_credentials($username,$password);
        $admin = $this->M_admin->_verify_credentials($username,$password);
        
        if ($user) {
            $newdata = array(
                'eveuser'  => $user['id_guru'],
                'nuptk'     => $user['nuptk'],
                'name'      => $user['nama_guru'],
                'jabatan'   => "Guru",
                'menu'      => "2"
            );
        
            $this->session->set_userdata($newdata);
            // redirect(base_url()."siswa/wl");
        } elseif ($admin) {
            $newdata = array(
                'eveadmin'  => $admin['id'],
                'name'      => $admin['nama'], 
                'jabatan'   => 'Admin',
                'menu'      => '1'
            );
        
            $this->session->set_userdata($newdata);
            redirect(base_url()."sekolah");
        } else {
            alerterror('message','Username dan password salah');
            redirect('auth');
        } 
  }

  /**
   * Logout from system and destroy all the user sesson
   * redirect user to login view
   * 
   * 
   * @return view
   */
  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');
    $this->session->unset_userdata('slug');
    $this->session->unset_userdata('user_craport_identifer');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been log out!</div>');
    redirect('auth');
  }

  /**
   * Private method for check the user 
   * is user logged
   */
  private function _cekLogin()
  {
    if ($this->session->has_userdata('user_craport_identifer')) {
      if ($this->session->userdata('role_id') == 1) {
        redirect('panel');
      } else {
        redirect('dashboard');
      }
    }
  }
}
