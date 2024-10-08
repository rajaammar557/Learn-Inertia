<script setup>
defineProps({
    users: Array
})
</script>
<template>

    <Head title="Users" />
    <h1 class="text-4xl">Users</h1>
    <div>
        <ul>
            <li v-for="user in users" key="user.id" v-text="user.name"></li>
        </ul>
    </div>
</template>