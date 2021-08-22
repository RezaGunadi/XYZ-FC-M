<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
                $table->string('Name')->unique();
                $table->string('image')->nullable();
                $table->text('Tinggi')->nullable();
                $table->text('Berat')->nullable();
                $table->string('Posisi');;
                $table->integer('No');
                $table->timestamps();
        });
         /** gunakan script berikut jika ingin menambah data otomatis */
     $Posisi = ['penyerang', 'gelandang', 'bertahan', 'penjaga gawang'];
     for ($a = 1; $a <= 15; $a++)
         DB::table('posts')->insert([
             'Name' => 'Name' . $a,
             'Posisi' => $Posisi[array_rand($Posisi)],
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
