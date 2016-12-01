<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('hash_method');
            $table->string('email')->unique();
            $table->string('keyCard')->unique()->nullable()->default(null);
            $table->string('publicKey')->nullable()->default(null);
            $table->enum('role',\App\User::getRoles())->default('user');
            $table->boolean('active')->default(false);
            $table->string('password');
            $table->string('creditCardToken')->nullable()->default(null);
            $table->rememberToken();
            $table->timestamps();
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
        Schema::drop('users');
    }
}
