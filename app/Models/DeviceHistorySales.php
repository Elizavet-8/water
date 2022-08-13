<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeviceHistorySales
 *
 * @property int $id
 * @property int $device_id
 * @property \Illuminate\Support\Carbon $sale_at
 * @property int $litres
 * @property array $money cash and coin
 * @property int $all_payment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereAllPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereLitres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereSaleAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceHistorySales whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeviceHistorySales extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id", "sale_at", "litres", "money", "all_payment"
    ];

    protected $casts = [
        "device_id" => 'integer',
        "sale_at" => 'datetime',
        "litres" => 'integer',
        "money" => 'array',
        "all_payment" => 'integer',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    public function scopeFilters($query, $filters)
    {

    }
}
