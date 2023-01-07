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
        Schema::create('laundromats', function (Blueprint $table) {
            $table->string("No_Bon");
            $table->string("Nama");
            $table->double("Berat",$precision=3,$scale=1);
            $table->integer("Harga_Satuan");
            $table->integer("Harga_Total");
            $table->date("Tgl_Masuk");
            $table->date("Tgl_Keluar");
            $table->boolean("Bayar");
            $table->integer("DP");
            $table->date("Tgl_Ambil")->nullable();
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
        Schema::dropIfExists('laundromats');
    }
};
