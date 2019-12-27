<?php namespace SinKa\Sexybaby\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSinkaSexybabyUserVote extends Migration
{
    public function up()
    {
        Schema::create('sinka_sexybaby_user_vote', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('vote_id');
            $table->integer('result');
            $table->dateTime('vote_date');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sinka_sexybaby_user_vote');
    }
}
