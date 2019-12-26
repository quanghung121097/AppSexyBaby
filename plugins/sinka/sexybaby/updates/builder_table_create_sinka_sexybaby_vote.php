<?php namespace SinKa\Sexybaby\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSinkaSexybabyVote extends Migration
{
    public function up()
    {
        Schema::create('sinka_sexybaby_vote', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_user_1');
            $table->string('image_user_1');
            $table->integer('id_user_2');
            $table->string('image_user_2');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sinka_sexybaby_vote');
    }
}
