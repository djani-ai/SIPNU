<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ranting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranting', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->string('nama_ranting', 128)->nullable();
			$table->text('sekretariat')->nullable();
			$table->string('nama_ketua', 128)->nullable();
			$table->integer('no_hp_ketua', 64)->nullable();
			$table->string('nama_sekretaris', 128)->nullable();
			$table->integer('no_hp_sekretaris', 64)->nullable();
			$table->string('no_sp', 128)->nullable();
			$table->date('masa_aktif')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranting');
    }
}
