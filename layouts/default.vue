<template>
    <main class="page">
        <slot />
    </main>
</template>

<style lang="scss" scoped>
@use '@mixins/mq' as mq;

.page {
    background-color: #0F0F0F;
    padding: 30px 20px 0;

    @include mq.desktop {
        padding: 120px 200px 0;
    }
}
</style>