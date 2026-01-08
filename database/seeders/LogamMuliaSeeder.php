<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LogamMuliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("logam_mulia")->insert([
            [
                "jenis" => "ANTAM CERTI (2025)",
                "kadar" => "99.99",
                "harga" => "Rp. 2.443.000"
            ],
            [
                "jenis" => "ANTAM CERTI (2024)",
                "kadar" => "99.99",
                "harga" => "Rp. 2.376.000"
            ],
            [
                "jenis" => "ANTAM CERTI (2023)",
                "kadar" => "99.99",
                "harga" => "Rp. 2.354.000"
            ],
            [
                "jenis" => "ANTAM CERTI LAMA",
                "kadar" => "99.99",
                "harga" => "Rp. 2.346.000"
            ],
            [
                "jenis" => "ANTAM ABU LAMA",
                "kadar" => "99.99",
                "harga" => "Rp. 2.346.000"
            ],
            [
                "jenis" => "ANTAM RETRO",
                "kadar" => "99.99",
                "harga" => "Rp. 2.344.000"
            ],
            [
                "jenis" => "LM UBS",
                "kadar" => "99.99",
                "harga" => "Rp. 2.323.000"
            ],
            [
                "jenis" => "HARTADINATA",
                "kadar" => "99.99",
                "harga" => "Rp. 2.323.000"
            ],
            [
                "jenis" => "EMAS KITA",
                "kadar" => "99.99",
                "harga" => "Rp. 2.323.000"
            ],
            [
                "jenis" => "LM BRAND SNI",
                "kadar" => "99.99",
                "harga" => "Rp. 2.223.000"
            ],
            [
                "jenis" => "LM NO SNI CUSTOM",
                "kadar" => "99.99",
                "harga" => "Rp. 1.963.000"
            ],
            [
                "jenis" => "DINAR ANTAM 24K",
                "kadar" => "99.99",
                "harga" => "Rp. 2.343.000"
            ],
            [
                "jenis" => "DINAR ANTAM 22K",
                "kadar" => "91.70",
                "harga" => "Rp. 1.899.000"
            ],
        ]);
    }
}
