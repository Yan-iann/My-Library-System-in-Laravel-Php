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
        Schema::create('books',function (Blueprint $table){
            $table->bigIncrements('Book_ID');
            $table->string('Book_Title');
            $table->string('Book_Publisher');
            $table->string('Book_Author');
            $table->string('Book_Publish');
            $table->string('Book_Volume');
            $table->string('photo', 300);
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
        Schema::dropIfExists('books');
    }
};
