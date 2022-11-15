<template>



    <div v-if="$page.props.toast && $page.props.toast.type === 'success'"
        class="flex bg-white flex-row shadow-md border border-gray-100 rounded-lg overflow-hidden md:w-12/12">
        <div class="flex w-3 bg-gradient-to-t from-green-500 to-green-400"></div>
        <div class="flex-1 p-3">
            <h1 class="md:text-xl text-gray-600">{{ $page.props.toast.title }}</h1>
            <p class="text-gray-400 text-xs md:text-sm font-light">{{ $page.props.toast.message }}</p>
        </div>
        <div class="cursor-pointer border-l hover:bg-gray-50 border-gray-100 px-4 flex place-items-center"
            @click="$page.props.toast = undefined;">
            <p class="text-gray-400 text-xs">X</p>
        </div>
    </div>

    <div v-if="$page.props.toast && $page.props.toast.type === 'warning'"
        class="flex bg-white flex-row shadow-md border border-gray-100 rounded-lg overflow-hidden md:w-12/12">
        <div class="flex w-3 bg-gradient-to-t from-red-500 to-red-400"></div>
        <div class="flex-1 p-3">
            <h1 class="md:text-xl text-gray-600">{{ $page.props.toast.title }}</h1>
            <p class="text-gray-400 text-xs md:text-sm font-light">{{ $page.props.toast.message }}</p>
        </div>
        <div class="cursor-pointer border-l hover:bg-gray-50 border-gray-100 px-4 flex place-items-center"
            @click="$page.props.toast = undefined;">
            <p class="text-gray-400 text-xs">X</p>
        </div>
    </div>

</template>

<script setup>

</script>