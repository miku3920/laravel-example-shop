<script setup>
import { useForm } from '@inertiajs/vue3';
import { nextTick, ref } from 'vue';

const modal = ref(false)
const passwordInput = ref(null)

const form = useForm({
    password: '',
})

const deleteUser = () => {
    form.delete(route('profile.destroy'), {
        preserveScroll: true,
        onSuccess: () => modal.value = false,
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    })
}
</script>

<template>
    <section class="space-y-6">
        <header>
            <h2>刪除帳號</h2>

            <p>當你刪除帳戶時，所有相關的資源和數據將被永久刪除。在刪除帳戶之前，請下載任何你想保留的資料或信息。</p>
        </header>

        <BButton
            class="btn-danger"
            @click="modal = !modal; nextTick(() => passwordInput.value.focus())"
            v-b-modal.modal-scrollable>刪除帳號</BButton>

        <BModal
            id="modal-scrollable"
            v-model="modal"
            title=""
            cancelTitle="取消"
            okTitle="刪除帳號"
            @close="modal = false; form.reset()"
            @cancel="modal = false; form.reset()"
            @ok="deleteUser"
            @hide.prevent
            scrollable>

            <h2>您確定要刪除您的帳號嗎？</h2>

            <p>一旦您刪除帳號，所有相關的資源和數據將被永久刪除。請輸入您的密碼以確認您要永久刪除您的帳號。</p>

            <div class="mt-6">
                <label for="password">密碼</label>
                <BFormInput type="password" v-model="form.password" placeholder="密碼" @keyup.enter="deleteUser" />

                <div v-show="form.errors.password">
                    <small class="text-danger">
                        {{ form.errors.password }}
                    </small>
                </div>
            </div>
        </BModal>
    </section>
</template>
