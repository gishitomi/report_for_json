<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//レポート作成
class ReportAddController extends Controller
{
    public function index()
    {
        return view('report.add');
    }
}
