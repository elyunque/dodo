<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Faker\Factory as Faker;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id');
            $table->string('description');
            $table->timestamps();
        });

        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('departments')->insert([
                'description' => $faker->lastName . pow(10,10),
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
        Schema::drop('departments');
    }
}
