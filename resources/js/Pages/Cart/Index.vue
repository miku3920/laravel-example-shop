<script>
export default {
    props: {
        cartItems: Array,
    },
};
</script>

<template>
    <div>
        <h1>購物車</h1>
        <ul>
            <li v-for="item in cartItems" :key="item.id">
                {{ item.name }} - {{ item.price }}
            </li>
        </ul>
    </div>
</template>
