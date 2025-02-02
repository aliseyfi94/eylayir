<script setup>

import { Head, Link } from '@inertiajs/vue3';

import LandingBanner from './Landing/Banner.vue';
import DownloadsSection from './Landing/DownloadsSection.vue';
import UsefulLinks from './Landing/UsefulLinks.vue';

defineProps(['courses', 'links'])

</script>

<template>
    
    <Head title="Welcome" />
    
    <main class="main">
        

        <LandingBanner />

        <section id="tools" class="tools">
            
            <div class="useful-links-wrapper">
                <UsefulLinks :links="links" />
            </div>
            <div class="downloads-section-wrapper">
                <DownloadsSection :courses="courses" />
            </div>

        </section>


    </main>

    <footer class="footer">
        <h4> این صفحه به صورت موقت بارگذاری شده. به زودی وبسایت جدید eylay.ir با امکانات جدید و بیشتر، راه اندازی خواهد شد... </h4>
        <ul class="footer-links">
            <li class="footer-item" v-for="link, key in links">
                <a :href="link.address" target="_blank" class="footer-link">
                    {{ link.title }}
                </a>
            </li>
        </ul>
    </footer>

</template>

<style lang="scss">

.main {

    direction: rtl;
    font-family: "Rubik";

    .tools {
        
        display: flex;
        flex-direction: column;
        gap: 48px;
        padding: 48px 128px;
        
    }

}


.footer {
    direction: rtl;
    background-color: var(--primary-light);
    min-height: 100px;
    display: flex;
    justify-content: space-around;
    align-items: center;

    .footer-links {

        list-style-type: none;
        display: flex;
        gap: 0 24px;

        .footer-item {

            transition: 0.33s;
            border-bottom: 1px solid var(--primary-2);
            padding: 0 4px 6px 4px;
            color: var(--primary-2);
            font-weight: 400;

            &:hover {
                color: var(--secondary-2);
                border-color: var(--secondary-2);
            }
        }
    }
}

</style>
