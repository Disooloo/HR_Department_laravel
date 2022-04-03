<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name_company'); // название компании
            $table->string('responsible'); //ответственный
            $table->string('phone');
            $table->string('email');
            $table->boolean('isVacancy')->default(true);
            $table->string('site')->default('Нет сайта ');
            $table->string('address')->nullable(); // адрес компании
            $table->string('coordinate')->nullable(); // Координаты 54.342 23.212




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
        Schema::dropIfExists('companies');
    }
}
