<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function(Blueprint $table){
          $table->increments('id')->unsigned()->unique();
          $table->string('name');
          $table->string('team');
          $table->string('position');
          $table->integer('mflId')->unsigned()->unique();
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
      Schema::table('players', function ($table) {
        $table->dropColumn(['id', 'name', 'team', 'position', 'mflId']);
      });
    }
}
