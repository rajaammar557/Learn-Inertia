<script setup>
import NavLink from "./NavLink.vue";
import { computed } from 'vue';
import { usePage } from '@inertiajs/vue3';

const page = usePage();

const username = computed(() => page.props.auth.user.username);
console.log(username);
if (page.props.auth == null) {
    console.log(page.props.auth);
}
</script>

<template>
    <nav class="flex justify-between rounded-xl py-2 px-4 mt-4 bg-white shadow-xl items-center">
        <div class="">
            <h1 class="font-bold text-blue-700 text-xl">
                <NavLink href="/">Learn Inertia</NavLink>
            </h1>
        </div>
        <div class="flex">
            <ul class="flex space-x-5">
                <li>
                    <NavLink href="/" :active="$page.url === '/'">Home</NavLink>
                </li>
                <li>
                    <NavLink href="/users" :active="$page.component === 'Users/Index'">Users</NavLink>
                </li>
                <li>
                    <NavLink href="/about" :active="$page.url === '/about'">About</NavLink>
                </li>
                <li>
                    <NavLink href="/contact?foo=bar" :active="$page.component === 'Contact'">Contact</NavLink>
                </li>
                <li v-if="!page.props.auth">
                    <NavLink href="/login" :active="$page.url === '/login'">Login</NavLink>
                </li>
                <li v-if="!page.props.auth">
                    <NavLink href="/register" :active="$page.url === '/register'">Register</NavLink>
                </li>
                <li  v-if="page.props.auth">
                    <NavLink href="/logout" method="post">Logout</NavLink>
                </li>
            </ul>
            <p class="text-sm font-bold text-indigo-700 ml-3" v-if="page.props.auth" v-text="username"></p>
        </div>
    </nav>
</template>
