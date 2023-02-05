<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['title'] = 'Data User';
        $data['getUser'] = $model->getUser();


        return view('layout/navbar', $data) . view('layout/header', $data) . view('layout/dashboard', $data);
    }

    public function batuan()
    {
        $data = ['tittle' => 'batuan'];

        return view('layout/batuan', $data);

    }

    public function fosil()
    {
        $data = ['tittle' => 'batuan'];

        return view('layout/fosil', $data);

    }

    public function add()
    {
        $model = new UserModel();
        $data = array(
            'umur' => $this->request->getPost('umur'),
            'kondisi' => $this->request->getPost('kondisi'),
            'namakoleksi' => $this->request->getPost('namakoleksi'),
            'jeniskoleksi' => $this->request->getPost('jeniskoleksi'),
            'ditemukan' => $this->request->getPost('ditemukan')
        );
        $model->saveUser($data);
        echo '<script>
        alert("Data Berhasil di Tambahkan");
        window.location="' . base_url('') . '"
         </script>';
    }

    public function edit($id)
    {
        $model = new UserModel;
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $data['user'] = $getUser;
            $data['title'] = 'Update User';

            echo view('layout/header', $data);
            echo view('layout/navbar', $data);
            echo view('layout/edit', $data);
        } else {

            echo '<script>
                    alert("ID User ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new UserModel;
        $id = $this->request->getPost('id');
        $data = array(
            'umur' => $this->request->getPost('umur'),
            'kondisi' => $this->request->getPost('kondisi'),
            'namakoleksi' => $this->request->getPost('namakoleksi'),
            'jeniskoleksi' => $this->request->getPost('jeniskoleksi'),
            'ditemukan' => $this->request->getPost('ditemukan')
        );
        $model->editUser($data, $id);
        echo '<script>
                alert("Data Berhasil di Ubah!");
                window.location="' . base_url('') . '"
            </script>';
    }

    public function hapus($id)
    {
        $model = new UserModel;
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $model->hapusUser($id);
            echo '<script>
                    alert("Data Berhasil Dihapus!");
                    window.location="' . base_url('') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Gagal Menghapus !, ID user ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('') . '"
                </script>';
        }
    }

}
