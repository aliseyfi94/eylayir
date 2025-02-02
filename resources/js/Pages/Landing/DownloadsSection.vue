<script setup>
import FancyLink from '@/Components/FancyLink.vue';

defineProps(["courses"]);
</script>

<template>
    <section id="downloads-section" class="downloads">
        <div class="area-header">
            <div class="icon-area">
                <img
                    src="/icons/download.png"
                    class="download-icon"
                    alt="download-icon"
                />
            </div>
            <div class="text-area">
                <h2 class="main-text">دانلود فایل‌های ضروری</h2>
                <h4 class="sub-text">
                    برای برخی از دوره‌ها نیاز به دانلود فایل فشرده مربوط به دوره
                    دارید
                </h4>
            </div>
        </div>

        <div class="area-body">
            <div class="download-list">
                <div v-for="(course, key) in courses" class="download-item">
                    <div class="card">
                        <div class="seasons-info">
                            <img src="/icons/layers-fill.png" class="seasons-icon" alt="seasons-icon">
                            <span class="seasons-text"> تعداد فصل </span>
                            <span class="seasons-count">{{ course.seasons }}</span>
                        </div>
                        <div class="content">
                            <p class="para">
                                <h3 class="para-title"> {{ course.title }} </h3>
                                <h3 class="para-limoonad-title">
                                    {{ course.limoonad_title }}
                                </h3>
                                <hr class="para-devider">
                                <div class="links-wraper">
                                    <FancyLink :theme="course.order %2 == 0 ? 'primary' : 'secondary'" icon="download-v2" :href="`/files/${key}.zip`" download target="_blank">
                                    دانلود فایل فشرده
                                </FancyLink>
                                <FancyLink :theme="course.order %2 == 0 ? 'primary' : 'secondary'" icon="share" :href="`https://www.limoonad.com/course/${course.limoonad_id}`" target="_blank">
                                    باز کردن دوره در لیموناد
                                </FancyLink>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped lang="scss">
.downloads {
    .area-header {
        display: flex;
        align-items: center;

        .icon-area {
            display: inline-block;
            background-color: var(--primary);
            border-radius: 50%;
            padding: 16px;
            margin-left: 16px;

            .download-icon {
                width: 64px;
                height: 64px;
            }
        }

        .text-area {
            font-weight: 500;

            .main-text {
                font-size: 20px;
            }

            .sub-text {
                font-size: 18px;
            }
        }
    }
    .area-body {
        margin-top: 32px;

        .download-list {
            display: flex;
            flex-wrap: wrap;

            .download-item {
                width: 33%;
                padding: 24px;

                .card {
                    position: relative;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 24px;
                    line-height: 1.6;
                    transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);

                    .seasons-info {
                        
                        position: absolute;
                        top: 16px;
                        left: 16px;
                        display: flex;
                        align-items: center;
                        gap: 0 8px;
                        color: var(--white);
                        padding: 6px 16px;
                        border-radius: 100px;
                        
                        .seasons-icon {
                            width: 18px;
                            height: 18px;
                        }
                        .seasons-text {
                            font-size: 14px;
                        }
                        .seasons-count {
                            font-size: 18px;
                        }
                    }


                    .content {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        gap: 24px;
                        padding: 36px;
                        border-radius: 22px;
                        color: #ffffff;
                        overflow: hidden;
                        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
                        width: 100%;
                        min-height: 250px;
                        .para {
                            z-index: 1;
                            opacity: 1;
                            font-size: 16px;
                            transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
                            .para-title {
                                font-size: 18px;
                            }
                            .para-limoonad-title {
                                display: block;
                                margin: 4px 0;
                                font-size: 20px;
                                font-weight: 600;
                            }
                            .para-devider {
                                margin: 16px 0;
                                border-width: 1px;
                                border-style: solid;
                            }
                            .links-wraper {
                                display: flex;
                                gap: 8px;
                            }
                        }
                    }

                    .content::before {
                        position: absolute;
                        content: "";
                        top: -4%;
                        left: 50%;
                        width: 90%;
                        height: 90%;
                        transform: translate(-50%);
                        background: var(--light-1);
                        z-index: -1;
                        transform-origin: bottom;
                        border-radius: inherit;
                        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
                    }

                    .content::after {
                        position: absolute;
                        content: "";
                        top: -8%;
                        left: 50%;
                        width: 80%;
                        height: 80%;
                        transform: translate(-50%);
                        background: var(--light-2);
                        z-index: -2;
                        transform-origin: bottom;
                        border-radius: inherit;
                        transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
                    }
                }
                .card:hover {
                    transform: translate(0px, -8px);
                }

                .card:hover .content::before {
                    rotate: -4deg;
                    top: 0;
                    width: 100%;
                    height: 100%;
                }

                .card:hover .content::after {
                    rotate: 4deg;
                    top: 0;
                    width: 100%;
                    height: 100%;
                }
            }

            .download-item:nth-child(even) .content {
                background: var(--primary);
            }
            .download-item:nth-child(odd) .content {
                background: var(--secondary);
            }
            .download-item:nth-child(even) .seasons-info {
                background: var(--primary-2);
            }
            .download-item:nth-child(odd) .seasons-info {
                background: var(--secondary-2);
            }
        }
    }
}


@media only screen and (max-width: 1360px) {
    .download-list .download-item {
        width: 50% !important;
    }
}

@media only screen and (max-width: 1080px) {
    .download-list .download-item {
        width: 100% !important;
    }
    .card .content {
        padding-top: 64px !important;
    }

    .links-wraper {
        flex-wrap: wrap;
        justify-content: center;
        gap: 16px !important;
    }
}

</style>
