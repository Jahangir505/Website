<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_contents', function (Blueprint $table) {
            $table->increments('pagecon_id');
            $table->string('pagecon_title');
            $table->text('pagecon_subtitle');
            $table->text('pagecon_details');
            $table->string('pagecon_button_text');
            $table->string('pagecon_button_url');
            $table->string('pagecon_icon');
            $table->string('pagecon_image');
            $table->integer('pc_id');
            $table->integer('pagecon_status')->default(1);
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
        Schema::dropIfExists('page_contents');
    }
}
