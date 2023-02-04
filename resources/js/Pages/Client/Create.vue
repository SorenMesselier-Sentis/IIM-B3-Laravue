<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const addClientForm = useForm({
    'name': null,
    'content': null,
    'social_reason': null,
    'juridical_status': null,
    'capital': null,
    'siret_number': null,
    'naf_code': null,
    'country': null,
    'address': null,
    'zipcode': null,
    'city': null,
})

const submit = () => {
    addClientForm.post(route('client.store'))
}

</script>

<template>

    <Head title="Client" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Créer un client</h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full max-w-5xl">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" @submit.prevent="submit">

                        <div class="mb-6">
                            <!-- name -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nom
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.name">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.name">{{
                                addClientForm.errors.name }}</div>
                        </div>
                        <!-- content -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                                Description
                            </label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                v-model="addClientForm.content"></textarea>
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.content">{{
                                addClientForm.errors.content }}</div>
                        </div>

                        <div class="mb-6">
                            <!-- social_reason -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="social_reason">
                                Raison Sociale
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.social_reason">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.social_reason">{{
                                addClientForm.errors.social_reason }}
                            </div>
                        </div>
                        <div class="mb-6">
                            <!-- juridical_status -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="juridical_status">
                                Statut Juridique
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.juridical_status">
                                <option>EI</option>
                                <option>EIRL</option>
                                <option>EURL</option>
                                <option>SARL</option>
                                <option>SNC</option>
                                <option>SEARL</option>
                                <option>SCP</option>
                                <option>SAS</option>
                                <option>SASU</option>
                            </select>
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.juridical_status">{{
                                addClientForm.errors.juridical_status
                                }}
                            </div>
                        </div>
                        <div class="mb-6">
                            <!-- capital -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="capital">
                                Capital
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.capital">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.capital">{{
                                addClientForm.errors.capital }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- siret_number -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="capital">
                                Numéro de Siret
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.siret_number">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.siret_number">{{
                                addClientForm.errors.siret_number }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- naf_code -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="capital">
                                Code NAF(APE)
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.naf_code">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.naf_code">{{
                                addClientForm.errors.naf_code }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- country -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="capital">
                                Pays
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.country">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.country">{{
                                addClientForm.errors.country }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- address -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="capital">
                                Adresse
                            </label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.address"></textarea>
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.address">{{
                                addClientForm.errors.address }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- zipcode -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="capital">
                                Code Postal
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.zipcode">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.zipcode">{{
                                addClientForm.errors.zipcode }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- city -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="capital">
                                Ville
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                type="text" v-model="addClientForm.city">
                            <div class="text-red-500 text-xs italic" v-if="addClientForm.errors.city">{{
                                addClientForm.errors.city }}</div>
                        </div>
                        <!-- submit -->
                        <button class="py-2 px-4 bg-indigo-500 text-white rounded" type="submit"
                            :disabled="addClientForm.processing">Sauvegarder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
