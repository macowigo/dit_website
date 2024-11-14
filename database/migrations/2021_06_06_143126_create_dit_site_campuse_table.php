<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteCampuseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {

         if(Schema::hasTable('dit_site_campus')) return;
         Schema::create('dit_site_campus', function (Blueprint $table) {
             $table->id();
             $table->string('code',20)->unique();
             $table->string('name',50);
             $table->string('imgurl',50)->nullable();
             $table->mediumText('caption1')->nullable();
             $table->mediumText('caption2')->nullable();
             $table->string('director_name',50);
             $table->string('director_imgulr',50)->nullable();
             $table->string('director_edu',250);
             $table->string('director_email',50);
             $table->string('director_phone',15);
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
        Schema::dropIfExists('dit_site_campus');
    }
}
