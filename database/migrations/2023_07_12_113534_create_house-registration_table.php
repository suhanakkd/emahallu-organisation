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
        Schema::create('house_registration', function (Blueprint $table) {
        $table->id();
        $table->string('house_id');
        $table->string('family_name')->nullable();
        $table->string('house_holder_name')->nullable();
        $table->string('address');
        $table->string('house_number')->default(0);
        $table->integer('ward');
        $table->string('panchayat');
        $table->integer('pincode');
        $table->integer('total_members')->default(0);
        $table->decimal('annual_income',11,2)->default(0);
        $table->integer('monthly_payment')->default(0);
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
