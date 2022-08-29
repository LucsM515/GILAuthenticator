<?php

namespace App\Http\Controllers\v1;

use App\GilPass;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class PasswordController extends Controller
{
    public function index()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['error' => false, 'message' => 'Token inválido'], 404);
            }
            $myTime = Carbon::now()->format('Y-m-d');
            $data = GilPass::whereBetween('created_at', [$myTime . ' 00:00:00', $myTime . ' 23:59:59'])->first();
            if (!$data) {
                $data = ['error' => true, 'message' => 'O token do dia não foi gerado'];
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'message' => $th->getMessage()]);
        }
        return response()->json($data);
    }
}
