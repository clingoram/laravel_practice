<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->increments('id');
            $table->string('name', 80)->comment('商品名稱');
            $table->boolean('status')->comment('商品狀態，true=有庫存;false=無存貨')->default(true);
            $table->integer('price')->comment('售價');
            $table->integer('amounts')->comment('商品數量');
            $table->string('image_url_path')->comment('商品url');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE products AUTO_INCREMENT = 100;");
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
