<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',50)->unique();
            $table->string('title',67);
            $table->string('name',50);
            $table->text('descripction',67);
            $table->string('urlimage',100)->default('foto.jpg');
            $table->integer('visit')->default(0);
            $table->integer('order')->default(0);
            $table->boolean('coverpage')->default(0);
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
        Schema::dropIfExists('categories');
    }
}
