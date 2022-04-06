<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_letters', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->string('author')->nullable();
            $table->text('link')->nullable();
            $table->text('excerpt')->nullable();
            $table->text('summary')->nullable();
            $table->integer('rank')->nullable();
            $table->foreignId('news_topic_id')->constrained();
            $table->string('query')->nullable();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->text('media')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_letters');
    }
};
