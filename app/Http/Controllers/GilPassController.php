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
        $data['dayPassword'] = GilPass::whereBetween('created_at', [$myTime . ' 00:00:00', $myTime . ' 23:59:59'])->first();
         
        if (!$data["dayPassword"]) {
            $data = ['password' => (rand(111111, 999999))];
            $data['dayPassword'] = GilPass::create($data);
        }
        $data['passwordHistory'] = GilPass::take(6)->skip(1)->orderBy("created_at","DESC")->get();
        
        
        return view("Senha.index", compact('data'));
    }
}
