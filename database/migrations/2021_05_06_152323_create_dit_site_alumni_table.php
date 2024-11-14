<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteAlumniTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('dit_site_alumni', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->enum('title',['Eng','Dr(MD-MSC)','Dr(MD-MMED)','Prof','Dr(MD)','Dr(Phd)','Mr','Mrs','Miss','Others'])->nullable();
           $table->string('first_name', 50);
           $table->string('second_name', 50)->nullable();
           $table->string('last_name', 50);
           $table->string('email_address', 191)->unique();
           $table->string('current_location');
           $table->string('organization', 50)->nullable();
           $table->mediumText('short_bio')->nullable();
           $table->string('registration_no', 191)->unique();
           $table->string('image_path', 191)->nullable();
           $table->text('education', 191);
         //  $table->unsignedBigInteger('ward_id');
           $table->string('employer')->nullable();
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
       Schema::dropIfExists('dit_site_alumni');
   }
}
