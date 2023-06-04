<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//設定
class SettingController extends Controller
{
    public function index()
    {
        return view('config.config');
    }
}
