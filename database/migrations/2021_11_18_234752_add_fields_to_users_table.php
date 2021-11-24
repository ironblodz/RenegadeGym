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
            $table->id();
            $table->string('prim_nome', 25)->nullable(false);
            $table->string('apelido',25)->nullable(false);
            $table->string('contacto', 9);
            $table->string('genero')->nullable();
            $table->date('data_nasc')->nullable();
            $table->enum('role', ['C', 'A', 'P', 'N'])->default('C');
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
