<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_enabled')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'name' => 'Henry Pimentel',
            'email' => 'hpimentel@defensordelpueblo.gob.do',
            'password' => bcrypt('secret'),
            'is_admin' => 1,            
        ]);

        DB::table('users')->insert([
            'name' => 'Julio Melo',
            'email' => 'jmelo@defensordelpueblo.gob.do',
            'password' => bcrypt('secret'),
            'is_admin' => 1,            
        ]);

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
