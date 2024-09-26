<script setup>

defineProps({
    name: String,
    frameworks: Array
})

</script>

<template>
    <div>
        <h1>Hello World {{ name }}</h1>
        <p>In this series, I will use the following Framworks</p>
        <ul>
            <li v-for="framework in frameworks"> {{ framework }} </li>
        </ul>
    </div>
</template>