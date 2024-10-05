<script setup>
import Nav from '../Shared/Nav.vue'

</script>

<template>
    <section class="container mx-auto">
        <header>
            <Nav />
        </header>
        <input type="text" name="" id="" value="hi ther">
        <Main class="mt-14">
            <slot />
        </Main>
    </section>
</template>
