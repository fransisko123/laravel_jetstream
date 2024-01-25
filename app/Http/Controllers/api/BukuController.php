<?php

namespace App\Http\Controllers\api;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BukuCollection;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return new BukuCollection($buku);
    }
}
