<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $emas = DB::table('emas')->orderBy('id', 'asc')->get();
        $logam_mulia = DB::table('logam_mulia')->orderBy('id', 'asc')->get();
        return view('welcome', compact('emas', 'logam_mulia'));
    }
}
