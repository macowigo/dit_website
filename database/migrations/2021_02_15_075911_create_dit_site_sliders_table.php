<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dit_site_sliders', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('added_by')->nullable();
          $table->unsignedBigInteger('verified_by')->nullable();
          $table->string('url',90);
          $table->mediumText('caption')->nullable()->default(null);
          $table->string("title",50);
          $table->boolean('is_public')->default(0)->comment('1-Public 0-Private');
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
        Schema::dropIfExists('dit_site_sliders');
    }
}
