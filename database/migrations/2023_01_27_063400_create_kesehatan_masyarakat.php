<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesehatan_masyarakat', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('deskripsi');
            $table->string('ketua');
            $table->string('sekre');
            $table->string('kepala_biomedik');
            $table->string('kepala_kesehatan_masyarakat');
            $table->string('kepala_manajemen_pelayanan_kesehatan');
            $table->string('kepala_kesehatan_ibu_dan_anak');
            $table->string('kepala_kesehatan_dan_keselamatan_kerja');
            $table->string('kepala_promosi_kesehatan');
            $table->string('pusat_studi_ketua');
            $table->string('pusat_studi_sekre');
            $table->string('akreditasi');
            $table->string('dosen');
            $table->string('kurikulum');
            $table->string('prospek_lulusan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kesehatan_masyarakat');
    }
};
