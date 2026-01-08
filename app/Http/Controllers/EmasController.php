<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmasController extends Controller
{
    public function store(Request $request){
        DB::table('emas')->insert([
            'berat' => $request->berat,
            'harga' => $request->harga
        ]);

        return redirect()->back();
    }

    public function update($id, Request $request){
        DB::table('emas')->where('id', $id)->update([
            "berat" => $request->berat,
            "harga" => "Rp. ".number_format($request->harga,0,',', '.')
        ]);
        return redirect()->back();
    }

    public function destroy($id){
        $id = (int)$id;
        DB::table('emas')->where('id', $id)->delete();
        return redirect()->back();
    }
}
