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
        Schema::create('data_kesihatan', function (Blueprint $table) {
            $table->id();
            $table->string('rawatan');
            $table->string('rawatan_desc')->nullable();
            $table->string('darah');
            $table->string('darah_desc')->nullable();
            $table->string('gula');
            $table->string('gula_desc')->nullable();
            $table->string('diabetes');
            $table->string('diabetes_desc')->nullable();
            $table->string('jantung');
            $table->string('jantung_desc')->nullable();
            $table->string('batuk');
            $table->string('batuk_desc')->nullable();
            $table->string('kidney');
            $table->string('kidney_desc')->nullable();
            $table->string('pembedahan');
            $table->string('pembedahan_desc')->nullable();
            $table->string('penyakit_lain');
            $table->string('penyakit_lain_desc')->nullable();
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
