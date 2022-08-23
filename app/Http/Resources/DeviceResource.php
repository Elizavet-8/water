<?php

namespace App\Http\Resources;

use App\Models\Device;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\HistorySalesResource;

class DeviceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'owner_title' => $this->owner->title,
            'address' => $this->address,
            'note' => $this->note,
            'lat' => $this->lat,
            'long' => $this->long,
            'IMEI' => $this->IMEI,
            'percent_signal' => $this->percent_signal,
            'firmware' => $this->firmware,
            'balanceSIM' => $this->balanceSIM,
            'temperature' => $this->temperature,
            'uv_lamp' => $this->uv_lamp,
            'money' => $this->money,
            'litres' => $this->litres,
            'last_online_at' => $this->last_online_at,
            'last_sale_at' => $this->last_sale_at,
            'service_at' => $this->service_at,
            'service_at_display'  => Carbon::parse($this->service_at)->format('d.m.y'),
            'on_date_at' => $this->on_date_at,
            'update_date_at' => $this->update_date_at,
            'device_info' => $this->info,
            'control_board' => $this->controlBoard,
            'finances' => $this->finance,
            'alerts' => $this->when($this->alert, $this->alert),
            'history_sales' => $this->when($this->historySales, new HistorySalesCollection($this->historySales)),
//            'history_sales_chart' => $this->history->sale_at_chart,
            // 'history_sales_chart' => $this->when($this->history->sale_at_chart, $this->history->sale_at_chart),
        ];
    }
}
