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
        Schema::create('table_recipt', function (Blueprint $table) {
            $table->id();
            $table->integer('reciept_no');
            $table->string('recieved_from');
            $table->decimal('amount',11,2)->default(0);
            $table->string('reciever');
            $table->date('date');
            $table->decimal('balance',11,2);
            $table->longtext('description');
            $table->string('mode');
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
        Schema::dropIfExists('table_recipt');
    }
};
