<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LogamMuliaController extends Controller
{
    public function store(Request $request){
        DB::table('logam_mulia')->insert([
            'jenis' => $request->jenis,
            'kadar' => $request->kadar,
            'harga' => $request->harga,
        ]);

        return redirect()->back();
    }

    public function update($id, Request $request){
        $rawHarga = $request->harga;

        $cleanHarga = preg_replace('/[^0-9]/', '', $rawHarga);

        $harga = (int)$cleanHarga;
        DB::table('logam_mulia')->where('id', $id)->update([
            "jenis" => $request->brand,
            "kadar" => $request->kadar,
            "harga" => "Rp. ". number_format($harga, 0, ',', '.'),
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        $id = (int)$id;
        DB::table('logam_mulia')->where('id', $id)->delete();
        return redirect()->back();
    }
}
