<?php

use Illuminate\Support\Facades\Route;

//ホーム画面
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('report.index');

//レポート追加画面
Route::get('/add', 'App\Http\Controllers\ReportAddController@index')->name('report.add');

//レポート詳細画面
Route::get('/detail/{report_id}', 'App\Http\Controllers\ReportDetailController@index')->name('report.detail');

//Jsonインポート画面
Route::get('/jsonimport', 'App\Http\Controllers\JsonImportController@index')->name('report.jsonimport');

//設定画面
Route::get('/setting', 'App\Http\Controllers\SettingCOntroller@index')->name('config.config');