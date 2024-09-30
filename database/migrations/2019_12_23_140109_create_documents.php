<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('case_id');
            $table->text('path')->nullable();
            $table->text('document_name')->nullable();
            $table->text('description')->nullable();
            $table->integer('upload_by')->nullable();
            $table->date('upload_on')->nullable();
            $table->string('verified')->nullable();
            $table->string('imp')->nullable();
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
        Schema::dropIfExists('documents');
    }
}
