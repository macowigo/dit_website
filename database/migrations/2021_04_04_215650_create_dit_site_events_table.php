<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dit_site_events', function (Blueprint $table) {
            $table->id();
            $table->string('title',90);
            $table->string('venue',50);
            $table->mediumText('description');
            $table->string('urllink',90)->nullable();
            $table->string('attachment',191)->nullable();
            $table->string('image',191)->nullable();
            $table->DateTime ('starttime')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->DateTime ('endtime')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('is_public')->default(0)->comment('1-Public 0-Private');
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
        Schema::dropIfExists('dit_site_events');
    }
}
