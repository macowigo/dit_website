<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dit_site_news', function (Blueprint $table) {
            $table->id();
              $table->string('title',90);
              $table->string('urllink',90)->nullable();
              $table->mediumText('description');
              $table->string('attachment',191)->nullable();
              $table->string('image',191)->nullable();
              $table->boolean('is_public')->default(0)->comment('1-Public 0-Private');
              ##  timestamps;
              $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
              $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->orderByDesc();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dit_site_news');
    }
}
