<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteCampusProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(Schema::hasTable('dit_site_campus_programmes')) return;
        Schema::create('dit_site_campus_programmes', function (Blueprint $table) {

          $table->id();
          $table->string('code',20)->unique();
          $table->string('name',100);
          $table->tinyInteger('level');
          $table->unsignedBigInteger('campus_id');
          $table->timestamps();
          $table->foreign('campus_id')->references('id')->on('dit_site_campus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dit_site_campus_programmes');
    }
}
