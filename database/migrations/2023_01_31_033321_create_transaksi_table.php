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
            $table->unsignedBigInteger("kamar_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("instansi");
            $table->string("nohp");
            $table->string("email");
            $table->date("tanggal_masuk");
            $table->date("tanggal_keluar");
            $table->integer("quantity");
            $table->integer("total");
            $table->timestamps();

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
