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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100)->require();
            $table->integer('harga')->require();
            $table->integer('stok')->require();
            $table->text('detail',1000)->require();
            $table->timestamps();
            $table->unsignedbiginteger('produsen_id')->require();
            $table->unsignedbiginteger('kategori_id')->require();
            $table->foreign('produsen_id')->references('id')->on('produsen')->onDelete('restrict');
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropforeign('produsen_id');
        $table->dropforeign('kategori_id');
        $table->dropcolumn('produsen_id');
        $table->dropcolumn('kategori_id');
        Schema::dropIfExists('produk');
    }
};
