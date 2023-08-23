<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRssFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rss_feeds', function (Blueprint $table) {
            $table->id();

            $table->string('title')->index();
            $table->string('link')->unique();
            $table->string('country')->index();
            $table->string('language')->index();
            $table->string('tags')->nullable()->index();
            $table->string('image_url')->nullable();

            $table->unsignedInteger('pulling_frequency')->default(15); // minutes
            $table->timestamp('last_pull_at')->nullable();

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
        Schema::dropIfExists('rss_feeds');
    }
}
