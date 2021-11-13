<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('ai')->nullable();
            $table->unsignedInteger('human')->nullable();
            $table->unsignedInteger('backlink')->nullable();
            $table->unsignedInteger('campaign')->nullable();
            $table->unsignedInteger('keyword')->nullable();
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('activities')->nullable();
            $table->unsignedInteger('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
