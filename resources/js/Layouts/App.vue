<script setup>
import NavComp from '@/Components/Nav.vue';
</script>

<template>
    <header class="container">
        <NavComp></NavComp>
    </header>

    <main>
        <slot />
    </main>
</template>
