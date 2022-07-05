<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class CreateShopcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopcarts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('userid')->comment('會員ID');
            $table->bigInteger('product_id')->unsigned()->comment('商品ID');
            // $table->unsignedBigInteger('product_id')->comment('商品ID');

            // $table->integer('price')->comment('價格');
            $table->integer('total_purchase_item')->comment('欲購買數量');
            $table->integer('total_price')->comment('總價');
            $table->foreign('userid')->references('id')->on('users')->onUpdate('cascade');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE shopcarts AUTO_INCREMENT = 100;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopcarts');

        Schema::disableForeignKeyConstraints();
        Schema::table('shopcarts', function (Blueprint $table) {
            $table->dropForeign(['userid']);
        });
        Schema::enableForeignKeyConstraints();
    }
}
