<script setup>
import NavLink from "./NavLink.vue";
</script>

<template>
    <nav class="rounded-xl py-2 px-4 mt-4 bg-white shadow-md">
        <div class="flex justify-between">
            <h1 class="font-bold text-blue-700 text-xl">
                <NavLink href="/">Learn Inertia</NavLink>
            </h1>
            <ul class="flex space-x-5">
                <li>
                    <NavLink href="/" :active="$page.url === '/'">Home</NavLink>
                </li>
                <li>
                    <NavLink href="/about" :active="$page.url === '/about'">About</NavLink>
                </li>
                <li>
                    <NavLink href="/contact?foo=bar" :active="$page.component === 'Contact'">Contact</NavLink>
                </li>
            </ul>
        </div>
    </nav>
</template>
