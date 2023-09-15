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
        Schema::create('death_registration', function (Blueprint $table) {
        $table->id();

        $table->integer('member_id');
        $table->integer('house_id');
        $table->string('furnel_place')->nullable();
        $table->string('death_reason')->nullable();
        $table->date('date');
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
