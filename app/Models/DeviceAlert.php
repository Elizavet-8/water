<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeviceAlert
 *
 * @property int $id
 * @property int $device_id
 * @property string $title
 * @property bool $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceAlert whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeviceAlert extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id", "title", 'active'
    ];

    protected $casts = [
        "device_id" => "integer",
        "active" => 'boolean'
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
