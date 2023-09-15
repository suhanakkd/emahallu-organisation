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
        Schema::table('release_registration', function (Blueprint $table) {
            $table->string('house_holder_name')->after('house_id');
            $table->string('address')->after('house_holder_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('release_registration', function (Blueprint $table) {
            //
        });
    }
};
