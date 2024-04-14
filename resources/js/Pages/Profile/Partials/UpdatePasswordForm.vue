<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('password.update'), {
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }
            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <section>
        <header>
            <h2>修改密碼</h2>

            <p>為確保您的帳戶安全，請確保您的密碼是長度足夠且隨機的。</p>
        </header>

        <form @submit.prevent="updatePassword">
            <div>
                <label for="current_password">密碼</label>

                <BFormInput
                    id="current_password"
                    ref="currentPasswordInput"
                    v-model="form.current_password"
                    type="password"
                    autocomplete="current-password" />

                <div v-show="form.errors.current_password">
                    <small class="text-danger">
                        {{ form.errors.current_password }}
                    </small>
                </div>
            </div>

            <div>
                <label for="password">新密碼</label>

                <BFormInput
                    id="password"
                    ref="passwordInput"
                    v-model="form.password"
                    type="password"
                    autocomplete="new-password" />

                <div v-show="form.errors.password">
                    <small class="text-danger">
                        {{ form.errors.password }}
                    </small>
                </div>
            </div>

            <div>
                <label for="password_confirmation">確認密碼</label>

                <BFormInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    autocomplete="new-password" />

                <div v-show="form.errors.password_confirmation">
                    <small class="text-danger">
                        {{ form.errors.password_confirmation }}
                    </small>
                </div>
            </div>

            <div>
                <BButton variant="primary" type="submit" :disabled="form.processing">儲存</BButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0">
                    <small v-if="form.recentlySuccessful" class="text-success">已更新</small>
                </Transition>
            </div>
        </form>
    </section>
</template>
