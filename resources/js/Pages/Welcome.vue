<script setup>
import { Head, Link } from "@inertiajs/vue3";

import FancyLink from "@/Components/FancyLink.vue";
import LandingBanner from "./Landing/Banner.vue";
import DownloadsSection from "./Landing/DownloadsSection.vue";
import UsefulLinks from "./Landing/UsefulLinks.vue";

defineProps(["courses", "links"]);
</script>

<template>
    <Head title="Welcome" />

    <main class="main">
        <LandingBanner />

        <section id="tools" class="tools">
            <div class="notif">
                <h4 class="notif-alert">
                    توجه داشته باشید که آیدی تلگرام من عوض شده!
                </h4>
                <h5 class="notif-subalert">
                    آیدی من قبلا
                    <em dir="ltr" class="ml-2"> @eylay </em>
                    بود ولی الان به
                    <em dir="ltr" class="ml-2"> @eylayir </em>
                    تغییر پیدا کرده.
                </h5>
                <div class="notif-link-wraper">
                    <FancyLink
                        icon="paper-fill"
                        border="secondary"
                        theme="secondary"
                        href="https://t.me/@eylayir"
                        target="_blank"
                    >
                        تلگرام من
                    </FancyLink>
                </div>
            </div>

            <div class="useful-links-wrapper">
                <UsefulLinks :links="links" />
            </div>
            <div class="downloads-section-wrapper">
                <DownloadsSection :courses="courses" />
            </div>
        </section>
    </main>

    <footer class="footer">
        <h4>
            این صفحه به صورت موقت بارگذاری شده. به زودی وبسایت جدید eylay.ir با
            امکانات جدید و بیشتر، راه اندازی خواهد شد...
        </h4>
        <ul class="footer-links">
            <li class="footer-item">
                <a href="https://github.com/eylay?tab=repositories" target="_blank" class="footer-link">
                    گیتهاب من
                </a>
            </li>
            <li class="footer-item" v-for="(link, key) in links">
                <a :href="link.address" target="_blank" class="footer-link">
                    {{ link.title }}
                </a>
            </li>
        </ul>
    </footer>
</template>

<style lang="scss">
.main {

    .tools {
        display: flex;
        flex-direction: column;
        gap: 48px;
        padding: 48px 128px;
    }
}

.notif {
    background-color: var(--secondary-light);
    padding: 48px;
    border-radius: 48px;
    text-align: center;
    color: var(--secondary-2);
    border: 2px solid var(--secondary-2);

    .notif-alert {
        font-size: 24px;
        font-weight: 600;
        line-height: 36px;
    }

    .notif-subalert {
        font-size: 18px;
        font-weight: 500;
        line-height: 32px;
    }

    .notif-link-wraper {
        border-top: 1px solid var(--secondary-2);
        margin-top: 16px;
        padding-top: 16px;
    }
}

.footer {
    direction: rtl;
    background-color: var(--primary-light);
    min-height: 100px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 48px;

    .footer-links {
        list-style-type: none;
        display: flex;
        gap: 24px;

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

@media only screen and (max-width: 1360px) {
    .footer {
        flex-direction: column;
    }
}
@media only screen and (max-width: 1080px) {
    .footer-links {
        margin-top: 24px;
        flex-direction: column;
        text-align: center;
    }
    .main .tools {
        padding-left: 24px;
        padding-right: 24px;
    }
}
</style>
