<?php

use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: roles
         */
        Schema::create('roles', function ($table) {
            $table->increments('id');
            $table->varchar('name')->nullable();
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
        Schema::drop('roles');
    }
}
