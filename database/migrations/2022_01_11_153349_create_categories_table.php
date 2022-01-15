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
            $table->id();
            $table->string('name');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->integer('cash_back');
            $table->integer('cash_back_adjust');
            $table->string('user_package_discount');
            $table->string('slug');
            $table->string('commision_rate');
            $table->string('banner');
            $table->string('serial');
            $table->string('icon');
            $table->string('status');
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
