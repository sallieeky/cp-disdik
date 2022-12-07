<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('halamen', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable();
            $table->integer("part_id")->nullable();
            $table->string("tipe")->default("dinamis");
            $table->string("url");
            $table->string("judul");
            $table->timestamps();
        });
        DB::statement("ALTER TABLE halamen ADD data LONGBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halamen');
    }
};
