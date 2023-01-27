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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dekan');
            $table->string('wakil_dekan_akademik');
            $table->string('wakil_dekan_PSD');
            $table->string('wakil_dekan_KKD');
            $table->string('visi');
            $table->string('misi');
            $table->integer('telp');
            $table->integer('whatsapp');
            $table->string('email');
            $table->string('alamat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
