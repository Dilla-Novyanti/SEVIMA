<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string("kode_tugas");
            $table->string("judul_tugas");
            $table->string("kode_materi");
            $table->string("kode_pelajaran");
            $table->string("pertemuan");
            $table->string("type");
            $table->string("deskripsi");
            $table->string("file_path")->nullable();
            $table->string("deadline");
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
}
