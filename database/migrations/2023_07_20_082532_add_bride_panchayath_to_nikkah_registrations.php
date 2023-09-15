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
            $table->string('groom_house_id')->default(0)->after('bride_house_id');
            $table->string('groom_member_id')->default(0)->after('groom_house_id');
            $table->string('bride_member_id')->default(0)->after('groom_member_id');
            $table->string('bride_panchayath')->nullable()->after('bride_member_id');
            $table->string('groom_panchayath')->nullable()->after('bride_panchayath');
            $table->integer('bride_pincode')->nullable()->after('groom_panchayath');
            $table->integer('groom_pincode')->nullable()->after('bride_pincode');
            $table->string('bride_mahallu')->nullable()->after('groom_pincode');
            $table->string('groom_mahallu')->nullable()->after('bride_mahallu');
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
