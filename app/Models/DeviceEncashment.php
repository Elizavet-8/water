<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeviceEncashment
 *
 * @property int $id
 * @property int $device_id
 * @property array $money cash and coin
 * @property \Illuminate\Support\Carbon $encashment_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment whereEncashmentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceEncashment whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeviceEncashment extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id", "money", "encashment_at"
    ];

    protected $casts = [
        "device_id" => 'integer',
        "money" => 'array',
        "encashment_at" => 'datetime',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
