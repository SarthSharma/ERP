<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Records extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Record', function (Blueprint $table) {
            $table->bigIncrements('roll_no')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('father\'s_name');
            $table->string('mother\'s_name');
            $table->string('mob');
            $table->string('dob');
            $table->string('age');
            $table->string('gender');
            $table->string('address');
            $table->string('city');
            $table->string('zip_code');
            $table->string('state');
            $table->timestamps();

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
        Schema::dropIfExists('Record');
    }
}
