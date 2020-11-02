<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->increments('conus_id');
            $table->string('conus_name', 50);
            $table->string('conus_email', 50);
            $table->string('conus_sub', 150)->nullable();
            $table->text('conus_mess');
            $table->integer('conus_status')->default(1);
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
        Schema::dropIfExists('contactuses');
    }
}
