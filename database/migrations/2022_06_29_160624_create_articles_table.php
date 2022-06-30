<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();           
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->string('image_source')->nullable();
            $table->longText('content')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('sort_id')->nullable()->default(0);
            $table->string('seo_title')->nullable(); 
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
