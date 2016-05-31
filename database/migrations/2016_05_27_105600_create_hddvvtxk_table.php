<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHddvvtxkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hddvvtxk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mota');
            $table->text('thaotac');
            $table->string('hienthi');
            $table->integer('stt');
            $table->string('plcn');
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
        Schema::drop('hddvvtxk');
    }
}
