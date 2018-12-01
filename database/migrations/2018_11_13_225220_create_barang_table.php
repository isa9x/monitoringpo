<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('po_id')->unsigned()->nullable();
            $table->foreign('po_id')->references('id')->on('po')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->integer('jumlah')->unsigned()->nullable();
            $table->string('satuan')->nullable();
            $table->string('harga');
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
        Schema::dropIfExists('barang');
    }
}
