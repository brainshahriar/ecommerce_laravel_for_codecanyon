<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('subsubcategory_id');
            $table->integer('brand_id');
            $table->string('unit');
            $table->string('approved');
            $table->string('main_image');
            $table->string('thumbnail_image');
            $table->string('featured_image');
            $table->string('flashdeal_image');
            $table->string('video_provider');
            $table->string('video_link');
            $table->string('meta_title');
            $table->text('meta_description');
            $table->string('meta_tag');
            $table->string('meta_image');
            $table->string('color');
            $table->string('size');
            $table->string('seller_rate');
            $table->string('admin_rate');
            $table->string('tax');
            $table->string('discount');
            $table->string('seller_commission');
            $table->string('cashback');
            $table->string('quantity');
            $table->text('description');
            $table->string('shipping_type');
            $table->string('flat_shipping_cost')->nullable();  
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
        Schema::dropIfExists('products');
    }
}
