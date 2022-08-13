<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeviceInfo
 *
 * @property int $id
 * @property int $device_id
 * @property string $type
 * @property string $mobile_operator
 * @property string $SIM_phone
 * @property string $time_zone
 * @property string $valute
 * @property string $support_phone
 * @property string $exact_address
 * @property bool $pay_app
 * @property array $payment цена за литр
 * @property bool $reset_litres
 * @property bool $restart_payment
 * @property bool $allow_sell_water
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereAllowSellWater($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereExactAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereMobileOperator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo wherePayApp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereResetLitres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereRestartPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereSIMPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereSupportPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceInfo whereValute($value)
 * @mixin \Eloquent
 */
class DeviceInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id", "type", "mobile_operator", "SIM_phone", "time_zone", "valute",
        "support_phone", "exact_address", "pay_app", "payment", "reset_litres",
        "restart_payment", "allow_sell_water"
    ];

    protected $casts = [
        "device_id" => 'integer',
        "pay_app" => 'boolean',
        "payment" => 'array',
        "reset_litres" => 'boolean',
        "restart_payment" => 'boolean',
        "allow_sell_water" => 'boolean',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
