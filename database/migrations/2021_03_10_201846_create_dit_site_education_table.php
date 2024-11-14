<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('dit_site_education')) return;
        Schema::create('dit_site_education', function (Blueprint $table) {

          $table->id();
          $table->unsignedBigInteger('staff_id');
          $table->enum('level', ['Certificate','CSEE','ACSEE','FTC', 'Diploma','Advanced Diploma','Bachelor Degree','PostGraduate Diploma','Masters','PhD']);
          $table->string('description');
          $table->foreign('staff_id')->references('id')->on('dit_site_staff');
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
        Schema::dropIfExists('dit_site_education');
    }
}
