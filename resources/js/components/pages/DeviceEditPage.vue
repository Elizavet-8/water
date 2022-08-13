<template>
    <section class="device-edit">
        <div class="container">
            <h2 class="device__title">
                353453, РФ, Краснодарский край, г.Анапа, ул. Владимирская д.120 пом.235
            </h2>
            <form class="device-edit__form form">
                <b-tabs>
                    <b-tab active>
                        <template #title>
                            <div class="text-center nav__item">
                                Основные настройки
                            </div>
                        </template>
                        <div class="device-edit__tab-content pt-4">
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    IMEI*
                                </label>
                                <input class="form__input" type="number">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Тип аппарата*
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Номер SIM*
                                </label>
                                <input class="form__input tel" type="tel">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Часовой пояс*
                                </label>
                                <v-select :options="options"></v-select>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Валюта*
                                </label>
                                <v-select :options="options"></v-select>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Телефон поддержки*
                                </label>
                                <input class="form__input tel" type="tel">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Адресс установки аппарата*
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Точный адресс установки аппарата*
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Оплата через приложение
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Примечание
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Цена за литр, <b>₽</b>*
                                </label>
                                <input class="form__input" type="number">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Цена за литр по 1C карте, <b>₽</b>*
                                </label>
                                <input class="form__input" type="number">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Цена за 1 литр по банковской карте, <b>₽</b>*
                                </label>
                                <input class="form__input" type="number">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Обнулить счетчик литров аппарата
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Перезагрузить платёжную систему
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Разрешить розлив
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Сотовый оператор
                                </label>
                                <v-select :options="options"></v-select>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Датчик низкого давления
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Наличие хоппера
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Отправлять ежедневный отчёт
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Датчик открытия двери
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Датчик минимального уровня воды в баке
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Контроль разливного счётчика
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Ошибка при оплате банковской картой
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Статус монетника
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Статус купюрника
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Аппарат давно не выходил на связь
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    В аппарате более 2-х часов не было продаж
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    Кончилась сдача
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Дата обслуживания
                                </label>
                                <v-date-picker v-model="date" is24hr>
                                    <template v-slot="{ inputValue, inputEvents }">
                                        <input
                                            class="form__input px-2 py-1 border rounded focus:outline-none focus:border-blue-300"
                                            :value="inputValue"
                                            v-on="inputEvents"
                                        />
                                    </template>
                                </v-date-picker>
                            </div>
                        </div>
                    </b-tab>
                    <b-tab>
                        <template #title>
                            <div class="text-center nav__item">
                                Плата управления
                            </div>
                        </template>
                        <div class="device-edit__tab-content pt-4">
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Купюроприемник, число импульсов
                                </label>
                                <input class="form__input" type="number">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Монетоприемник, число импульсов
                                </label>
                                <input class="form__input" type="number">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Число импульсов <span v-if="value !== null" class="range__value">({{value }})</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            100
                                        </span>
                                        <input class="range__input" type="range" min="100" max="1000" v-model="value">
                                        <span class="range__value_min">
                                            1000
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Число импульсов <span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            5
                                        </span>
                                        <input class="range__input" type="range" min="5" max="60">
                                        <span class="range__value_min">
                                            60
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Тип вывода на дисплей
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    ID номер IC карты<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            0
                                        </span>
                                        <input class="range__input" type="range" min="0" max="255">
                                        <span class="range__value_min">
                                            255
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Тип NFC
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Термостат, тепература включения<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            0
                                        </span>
                                        <input class="range__input" type="range" min="0" max="49">
                                        <span class="range__value_min">
                                            49
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Термостат, тепература отключения<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            0
                                        </span>
                                        <input class="range__input" type="range" min="0" max="50">
                                        <span class="range__value_min">
                                            50
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Тип дисплея
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Автостоп наличные/банк.карта<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            0
                                        </span>
                                        <input class="range__input" type="range" min="0" max="19">
                                        <span class="range__value_min">
                                            19
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Таймаут сброса баланса<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            60
                                        </span>
                                        <input class="range__input" type="range" min="60" max="600">
                                        <span class="range__value_min">
                                            600
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Выдавать сдачу после покупки<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            0
                                        </span>
                                        <input class="range__input" type="range" min="0" max="5">
                                        <span class="range__value_min">
                                            5
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Длительность озонирования<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            10
                                        </span>
                                        <input class="range__input" type="range" min="10" max="30">
                                        <span class="range__value_min">
                                            30
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit-check check">
                                    <input class="device-edit-check__input check__input" type="checkbox">
                                    <span class="device-edit-check__box check__box">
                                        <i class="device-edit-check__svg check__svg fa-solid fa-check"></i>
                                    </span>
                                    УЗ датчик
                                </label>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Тип платы управления
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Автостоп IC карта<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            1
                                        </span>
                                        <input class="range__input" type="range" min="1" max="30" v-model="value">
                                        <span class="range__value_min">
                                            30
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    1-5-19
                                </label>
                                <input class="form__input" type="text">
                            </div>
                            <div class="device-edit__group form__group">
                                <label class="device-edit__label form__label">
                                    Период дезинфекции в минутах<span class="range__value">()</span>
                                </label>
                                <div class="range">
                                    <div class="range__row">
                                        <span class="range__value_min">
                                            0
                                        </span>
                                        <input class="range__input" type="range" min="0" max="120" v-model="value">
                                        <span class="range__value_min">
                                            120
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </b-tab>
                </b-tabs>
                <div class="form__btns">
                    <button class="form__btn" type="submit">Сохранить</button>
                    <button class="form__btn form__btn_red" type="submit">Удалить</button>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
import Vue from 'vue'
//селект
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)
Vue.component('v-select', VueSelect.VueSelect)
import 'vue-select/dist/vue-select.css';
import {VueSelect} from "vue-select/src";
//календарь
import VCalendar from 'v-calendar';
Vue.use(VCalendar, {
    componentPrefix: 'vc',
});
import Calendar from 'v-calendar/lib/components/calendar.umd'
import DatePicker from 'v-calendar/lib/components/date-picker.umd'
Vue.component('calendar', Calendar)
Vue.component('date-picker', DatePicker)

export default {
    name: "DeviceEditPage",
    components: {
        Calendar,
        DatePicker
    },
    data: () => ({
        value: null,
        options: [
            'foo',
            'bar',
            'baz'
        ],
        date: new Date(),
    })
}
</script>

<style scoped>

</style>
