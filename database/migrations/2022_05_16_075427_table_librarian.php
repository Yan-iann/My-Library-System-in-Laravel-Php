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
        Schema::create('lib',function (Blueprint $table){
            $table->bigIncrements('Lib_ID');
            $table->string('Lib_FName');
            $table->string('Lib_MName');
            $table->string('Lib_LName');
            $table->string('Lib_Email');
            $table->string('Lib_User');
            $table->string('Lib_Pw');
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
         Schema::dropIfExists('lib');
    }
};
