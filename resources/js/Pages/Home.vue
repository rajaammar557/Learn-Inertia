<script setup>
import Layout from '../Shared/Layout.vue';
import { Link } from '@inertiajs/vue3'

defineProps({
    time: String
})
</script>

<template>
    <Layout>
        <h1 class="text-4xl">Home</h1>
        <div class="mt-72">
            <h2 >The current time is {{ time }}</h2>
            <Link class="text-blue-500 hover:text-blue-600" href="/" preserve-scroll>Refresh</Link>
        </div>
    </Layout>
</template>

<style scoped>
</style>