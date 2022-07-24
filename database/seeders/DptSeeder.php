<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dpt;

class DptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dpt::create([
            'nik' => '320000',
            'nama' => 'Lukman',
            'jk' => 'Laki-Laki',
            'alamat' => 'jl.anggur',
            'tgllahir' => '2002-08-08',
            'status' => '1',
            'password' => bcrypt(12345678)
        ]);
    }
}
