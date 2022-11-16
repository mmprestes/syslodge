<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
// import { Dialog, DialogPanel } from '@headlessui/vue';
// import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})


const navigation = [
    //   { name: 'Recursos', href: '#' },
    //   { name: 'Features', href: '#' },
]

// const mobileMenuOpen = ref(false)
</script>

<template>

    <Head title="Bem vindo" />

    <div class="isolate min-h-screen bg-white">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
            <svg class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
                viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3"
                    d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                    <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177"
                        y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9089FC" />
                        <stop offset="1" stop-color="#FF80B5" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="px-6 pt-6 lg:px-8">
            <div>
                <nav class="flex h-9 items-center justify-between" aria-label="Global">
                    <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
                        <a href="#" class="-m-1.5 p-1.5">

                            <span class="sr-only">SysLodge</span>
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button"
                            class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                            @click="mobileMenuOpen = true">
                            <span class="sr-only">Open main menu</span>
                            <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                        </button>
                    </div>
                    <div class="hidden sm:flex sm:min-w-5 sm:flex-1 sm:justify-center sm:gap-x-12">
                        <a v-for="item in navigation" :key="item.name" :href="item.href"
                            class="font-semibold text-gray-900 hover:text-gray-900">{{ item.name }}</a>
                    </div>

                    <div class="hidden sm:flex sm:min-w-0 sm:flex-1 sm:justify-end gap-2">
                        <a :href="route('login')"
                            class="inline-block rounded-sm px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10. hover:ring-green-900/50">Acessar</a>
                        <!-- <a v-if="canRegister" :href="route('register')"
                            class="inline-block rounded-sm px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Cadastrar</a> -->
                    </div>
                </nav>

            </div>
        </div>
        <main>
            <div class=" px-6 lg:px-8">
                <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
                    <div class="flex items-center justify-center gap-4">
                        <ApplicationLogo class="w-16 h-16 fill-current text-gray-500" />
                        <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl">SysLodge</h1>
                    </div>
                    <p class="mt-12 text-lg leading-10 text-gray-600 sm:text-center">Gerencie a secretaria, chancelaria
                        e tesouraria da sua loja maçônica com simplicidade, eficiência e segurança. <br> Clique no botão
                        abaixo para testar por 30 dias sem compromisso!</p>
                    <div class="mt-8 flex gap-x-14 sm:justify-center">
                        <a :v-if="canRegister" :href="route('register')"
                            class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                            Cadastro Rápido
                            <!-- <span class="text-indigo-200" aria-hidden="true">&rarr;</span> -->
                        </a>
                        <!-- <a href="#"
                            class="inline-block rounded-lg px-4 py-1.5 text-base font-semibold leading-7 text-gray-900 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                            Saiba mais
                            <span class="text-gray-400" aria-hidden="true">&rarr;</span>
                        </a> -->
                    </div>

                </div>
            </div>
            <div class="bg-gray-200 py-8 px-20">
                <div class="mx-auto max-w-3xl px-4 lg:px-8">
                    <div class="sm:text-center">
                        <p class="mt-2 text-xl font-bold text-gray-700 sm:text-4xl">Gestão 360</p>
                    </div>

                    <div class="mt-20 max-w-lg sm:mx-auto md:max-w-none">
                        <div class="grid grid-cols-1 gap-y-16 md:grid-cols-2 md:gap-x-12 md:gap-y-16">
                            <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white sm:shrink-0">
                                    <!-- Heroicon name: outline/globe-alt -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                    </svg>
                                </div>
                                <div class="sm:min-w-0 sm:flex-1">
                                    <p class="text-lg font-semibold leading-8 text-gray-900">Secretaria</p>
                                    <p class="mt-2 text-base leading-7 text-gray-600">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste
                                        dolor
                                        cupiditate blanditiis ratione.</p>
                                </div>
                            </div>

                            <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white sm:shrink-0">
                                    <!-- Heroicon name: outline/scale -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>


                                </div>
                                <div class="sm:min-w-0 sm:flex-1">
                                    <p class="text-lg font-semibold leading-8 text-gray-900">Chancelaria</p>
                                    <p class="mt-2 text-base leading-7 text-gray-600">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste
                                        dolor
                                        cupiditate blanditiis ratione.</p>
                                </div>
                            </div>

                            <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white sm:shrink-0">
                                    <!-- Heroicon name: outline/bolt -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                    </svg>

                                </div>
                                <div class="sm:min-w-0 sm:flex-1">
                                    <p class="text-lg font-semibold leading-8 text-gray-900">Tesouraria</p>
                                    <p class="mt-2 text-base leading-7 text-gray-600">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste
                                        dolor
                                        cupiditate blanditiis ratione.</p>
                                </div>
                            </div>

                            <div class="relative flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white sm:shrink-0">
                                    <!-- Heroicon name: outline/device-phone-mobile -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                                    </svg>


                                </div>
                                <div class="sm:min-w-0 sm:flex-1">
                                    <p class="text-lg font-semibold leading-8 text-gray-900">Presidência</p>
                                    <p class="mt-2 leading-7 text-gray-600">Lorem ipsum, dolor sit amet
                                        consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste
                                        dolor
                                        cupiditate blanditiis ratione.</p>
                                </div>
                            </div>

                            <br> <br>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

</template>
