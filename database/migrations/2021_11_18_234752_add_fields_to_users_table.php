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
            $table->integer('contact')->nullable();
            $table->date('birthdate')->nullable();
            $table->integer('nif')->nullable();
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
