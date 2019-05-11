<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->text('logo')->nullable();
            $table->text('name')->nullable();
            $table->text('text_top')->nullable();
            $table->text('text_right')->nullable();

            $table->text('whatsapp')->nullable();
            $table->text('instagram')->nullable();
            $table->text('snapchat')->nullable();
            $table->text('telegram')->nullable();

            $table->text('email')->nullable();

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
        Schema::dropIfExists('settings');
    }
}
