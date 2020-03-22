<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
<<<<<<< HEAD
            $table->string('email', 180)->unique();
            $table->integer('edad');
            $table->enum('sexo', [
                'hombre','mujer','n/a'
            ])->default('n/a');
=======
            $table->string('email')->unique();
            $table->integer('edad');
            $table->enum('sexo', ['hombre', 'mujer', 'n/a'])->default('hombre');
>>>>>>> cde9e8384dc97fbba20c1738e2dffc6ad780fdcf
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
