<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    'clients': Array,
})

const addProjectForm = useForm({
    'client_id': null,
    'last_name': null,
    'first_name': null,
    'phone': null,
    'email': null,
    'title': null,
    'content': null,
    'begining_project_date': null,
    'ending_project_date': null,
    'project_status': null,
    'days_spent': null,
})

const submit = () => {
    addProjectForm.post(route('project.store'))
}

</script>

<template>

    <Head title="Create project" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Créer un projet</h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="w-full max-w-5xl">
                        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="submit">
                            <div class="mb-6">
                                <!-- client_id -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Client
                                </label>
                                <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    v-model="addProjectForm.client_id">
                                    <option v-for="client in clients" :value="client.client_id">{{ client.client_id }}
                                    </option>
                                </select>
                            </div>
                            <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.client_id">{{
                                addProjectForm.errors.client_id }}</div>
                            <div class="mb-6">
                                <!-- last_name -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Nom
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Nom de famille" type="text" v-model="addProjectForm.last_name">
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.last_name">{{
                                    addProjectForm.errors.last_name }}</div>
                            </div>
                            <div class="mb-6">
                                <!-- first_name -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Prénom
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Prénom" type="text" v-model="addProjectForm.first_name">
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.first_name">{{
                                    addProjectForm.errors.first_name }}
                                </div>
                            </div>
                            <div class="mb-6">
                                <!-- phone -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Téléphone
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Telephone" type="tel" v-model="addProjectForm.phone">
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.phone">{{
                                    addProjectForm.errors.phone }}</div>
                            </div>
                            <div class="mb-6">
                                <!-- email -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Email
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Email" type="email" v-model="addProjectForm.email">
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.email">{{
                                    addProjectForm.errors.email }}</div>
                            </div>
                            <div class="mb-6">
                                <!-- title -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Titre
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Titre" type="text" v-model="addProjectForm.title">
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.title">{{
                                    addProjectForm.errors.title }}</div>
                            </div>
                            <div class="mb-6">
                                <!-- content -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Description
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Description" type="text" v-model="addProjectForm.content">
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.content">{{
                                    addProjectForm.errors.content }}</div>
                            </div>
                            <div class="mb-6">
                                <!-- begining_project_date -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Date de début
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="date" v-model="addProjectForm.begining_project_date">
                                <div class="text-red-500 text-xs italic"
                                    v-if="addProjectForm.errors.begining_project_date">{{
                                    addProjectForm.errors.begining_project_date
                                    }}</div>
                            </div>

                            <div class="mb-6">
                                <!-- ending_project_date -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Date de fin
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    type="date" v-model="addProjectForm.ending_project_date">
                                <div class="text-red-500 text-xs italic"
                                    v-if="addProjectForm.errors.ending_project_date">{{
                                    addProjectForm.errors.ending_project_date
                                    }}</div>
                            </div>

                            <div class="mb-6">
                                <!-- project_status -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Etat du projet
                                </label>
                                <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Statut" type="text" v-model="addProjectForm.project_status">
                                    <option>terminé</option>
                                    <option>en cours</option>
                                    <option>annulé</option>
                                </select>
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.project_status">{{
                                    addProjectForm.errors.project_status
                                    }}
                                </div>
                            </div>

                            <div class="mb-6">
                                <!-- days_spent -->
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Jours éstimés
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    placeholder="Jours prévus" type="number" v-model="addProjectForm.days_spent">
                                <div class="text-red-500 text-xs italic" v-if="addProjectForm.errors.days_spent">{{
                                    addProjectForm.errors.days_spent }}
                                </div>
                            </div>
                            <!-- submit -->
                            <button class="py-2 px-4 bg-indigo-500 text-white rounded" type="submit"
                                :disabled="addProjectForm.processing">Sauvegarder
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
