<?php namespace SinKa\Sexybaby\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSinkaSexybabyVote extends Migration
{
    public function up()
    {
        Schema::table('sinka_sexybaby_vote', function($table)
        {
            $table->integer('image_user_1')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('sinka_sexybaby_vote', function($table)
        {
            $table->string('image_user_1', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
