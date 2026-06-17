<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KaryawanModel;
class Karyawan extends BaseController
{
    protected $karyawan;

    public function __construct()
    {
        $this->karyawan = new KaryawanModel();
    }

    public function index()
    {
        
        $data['karyawan'] = $this->karyawan->findAll();

        return view('karyawan/index', $data);
    }
    public function create()
    {
        return view('karyawan/create');
    }
    public function store()
    {
        $this->karyawan->save([
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'gaji' => $this->request->getPost('gaji')
        ]);

        return redirect()->to('/karyawan');
    }
     public function edit($id)
    {
        $data['karyawan'] = $this->karyawan->find($id);

        return view('karyawan/edit', $data);
    }
    public function update($id)
    {
        $this->karyawan->update($id, [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'gaji' => $this->request->getPost('gaji')
        ]);

        return redirect()->to('/karyawan');
    }
      public function delete($id)
    {
        $this->karyawan->delete($id);

        return redirect()->to('/karyawan');
    }

}
