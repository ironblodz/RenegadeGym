<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */



    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname');
            $table->integer('contact');
            $table->date('birthdate');
            $table->integer('nif');
            $table->enum('gender', ['M','F'])->nullable();
            $table->enum('role', ['admin','pt', 'nutri', 'client'])->default('client');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
