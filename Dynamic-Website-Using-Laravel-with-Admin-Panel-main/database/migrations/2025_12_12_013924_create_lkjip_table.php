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
    Schema::create('lkjip', function (Blueprint $table) {
        $table->id();
        $table->integer('tahun');     // ganti year → tahun
        $table->string('judul');      // ganti title → judul
        $table->string('file');       // tetap file
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
        Schema::dropIfExists('lkjip');
    }
};
