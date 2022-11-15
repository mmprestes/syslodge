<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col justify-center items-center pt-0 bg-gray-100">
        <div class="flex items-stretch gap-4">
            <Link href="/">
                <ApplicationLogo class="w-10 h-10  fill-current text-gray-500" />
            </Link>
            <!-- <div class="h- w-20 sm:ml-1 pt-3"> -->
            <h1 class="text-4xl font-bold tracking-tight text-center">SysLodge</h1>
                <!-- SysLodge -->
            <!-- </div> -->
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
