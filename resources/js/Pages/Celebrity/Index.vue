<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { Celebrity } from "@/types/index";

defineProps<{
    celebrities: Celebrity[];
}>();
</script>

<template>
    <Head title="Célébrités" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Célébrités
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table v-if="celebrities.length" class="w-full">
                            <thead>
                                <th>ID</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Description</th>
                            </thead>
                            <tbody>
                                <tr v-for="celebrity in celebrities">
                                    <td>{{ celebrity.id }}</td>
                                    <td>{{ celebrity.firstname }}</td>
                                    <td>{{ celebrity.lastname }}</td>
                                    <td>{{ celebrity.description }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div v-else class="text-center">
                            <p>Aucune célébrité trouvée...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
