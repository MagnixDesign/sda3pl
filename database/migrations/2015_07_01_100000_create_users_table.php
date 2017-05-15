<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: users
         */
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->int('reporting_to')->nullable();
            $table->varchar('name')->nullable();
            $table->varchar('email')->nullable();
            $table->varchar('password')->nullable();
            $table->tinyint('active')->nullable();
            $table->varchar('remember_token')->nullable();
            $table->enum('sex', ['','male','female'])->nullable();
            $table->date('dob')->nullable();
            $table->varchar('designation')->nullable();
            $table->varchar('mobile')->nullable();
            $table->varchar('phone')->nullable();
            $table->increments('address')->nullable();
            $table->varchar('street')->nullable();
            $table->varchar('city')->nullable();
            $table->varchar('district')->nullable();
            $table->varchar('state')->nullable();
            $table->int('country')->nullable();
            $table->varchar('photo')->nullable();
            $table->varchar('web')->nullable();
            $table->text('social_login')->nullable();
            $table->string('slug', 100)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('users');
    }
}
