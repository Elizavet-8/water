<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeviceStoreRequest;
use App\Http\Resources\DeviceCollection;
use App\Http\Resources\DeviceResource;
use App\Http\Resources\HistorySalesResource;
use App\Models\Device;
use App\Models\DeviceAlert;
use App\Models\DeviceControlBoard;
use App\Models\DeviceEncashment;
use App\Models\DeviceFinance;
use App\Models\DeviceHistorySales;
use App\Models\DeviceInfo;
use App\Models\DeviceNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

/**
 * @OA\Get(
 *     path="/api/devices",
 *     summary="Информация о всех устройств",
 *     description="Получение информации о всех устройствах",
 *     tags={"Devices"},
 *     @OA\Response(response="200", description="OK",
 *
 *     @OA\JsonContent(
 *      @OA\Property(property="id", type="integer", example="1"),
 *      @OA\Property(property="owner_title", type="string", example="AKVATOR"),
 *      @OA\Property(property="note", type="string", example="869270049910291"),
 *      @OA\Property(property="lat", type="string", example="N 46 0' 59.62985''"),
 *      @OA\Property(property="long", type="string", example="E 53 26' 19.51070''"),
 *      @OA\Property(property="IMEI", type="string", example="869270049910291"),
 *      @OA\Property(property="percent_signal", type="integer", example="79"),
 *      @OA\Property(property="firmware", type="string", example="v 4.5.33"),
 *      @OA\Property(property="balanceSIM", type="integer", example="218"),
 *      @OA\Property(property="temperature", type="integer"),
 *      @OA\Property(property="uv_lamp", type="integer"),
 *      @OA\Property(property="money", type="integer", example="546"),
 *      @OA\Property(property="litres", type="integer", example="266"),
 *      @OA\Property(property="last_online_at", type="datetime"),
 *      @OA\Property(property="last_sale_at", type="datetime"),
 *      @OA\Property(property="service_at", type="datetime"),
 *      @OA\Property(property="on_date_at", type="datetime"),
 *      @OA\Property(property="update_date_at", type="datetime"),
 *      @OA\Property(property="device_info", type="array", @OA\Items()),
 *     @OA\Property(property="control_board", type="array", @OA\Items()),
 *     @OA\Property(property="finances", type="array", @OA\Items()),
 *     @OA\Property(property="alerts", type="array", @OA\Items()),
 *     )
 *     ),
 *     @OA\Response(response="default", description="Unauthorized user",)
 * ),
 * )
 */
