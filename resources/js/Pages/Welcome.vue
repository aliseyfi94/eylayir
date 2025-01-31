<script setup>
import LandingBanner from './Landing/Banner.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    
    <Head title="Welcome" />
    
    <main class="main">
        

        <LandingBanner />
    </main>

</template>

<style lang="scss">

.main {

    direction: rtl;
    font-family: "Rubik";

}

</style>
