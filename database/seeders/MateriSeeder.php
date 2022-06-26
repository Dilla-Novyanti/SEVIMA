<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Truncating materi table');
        DB::table('materis')->truncate();

        $this->command->info('Seeding materi table');
        materi::create([
        "kode_materi"     => "pengenalan_WD",
        "nama_materi"     => "Pendalaman Web Desain",
        "pertemuan"       => "1",
        "kode_pelajaran"  => "WD-X-19",
        "deskripsi"       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
        "file_materi"     => "{{url('/materi/pengenalan_WD')}}"
    ]);

        materi::create([
        "kode_materi"     => "pendalaman_WD",
        "nama_materi"     => "Pendalaman Web Desain",
        "pertemuan"       => "2",
        "kode_pelajaran"  => "WD-X-19",
        "deskripsi"       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
        "file_materi"     => "{{url('/materi/pendalaman_WD')}}"
    ]);

        materi::create([
        "kode_materi"     => "praktik_WD",
        "nama_materi"     => "Prakti Web Desain",
        "pertemuan"       => "3",
        "kode_pelajaran"  => "WD-X-19",
        "deskripsi"       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
        "file_materi"     => "{{url('/materi/praktik_WD')}}"
    ]);
    }
}
