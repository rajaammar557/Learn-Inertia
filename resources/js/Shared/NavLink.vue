<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
    active: Boolean
})
</script>

<template>
    <Link :class="{ 'active-link': active }">
    <slot />
    </Link>
</template>

<style scoped>
.active-link {
    color: rgb(0, 0, 255);
    font-weight: bold;
}
</style>
