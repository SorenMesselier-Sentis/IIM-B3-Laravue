<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    'project': Object,
    'client': Array,
})

const editProjectForm = useForm({
    'client_id': props.client,
    'last_name': props.project.last_name,
    'first_name': props.project.first_name,
    'phone': props.project.phone,
    'email': props.project.email,
    'title': props.project.title,
    'content': props.project.content,
    'begining_project_date': props.project.begining_project_date,
    'ending_project_date': props.project.ending_project_date,
    'project_status': props.project.project_status,
    'days_spent': props.project.days_spent,
})

const submit = () => {
    editProjectForm.put(route('project.update', { id: props.project.id }))
}

</script>

<template>

    <Head title="Editer un projet" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editer un projet</h2>
                <Link class="py-2 px-6 mx-2 bg-red-600 text-white rounded" method="delete"
                    :href="route('project.destroy', { id: project.id })">Supprimer</Link>
            </div>
        </template>
        <div class="py-12">
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
                                v-model="editProjectForm.client_id">
                                <option v-for="clients in client" :value="clients.id">Client {{ clients.id }}
                                </option>
                            </select>
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.client_id">{{
                                editProjectForm.errors.client_id }}
                            </div>
                        </div>
                        <div class="mb-6">
                            <!-- last_name -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nom
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="editProjectForm.last_name">
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.last_name">{{
                                editProjectForm.errors.last_name }}
                            </div>
                        </div>
                        <div class="mb-6">
                            <!-- first_name -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Prénom
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="editProjectForm.first_name">
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.first_name">{{
                                editProjectForm.errors.first_name }}
                            </div>
                        </div>
                        <div class="mb-6">
                            <!-- phone -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Téléphone
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="tel" v-model="editProjectForm.phone">
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.phone">{{
                                editProjectForm.errors.phone }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- email -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="email" v-model="editProjectForm.email">
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.email">{{
                                editProjectForm.errors.email }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- title -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Titre
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="editProjectForm.title">
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.title">{{
                                editProjectForm.errors.title }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- content -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Description
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="editProjectForm.content">
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.content">{{
                                editProjectForm.errors.content }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- begining_project_date -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Début du projet
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="date" v-model="editProjectForm.begining_project_date">
                            <div class="text-red-500 text-xs italic"
                                v-if="editProjectForm.errors.begining_project_date">{{
                                editProjectForm.errors.begining_project_date
                                }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- ending_project_date -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Fin du projet estimé
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="date" v-model="editProjectForm.ending_project_date">
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.ending_project_date">
                                {{
                                editProjectForm.errors.ending_project_date
                                }}</div>
                        </div>

                        <div class="mb-6">
                            <!-- project_status -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Etat du projet
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="editProjectForm.project_status">
                                <option :value="terminé">terminé</option>
                                <option :value="en_cours">en cours</option>
                                <option :value="annulé">annulé</option>
                            </select>
                            <div class="text-red-500 text-xs italic" v-if="editProjectForm.errors.project_status">{{
                                editProjectForm.errors.project_status
                                }}</div>
                        </div>

                        <div class="mb-6">
                            <!-- days_spent -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Jours estimés
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="number" v-model="editProjectForm.days_spent">
                            <div v-if="editProjectForm.errors.days_spent">{{ editProjectForm.errors.days_spent }}
                            </div>
                        </div>
                        <!-- submit -->
                        <button class="py-2 px-4 bg-indigo-500 text-white rounded" type="submit"
                            :disabled="editProjectForm.processing">Sauvegarder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
