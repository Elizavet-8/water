<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DeviceNotification
 *
 * @property int $id
 * @property int $device_id
 * @property bool $low_pressure
 * @property bool $hopper
 * @property bool $report_every_day
 * @property bool $open_door
 * @property bool $control_counter_water
 * @property bool $error_payment_bank_card
 * @property bool $status_coin
 * @property bool $status_cash
 * @property bool $no_signal
 * @property bool $no_sales_two_hours
 * @property bool $restart_payment
 * @property bool $no_change
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Device $device
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereControlCounterWater($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereDeviceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereErrorPaymentBankCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereHopper($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereLowPressure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereNoChange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereNoSalesTwoHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereNoSignal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereOpenDoor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereReportEveryDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereRestartPayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereStatusCash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereStatusCoin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeviceNotification whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DeviceNotification extends Model
{
    use HasFactory;

    protected $fillable = [
        "device_id", "low_pressure", "hopper", "report_every_day", "open_door",
        "control_counter_water", "error_payment_bank_card", "status_coin",
        "status_cash", "no_signal", "no_sales_two_hours", "restart_payment",
        "no_change"
    ];

    protected $casts = [
        "device_id" => 'integer',
        "low_pressure" => 'boolean',
        "hopper" => 'boolean',
        "report_every_day" => 'boolean',
        "open_door" => 'boolean',
        "control_counter_water" => 'boolean',
        "error_payment_bank_card" => 'boolean',
        "status_coin" => 'boolean',
        "status_cash" => 'boolean',
        "no_signal" => 'boolean',
        "no_sales_two_hours" => 'boolean',
        "restart_payment" => 'boolean',
        "no_change" => 'boolean',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
