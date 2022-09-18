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
        Schema::create('prediksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasaran_id')->constrained()->onDelete('cascade');
            $table->date('tanggal');
            $table->string('am1',2);
            $table->string('am2',2);
            $table->string('am3',2);
            $table->string('ja1',2);
            $table->string('ja2',2);
            $table->string('ja3',2);
            $table->string('mau');
            $table->string('binatang');
            $table->enum('shio', ['Tikus', 'Kerbau', 'Harimau', 'Kelinci', 'Naga', 'Ular', 'Kuda', 'Kambing', 'Monyet', 'Ayam', 'Anjing', 'Babi']);
            $table->string('url_gambar');
            $table->string('makau');
            $table->foreignId('syair_id')->constrained()->onDelete('cascade');
            $table->string('angka');
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
        Schema::dropIfExists('prediksis');
    }
};
