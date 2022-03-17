<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubMenuTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menu_titles', function (Blueprint $table) {
            $table->id('sub_menu_id');
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->foreign('menu_id')->references('menu_id')->on('main_menu_titles');
            $table->string('sub_navigation_title_name');
            $table->string('m_controller_name');
            $table->string('date');
            $table->string('sub_navigation_js');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('sub_menu_titles');
    }
}
