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
        Schema::create('table_payment', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('paid_to');
            $table->decimal('amount',11,2)->default(0);
            $table->string('reciever');
            $table->date('date');
            $table->decimal('balance',11,2);
            $table->string('mode');
            $table->longtext('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_payment');
    }
};
