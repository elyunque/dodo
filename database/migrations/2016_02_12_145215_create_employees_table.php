<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Factory as Faker;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('ssn');
            $table->string('firstname', 60);
            $table->string('lastname', 60);
            $table->string('identification', 11)->unique();
            $table->date('birthday');
            $table->string('phone_home', 60);
            $table->string('phone_mobile', 60);   
            $table->string('phone_related', 60); 
            $table->string('phone_extra', 60);
            $table->string('address_home');
            $table->string('address_extra');
            $table->string('email_home');
            $table->string('email_extra');
            $table->string('related_info');            
            $table->timestamps();
        });

        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('employees')->insert([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'identification' => $faker->lastName . pow(10,10),
                'phone_mobile' => $faker->phoneNumber,
                'ssn' => pow(10,10),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
