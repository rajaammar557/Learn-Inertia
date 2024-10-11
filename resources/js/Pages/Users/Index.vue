<script setup>
import Pagination from "../../Shared/Pagination.vue";
import { router } from '@inertiajs/vue3'

import { ref, watch } from 'vue'

let props = defineProps({
    users: Object,
    filters: Object
})

let search = ref(props.filters.search)

watch(search, value => {
    router.get('/users', { search: value }, { preserveState: true, replace: true })
})
</script>
<template>

    <Head title="Users" />
    <div class="flex justify-between mb-6">
        <h1 class="text-4xl">Users</h1>
        <input v-model="search" type="text" placeholder="Search..." class="rounded-lg px-3 border ">
    </div>

    <Link class="text-blue-500 underline" href="/users/create">Create new User</Link>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-8">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <tbody>
                <tr class="bg-white border-b hover:bg-gray-50" v-for="user in users.data" key="user.id">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ user.name }}
                    </th>
                    <td class="px-6 py-4">
                        <Link href="#" class="font-medium text-blue-600 hover:underline">Edit</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <pagination class="my-5" :links="users.links" />
</template>