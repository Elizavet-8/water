<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceControlBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_control_boards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->unique()->constrained();
            $table->json('impulses')->comment('cash, coin, sale_water');
            $table->integer('timeout_sale_water');
            $table->string('output_type_display');
            $table->integer('id_ic_card');
            $table->string('nfc');
            $table->json('thermostat')->comment('temp_on, temp_off');
            $table->string('type_display');
            $table->json('autostop')->comment('cash_or_card, ic_card');
            $table->integer('timeout_balance');
            $table->float('change_after_litres');
            $table->integer('ozonation_time');
            $table->boolean('ultrasonic_sensor');
            $table->string('type_control_board');
            $table->integer('desinfection');

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
        Schema::dropIfExists('device_control_boards');
    }
}
