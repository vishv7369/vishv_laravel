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
        Schema::table('mr_fav_docs', function (Blueprint $table) {
            $table->unsignedBigInteger('doctor_id');
			$table->foreign('doctor_id')->references('id')->on('doctors')->after('id');
            $table->unsignedBigInteger('mr_id');
			$table->foreign('mr_id')->references('id')->on('mrs')->after('doctor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mr_fav_docs', function (Blueprint $table) {
            //
        });
    }
};
