<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailAccounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_accounts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('username');
            $table->foreign('username')->references('username')->on('users')->onDelete('cascade');
            $table->string('domain');
            $table->foreign('domain')->references('domain')->on('email_domains')->onDelete('cascade');
            $table->string('password');
            $table->integer('quota')->unsigned()->default(0);
            $table->boolean('enabled')->default(0);
            $table->boolean('sendonly')->default(0);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('email_accounts');
    }
}
