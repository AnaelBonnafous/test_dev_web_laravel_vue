<script setup lang="ts">
import { ref } from "vue";
import { Head, Link, router } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { Celebrity } from "@/types/index";
import Modal from "@/Components/Modal.vue";

defineProps<{
    celebrities: Celebrity[];
}>();

const showDestroyModal = ref(false);
const selectedCelebrity = ref<Celebrity | undefined>(undefined);

const openModal = (celebrity: Celebrity) => {
    selectedCelebrity.value = celebrity;
    showDestroyModal.value = true;
};
const closeModal = () => {
    showDestroyModal.value = false;
    selectedCelebrity.value = undefined;
};

const destroyCelebrity = () => {
    if (!selectedCelebrity.value) return;
    router.delete(
        route("celebrities.destroy", { celebrity: selectedCelebrity.value }),
        { onFinish: closeModal }
    );
};
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
                        <div class="mb-4">
                            <Link :href="route('celebrities.create')">
                                <PrimaryButton
                                    >Nouvelle célébrité</PrimaryButton
                                >
                            </Link>
                        </div>

                        <table v-if="celebrities.length" class="w-full">
                            <thead>
                                <th class="text-left">ID</th>
                                <th class="text-left">Image</th>
                                <th class="text-left">Prénom</th>
                                <th class="text-left">Nom</th>
                                <th class="text-left">Description</th>
                                <th class="text-left">Actions</th>
                            </thead>
                            <tbody>
                                <tr v-for="celebrity in celebrities" class="border-t dark:border-white">
                                    <td>{{ celebrity.id }}</td>
                                    <td>
                                        <img
                                            :src="'/storage/' + celebrity.image"
                                            :alt="
                                                celebrity.firstname +
                                                ' ' +
                                                celebrity.lastname
                                            "
                                        />
                                    </td>
                                    <td>{{ celebrity.firstname }}</td>
                                    <td>{{ celebrity.lastname }}</td>
                                    <td class="line-clamp-3">
                                        {{ celebrity.description }}
                                    </td>
                                    <td>
                                        <Link
                                            :href="
                                                route('celebrities.edit', {
                                                    celebrity,
                                                })
                                            "
                                        >
                                            <PrimaryButton
                                                >Mettre à jour</PrimaryButton
                                            >
                                        </Link>
                                        <SecondaryButton
                                            @click="openModal(celebrity)"
                                            >Supprimer</SecondaryButton
                                        >
                                    </td>
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

        <Modal :show="showDestroyModal">
            <div class="p-4">
                <p class="dark:text-white">
                    Êtes-vous sûr de vouloir supprimer la célébrité "{{
                        selectedCelebrity?.firstname
                    }}
                    {{ selectedCelebrity?.lastname }}" ?
                </p>
                <div class="flex items-center justify-end gap-2 mt-4">
                    <SecondaryButton @click="closeModal"
                        >Annuler</SecondaryButton
                    >
                    <PrimaryButton @click="destroyCelebrity"
                        >Supprimer la célébrité</PrimaryButton
                    >
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
