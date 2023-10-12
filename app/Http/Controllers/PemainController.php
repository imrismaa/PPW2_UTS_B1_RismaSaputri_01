<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemainModel;

class PemainController extends Controller
{
    public function index()
    {
        $data_pemain = PemainModel::all();
        return view('pemain.index', compact('data_pemain'));
    }
}
