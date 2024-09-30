<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();
            $table->string('page')->nullable();
            $table->text('user_benefits')->nullable();      
            $table->text('lawyer_benefits')->nullable();
            $table->text('how_it_works')->nullable();     
            $table->string('blog_title')->nullable(); 
            $table->text('blog_content')->nullable();
            $table->string('blog_image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_contents');
    }
};
