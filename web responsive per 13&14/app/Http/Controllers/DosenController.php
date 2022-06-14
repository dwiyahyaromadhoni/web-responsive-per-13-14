<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen', ['dosens' => Dosen::paginate(10)]);
    }
}
