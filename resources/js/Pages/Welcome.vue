<script setup lang="ts">
import { ref } from "vue";
import { Head, Link } from "@inertiajs/vue3";
import { Celebrity } from "@/types";
import { onMounted } from "vue";

const { celebrities } = defineProps<{
    celebrities: Celebrity[];
    canLogin?: boolean;
    canRegister?: boolean;
}>();

const selectedCelebrity = ref<Celebrity | undefined>(undefined);

onMounted(() => {
    // On sélectionne la première célébrité par défaut
    selectedCelebrity.value = celebrities[0];
});
</script>

<template>
    <Head title="Welcome" />

    <div
        class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots-darker dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
        <div
            v-if="canLogin"
            class="p-6 text-right sm:fixed sm:top-0 sm:right-0"
        >
            <Link
                v-if="$page.props.auth.user"
                :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                >Dashboard</Link
            >

            <template v-else>
                <Link
                    :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Log in</Link
                >

                <Link
                    v-if="canRegister"
                    :href="route('register')"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                    >Register</Link
                >
            </template>
        </div>

        <div class="p-6 mx-auto max-w-7xl lg:p-8">
            <div class="flex flex-col items-center justify-center">
                <h1 class="mb-8 text-2xl dark:text-white">Profile Browser</h1>
                <!-- Conteneur général -->
                <div
                    class="flex flex-col md:flex-row md:gap-4 h-[75vh] profile-browser"
                >
                    <!-- Menu des célébrités disponibles -->
                    <ul
                        class="overflow-y-scroll bg-gray-700 rounded-t-lg md:rounded-lg h-[25%] md:h-auto"
                    >
                        <li
                            v-for="(celebrity, index) in celebrities"
                            @click="selectedCelebrity = celebrity"
                            class="px-4 py-2 dark:text-white hover:cursor-pointer hover:underline"
                            :class="[
                                selectedCelebrity?.id === celebrity.id
                                    ? 'bg-white dark:bg-gray-800'
                                    : 'bg-gray-700',
                                index === 0
                                    ? 'rounded-t-lg md:rounded-l-lg'
                                    : '',
                            ]"
                        >
                            {{ celebrity.firstname }} {{ celebrity.lastname }}
                        </li>
                    </ul>
                    <!-- Panneau des informations de la célébrité sélectionnée -->
                    <div
                        class="p-4 overflow-y-scroll bg-white border border-gray-500 rounded-b md:rounded dark:bg-gray-800 w-96 h-[75%] md:h-auto"
                    >
                        <img
                            :src="'/storage/' + selectedCelebrity?.image"
                            :alt="
                                selectedCelebrity?.firstname +
                                ' ' +
                                selectedCelebrity?.lastname
                            "
                            class="float-left w-[100px] h-[100px] pr-2"
                        />
                        <h1 class="text-xl dark:text-white">
                            {{ selectedCelebrity?.firstname }}
                            {{ selectedCelebrity?.lastname }}
                        </h1>
                        <br />
                        <p class="dark:text-white">
                            {{ selectedCelebrity?.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Hide scrollbar */
.profile-browser *::-webkit-scrollbar {
    display: none;
}
.profile-browser * {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
