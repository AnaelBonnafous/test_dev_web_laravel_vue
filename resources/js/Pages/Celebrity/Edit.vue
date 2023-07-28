<script setup lang="ts">
import { Head, useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import { Celebrity } from "@/types";

const { celebrity } = defineProps<{
    celebrity: Celebrity;
}>();

const form = useForm({
    firstname: celebrity.firstname,
    lastname: celebrity.lastname,
    image: celebrity.image,
    description: celebrity.description,
});

const updateCelebrity = () => {
    form.put(route("celebrities.update", { celebrity }));
};
</script>

<template>
    <Head title="Mise à jour de la célébrité" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
            >
                Mise à jour de la célébrité
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form
                            @submit.prevent="updateCelebrity"
                            class="flex flex-col gap-4"
                        >
                            <div>
                                <InputLabel for="firstname" value="Prénom" />

                                <TextInput
                                    id="firstname"
                                    type="text"
                                    class="block w-full mt-1"
                                    v-model="form.firstname"
                                    required
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.firstname"
                                />
                            </div>

                            <div>
                                <InputLabel for="lastname" value="Nom" />

                                <TextInput
                                    id="lastname"
                                    type="text"
                                    class="block w-full mt-1"
                                    v-model="form.lastname"
                                    required
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.lastname"
                                />
                            </div>

                            <div>
                                <InputLabel for="image" value="Image" />

                                <input
                                    id="image"
                                    type="file"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                                    @input="
                                        form.image = $event.target?.files[0]
                                    "
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.image"
                                />
                            </div>

                            <div>
                                <InputLabel
                                    for="description"
                                    value="Description"
                                />

                                <textarea
                                    id="description"
                                    type="text"
                                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600"
                                    v-model="form.description"
                                    required
                                ></textarea>

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.description"
                                />
                            </div>

                            <div class="flex items-center justify-end">
                                <SecondaryButton
                                    type="submit"
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                >
                                    Mettre à jour
                                </SecondaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
