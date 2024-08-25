<template>
    <div class="spacer"></div>
</template>

<style lang="scss" scoped>
@use '@mixins/mq' as mq;

.spacer {
    height: 50px;

    @include mq.desktop {
        height: 100px;
    }
}
</style>