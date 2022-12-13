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
        Schema::create('device', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('code')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });

        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->integer('cpu')->nullable();
            $table->integer('ram')->nullable();
            $table->integer('disk')->nullable();
            $table->integer('battery')->nullable();
            $table->point('location')->nullable();
            $table->integer('uptime')->nullable();
            $table->integer('so')->nullable();
            $table->integer('device_id');
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
        Schema::dropIfExists('table_device');
    }
};
