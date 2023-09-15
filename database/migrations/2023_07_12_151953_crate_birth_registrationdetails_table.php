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
        //
        Schema::create('nikkah_registration', function (Blueprint $table) {
        $table->id();
        $table->integer('house_id');
        $table->string('child_name');
        $table->string('gender');
        $table->date('date_of_birth');
        $table->string('place_of_birth')->nullable();
        $table->string('blood_group');
        $table->integer('father_name');
        $table->integer('mother_name');
        $table->timestamps();
        $table->softDeletes();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
