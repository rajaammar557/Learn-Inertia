<script setup>

import { useForm } from '@inertiajs/vue3'

let form = useForm({
    email: '',
    password: '',
})

let submit = () => {
    form.post('/login');
}

</script>

<template>

    <Head title="Login User" />
    <main class="">
        <section class="mt-6">
            <h1 class="text-4xl text-center">Login User</h1>
            <div class="my-6 max-w-sm mx-auto border px-8 py-5 bg-white rounded-lg shadow-lg">
                <form @submit.prevent="submit">
                    <div class="mb-6">
                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="email">
                            email
                        </label>
                        <input class="w-full p-2 border border-gray-400 rounded" type="email" id="email" name="email"
                            v-model="form.email" value="">
                        <span class="text-red-500 text-sm mt-2" v-if="form.errors.email" v-text="form.errors.email"></span>
                    </div>
                    <div class="mb-6">
                        <label class="block mb-2 text-xs font-bold text-gray-700 uppercase" for="password">
                            password
                        </label>
                        <input class="w-full p-2 border border-gray-400 rounded" type="password" id="password"
                            name="password" v-model="form.password" value="">
                        <span class="text-red-500 text-sm mt-2" v-if="form.errors.password"
                            v-text="form.errors.password"></span>
                    </div>
                    <div class="">
                        <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 text-md disabled:bg-blue-300 disabled:cursor-not-allowed"
                            :disabled="form.processing">
                            Log In
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</template>