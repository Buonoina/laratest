<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hoge;

class HogeController extends Controller
{
    public function index(){
        $hoge = Hoge::first(); //テーブルで一番最初にヒットする行を取得
        return view('hoge',$hoge);
    }
}
