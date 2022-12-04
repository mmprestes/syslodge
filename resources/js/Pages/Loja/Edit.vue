<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Dropdown from '@inertiajs/inertia-vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import TextArea from '@/Components/TextArea.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

const props = defineProps({
    lodge: {
        type: Object,
    },
    potencies: {
        type: Array,
    }
});

const form = useForm({
    name: props.lodge.name,
    number: props.lodge.number,
    rite: props.lodge.rite,
    potency_id: props.lodge.potency_id,
    session_day: props.lodge.session_day,
    founded_at: props.lodge.founded_at,
    phone_number: props.lodge.phone_number,
    email: props.lodge.email,
    cnpj: props.lodge.cnpj,
    address: props.lodge.address,
});

const submit = () => {
    form.post(route('loja.store'), {
        onFinish: () => ''
    });
};
const onChanges = () => {
    // console.log(form.potency_id);
}
</script>

<template>

    <Head title="Perfil da Loja" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Perfil da {{ $page.props.auth.lodge.name }} Nº {{ $page.props.auth.lodge.number }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    <div class="p-2 bg-white border-b border-gray-200">

                        <form @submit.prevent="submit">
                            <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-x-4  gap-y-4">
                                <div class="mt-4">
                                    <InputLabel for="name" value="Nome da loja" />
                                    <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name"
                                        required autofocus autocomplete="name" />
                                    <InputError class="mt-2" :message="form.errors.name" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="number" value="Nº da loja" />
                                    <TextInput id="number" type="text" class="mt-1 block w-full" v-model="form.number"
                                        required autocomplete="number" />
                                    <InputError class="mt-2" :message="form.errors.number" />
                                </div>

                                <div class="mt-4">
                                    <InputLabel for="rite" value="Rito" />
                                    <TextInput id="rite" type="text" class="mt-1 block w-full" v-model="form.rite"
                                        autocomplete="rite" />
                                    <InputError class="mt-2" :message="form.errors.rite" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="potency" value="Potência" />

                                    <select v-model="form.potency_id" @change="onChanges()"
                                        class="form-select form-control border-gray-300 mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                        <option v-for="potency in potencies" :value="potency.id" :key="potency.id">
                                            {{ potency.name }}
                                        </option>
                                    </select>
                                    <InputError class="mt-2" :message="form.errors.potency" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="session_day" value="Dia da sessão" />
                                    <TextInput id="session_day" type="text" class="mt-1 block w-full"
                                        v-model="form.session_day" autocomplete="session_day" />
                                    <InputError class="mt-2" :message="form.errors.session_day" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="founded_at" value="Fundação da loja" />
                                    <TextInput id="founded_at" type="date" class="mt-1 block w-full"
                                        v-model="form.founded_at" autocomplete="founded_at" />
                                    <InputError class="mt-2" :message="form.errors.founded_at" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="cnpj" value="CNPJ (opcional)" />
                                    <TextInput id="cnpj" type="text" class="mt-1 block w-full" v-model="form.cnpj"
                                        autocomplete="cnpj" />
                                    <InputError class="mt-2" :message="form.errors.cnpj" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="phone_number" value="Telefone da Loja" />
                                    <TextInput id="phone_number" type="text" class="mt-1 block w-full"
                                        v-model="form.phone_number" autocomplete="phone_number" />
                                    <InputError class="mt-2" :message="form.errors.phone_number" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="email" value="E-mail da Loja" />
                                    <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email"
                                        autocomplete="email" />
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>
                                <div class="mt-4">
                                    <InputLabel for="address" value="Endereço" />
                                    <TextArea id="address" type="text" class="mt-1 block w-full" v-model="form.address"
                                        autocomplete="address" />
                                    <InputError class="mt-2" :message="form.errors.address" />
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing">
                                    ATUALIZAR PERFIL
                                </PrimaryButton>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
