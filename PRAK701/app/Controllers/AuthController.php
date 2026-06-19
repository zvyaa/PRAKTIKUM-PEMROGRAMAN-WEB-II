<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('logged_in', true);
            session()->set('username', $user['username']);
            return redirect()->to('/buku');
        }

        session()->setFlashdata('error', 'Email atau password salah!');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function debugLogin()
    {
        $model = new \App\Models\UserModel();
        $user = $model->where('email', 'admin@email.com')->first();

        echo "Data user ditemukan: ";
        var_dump($user);

        echo "<br>Hasil password_verify: ";
        var_dump(password_verify('admin123', $user['password'] ?? ''));
    }
}