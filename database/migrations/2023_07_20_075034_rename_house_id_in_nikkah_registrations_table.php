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
            $table->renameColumn('house_id', 'bride_house_id');
            $table->renameColumn('date', 'marriage_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nikkah_registrations', function (Blueprint $table) {
            //
        });
    }
};
