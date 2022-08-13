<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->unique()->constrained();
            $table->string('type');
            $table->string('mobile_operator');
            $table->string('SIM_phone');
            $table->string('time_zone');
            $table->string('valute');
            $table->string('support_phone');
            $table->string('exact_address');
            $table->boolean('pay_app')->default(false);
            $table->json('payment')->comment('цена за литр');
            $table->boolean('reset_litres');
            $table->boolean('restart_payment');
            $table->boolean('allow_sell_water');
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
        Schema::dropIfExists('device_infos');
    }
}
