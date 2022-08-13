<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeviceFinance
 *
 * @property int $id
 * @property int $device_id
 * @property array $price
 * @property array|null $last_encashment
 * @property array|null $last_sale
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance whereLastEncashment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance whereLastSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceFinance whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeviceFinance extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id", "price", "last_encashment", "last_sale"
    ];

    protected $casts = [
        "device_id" => 'integer',
        "price" => 'array',
        "last_encashment" => 'array',
        "last_sale" => 'array',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
