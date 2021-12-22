<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaigiangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baigiang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lophoc_id');
            $table->bigInteger('loaibai_id');
            $table->bigInteger('tepdinhkem_id');
            $table->text('tieude');
            $table->text('noidung');
            $table->datetime('ngayhethan');
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
        Schema::dropIfExists('baigiangs');
    }
}
