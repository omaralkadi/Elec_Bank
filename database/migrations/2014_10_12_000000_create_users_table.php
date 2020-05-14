<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

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
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('group_id')->default(0);
            $table->Boolean('isBan')->default(0);
            $table->double('money')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table("users")->insert(
            array(
            "id"=>1,
            "fname"=>"omar",
            "lname" => "tarek",
            "username" =>"omartarek",
            "email" =>"admin@gmail.com",
            "password"=>Hash::make(123456),
            "group_id" => 1

            ));

        DB::table("users")->insert(
            array(
                "id"=>2,
                "fname"=>"omar",
                "lname" => "tarek",
                "username" =>"omartarek",
                "email" =>"user@gmail.com",
                "password"=>Hash::make(123456),
                "group_id" => 0

            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
