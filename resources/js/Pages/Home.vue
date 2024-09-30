<script setup>
import Nav from '../Shared/Nav.vue'
import { Link } from '@inertiajs/vue3'

defineProps({
    time: String
})
</script>

<template>
    <div>
        <Nav />
        <h1>Home</h1>
        <div class="time">
            <h2>The current time is {{ time }}</h2>
            <Link href="/" preserve-scroll>Refresh</Link>
        </div>
    </div>
</template>

<style scoped>
.time {
    margin: 20rem 0 0 0;
}
</style>
    