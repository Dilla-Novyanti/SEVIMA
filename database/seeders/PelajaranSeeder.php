<?php

namespace Database\Seeders;

use App\Models\Pelajaran;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating pelajaran table');
        DB::table('pelajarans')->truncate();

        $this->command->info('Seeding pelajaran table');
        Pelajaran::create([
          "nama_pelajaran" => "Web Desiain",
          "kode_pelajaran" => "WD-X-19",
          "kode_pengajar" => "A1345",
        ]);

        Pelajaran::create([
          "nama_pelajaran" => "Matematika",
          "kode_pelajaran" => "MTK-X-19",
          "kode_pengajar" => "A1987",
          ]);

        Pelajaran::create([
        "nama_pelajaran" => "Teknik Kerja Bengkel",
        "kode_pelajaran" => "TK-2020-7B",
        "kode_pengajar" => "B16254",
        ]);
    }
}
