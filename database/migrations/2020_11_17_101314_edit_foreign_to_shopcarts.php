<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditForeignToShopcarts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('shopcarts', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('shopcarts', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
        });
        Schema::enableForeignKeyConstraints();
    }
}
