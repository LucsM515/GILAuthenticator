<?php

namespace App\Http\Controllers;

use App\GilPass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GilPassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $myTime = Carbon::now()->format('Y-m-d');
        $data = GilPass::whereBetween('created_at', [$myTime . ' 00:00:00', $myTime . ' 23:59:59'])->first();
        if (!$data) {
            $data = ['password' => (rand(11111111, 99999999))];
            $data = GilPass::create($data);
        }
        return view("Senha.index", compact('data'));
    }
}
