<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;    

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cikgu', function (Blueprint $table){

        $table->increments('idcikgu');
        $table->string('namacikgu');
        $table->string('tarikhlahir');
        $table->string('jantina');
        $table->string('pendidikan');
        $table->string('alamat');
        $table->string('status');
        $table->timestamps();
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idcikgu');
        Schema::dropIfExists('namacikgu');
        Schema::dropIfExists('tarikhlahir');
        Schema::dropIfExists('jantina');
        Schema::dropIfExists('pendidikan');
        Schema::dropIfExists('alamat');
        Schema::dropIfExists('status');
    }
};