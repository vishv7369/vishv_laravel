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
        Schema::table('_admins', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->string('email')->after('name');
            $table->string('password')->after('email');
            $table->string('img')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('_admins', function (Blueprint $table) {
            //
        });
    }
};
