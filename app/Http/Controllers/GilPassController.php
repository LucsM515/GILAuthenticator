<?php

namespace App\Http\Controllers;

use App\GilPass;
use Illuminate\Http\Request;

class GilPassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = GilPass::latest()->first();
        return view("Senha.index", compact('data'));
    }
}
