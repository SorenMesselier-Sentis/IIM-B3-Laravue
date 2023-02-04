<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, Link } from '@inertiajs/inertia-vue3';

const props = defineProps({
    'client': Array
})

const editClientForm = useForm({
    'name': props.client.name,
    'content': props.client.content,
    'social_reason': props.client.social_reason,
    'juridical_status': props.client.juridical_status,
    'capital': props.client.capital,
    'siret_number': props.client.siret_number,
    'naf_code': props.client.naf_code,
    'country': props.client.country,
    'address': props.client.address,
    'zipcode': props.client.zipcode,
    'city': props.client.city,
})

const submit = () => {
    editClientForm.put(route('client.update', { id: props.client.id }))
}

</script>

<template>

    <Head title="Editer un client" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editer un client</h2>
                <Link class="py-2 px-6 mx-2 bg-red-600 text-white rounded" method="delete"
                    :href="route('client.destroy', { id: client.siret_number })">Supprimer</Link>
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
                                placeholder="Nom" type="text" v-model="editClientForm.name">
                            <div v-if="editClientForm.errors.name">{{ editClientForm.errors.name }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- content -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Description
                            </label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Contenu" v-model="editClientForm.content"></textarea>
                            <div v-if="editClientForm.errors.content">{{ editClientForm.errors.content }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- social_reason -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Raison sociale
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Raison Sociale" type="text" v-model="editClientForm.social_reason">
                            <div v-if="editClientForm.errors.social_reason">{{ editClientForm.errors.social_reason }}
                            </div>
                        </div>
                        <div class="mb-6">
                            <!-- juridical_status -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Statut juridique
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Statut Juridique" v-model="editClientForm.juridical_status">
                                <option :value="EI">EI</option>
                                <option :value="EIRL">EIRL</option>
                                <option :value="EURL">EURL</option>
                                <option :value="SARL">SARL</option>
                                <option :value="SNC">SNC</option>
                                <option :value="SEARL">SEARL</option>
                                <option :value="SCP">SCP</option>
                                <option :value="SAS">SAS</option>
                                <option :value="SASU">SASU</option>
                            </select>
                            <div v-if="editClientForm.errors.juridical_status">{{
                                editClientForm.errors.juridical_status
                            }}
                            </div>
                        </div>

                        <div class="mb-6">
                            <!-- capital -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Capital
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Capital" type="text" v-model="editClientForm.capital">
                            <div v-if="editClientForm.errors.capital">{{ editClientForm.errors.capital }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- siret_number -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Numéro de siret
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Numéro de siret" type="text" v-model="editClientForm.siret_number">
                            <div v-if="editClientForm.errors.siret_number">{{ editClientForm.errors.siret_number }}
                            </div>
                        </div>
                        <div class="mb-6">
                            <!-- naf_code -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Code NAF (APE)
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Code NAF (APE)" type="text" v-model="editClientForm.naf_code">
                            <div v-if="editClientForm.errors.naf_code">{{ editClientForm.errors.naf_code }}</div>
                        </div>

                        <div class="mb-6">
                            <!-- country -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Pays
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Pays" type="text" v-model="editClientForm.country">
                            <div v-if="editClientForm.errors.country">{{ editClientForm.errors.country }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- address -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Adresse
                            </label>
                            <textarea
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Adresse" type="text" v-model="editClientForm.address"></textarea>
                            <div v-if="editClientForm.errors.address">{{ editClientForm.errors.address }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- zipcode -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Code postal
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Code postal" type="text" v-model="editClientForm.zipcode">
                            <div v-if="editClientForm.errors.zipcode">{{ editClientForm.errors.zipcode }}</div>
                        </div>
                        <div class="mb-6">
                            <!-- city -->
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Ville
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Ville" type="text" v-model="editClientForm.city">
                            <div v-if="editClientForm.errors.city">{{ editClientForm.errors.city }}</div>
                        </div>
                        <!-- submit -->
                        <button class="py-2 px-4 bg-indigo-500 text-white rounded" type="submit"
                            :disabled="editClientForm.processing">Sauvegarder
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
