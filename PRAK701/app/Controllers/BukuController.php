<?php

namespace App\Controllers;

use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new BukuModel();
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Login terlebih dahulu!');
            redirect()->to('/login')->send();
            exit();
        }
    }

    public function index()
    {
        $data['buku'] = $this->model->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $rules = [
            'judul'        => 'required|string',
            'penulis'      => 'required|string',
            'penerbit'     => 'required|string',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]',
        ];

        $messages = [
            'judul'        => ['required' => 'Judul harus diisi.', 'string' => 'Judul harus berupa string.'],
            'penulis'      => ['required' => 'Penulis harus diisi.', 'string' => 'Penulis harus berupa string.'],
            'penerbit'     => ['required' => 'Penerbit harus diisi.', 'string' => 'Penerbit harus berupa string.'],
            'tahun_terbit' => ['required' => 'Tahun terbit harus diisi.', 'numeric' => 'Tahun terbit harus berupa angka.', 'greater_than' => 'Tahun terbit harus lebih besar dari 1800.', 'less_than' => 'Tahun terbit harus lebih kecil dari 2024.'],
        ];

        if (!$this->validate($rules, $messages)) {
            return view('buku/create', ['validation' => $this->validator]);
        }

        $this->model->insert([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->model->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $this->model->update($id, [
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('/buku');
    }

    public function show($id)
    {
        $data['buku'] = $this->model->find($id);
        return view('buku/show', $data);
    }
}