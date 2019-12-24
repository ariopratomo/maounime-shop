<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //Do your magic here

    is_logged_in();

    // Load model user
    $this->load->model("M_users", "user");
    $this->load->model("M_menu", "menu");
  }

  public function index()
  {

    if (isset($_GET['page'])) {

      $page = $_GET['page'];

      switch ($page) {
        case 'add':
          $this->_add();
          break;
        case 'edit':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->_edit($id);
          } else {
            $this->template->load('admin/_templates/master', 'admin/404');
          }
          break;
        case 'delete':
          if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->_delete($id);
          } else {
            $this->template->load('admin/_templates/master', 'admin/404');
          }
          break;
        default:
          $this->template->load('admin/_templates/master', 'admin/404');
          break;
      }
    } else {
      // tampil data user
      $data['users'] = $this->user->getUsers();
      $email = $this->session->userdata('email');
      $data['myData'] = $this->user->getByEmail($email);

      $this->template->load('admin/_templates/master', 'admin/user/view', $data);
    }
  }

  // Tambah User
  private function _add()
  {
    // set form validasi tambah
    $this->form_validation->set_rules($this->user->rulesAdd());

    // jika form validasi benar
    if ($this->form_validation->run() === TRUE) {
      // return model user (addUser)
      $this->user->addUser();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambah.</div>');
      redirect(site_url('admin/users'));
    }

    // Jika validasi gagal/salah
    else {
      // Tampil form tambah user
      $data['role'] = $this->user->getRole();
      $this->template->load('admin/_templates/master', 'admin/user/add_user', $data);
    }
  }

  // Edit User
  private function _edit($id = null)
  {
    // Jika id user yang akan diedit tidak ada
    if (!isset($id)) $this->template->load('admin/_templates/master', 'admin/404');

    // set form validasi edit
    $this->form_validation->set_rules($this->user->rulesEdit($id));

    $data['user'] = $this->user->getById($id);
    // Jika validasi benar

    if ($this->form_validation->run() === TRUE) {
      // return model user (editUser)
      $this->user->editUser($id);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data user berhasil diedit.</div>');
      redirect(site_url('admin/users'));
    }

    // Jika validasi gagal/salah
    else {
      if ($this->user->idUser($id)) {
        $data['role'] = $this->user->getRole();
        $this->template->load('admin/_templates/master', 'admin/user/edit_user', $data);
      } else {
        $this->template->load('admin/_templates/master', 'admin/404');
      }
    }
  }

  // Hapus user
  public function _delete($id = null)
  {
    // Jika id user yang akan diedit tidak ada
    if (!isset($id)) $this->template->load('admin/_templates/master', 'admin/404');

    // jika retun model user (deleteUser) berhasil

    if ($this->user->deleteUser($id)) {
      $this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">User berhasil dihapus.</div>');
      redirect(site_url('admin/users'));
    }
  }
}

/* End of file Users.php */