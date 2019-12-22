<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_users extends CI_Model
{

    const table = 'users';
    const role = 'users_role';

    // Rules validasi form tambah user
    public function rulesAdd()
    {
        return [
            [
                'field' => 'name',
                'label' => 'Nama',
                'rules' => 'required',

            ],

            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[' . self::table . '.email]',
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[5]',
            ],
            [
                'field' => 'passconf',
                'label' => 'Konfirmasi',
                'rules' => 'required|min_length[5]|matches[password]',
            ],
            [
                'field' => 'role',
                'label' => 'Role',
                'rules' => 'required',
            ],

        ];
    }

    // Rules validasi form edit user
    public function rulesEdit($id)
    {
        if ($this->idUser($id)) {
            $query = $this->db->get_where(self::table, ['id_user' => $id])->row();
            $email_lama = $query->email;
            $password = $this->input->post('password');

            // jika email lama dan tidak sama dengan email baru
            if ($this->input->post('email') != $email_lama) {
                $is_unique =  '|is_unique[users.email]';
            } else {
                $is_unique =  '';
            }

            // jika password tidak diisi
            if ($password != '') {
                $reqpass = 'required|min_length[5]';
                $reqconfpass = 'required|min_length[5]|matches[password]';
            } else {
                $reqpass = '';
                $reqconfpass = '';
            }

            return [
                [
                    'field' => 'name',
                    'label' => 'Nama',
                    'rules' => 'required',

                ],

                [
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email' . $is_unique,
                ],

                [
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => $reqpass,
                ],
                [
                    'field' => 'passconf',
                    'label' => 'Konfirmasi',
                    'rules' => $reqconfpass,
                ],
                [
                    'field' => 'role',
                    'label' => 'Role',
                    'rules' => 'required',
                ],

            ];
        }
    }

    // Ambil semua data user dan join tabel users_role
    public function getUsers()
    {
        $this->db->join(self::role, 'users_role.id = ' . self::table . '.role_id', 'left');

        return $this->db->get(self::table)->result();
    }

    // Ambil data user berdasar email session
    public function getByEmail($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row();
    }

    // ambil data user berdasar id dan join tabel users_role
    public function getById($id)
    {
        $this->db->join(self::role, 'users_role.id = ' . self::table . '.role_id', 'left');
        $this->db->where('id_user', $id);

        return $this->db->get(self::table)->row();
    }

    // ambil data tabel users_role
    public function getRole()
    {
        return $this->db->get(self::role)->result();
    }

    // tambah user
    public function addUser()
    {
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $password,
            'role_id' => $this->input->post('role'),
            'created_at' => time(),
            'updated_at' => time(),
            'last_login' => time(),
        ];

        $this->db->insert(self::table, $data);
    }

    // Edit data user
    public function editUser($id)
    {
        $password = $this->input->post('password');
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'role_id' => $this->input->post('role'),
            'updated_at' => time(),
        ];

        // cek kondisi form password kosong atau tidak
        if ($password != '') {
            if ($password_hash) {
                $this->db->set('password', $password_hash);
            }
        }

        $this->db->where('id_user', $id);
        $this->db->update(self::table, $data);
    }

    // Hapus user berdasarkan id_user
    public function deleteUser($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->delete(self::table);
    }

    // Cek idUser
    public function idUser($id)
    {
        return $this->db->get_where(self::table, ['id_user' => $id])->num_rows();
    }
}

/* End of file M_users.php */