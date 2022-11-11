<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    lodge_name: '',
    lodge_number: '',
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Cadastro" />

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="lodge_name" value="Nome da loja" />
                <TextInput id="lodge_name" type="text" class="mt-1 block w-full" v-model="form.lodge_name" required autofocus autocomplete="lodge_name" />
                <InputError class="mt-2" :message="form.errors.lodge_name" />
            </div>
            <div class="mt-4">
                <InputLabel for="lodge_number" value="Nº da loja" />
                <TextInput id="lodge_number" type="text" class="mt-1 block w-full" v-model="form.lodge_number" required autofocus autocomplete="lodge_number" />
                <InputError class="mt-2" :message="form.errors.lodge_number" />
            </div>
            <div class="mt-4">
                <InputLabel for="name" value="Seu nome (completo)" />
                <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Seu e-mail (login)" />
                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="username" />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Senha" />
                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirmar senha" />
                <TextInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    Já possui cadastro?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Cadastrar
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout>
</template>
