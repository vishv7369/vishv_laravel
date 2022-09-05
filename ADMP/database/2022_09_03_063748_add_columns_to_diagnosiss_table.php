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
        Schema::table('diagnosiss', function (Blueprint $table) {
            $table->unsignedBigInteger('appointment_id');
			$table->foreign('appointment_id')->references('id')->on('appointments')->after('id');
            $table->unsignedBigInteger('patient_id');
			$table->foreign('patient_id')->references('id')->on('patients')->after('appointment_id');
            $table->string('Problems')->after('patient_id');
            $table->string('diagnosis')->after('Problems');
            $table->string('care_suggestions')->after('diagnosis');
            $table->string('reports')->after('care_suggestions');
            $table->enum('status',['Approve','Pending'])->default('Pending')->after('reports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diagnosiss', function (Blueprint $table) {
            //
        });
    }
};
