<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }

    public function databuku()
    {
        return view('admin/databuku');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function transaksi()
    {
        return view('admin/transaksi');
    }
}
