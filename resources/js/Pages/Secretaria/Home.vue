<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps({
    users: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Secretaria
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                       <div class="mb-2">
                        Novo    
                            <!-- <Link :href="route('blogs.create')">
                                <PrimaryButton type="primary">Novo Usuário</PrimaryButton></Link
                            > -->
                        </div>
                         <div
                            class="relative overflow-x-auto shadow-md sm:rounded-lg"
                        >
                            <table
                                class="w-full text-sm text-left text-white dark:text-white"
                            >
                                <thead
                                    class="text-xs text-gray-800 uppercase bg-indigo-50"
                                >
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Nome
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            E-mail
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Editar
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Deletar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        v-for="user in users"
                                        :key="user.id"
                                        class="bg-white border-b dark:bg-white-800 dark:border-gray-400"
                                    >
                                        <th
                                            scope="row"
                                            class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap"
                                        >
                                            {{ user.name }}
                                        </th>
                                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                                            {{ user.email }}
                                        </td>


                                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                                            Editar
                                            <!-- <Link
                                                :href="
                                                    route(
                                                        'blogs.edit',
                                                        blog.id
                                                    )
                                                "
                                               class="px-4 py-2 text-white bg-blue-600 rounded-lg" >Edit</Link
                                            > -->
                                        </td>
                                        <td class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                                            Deletar
                                            <!-- <PrimaryButton
                                                class="bg-red-700"
                                                @click="destroy(blog.id)"
                                            >
                                                Delete
                                            </PrimaryButton> -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
