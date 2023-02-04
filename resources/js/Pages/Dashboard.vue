<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    'projects': Number,
    'clients': Number,
})

</script>

<template>

    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="py-10 px-10 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h3 class="text-2xl">Statistiques</h3>
                    <div class="flex justify-around px-5 py-5 gap-x-5">
                        <div class="my-5 py-5 px-5 w-full rounded-xl">
                            <p class="text-gray-500">
                                Nombre de clients
                            </p>
                            <p class="py-2 font-bold text-xl">
                                {{ props.clients }}
                            </p>
                            <div class="bg-gray-100 rounded-br-lg rounded-bl-lg py-5 px-5">
                                <Link class="bg-gray-100 text-indigo-500" :href="route('client.index')">Voir tous les
                                clients</Link>
                            </div>
                        </div>
                        <div class="my-5 py-5 px-5 w-full   rounded-xl">
                            <p class="text-gray-500">
                                Nombre de projets
                            </p>
                            <p class="py-2 font-bold text-xl">
                                {{ props.projects }}
                            </p>
                            <div class="bg-gray-100 rounded-br-lg rounded-bl-lg py-5 px-5">
                                <Link class="bg-gray-100 text-indigo-500" :href="route('project.index')">Voir tous les
                                projets</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
