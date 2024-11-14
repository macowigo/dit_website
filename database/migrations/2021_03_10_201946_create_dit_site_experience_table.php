<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('dit_site_experience')) return;
        Schema::create('dit_site_experience', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('staff_id');
          $table->string('description');
          $table->timestamps();
          $table->foreign('staff_id')->references('id')->on('dit_site_staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dit_site_experience');
    }
}
