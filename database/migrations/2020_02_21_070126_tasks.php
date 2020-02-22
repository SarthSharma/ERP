<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Task_details', function (Blueprint $table) {
            $table->integer('roll_no')->references('roll_no')->on('Record');
            $table->string('Subject_Name')->references('Subject_Name')->on('Attendance');
            $table->date('Date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string("Work for Home");
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
        Schema::dropIfExists('Task_details');
    }
}
