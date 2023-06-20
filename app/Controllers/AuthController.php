<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function create()
    {
        $userModel = new UserModel();

        $data = [
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $userModel->insert($data);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Login success
            return redirect()->to('/dashboard');
        } else {
            // Login failed
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
}
