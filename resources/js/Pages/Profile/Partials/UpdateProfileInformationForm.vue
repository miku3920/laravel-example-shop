<script setup>
import { Link, useForm, usePage } from '@inertiajs/vue3';

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
});
</script>

<template>
    <section>
        <header>
            <h2>會員資訊</h2>

            <p>更新您帳戶的個人資訊和電子郵件地址。</p>
        </header>

        <form @submit.prevent="form.patch(route('profile.update'))">
            <div>
                <label for="name">名字</label>

                <BFormInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name" />

                <div v-show="form.errors.name">
                    <small class="text-danger">
                        {{ form.errors.name }}
                    </small>
                </div>
            </div>

            <div>
                <label for="name">電子信箱</label>

                <BFormInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username" />

                <div v-show="form.errors.email">
                    <small class="text-danger">
                        {{ form.errors.email }}
                    </small>
                </div>
            </div>

            <div v-if="mustVerifyEmail && user.email_verified_at === null">
                <small class="text-secondary">
                    您的電子信箱尚未驗證。
                    <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button">
                    請點擊這裡重新發送驗證郵件
                    </Link>
                </small>

                <div v-show="status === 'verification-link-sent'">
                    新的驗證連結已經發送到您的電子郵件地址。
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
