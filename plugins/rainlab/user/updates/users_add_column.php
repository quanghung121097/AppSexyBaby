<?php namespace RainLab\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UsersAddColumn extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->date('birth')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->text('interests')->nullable();
            $table->text('quote');
            $table->integer('sex')->nullable()->default(0);
            $table->string('address')->nullable();
            $table->string('link');
        });
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'birth')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('birth');
            });
        }
        if (Schema::hasColumn('users', 'height')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('height');
            });
        }
        if (Schema::hasColumn('users', 'weight')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('weight');
            });
        }
        if (Schema::hasColumn('users', 'interests')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('interests');
            });
        }
        if (Schema::hasColumn('users', 'quote')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('quote');
            });
        }
        if (Schema::hasColumn('users', 'sex')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('sex');
            });
        }
        if (Schema::hasColumn('users', 'address')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('address');
            });
        }
        if (Schema::hasColumn('users', 'link')) {
            Schema::table('users', function($table)
            {
                $table->dropColumn('link');
            });
        }
    }

}