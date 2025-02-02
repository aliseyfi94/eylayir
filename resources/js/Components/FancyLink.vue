<script setup>
defineProps({
    'icon' : {
        type: String,
        required: false,
    },
    'theme' : {
        type: String,
        required: false,
        default : 'primary'
    },
    'border' : {
        type: String,
        required: false,
        default : 'light'
    },
})
</script>

<template>
    <a class="fancy-link" :class="`${theme}-theme ${border}-border`">
        <img v-if="icon" :src="`/icons/${icon}.png`" class="link-icon" alt="link-icon">
        <slot />
    </a>
</template>


<style scoped lang="scss">
    .fancy-link {
        display: inline-flex;
        align-items: center;
        border-width: 2px;
        border-style: solid;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.33s;
        color: var(--white);

        .link-icon {
            width: 24px;
            height: 24px;
            margin-left: 8px;
        }
        

        &.light-border {
            border-color: var(--white);
        }
        &.primary-border {
            border-color: var(--primary-2);
        }
        &.secondary-border {
            border-color: var(--secondary-2);
        }      

        &.primary-theme {
            background-color: var(--primary);
        }
        &.secondary-theme {
            background-color: var(--secondary);
        }

        &.primary-theme:hover {
            background-color: var(--primary-2);
        }
        &.secondary-theme:hover {
            background-color: var(--secondary-2);
        }
    }

</style>
