<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{

    public function index()
    {
        $tac_gias = User::query()->limit(5)->get();
        $danh_mucs = DanhMuc::query()->get();

        $data = [
            'tac_gias' => $tac_gias,
            'danh_mucs' => $danh_mucs
        ];
        
        return view('index', compact('data'));
    }
    public function lienHe()
    {
        return view('client.lien-he');
    }
    public function gioiThieu()
    {
        return view('client.gioi-thieu');
    }
}
