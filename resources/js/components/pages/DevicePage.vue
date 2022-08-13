<template>
    <section id="device" class="device">
        <div class="container" v-for="(item, index) in device">
            <h2 class="device__title">
                {{item.owner_title}}
            </h2>
            <b-tabs>
                <b-tab active>
                    <template #title>
                        <div class="text-center nav__item">
                            Состояние
                        </div>
                    </template>
                    <div class="tab-content_custom">
                        <ConditionTab :deviceCondition="item"></ConditionTab>
                    </div>
                </b-tab>
                <b-tab>
                    <template #title>
                        <div class="text-center nav__item">
                            Продажи
                        </div>
                    </template>
                    <SalesTable></SalesTable>
                </b-tab>
                <b-tab>
                    <template #title>
                        <div class="text-center nav__item">
                            Инкассации
                        </div>
                    </template>
                    <CollectionTable></CollectionTable>
                </b-tab>
            </b-tabs>
        </div>
    </section>
</template>

<script>
import SalesTable from "../tables/SalesTable.vue";
import CollectionTable from "../tables/CollectionTable.vue";
import ConditionTab from "../tabs/ConditionTab.vue";
import Vue from "vue";
import {BootstrapVue} from 'bootstrap-vue';
Vue.use(BootstrapVue)

export default {
    name: "DevicePage",
    components: {
        SalesTable,
        CollectionTable,
        ConditionTab,
    },
    data: () => ({
        device: null,
        device_id: window.location.href.split("/").slice(-1)[0]
    }),
    mounted() {
        axios.get(`/api/device/${this.device_id}`).then(
            response => {
                this.device = response.data
            }).catch(error => console.log(error)
        )
    },
}
</script>

<style lang="scss">
@import "../../../sass/variables.scss";

.device {
    &__title {
        margin-bottom: 5rem;
    }

    &-condition {
        &-tab {
            margin: 0 auto;
            max-width: 88rem;

            .nav {
                &-tabs {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    width: 100%;
                }

                &-link {
                    &.active {
                        .device {
                            &-condition {
                                &-tab {
                                    &-nav {
                                        &__item {
                                            border-color: $blue;
                                            color: $blue;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            &-nav {
                &__content {
                    height: 21rem;
                    padding: .5rem;
                }

                &__item {
                    padding: 1.8rem 1rem;
                    height: 100%;
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    background: $white;
                    border: 3px solid $black;
                    border-radius: 2rem;
                }

                &__title {
                    font-size: 1.8rem;
                    font-weight: 500;
                }

                &__icon {
                    font-size: 6rem;
                    margin-bottom: 2rem;
                }
            }
        }

        &__list {
            width: 100%;
            margin-top: 4rem;
        }

        &__item {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid $black;
        }

        &__subtitle {
            font-size: inherit;
            font-weight: 500;
            margin-right: 1rem;
        }
    }

}
</style>