class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return response(new DeviceCollection($devices), 200);
    }

    /**
     * @OA\POST(
     *     path="/api/device",
     *     summary="Добавление нового устройства",
     *     description="Добавление нового устройства",
     *     tags={"Devices"},
     *     @OA\Response(response="200", description="OK"),
     *     @OA\Response(response="default", description="unexpected error",)
     * ),
     * )
     */
    public function store(Request $request)
    {
        $device = Device::create([
            'owner_id' => $request->owner_id,
            'address' => $request->address,
            'note' => $request->note,
            'lat' => $request->lat,
            'long' => $request->long,
            'IMEI' => $request->IMEI,
            'percent_signal' => $request->percent_signal,
            'firmware' => $request->firmware,
            'balanceSIM' => $request->balanceSIM,
            'temperature' => $request->temperature,
            'uv_lamp' => $request->uv_lamp,
            'money' => $request->money,
            'litres' => $request->litres,
            'last_online_at' => $request->last_online_at,
            'last_sale_at' => $request->last_sale_at,
            'service_at' => $request->service_at,
            'on_date_at' => $request->on_date_at,
            'update_date_at' => $request->update_date_at,
        ]);

        DeviceInfo::create([
            'device_id' => $device->id,
            'type' => $request->type,
            'mobile_operator' => $request->mobile_operator,
            'SIM_phone' => $request->SIM_phone,
            'time_zone' => $request->time_zone,
            'valute' => $request->valute,
            'support_phone' => $request->support_phone,
            'exact_address' => $request->exact_address,
            'pay_app' => $request->pay_app,
            'payment' => $request->payment,
            'reset_litres' => $request->reset_litres,
            'restart_payment' => $request->restart_payment,
            'allow_sell_water' => $request->allow_sell_water,
        ]);

        DeviceControlBoard::create([
            'device_id' => $device->id,
            'impulses' => $request->impulses,
            'timeout_sale_water' => $request->timeout_sale_water,
            'output_type_display' => $request->output_type_display,
            'id_ic_card' => $request->id_ic_card,
            'nfc' => $request->nfc,
            'thermostat' => $request->thermostat,
            'type_display' => $request->type_display,
            'autostop' => $request->autostop,
            'timeout_balance' => $request->timeout_balance,
            'change_after_litres' => $request->change_after_litres,
            'ozonation_time' => $request->ozonation_time,
            'ultrasonic_sensor' => $request->ultrasonic_sensor,
            'type_control_board' => $request->type_control_board,
            'desinfection' => $request->desinfection,
        ]);
    }

    public function oneDevice($id){
        $device = Device::find($id);
        return new DeviceResource($device);
    }
    /**
     * @OA\PUT(
     *     path="/api/device/edit",
     *     summary="Редактирование устройства",
     *     description="Редактирование уже существующего устройства",
     *     tags={"Devices"},
     *     @OA\Response(response="200", description="OK"),
     *     @OA\Response(response="default", description="unexpected error",)
     * ),
     * )
     */
    public function update(Request $request, $id)
    {
        $device = Device::find($request->id);
        $device::update([
            'address' => $request->address,
            'note' => $request->note,
            'lat' => $request->lat,
            'long' => $request->long,
            'IMEI' => $request->IMEI,
            'percent_signal' => $request->percent_signal,
            'firmware' => $request->firmware,
            'balanceSIM' => $request->balanceSIM,
            'temperature' => $request->temperature,
            'uv_lamp' => $request->uv_lamp,
            'money' => $request->money,
            'litres' => $request->litres,
            'last_online_at' => $request->last_online_at,
            'last_sale_at' => $request->last_sale_at,
            'service_at' => $request->service_at,
            'on_date_at' => $request->on_date_at,
            'update_date_at' => $request->update_date_at,
        ]);
        $device->save();

        $deviceInfo = DeviceInfo::where('device_id', '=', $device->id)->update([
            'type' => $request->type,
            'mobile_operator' => $request->mobile_operator,
            'SIM_phone' => $request->SIM_phone,
            'time_zone' => $request->time_zone,
            'valute' => $request->valute,
            'support_phone' => $request->support_phone,
            'exact_address' => $request->exact_address,
            'pay_app' => $request->pay_app,
            'payment' => $request->payment,
            'reset_litres' => $request->reset_litres,
            'restart_payment' => $request->restart_payment,
            'allow_sell_water' => $request->allow_sell_water,
        ]);
        $deviceInfo->save();

        $deviceControlBoard = DeviceControlBoard::where('device_id', '=', $device->id)->update([
            'impulses' => $request->impulses,
            'timeout_sale_water' => $request->timeout_sale_water,
            'output_type_display' => $request->output_type_display,
            'id_ic_card' => $request->id_ic_card,
            'nfc' => $request->nfc,
            'thermostat' => $request->thermostat,
            'type_display' => $request->type_display,
            'autostop' => $request->autostop,
            'timeout_balance' => $request->timeout_balance,
            'change_after_litres' => $request->change_after_litres,
            'ozonation_time' => $request->ozonation_time,
            'ultrasonic_sensor' => $request->ultrasonic_sensor,
            'type_control_board' => $request->type_control_board,
            'desinfection' => $request->desinfection,
        ]);
        $deviceControlBoard->save();

        return response(null, 200);
    }

    /**
     * @OA\DELETE(
     *     path="/api/device/delete",
     *     summary="Удаление информации об устройстве",
     *     description="Удаление существующей информации об устройстве",
     *     tags={"Devices"},
     *     @OA\RequestBody(
     *    required=true,
     *    @OA\JsonContent(
     *       required={"id"},
     *       @OA\Property(property="id", type="integer", example="0"),
     *    ),
     * ),
     *     @OA\Response(response="200", description="OK"),
     *     @OA\Response(response="404", description="not found"),
     *     @OA\Response(response="default", description="unexpected error",)
     * ),
     * )
     */

    public function delete($id)
    {
        $device = Device::find($id);
        $device->controlBoard->delete();
        $device->info->delete();
        $device->finance->delete();
        $device->encashment->delete();
        $device->historySales->delete();
        $device->notification->delete();
        $device->alert->delete();
        Device::destroy($id);
        //      Device::find($id)->delete();
        return response(null, 200);
    }
}
