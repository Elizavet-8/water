<template>
    <li class="card">
        <div class="card__icon">
            <i class="card__svg fa-solid" :class="card.icon"></i>
        </div>
        <div class="card__texts">
            <p class="card__caption">
                {{ card.text }}
            </p>
            <h3 class="card__title">
                {{ card.count }}
            </h3>
        </div>
    </li>
</template>

<script>
export default {
    name: "CardGeneral",
    props: ["card"],
}
</script>

<style scoped>

</style>
