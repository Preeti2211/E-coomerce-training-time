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
        Schema::create('create_ac', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('faName');
            $table->string('mob');
            $table->string('email');
            $table->string('gender');
            $table->string('password');
            $table->string('captcha');
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
        Schema::dropIfExists('create_ac');
    }
};
