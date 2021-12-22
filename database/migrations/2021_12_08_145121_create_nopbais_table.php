<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNopbaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nopbai', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('baigiang_id');
            $table->bigInteger('tepdinhkem_id');
            $table->bigInteger('lophoc_sinhvien_id');
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
        Schema::dropIfExists('nopbais');
    }
}
