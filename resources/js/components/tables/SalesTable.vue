<template>
    <div class="device-sales">
        <ul class="device-sales__cards cards">
            <CardGeneral v-for="(card, index) in cards" :key="card.count + index" :card="card"></CardGeneral>
        </ul>
        <table class="device-sales-table table">
            <tr class="device-sales-table-head table-head">
                <th class="device-sales-table-head__item table-head__item">№</th>
                <th class="device-sales-table-head__item table-head__item">Время</th>
                <th class="device-sales-table-head__item table-head__item">Литры</th>
                <th class="device-sales-table-head__item table-head__item">Всего</th>
                <th class="device-sales-table-head__item table-head__item"></th>
            </tr>
            <tr class="device-sales-table-row table-row">
                <td class="device-sales-table-row__item table-row__item text-center">
                    1
                </td>
                <td class="device-sales-table-row__item table-row__item text-center">
                    08.07.2020-08.07.2022
                </td>
                <td class="device-sales-table-row__item table-row__item text-center">
                    245247
                </td>
                <td class="device-sales-table-row__item table-row__item text-center">
                    52557
                </td>
                <td class="device-sales-table-row__item table-row__item text-center">
                    52557
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
import CardGeneral from "../general/CardGeneral.vue";
export default {
    name: "SalesTable",
    components: {
        CardGeneral,
    },
    data: () => ({
        cards: [
            {
                text: 'Всего за весь период',
                count: '52258₽ 52258n',
                icon: 'fa-money-bill',
            },
            {
                text: '',
                count: '52258₽',
                icon: 'fa-dollar-sign',

            },
            {
                text: '',
                count: '52258₽',
                icon: 'fa-coins',
            },
            {
                text: '',
                count: '52258₽',
                icon: 'fa-arrow-rotate-right',
            },
            {
                text: 'Период',
                count: '08.07.2020-08.07.2022',
                icon: 'fa-calendar',
            },
        ]
    })
}
</script>

<style lang="scss">

</style>
