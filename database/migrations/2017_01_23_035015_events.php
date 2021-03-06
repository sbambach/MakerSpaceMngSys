<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Events.
 *
 * @author  The scaffold-interface created at 2017-01-24 02:17:15am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('events',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->dateTime('startDateTime')->nullable();
        
        $table->dateTime('endDateTime')->nullable();

        $table->integer('durationMinutes')->nullable();

        $table->string('status')->default('Not Submitted');
        
        $table->String('description')->nullable();

        $table->boolean('allDay')->default(false);

        $table->string('type')->default('event');

        $table->boolean('nonMembersAllowed')->default(true);

        $table->float('materialCostPerAttendee')->default(0.0);

        $table->float('percentCostToSpark')->default(0.0);

        $table->float('memberTicketPrice')->default(0.0);

        $table->float('additionalNonMemberTicketPrice')->default(0.0);

        $table->integer('maxAttendance')->nullable();

        $table->integer('image_id')->nullable();

        $table->integer('minAttendance')->default(0);

        $table->dateTime('cutoffDate')->nullable();

        $table->integer('instructor_id')->nullable();

        $table->foreign('instructor_id')->references('id')->on('users')->onDelete('cascade');

        $table->boolean('isTemplate')->default(0);

        $table->integer('source_id')->nullable();

        $table->foreign('source_id')->references('id')->on('events')->onDelete('cascade');
        
        /**
         * Foreignkeys section
         */
        
        
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
        Schema::drop('events');
    }
}
