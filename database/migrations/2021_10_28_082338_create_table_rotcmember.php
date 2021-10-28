<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRotcmember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotcmember', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 100)->nullable();
            $table->string('lname', 100)->nullable();
            $table->date('birthday')->nullable();
            $table->string('rank', 100)->nullable();
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
        Schema::dropIfExists('rotcmember');
    }
}
