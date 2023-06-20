<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        helper(['form']);
        $data['title'] = 'Order Management Dashboard';
        echo view('dashboard/header', $data);
        echo view('dashboard/navbar');
        echo view('dashboard/sidebar');
        echo view('dashboard/order_form');
        echo view('dashboard/footer');
        echo view('dashboard/rekomendasi');
    }

    public function profile()
    {
        helper(['form']);
        $data['title'] = 'Profile';
        echo view('dashboard/header', $data);
        echo view('dashboard/navbar');
        echo view('dashboard/sidebar');
        echo view('dashboard/profile');
        echo view('dashboard/footer');
    }
    
    public function product()
    {
        helper(['form']);
        $data['title'] = 'Product';
        echo view('dashboard/header', $data);
        echo view('dashboard/navbar');
        echo view('dashboard/sidebar');
        echo view('dashboard/product');
        echo view('dashboard/footer');
    }
    
    public function order()
    {
        helper(['form']);
        $data['title'] = 'Order';
        echo view('dashboard/header', $data);
        echo view('dashboard/navbar');
        echo view('dashboard/sidebar');
        echo view('dashboard/order');
        echo view('dashboard/footer');
    }
    
    public function logout()
{
    return redirect()->to('/login');
}

    
}
