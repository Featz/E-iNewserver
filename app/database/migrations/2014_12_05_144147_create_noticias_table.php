<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration {
 /**
  9 * Run the migrations.
    10 *
    11 * @return* @return void
12 */
 public function up()
 {
 Schema::create('noticias', function(Blueprint $table)
 {
 $table->increments('id');
 $table->text('titulo');
 $table->text('resumen');
 $table->text('contenido');
 $table->integer('fecha');
 $table->text('imagen');
 $table->text('autor');
 $table->integer('likes');
 $table->text('tags');
 $table->timestamps();
 });
 }

 /**
31 * Reverse the migrations.
32 *
33 * @return void
34 */
 public function down()
 {
 Schema::table('noticias', function(Blueprint $table)
 {
 Schema::drop('noticias');
 });
 }

 }