<template>
    <div class="device-collection">
        <ul class="device-collection__cards cards">
            <CardGeneral v-for="(card, index) in cards" :key="card.count + index" :card="card"></CardGeneral>
        </ul>
        <table class="device-collection-table table">
            <tr class="device-collection-table-head table-head">
                <th class="device-collection-table-head__item table-head__item">№</th>
                <th class="device-collection-table-head__item table-head__item">Дата</th>
                <th class="device-collection-table-head__item table-head__item">Всего</th>
                <th class="device-collection-table-head__item table-head__item">В купюрах</th>
                <th class="device-collection-table-head__item table-head__item">В монетах</th>
            </tr>
            <tr class="device-collection-table-row table-row">
                <td class="device-collection-table-row__item table-row__item text-center">
                    1
                </td>
                <td class="device-collection-table-row__item table-row__item text-center">
                    08.07.2020-08.07.2022
                </td>
                <td class="device-collection-table-row__item table-row__item text-center">
                    245247
                </td>
                <td class="device-collection-table-row__item table-row__item text-center">
                    52557
                </td>
                <td class="device-collection-table-row__item table-row__item text-center">
                    52557
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
import CardGeneral from "../general/CardGeneral.vue";
export default {
    name: "CollectionTable",
    components: {
        CardGeneral,
    },
    data: () => ({
        cards: [
            {
                text: 'Всего за весь период',
                count: '0₽',
                icon: 'fa-money-bill',
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

<style scoped>

</style>
