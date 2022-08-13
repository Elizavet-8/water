<template>
    <section id="terminals" class="terminals">
        <div class="container">
            <div class="terminals-search">
                <div class="terminals-search__group">
                    <i class="terminals-search__icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="terminals-search__input" placeholder="Адрес">
                </div>
                <div class="terminals-search__group">
                    <i class="terminals-search__icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="terminals-search__input" placeholder="Email">
                </div>
                <div class="terminals-search__group">
                    <i class="terminals-search__icon fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="terminals-search__input" placeholder="По дате запуска">
                </div>
                <button class="terminals-search__btn btn-none">
                    <i class="terminals-search__svg fa-solid fa-filter"></i>
                </button>
            </div>
            <b-tabs>
                <b-tab>
                    <template #title>
                        <div class="terminals-nav__item text-center nav__item">
                            Деньги
                        </div>
                    </template>
                    <table class="terminals-table table">
                        <tr class="terminals-table-head table-head">
                            <th class="terminals-table-head__item table-head__item">№</th>
                            <th class="terminals-table-head__item table-head__item">Адрес</th>
                            <th class="terminals-table-head__item table-head__item">Примечание</th>
                            <th class="terminals-table-head__item table-head__item">V,tC&#176;</th>
                            <th class="terminals-table-head__item table-head__item">УФ лампа</th>
                            <th class="terminals-table-head__item table-head__item">Деньги</th>
                            <th class="terminals-table-head__item table-head__item">Последний выход на связь</th>
                            <th class="terminals-table-head__item table-head__item">Последняя продажа</th>
                            <th class="terminals-table-head__item table-head__item">Всего</th>
                            <th class="terminals-table-head__item table-head__item">device:alerts</th>
                            <th class="terminals-table-head__item table-head__item">Обслуживание</th>
                        </tr>
                        <tr class="terminals-table-row table-row">
                            <td class="terminals-table-row__item table-row__item">
                                1
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                353453, РФ, Краснодарский край, г.Анапа, ул. Владимирская д.120 пом.235
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                24524752557
                            </td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>52258 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                01:40 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                02:30 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>545 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <div class="terminals-table-row__icon_center">
                                    <i class="terminals-table-row__icon table-row__icon table-row__icon_green fa-solid fa-circle-check"></i>
                                </div>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_black fa-solid fa-calendar-days"></i>
                                <span class="table-row__date">30.02.22</span>
                            </td>
                        </tr>
                        <tr class="terminals-table-row table-row">
                            <td class="terminals-table-row__item table-row__item">
                                2
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                353453, РФ, Краснодарский край, г.Анапа, ул. Владимирская д.120 пом.235
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                24524752557
                            </td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item"></td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>52258 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                01:40 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                02:30 PM
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <b>545 ₽</b>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <div class="terminals-table-row__icon_center">
                                    <i class="terminals-table-row__icon table-row__icon table-row__icon_red fa-solid fa-circle-xmark"></i>
                                </div>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_black fa-solid fa-calendar-days"></i>
                                <span class="table-row__date">30.02.22</span>
                            </td>
                        </tr>
                    </table>
                </b-tab>
                <b-tab active>
                    <template #title>
                        <div class="terminals-nav__item text-center nav__item">
                            Приборы
                        </div>
                    </template>
                    <table class="terminals-table table">
                        <tr class="terminals-table-head table-head">
                            <th class="terminals-table-head__item table-head__item">№</th>
                            <th class="terminals-table-head__item table-head__item">
                                Владелец<br>
                                VENDOR
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Мировые координаты<br>
                                GPS LOCATION
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Адрес аппарата<br>
                                VENDING MACHINE ADRESS
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Последняя продажа (количество/деньги/время транзакции)<br>
                                Latest Sale (quantity/money/transaction time)
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Выход на связь<br>
                                Cnnectivity TIME
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Обслуживание<br>
                                Service
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Предупреждения<br>
                                ALERTS
                            </th>
                            <th class="terminals-table-head__item table-head__item">
                                Действия
                            </th>
                        </tr>
                        <tr class="terminals-table-row table-row" v-for="(device, index) in devices">
                            <td class="terminals-table-row__item table-row__item">
                                {{ index + 1 }}
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                {{ device.owner_title }}
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                {{ device.lat }} <br>
                                {{ device.long }}
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                {{ device.address }}
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <ul v-if="device.history_sales.length > 0">
                                    <li v-for="sale in device.history_sales">
                                        {{ sale.litres }}л/
                                        <span v-if="sale.money.cash !== null">деньги: {{ sale.money.cash }}</span>
                                        <span v-if="sale.money.coin !== null">монеты: {{ sale.money.coin }}</span>
                                        /{{ sale.sale_at_display }}
                                    </li>
                                </ul>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <i class="terminals-table-row__icon table-row__icon table-row__icon_gray fa-solid fa-clock"></i>
                                {{ device.last_online_at }}
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                {{ device.service_at }}
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <ul v-if="device.alerts.length > 0">
                                    <li v-for="alert in device.alerts">{{ alert.title }}</li>
                                </ul>
                            </td>
                            <td class="terminals-table-row__item table-row__item">
                                <div class="table-row__links">
                                    <a :href="'/device/'+ device.id" class="table-row__link">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a :href="'/device/edit/'+ device.id" class="table-row__link">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <button class="btn-none" @click="deleteDevice(device.id)">
                                        <i class="fa-solid fa-trash-can table-row__icon_red"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </b-tab>
            </b-tabs>
        </div>
    </section>
</template>

<script>
// import 'bootstrap-vue/dist/bootstrap-vue.css'
import {BootstrapVue} from 'bootstrap-vue';
import axios from "axios";
import Vue from "vue";

Vue.use(BootstrapVue)
export default {
    name: "TerminalsPage",
    data: () => ({
        devices: [],
        userLastCount: null
    }),
    mounted() {
        axios.get('/api/devices').then(
            response => {
                this.devices = response.data;
            }).catch(error => console.log(error)
        )
    },
    methods: {
        deleteDevice(id) {
            // this.axios
            // .delete(`/api/device/delete/${id}`)
            // .then(response => {
            //     let i = this.devices.map(data => data.id).indexOf(id);
            //     this.devices.splice(i, 1)
            //     alert("OK")
            // });
            // let uri = `/api/device/delete/${id}`;
            // console.log(uri);
            this.axios
                .post(`/api/device/delete/{$id}`, {_method:'delete'})
                .then(response => {
                    this.devices.splice(this.devices.indexOf(id), 1);
                });
        }
    }
}

</script>

<style lang="scss">

@import "../../../sass/variables.scss";

.terminals {
    &-search {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 2rem;
        margin: 0 -1rem 4rem;

        &__group {
            position: relative;
            margin: 0 1rem;
        }

        &__icon {
            position: absolute;
            left: 1.1rem;
            bottom: 1.5rem;
            font-size: 1.9rem;
            color: $black;
        }

        &__svg {
            font-size: 2rem;
            color: $black;
        }
    }

    &-table {
        &-row {
            &__icon {
                &_center {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 100%;
                    height: 100%;
                }
            }
        }
    }
}
</style>
