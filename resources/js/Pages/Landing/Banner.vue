<script setup>
import FancyLink from '@/Components/FancyLink.vue';
</script>

<template>
    <header id="banner" class="banner">
        <div class="content">
            <h1>این وبسایت درحال به روز رسانی است</h1>
            <h2>به زودی نسخه جدید بارگذاری خواهد شد!</h2>
            <hr />
            <p>
                تا زمان بارگذاری کامل وبسایت، موقتا آیتم‌های ضروری را برای شما
                اینجا قرار داده‌ایم.
            </p>
            <p>
                آیتم‌هایی مثل دانلود فابل‌های مورد نیاز دوره‌ها، لینک‌های خاص
                و...
            </p>
            <hr />
            <p class="mb-4">
                همچنین پروژه‌هایی که در دوره‌های آموزشی انجام می‌شن رو هم روی گیتهاب قرار دادم.
                <br />
                تو دوره‌ی آموزشی گفته شده که کدوم ریپازیتوری مربوط به اون دوره هستش
            </p>
            <FancyLink icon="github-v1" href="https://github.com/eylay?tab=repositories" target="_blank">
                گیتهاب من
            </FancyLink>
        </div>
        <div class="overally"></div>
    </header>
</template>

<style lang="scss">
.banner {
    min-height: 600px;
    background-image: url(/landing/layers.svg);
    background-size: cover;
    background-position: bottom;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 32px;

    .content {
        color: var(--white);
        padding: 32px;
        background-color: rgba(255, 255, 255, 0.25);
        border-radius: 16px;
        position: relative;
        z-index: 100;
        text-align: center;

        h1 {
            font-weight: 700;
            font-size: 36px;
        }

        h2 {
            font-weight: 600;
            font-size: 30px;
        }

        hr {
            margin: 24px;
            border-color: var(--white);
        }

        p {
            font-weight: 500;
            font-size: 20px;
            line-height: 2rem;
        }
    }

    .overally {
        position: absolute;
        inset: 0;
        height: 100%;
        width: 100%;
        background-image: url(/landing/blobs.svg);
        z-index: 1;
    }
}
</style>
