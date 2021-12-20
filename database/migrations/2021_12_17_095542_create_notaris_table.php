<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaris', function (Blueprint $table) {
            $table->id();
            $table->string('id_notaris')->unique();
            $table->string('nama_notaris');
            $table->string('alamat');
            $table->string('jabatan');
            $table->integer('no_tlp');
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
        Schema::dropIfExists('notaris');
    }
}
