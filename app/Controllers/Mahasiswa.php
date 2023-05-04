<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{

    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new \App\Models\MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->findAll(),
        ];

        return view('mahasiswa/index', $data);
    }

    public function new()
    {
        $data = [
            'validation' => \Config\Services::validation(),
        ];

        return view('mahasiswa/new', $data);
    }

    public function create()
    {
        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama wajib diisi',
                ]
            ],
            'nim' => ['label' => 'nim', 'rules' => 'required'],
            'gender' => ['label' => 'gender', 'rules' => 'required'],
            'alamat' => ['label' => 'alamat', 'rules' => 'required'],
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'gender' => $this->request->getVar('gender'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        $this->mahasiswaModel->save($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('/mahasiswa');
    }

    public function edit($id_mahasiswa)
    {
        $data = [
            'mahasiswa' => $this->mahasiswaModel->getId($id_mahasiswa),
            'validation' => \Config\Services::validation(),
        ];

        return view('mahasiswa/edit', $data);
    }

    public function update($id_mahasiswa)
    {
        $rules = [
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama wajib diisi',
                ]
            ],
            'nim' => ['label' => 'nim', 'rules' => 'required'],
            'gender' => ['label' => 'gender', 'rules' => 'required'],
            'alamat' => ['label' => 'alamat', 'rules' => 'required'],
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'gender' => $this->request->getVar('gender'),
            'alamat' => $this->request->getVar('alamat'),
            'id_mahasiswa' => $id_mahasiswa,
        ];

        $this->mahasiswaModel->save($data);
        session()->setFlashdata('success', 'Data berhasil diubah');
        return redirect()->to('/mahasiswa');
    }

    public function delete($id_mahasiswa)
    {
        $this->mahasiswaModel->delete($id_mahasiswa);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/mahasiswa');
    }
}
