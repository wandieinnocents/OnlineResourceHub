<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('drinkmenu_category_id');            
            $table->string('drinkmenu_name');
            $table->string('drinkmenu_price');
            $table->string('drinkmenu_status');
            $table->text('drinkmenu_photo');
            $table->text('drinkmenu_description');
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
        Schema::dropIfExists('drink_menus');
    }
}
