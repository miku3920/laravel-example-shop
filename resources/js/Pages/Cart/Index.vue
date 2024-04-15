<script setup>
import App from '@/Layouts/App.vue';
import { Head } from '@inertiajs/vue3';
import { computed } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { reactive, watch } from 'vue';

const props = defineProps({
    cart: {
        type: Array,
    },
});

const total = computed(() => {
    return props.cart.reduce((total, item) => {
        return total + item.quantity * item.product.price;
    }, 0);
});

const data = reactive({ cart: props.cart })

const form = useForm({
    items: computed(() => {
        return data.cart.reduce((a, b) => {
            a[b.product.id] = b.quantity
            return a
        }, {})
    }),
});

const removeItem = (id) => {
    data.cart = data.cart.filter((item) => item.id !== id)
};

let timer = null;
watch(
    () => data.cart,
    () => {
        clearTimeout(timer);
        timer = setTimeout(() => {
            form.put(route('cart.update'));
        }, 5000);
    },
    { deep: true }
);
</script>

<template>
    <Head title="會員資訊" />

    <App>
        <template #header>
            <h2>會員資訊</h2>
        </template>

        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>商品</th>
                        <th>數量</th>
                        <th>金額</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="item in data.cart" :key="item.product.id">
                        <td>{{ item.product.name }}</td>
                        <td>
                            <input type="number" v-model="item.quantity">
                        </td>
                        <td>
                            {{ item.quantity * item.product.price }}
                        </td>
                        <td>
                            <button @click="removeItem(item.id)">移除</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            總共：{{ total }}
        </div>
    </App>
</template>
