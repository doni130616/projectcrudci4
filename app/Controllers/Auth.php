<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function cekLogin()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();

        $user = $userModel
                    ->where('email', $email)
                    ->first();

        if ($user) {

            if ($password == $user['password']) {

                session()->set([
                    'login' => true,
                    'id_user' => $user['id'],
                    'nama' => $user['nama']
                ]);

                return redirect()->to('/karyawan');
            }
        }

        return redirect()->back()
                         ->with('error', 'Email atau Password Salah');
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}