<script setup>
import NavLink from "./NavLink.vue";
</script>

<template>
    <nav>
        <ul>
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
    </nav>
</template>
