<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("emas")->insert([
            [
                "berat" => "24k",
                "harga" => "Rp. 2.338.000",
            ],
            [
                "berat" => "23k",
                "harga" => "Rp. 1.979.000",
            ],
            [
                "berat" => "22k",
                "harga" => "Rp. 1.894.000",
            ],
            [
                "berat" => "21k",
                "harga" => "Rp. 1.809.000",
            ],
            [
                "berat" => "20k",
                "harga" => "Rp. 1.724.000",
            ],
            [
                "berat" => "19k",
                "harga" => "Rp. 1.639.000",
            ],
            [
                "berat" => "18k",
                "harga" => "Rp. 1.553.000",
            ],
            [
                "berat" => "17k",
                "harga" => "Rp. 1.485.000",
            ],
            [
                "berat" => "16k",
                "harga" => "Rp. 1.399.000",
            ],
            [
                "berat" => "15k",
                "harga" => "Rp. 1.313.000",
            ],
            [
                "berat" => "14k",
                "harga" => "Rp. 1.226.000",
            ],
            [
                "berat" => "13k",
                "harga" => "Rp. 1.140.000",
            ],
            [
                "berat" => "12k",
                "harga" => "Rp. 1.054.000",
            ],
            [
                "berat" => "11k",
                "harga" => "Rp. 968.000",
            ],
            [
                "berat" => "10k",
                "harga" => "Rp. 886.000",
            ],
            [
                "berat" => "9k",
                "harga" => "Rp. 800.000",
            ],
            [
                "berat" => "8k",
                "harga" => "Rp. 717.000",
            ],
            [
                "berat" => "7k",
                "harga" => "Rp. 637.000",
            ],
            [
                "berat" => "6k",
                "harga" => "Rp. 549.000",
            ],
            [
                "berat" => "5k",
                "harga" => "Rp. 465.000",
            ],
        ]);
    }
}
