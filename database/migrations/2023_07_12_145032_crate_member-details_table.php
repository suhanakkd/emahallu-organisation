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
        Schema::create('member-details', function (Blueprint $table) {
        $table->id();
        $table->integer('house_id');
        $table->string('name');
        $table->integer('age')->default(0);
        $table->string('gender');
        $table->string('image')->nullable();
        $table->string('blood_group')->nullable();
        $table->string('contact_number')->nullable();
        $table->string('educational_details')->nullable();
        $table->string('job')->nullable();
        $table->string('desease')->nullable();
        $table->string('marital_status')->nullable();
        $table->integer('status')->default(0);
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
