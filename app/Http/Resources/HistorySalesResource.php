<?php

namespace App\Http\Resources;

use App\Models\Device;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class HistorySalesResource extends JsonResource
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
            'device_id' => $this->device_id,
            'price' => (array)$this->device->finance->price,
            'sale_at' => $this->sale_at,
            'sale_at_display' => Carbon::parse($this->sale_at)->format('d.m.y H:i:s'),
            'litres' => $this->litres,
            'money' => $this->money,
            'priceSale' => $this->getPrice(),
            'change' => $this->getChange(),

            'sale_at_chart' => Carbon::parse($this->sale_at)->timestamp,
        ];
    }

    public function getPrice()
    {
        return (float)$this->litres * $this->device->finance->price['cash'];
    }

    public function getChange()
    {
        $cash = $this->money['cash'] ?? 0;
        $coin = $this->money['coin'] ?? 0;

        return ($cash + $coin) - ((float)$this->litres * $this->device->finance->price['cash']);
    }
}
