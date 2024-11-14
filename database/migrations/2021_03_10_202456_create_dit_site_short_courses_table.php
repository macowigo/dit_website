<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteShortCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('dit_site_short_courses')) return;
        Schema::create('dit_site_short_courses', function (Blueprint $table) {
          $table->foreign('department_id')->references('id')->on('dit_site_department');
          $table->id();
          $table->string('code',20)->unique();
          $table->string('name',50);
          $table->unsignedBigInteger('department_id');
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
        Schema::dropIfExists('dit_site_short_courses');
    }
}
