<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('ad_id');
            $table->uuid('c_id');
            $table->uuid('u_id');
            $table->string('ad_title');
            $table->string('ad_text');
            $table->binary('ad_image');
            $table->date('ad_date');
            $table->datetime('ad_time');
            $table->string('popup');
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
        Schema::dropIfExists('ads');
    }
}
