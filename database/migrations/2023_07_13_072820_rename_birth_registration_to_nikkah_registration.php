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
        Schema::table('nikkah_registrations', function (Blueprint $table) {
            //
            Schema::rename('birth_registration', 'nikkah_registrations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nikkah_registration', function (Blueprint $table) {
            //
        });
    }
};
