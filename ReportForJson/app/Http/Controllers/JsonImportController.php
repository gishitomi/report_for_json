<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//fsonファイルインポート
class JsonImportController extends Controller
{
    public function index()
    {
        return view('report.jsonimport');
    }
}
