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
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedBigInteger('doc_id');
			$table->foreign('doc_id')->references('id')->on('doctors')->after('id');
            $table->unsignedBigInteger('patient_id');
			$table->foreign('patient_id')->references('id')->on('patients')->after('id');
            $table->string('date')->after('doc_id');
            $table->string('comment')->after('date');
            $table->string('status')->after('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            //
        });
    }
};
