<?php

use Illuminate\Support\Facades\Schema;
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
            
            //people data
            $table->increments('id');
            $table->string('name', 50);
            $table->chat('cpf', 11)->nullable()->unique();
            $table->date('birth');
            $table->char('phone', 11)->nullable();
            $table->char('gender', 1)->nullable();
            $table->text('notes')->nullable();
            
            //auth data
            $table->string('email', 80)->unique();
            $table->string('password', 254)->nullable();

            //permission
            $table->string('status')->default('Active');
            $table->string('permission')->default('app.user');

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
     
        });
        Schema::dropIfExists('users');
    }
}
