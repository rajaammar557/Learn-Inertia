<script setup>
defineProps({
    active: Boolean
})
</script>

<template>
    <Link :class="{ 'font-bold text-blue-500 hover:text-blue-600 hover:underline': active }">
    <slot />
    </Link>
</template>