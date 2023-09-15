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
        Schema::create('birth_registration', function (Blueprint $table) {
        $table->id();
        $table->integer('house_id');
        $table->string('bride_name');
        $table->string('groom_name');
        $table->string('bride_adress');
        $table->string('groom_adress');
        $table->string('bride_fathername')->nullable();
        $table->string('groom_fathername')->nullable();
        $table->string('bride_place')->nullable();
        $table->string('groom_place')->nullable();
        $table->date('date');
        // $table->time('time')->nullable();
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
