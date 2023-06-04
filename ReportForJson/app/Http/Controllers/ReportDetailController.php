<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//レポート詳細
class ReportDetailController extends Controller
{
    public function index($report_id)
    {
        return view('report.detail');
    }
}
