<script setup>
import FancyLink from "@/Components/FancyLink.vue";

defineProps(["links"]);
</script>

<template>
    <section id="useful-links" class="links">
        <div v-for="(link, key) in links" class="link-card">
            <strong class="link-head"> {{ key }} </strong>
            <img :src="`/landing/${key}.png`" class="link-icon" alt="link-icon" />
            <p class="link-text">{{ link.text }}</p>
            <div class="link-devider"></div>
            <FancyLink border="primary" :href="link.address" target="_blank">
                {{ link.title }}
            </FancyLink>
        </div>
    </section>
</template>

<style scoped lang="scss">
.links {
    display: flex;
    justify-content: space-evenly;
    gap: 16px;

    .link-card {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 20%;
        border-radius: 16px;
        padding: 32px 28px;
        background-color: var(--primary-light);
        color: var(--primary);
        border: 2px solid var(--primary-2);
        gap: 16px;

        .link-icon {
            width: 100px;
            height: 100px;
        }

        .link-head {
            text-transform: capitalize;
            position: absolute;
            line-height: 32px;
            top: -16px;
            right: 50%;
            transform: translateX(50%);
            background-color: var(--primary-2);
            color: var(--white);
            padding: 0 24px;
            border-radius: 12px;
        }

        .link-devider {
            border-bottom: 2px solid var(--primary);
            width: 100%;
        }

        .link-text {
            text-align: justify;
        }
    }
}

@media only screen and (max-width: 1360px) {
    .links {
        flex-wrap: wrap;
        gap: 48px;
        .link-card {
            width: 40%;
        }
    }
}

@media only screen and (max-width: 1080px) {
    .links {
        flex-wrap: wrap;
        gap: 64px;
        .link-card {
            width: 100%;
        }
    }
}
</style>
