<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceHistorySalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device_history_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained();
            $table->dateTime('sale_at');
            $table->float('litres');
            $table->json('money')->comment('cash and coin');
            $table->integer('all_payment');
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
        Schema::dropIfExists('device_history_sales');
    }
}
