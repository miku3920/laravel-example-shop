<script setup>
import App from '@/Layouts/App.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <Head title="會員資訊" />

    <App>
        <template #header>
            <h2>會員資訊</h2>
        </template>

        <div>
            <UpdateProfileInformationForm
                :must-verify-email="mustVerifyEmail"
                :status="status" />
        </div>

        <div>
            <UpdatePasswordForm />
        </div>

        <div>
            <DeleteUserForm />
        </div>
    </App>
</template>
