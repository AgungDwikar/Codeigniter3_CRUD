<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  function index()
  {
    if ($this->session->userdata('auth')) {
      redirect('user');
    } else {
      $this->load->view('login_view');
    }
  }

  function login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->user_model->userLogin($email);

    if (empty($user)) {
      $this->session->set_flashdata('messageUser', 'User tidak ditemukan');
      redirect('auth');
    } else {
      if (md5($password) == $user->password) {
        $session = array(
          'auth' => true,
          'nama' => $user->nama,
          'email' => $user->email,
          'role' => $user->role
        );
        $this->session->set_userdata($session);

        if ($user->role == 'admin') {
          redirect('user');
        } else {
          $this->session->set_flashdata('messageAkses', 'Anda Bukan Admin');
          $this->session->unset_userdata('auth');
          redirect('auth');
        }
      } else {
        $this->session->set_flashdata('messagePass', 'Password Tidak Cocok');
        redirect('auth');
      }
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }
}

/* End of file Auth.php */
