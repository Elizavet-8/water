<template>
    <b-tabs class="device-condition-tab">
        <b-tab>
            <template #title>
                <div class="device-condition-tab-nav__content">
                    <div class="device-condition-tab-nav__item">
                        <i class="device-condition-tab-nav__icon fa-solid fa-sack-dollar"></i>
                        <h3 class="device-condition-tab-nav__title text-center">
                            Финансовая информация
                        </h3>
                    </div>
                </div>
            </template>
            <ul class="device-condition__list">
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Стоимость литра
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Последняя инкассакция
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Последняя продажа
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Всего в аппарате
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
            </ul>
        </b-tab>
        <b-tab>
            <template #title>
                <div class="device-condition-tab-nav__content">
                    <div class="device-condition-tab-nav__item">
                        <i class="device-condition-tab-nav__icon fa-solid fa-circle-info"></i>
                        <h3 class="device-condition-tab-nav__title text-center">
                            Общая информация
                        </h3>
                    </div>
                </div>
            </template>
            <ul class="device-condition__list">
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Дата обслуживания
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Устройство включено
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Устройство обновлено
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        IMEI
                    </h5>
                    <div class="device-condition__text">
                        {{ deviceCondition.IMEI }}
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Прошивка платы управления
                    </h5>
                    <div class="device-condition__text">
                        {{ deviceCondition.firmware }}
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Уровень сигнала
                    </h5>
                    <div class="device-condition__text">
                        {{ deviceCondition.percent_signal }}
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Баланс SIM
                    </h5>
                    <div class="device-condition__text">
                        {{ deviceCondition.balanceSIM }}
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Оплата через приложение
                    </h5>
                    <div class="device-condition__text">
                        -
                    </div>
                </li>
            </ul>
        </b-tab>
        <b-tab>
            <template #title>
                <div class="device-condition-tab-nav__content">
                    <div class="device-condition-tab-nav__item">
                        <i class="device-condition-tab-nav__icon fa-solid fa-arrows-up-down-left-right"></i>
                        <h3 class="device-condition-tab-nav__title text-center">
                            Плата управления
                        </h3>
                    </div>
                </div>
            </template>
            <ul class="device-condition__list">
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Стоимость литра
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
            </ul>
        </b-tab>
        <b-tab>
            <template #title>
                <div class="device-condition-tab-nav__content">
                    <div class="device-condition-tab-nav__item">
                        <i class="device-condition-tab-nav__icon fa-solid fa-calculator"></i>
                        <h3 class="device-condition-tab-nav__title text-center">
                            Приборы
                        </h3>
                    </div>
                </div>
            </template>
            <ul class="device-condition__list">
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Розлито воды всего
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        ХВС
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Электроэнергия
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Минерализация
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Давление
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Пермеат
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Концетрат
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        t текущая
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        t включания
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        t выключения
                    </h5>
                    <div class="device-condition__text">
                        2558
                    </div>
                </li>
            </ul>
        </b-tab>
        <b-tab>
            <template #title>
                <div class="device-condition-tab-nav__content">
                    <div class="device-condition-tab-nav__item">
                        <i class="device-condition-tab-nav__icon fa-solid fa-exclamation"></i>
                        <h3 class="device-condition-tab-nav__title text-center">
                            Предупреждения
                        </h3>
                    </div>
                </div>
            </template>
            <ul class="device-condition__list">
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        предупреждение
                    </h5>
                </li>
                <li class="device-condition__item">
                    <h5 class="device-condition__subtitle">
                        Предупреждений не обнаружено
                    </h5>
                </li>
            </ul>
        </b-tab>
        <b-tab active>
            <template #title>
                <div class="device-condition-tab-nav__content">
                    <div class="device-condition-tab-nav__item">
                        <i class="device-condition-tab-nav__icon fa-solid fa-arrow-trend-down"></i>
                        <h3 class="device-condition-tab-nav__title text-center">
                            Статистика
                        </h3>
                    </div>
                </div>
            </template>
            <div>
                <ul v-if="deviceCondition.history_sales.length > 0">
                    <li v-for="sale in deviceCondition.history_sales">{{ sale.sale_at_display }}
                        <b>{{ sale.sale_at_chart }}</b></li>
                </ul>
                <apexcharts class="pt-4"
                            width="850"
                            height="350"
                            type="area"
                            :options="chartOptions"
                            :series="series"
                ></apexcharts>
            </div>
        </b-tab>
    </b-tabs>
</template>

<script>
import VueApexCharts from 'vue-apexcharts'

export default {
    name: "ConditionTab",
    props: ['deviceCondition'],
    components: {
        apexcharts: VueApexCharts,
    },
    data: () => ({
        series: [],
        chartOptions: {
            // xaxis: {},
            xaxis: {
                // type: 'datetime',
                // categories: []
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
            colors: ['#008FFB', '#00E396', '#651dc5'],
            chart: {
                height: 350,
                type: "area",
                id: 'basic-area'
            },
            dataLabels: {
                enabled: true,
            },
            title: {
                text: "Объем продаж",
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            },
            stroke: {
                curve: 'smooth'
            }
        }
    }),
    created: function () {
        this.getData();
    },
    methods: {
        getData() {
            // let chartData_sale_date_and_litres = this.deviceCondition.history_sales.map((e, i) => {
            //     return [e.sale_at_chart, e.litres]
            // });
            // let chartData_sale_date_and_coin = this.deviceCondition.history_sales.map((e, i) => {
            //     return [e.sale_at_chart, e.money.coin]
            // });
            // let chartData_sale_date_and_cash = this.deviceCondition.history_sales.map((e, i) => {
            //     console.log([e.sale_at_chart, e.money.cash]);
            //     return [e.sale_at_chart, e.money.cash]
            // });
            //
            // this.series = [
            //     {
            //         name: 'Объем продаж - литры',
            //         data: chartData_sale_date_and_litres,
            //     },
            //     {
            //         name: 'Объем продаж - копейки',
            //         data: chartData_sale_date_and_coin,
            //     },
            //     {
            //         name: 'Объем продаж - наличные',
            //         data: chartData_sale_date_and_cash,
            //     },
            // ];
            let chartData_sale_date = this.deviceCondition.history_sales.map(e => e.sale_at);
            this.xaxis = {
                type: 'datetime',
                categories: chartData_sale_date,
            }
            console.log(chartData_sale_date);

            let chartData_sale_date_and_litres = this.deviceCondition.history_sales.map(e => e.litres);
            this.series = [
                {
                    name: 'Объем продаж - литры',
                    data: chartData_sale_date_and_litres,
                }
            ];
            console.log(chartData_sale_date_and_litres);
        },
    },
}
</script>

<style scoped>

</style>
