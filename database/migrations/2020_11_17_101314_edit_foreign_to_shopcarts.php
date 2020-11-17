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
        Schema::table('shopcarts', function (Blueprint $table) {
            $table->foreign('merchandise_id')->references('id')->on('merchandises')->onUpdate('cascade');
        });
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
            $table->dropForeign(['merchandise_id']);
        });
        Schema::enableForeignKeyConstraints();
    }
}
