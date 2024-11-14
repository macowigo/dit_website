<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(Schema::hasTable('dit_site_programmes')) return;
        Schema::create('dit_site_programmes', function (Blueprint $table) {

          $table->id();
          $table->string('code',20)->unique();
          $table->string('name',100);
          $table->tinyInteger('level')->comment('6-Diploma 8-Bachelor 9 - Masters');
          $table->unsignedBigInteger('department_id');
          $table->timestamps();
          $table->foreign('department_id')->references('id')->on('dit_site_department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dit_site_programmes');
    }
}
