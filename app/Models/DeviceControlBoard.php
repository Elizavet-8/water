<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeviceControlBoard
 *
 * @property int $id
 * @property int $device_id
 * @property array $impulses cash, coin, sale_water
 * @property int $timeout_sale_water
 * @property string $output_type_display
 * @property int $id_ic_card
 * @property string $nfc
 * @property array $thermostat temp_on, temp_off
 * @property string $type_display
 * @property array $autostop cash_or_card, ic_card
 * @property int $timeout_balance
 * @property float $change_after_litres
 * @property int $ozonation_time
 * @property bool $ultrasonic_sensor
 * @property string $type_control_board
 * @property int $desinfection
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereAutostop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereChangeAfterLitres($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereDesinfection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereIdIcCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereImpulses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereNfc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereOutputTypeDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereOzonationTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereThermostat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereTimeoutBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereTimeoutSaleWater($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereTypeControlBoard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereTypeDisplay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereUltrasonicSensor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceControlBoard whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeviceControlBoard extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id", 'impulses', 'timeout_sale_water', "output_type_display", "id_ic_card",
        "nfc", "thermostat", "type_display", "autostop", "timeout_balance", "change_after_litres",
        "ozonation_time", "ultrasonic_sensor", "type_control_board", "desinfection"
    ];

    protected $casts = [
        "device_id" => 'integer',
        "impulses" => 'array',
        "timeout_sale_water" => 'integer',
        "id_ic_card" => 'integer',
        "thermostat" => 'array',
        "autostop" => 'array',
        "timeout_balance" => 'integer',
        "change_after_litres" => 'float',
        "ozonation_time" => 'integer',
        "ultrasonic_sensor" => 'boolean',
        "desinfection" => 'integer',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
