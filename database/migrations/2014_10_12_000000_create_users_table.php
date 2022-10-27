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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->string('address');
            $table->longText('videolink');
            $table->string('map');
            $table->string('worktime');
            $table->string('logo');
            $table->string('logodark');
            $table->string('titleicon');
            $table->longText('slider')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->longText('facebook')->nullable();
            $table->longText('twitter')->nullable();
            $table->longText('instagram')->nullable();
            $table->longText('linkedin')->nullable();
            $table->longText('youtube')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
