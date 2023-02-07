<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("tamu_id");
            $table->unsignedBigInteger("kamar_id");
            $table->integer("quantity");
            $table->integer("total");
            $table->dateTime("tanggal");
            $table->timestamps();

            $table->foreign("tamu_id")->references("id")->on("tamu")->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign("kamar_id")->references("id")->on("kamar")->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
