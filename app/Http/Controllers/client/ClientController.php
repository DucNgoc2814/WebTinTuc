<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
class ClientController extends Controller
{

    const URL_USER = '\App\Http\Controllers\auth\UserController';
    const URL_CATEGORY = '\App\Http\Controllers\client\CategoryController';

    public function index()
    {
        $tac_gias = (self::URL_USER)::load_5_users();
        $danh_mucs = (self::URL_CATEGORY)::load_all_categories();

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
