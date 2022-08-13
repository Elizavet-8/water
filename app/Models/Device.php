<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Device
 *
 * @property int $id
 * @property int $owner_id
 * @property string $address
 * @property string $note
 * @property string $lat
 * @property string $long
 * @property string $IMEI
 * @property int $percent_signal
 * @property string $firmware
 * @property int $balanceSIM
 * @property int|null $temperature
 * @property int|null $uv_lamp
 * @property int $money
 * @property int $litres
 * @property \Illuminate\Support\Carbon $last_online_at
 * @property \Illuminate\Support\Carbon $last_sale_at
 * @property \Illuminate\Support\Carbon $service_at
 * @property \Illuminate\Support\Carbon $on_date_at
 * @property \Illuminate\Support\Carbon $update_date_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeviceAlert[] $alert
 * @property-read int|null $alert_count
 * @property-read \App\Models\DeviceControlBoard|null $controlBoard
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeviceEncashment[] $encashment
 * @property-read int|null $encashment_count
 * @property-read \App\Models\DeviceFinance|null $finance
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeviceHistorySales[] $historySales
 * @property-read int|null $history_sales_count
 * @property-read \App\Models\DeviceInfo|null $info
 * @property-read \App\Models\DeviceNotification|null $notification
 * @property-read \App\Models\Owner $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Device newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Device query()
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereBalanceSIM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereFirmware($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereIMEI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLastOnlineAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLastSaleAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLitres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereOnDateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device wherePercentSignal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereServiceAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUpdateDateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Device whereUvLamp($value)
 * @mixin \Eloquent
 */
class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        "owner_id", "address", "note", "lat", "long", "IMEI", "percent_signal",
        "firmware", "balanceSIM", "temperature", "uv_lamp", "money", "litres",
        "last_online_at", "last_sale_at", "service_at", "on_date_at", "update_date_at"
    ];

    protected $casts = [
        "owner_id" => 'integer',
        "percent_signal" => 'integer',
        "balanceSIM" => 'integer',
        "temperature" => 'integer',
        "uv_lamp" => 'integer',
        "money" => 'integer',
        "litres" => 'integer',
        "last_online_at" => 'datetime',
        "last_sale_at" => 'datetime',
        "service_at" => 'datetime',
        "on_date_at" => 'datetime',
        "update_date_at" => 'datetime',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function alert()
    {
        return $this->hasMany(DeviceAlert::class);
    }

    public function controlBoard()
    {
        return $this->hasOne(DeviceControlBoard::class);
    }

    public function encashment()
    {
        return $this->hasMany(DeviceEncashment::class);
    }

    public function finance()
    {
        return $this->hasOne(DeviceFinance::class);
    }

    public function info()
    {
        return $this->hasOne(DeviceInfo::class);
    }

    public function notification()
    {
        return $this->hasOne(DeviceNotification::class);
    }

    public function historySales()
    {
        return $this->hasMany(DeviceHistorySales::class);
    }
}
