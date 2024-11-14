<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDitSiteDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(Schema::hasTable('dit_site_department')) return;
        Schema::create('dit_site_department', function (Blueprint $table) {
            $table->id();
            $table->string('code',20)->unique();
            $table->string('name',50);
            $table->string('imgurl',50)->nullable();
            $table->mediumText('caption1')->nullable();
            $table->mediumText('caption2')->nullable();
            $table->string('hod_name',50);
            $table->string('hod_imgulr',50)->nullable();
            $table->string('hod_academy',250);
            $table->string('hod_email',50);
            $table->string('hod_phone',15);
            $table->enum('category',['Academic Department','Administrative Department']);
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
        Schema::dropIfExists('dit_site_department');
    }
}
