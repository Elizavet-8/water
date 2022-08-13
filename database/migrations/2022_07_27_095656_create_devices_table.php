<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained();
            $table->string('address');
            $table->string('note')->nullable();
            $table->string('lat');
            $table->string('long');
            $table->string('IMEI');
            $table->integer('percent_signal');
            $table->string('firmware');
            $table->integer('balanceSIM');
            $table->integer('temperature')->nullable();
            $table->integer('uv_lamp')->nullable();
            $table->integer('money');
            $table->integer('litres');
            $table->dateTime('last_online_at');
            $table->dateTime('last_sale_at');
            $table->dateTime('service_at');
            $table->dateTime('on_date_at');
            $table->dateTime('update_date_at');
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
        Schema::dropIfExists('devices');
    }
}
