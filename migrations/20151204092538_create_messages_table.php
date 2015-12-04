<?php

use Sun\Database\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        Schema::create('messages', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->timestamps();
        });
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        Schema::drop('messages');
    }
}