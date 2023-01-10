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
        Schema::create('data_pembelajaran', function (Blueprint $table) {
        $table->id();
        $table->string('sesi_pembelajaran');
        $table->string('kategori');
        $table->string('komen')->nullable();
        $table->string('progress');
        $table->string('waktu_mula');
        $table->string('waktu_tamat');
        $table->string('kehadiran')->nullable();
        $table->string('user_id');
        $table->string('user_name');
       
        
        $table->timestamps();
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
