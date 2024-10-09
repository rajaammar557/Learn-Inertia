<script setup>
defineProps({
    links: Array
})
</script>
<template>
    <div>
        <Component :is="link.url && !link.active ? 'Link' : 'span'" v-for="link in links" :href="link.url"
            v-html="link.label" class="px-4 py-2 border bg-white shadow-2xl rounded"
            :class="[link.active ? 'text-blue-600' : '', !link.url ? 'text-gray-500' : '']" />
    </div>
</template>

<style lang="scss" scoped></style>