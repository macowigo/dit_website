<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_personal_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable()->index('user_personal_details_user_id_foreign');
            $table->unsignedBigInteger('district_id')->nullable()->index('user_personal_details_district_id_foreign');
            $table->unsignedBigInteger('nationality_id')->nullable()->index('user_personal_details_nationality_id_foreign');
            $table->enum('title', ['Mr', 'Mrs', 'Dr', 'Prof', 'Ms', 'Sir']);
            $table->string('first_name', 30);
            $table->string('second_name', 30)->nullable();
            $table->string('last_name', 30);
            $table->boolean('gender');
            $table->string('photo', 90)->nullable();
            $table->date('date_of_birth');
            $table->string('phone_number', 15)->nullable();
            $table->string('identity_number', 20)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('user_personal_details');
    }
}
