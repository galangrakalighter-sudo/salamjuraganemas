<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class CMSController extends Controller
{
    public function index(){
        $emas = DB::table("emas")->orderBy('id', 'asc')->get();
        $logam_mulia = DB::table("logam_mulia")->orderBy('id', 'ASC')->get();
        return view('cms', compact('emas', 'logam_mulia'));
    }
}
