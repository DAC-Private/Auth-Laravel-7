<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            // Field di table ini di samakan dengan table users
            $table->id();
            $table->string('name');
            // Ada field yang nantinya berelasi tidak masalah karena yang penting ada field ['email','password','name'];
            $table->unsignedBigInteger('kantor_id')->nullable();
            $table->foreign('kantor_id')->references('id')->on('kantor')->onDelete('cascade')->onUpdate('cascade');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('pegawai');
    }
}
