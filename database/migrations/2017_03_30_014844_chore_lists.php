<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Chore_lists.
 *
 * @author  The scaffold-interface created at 2017-03-30 01:48:44am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ChoreLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('chore_lists',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('Name');
        
        $table->String('Description');
        
        $table->integer('CompletedByUser');
        
        $table->String('TaskTimeReqd');
        
        $table->String('image');
        
        $table->date('NeedDate');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('resource_id')->unsigned()->nullable();
        $table->foreign('resource_id')->references('id')->on('resources')->onDelete('cascade');
        
        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('chore_lists');
    }
}
