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
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
            $table->string("title_1");
            $table->string("title_2")->nullable();
            $table->string("title_3")->nullable();
            $table->string("subtitle");
            $table->string("image_1");
            $table->string("image_2")->nullable();
            $table->string("image_3")->nullable();
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
        Schema::dropIfExists('landings');
    }
};
