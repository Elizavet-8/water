<?php

namespace App\Http\Controllers;

use App\Http\Resources\HistorySalesCollection;
use App\Models\DeviceHistorySales;
use Illuminate\Http\Request;

class DeviceHistorySalesController extends Controller
{
    /**
     * @OA\GET(
     *     path="/api/device/{deviceId}/historySales",
     *     summary="Информация о всех продажах выбранного устройства",
     *     description="Получение информации о всех продажах выбранного устройства",
     *     tags={"HistorySales"},
     *     @OA\Parameter(
     *    description="ID устройства",
     *    in="path",
     *    name="deviceId",
     *    required=true,
     *    example="1",
     *    @OA\Schema(
     *       type="integer",
     *       format="int"
     *    )
     * ),
     *     @OA\Response(response="200", description="OK",
     *     @OA\JsonContent(
     *      @OA\Property(property="id", type="integer", example="1"),
     *      @OA\Property(property="device_id", type="integer", example="2"),
     *      @OA\Property(property="price", type="array", @OA\Items(
     *      @OA\Property(property="app", type="integer", example="2"),
     *      @OA\Property(property="card", type="integer", example="2"),
     *      @OA\Property(property="cash", type="integer", example="2"),
     *      )),
     *      @OA\Property(property="sale_at", type="datetime"),
     *      @OA\Property(property="sale_at_display", type="string", example="28.07.22 13:29:49"),
     *
     *      @OA\Property(property="litres", type="integer", example="5"),
     *      @OA\Property(property="money", type="array", @OA\Items(
     *      @OA\Property(property="cash", type="integer", example="null"),
     *      @OA\Property(property="coin", type="integer", example="10"),
     *      )),
     *      @OA\Property(property="priceSale", type="integer", example="10"),
     *      @OA\Property(property="change", type="integer", example="0"),
     *     )
     * ),
     *     @OA\Response(response="default", description="unexpected error",)
     * ),
     * )
     */

    public function getHistorySalesByDevice($deviceId)
    {
        $devices = DeviceHistorySales::where('device_id', '=', $deviceId)->get();
        return response(new HistorySalesCollection($devices), 200);
    }
}
