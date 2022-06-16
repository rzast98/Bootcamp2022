<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecialistIdToDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor', function (Blueprint $table) {
            $table->unsignedBigInteger('specialist_id')->after('user_id')->nullable();
            $table->foreign('specialist_id')->references('id')->on('specialist');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor', function (Blueprint $table) {
            //
        });
    }
}
