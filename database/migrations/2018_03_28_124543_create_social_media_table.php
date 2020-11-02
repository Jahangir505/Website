<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->increments('sm_id');
            $table->string('sm_facebook');
            $table->string('sm_twitter');
            $table->string('sm_youtube');
            $table->string('sm_google');
            $table->string('sm_skype');
            $table->string('sm_linkedin');
            $table->integer('sm_status')->default(1);
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
        Schema::dropIfExists('social_media');
    }
}
