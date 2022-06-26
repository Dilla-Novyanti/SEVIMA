<?php

namespace Database\Seeders;

use App\Models\Tugas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TgsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating tugas table');
        DB::table('tugas')->truncate();

        $this->command->info('Seeding tugas table');
        Tugas::create([
            "kode_tugas"      => "dasar",
            "judul_tugas"     => "Praktik HTML Dasar",
            "kode_materi"     => "pengenalan_WD",
            "kode_pelajaran"  => "WD-X-19",
            "pertemuan"       => "1", 
            "type"            => "textarea",
            "deskripsi"       =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "deadline"        => "2022-25-06",
            ]);

        Tugas::create([
            "kode_tugas"      => "native",  
            "judul_tugas"     => "Praktik CRUD PHP Native",
            "kode_materi"     => "pendalaman_WD",
            "kode_pelajaran"  => "WD-X-19",
            "pertemuan"       => "2", 
            "type"            => "textarea",
            "deskripsi"       =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "deadline"        => "2022-25-06",
        ]);

        Tugas::create([
            "kode_tugas"      => "framework",
            "judul_tugas"     => "CRUD dengan Laravel",
            "kode_materi"     => "praktik_WD",
            "kode_pelajaran"  => "WD-X-19",
            "pertemuan"       => "3", 
            "type"            => "send_file",
            "deskripsi"       =>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "file_path"       => "/tugas/praktik_WD.pdf",
            "deadline"        => "2022-25-06",
        ]);
    }
}
