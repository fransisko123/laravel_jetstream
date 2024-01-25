<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;

class DashboardController extends Controller
{
    public function index()
    {
        $x = 5;
        $y = 3;

        // Create an instance of the Helper class
        $helper = new Helper();

        // Call the non-static method on the instance
        $hasilPenjumlahan = $helper->penjumlahan($x, $y);

        $title = "Ini halaman dashboard";
        return view("admin.dashboard", [
            'title' => $title,
            'hasilPenjumlahan' => $hasilPenjumlahan
        ]);
    }
}
