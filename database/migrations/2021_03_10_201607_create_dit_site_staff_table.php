<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('dit_site_staff')) return;
        Schema::create('dit_site_staff', function (Blueprint $table) {
          $table->id();
          $table->enum('prefix', ['Mr', 'Mrs','Ms','Dr','Prof']);
          $table->string('fname',20);
          $table->string('mname',20)->nullable();
          $table->string('lname',20);
          $table->string('imgurl',50)->nullable();
          $table->string('email',40)->nullable();
          $table->string('phone',15)->nullable();
          $table->string('designation',70);
          $table->string('title',70);
          $table->mediumText('bio_paragraph1')->nullable();
          $table->mediumText('bio_paragraph2')->nullable();
          $table->mediumText('bio_paragraph3')->nullable();
          $table->enum('staff_type', ['DIT Top Management', 'Professors and Senior Lecturers',
          'Lecturers','Assistant Lecturers','Tutorial Assistants','Instructors',
          'Administrative and Supporting Staff'])->nullable(false);

          $table->tinyInteger('status')->default(0)->comment('0-staff,1-hod,2-dpaf,3-dparc,4-principal');
          $table->unsignedBigInteger('department_id')->nullable(false);
          $table->foreign('department_id')->references('id')->on('dit_site_department');
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
        Schema::dropIfExists('dit_site_staff');
    }
}
