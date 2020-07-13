<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->double('price');
            $table->double('total');
            $table->unsignedBigInteger('id_invoice');
            $table->foreign('id_invoice')
                ->references('id')
                ->on('invoices')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('cod_prod');
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
        Schema::dropIfExists('items');
    }
}
