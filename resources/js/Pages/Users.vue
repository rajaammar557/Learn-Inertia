<script setup>
import Pagination from "../Shared/Pagination.vue";
defineProps({
    users: Object
})
</script>
<template>

    <Head title="Users" />
    <h1 class="text-4xl">Users</h1>

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