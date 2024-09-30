<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyerProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('category')->nullable();
            $table->text('bio')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->integer('experience')->nullable();
            $table->text('achievements');
            $table->string('photo')->nullable();
            $table->string('mobile_phone');
            $table->text('office_address');
            $table->string('office_phone');
            $table->date('birth_date');
            $table->text('website')->nullable();
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
        Schema::dropIfExists('lawyer_profile');
    }
}
