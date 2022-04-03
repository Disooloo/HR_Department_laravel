<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // ФИО сотрудника
//            $table->string('post'); //должность
            $table->foreignId('post_id')->constrained('posts');
            $table->integer('age'); // Возвраст
            $table->string('inn'); // инн
            $table->string('payment_account'); // Р/с
            $table->string('password'); // Паспорт сотрудника
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
