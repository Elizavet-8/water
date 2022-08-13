<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->unique()->constrained();
            $table->boolean('low_pressure');
            $table->boolean('hopper');
            $table->boolean('report_every_day');
            $table->boolean('open_door');
            $table->boolean('control_counter_water');
            $table->boolean('error_payment_bank_card');
            $table->boolean('status_coin');
            $table->boolean('status_cash');
            $table->boolean('no_signal');
            $table->boolean('no_sales_two_hours');
            $table->boolean('restart_payment');
            $table->boolean('no_change');
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
        Schema::dropIfExists('device_notifications');
    }
}
