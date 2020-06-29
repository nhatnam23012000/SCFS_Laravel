<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('set null');
            //$table->unsignedBigInteger('stall_id');
            //$table->foreign('stall_id')->references('id')->on('stalls')
            //  ->onUpdate('cascade')->onDelete('set null');

            $table->boolean('done')->default(false);
            $table->integer('cost');
            $table->timestamps();


            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
