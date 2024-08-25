<template>
    <footer class="footer">
        <span>
            Copyright &copy; Kacper Baran 2024
        </span>
    </footer>
</template>

<style lang="scss" scoped>
@use '@mixins/mq' as mq;

.footer {
    color: #9E9E9E;
    padding: 20px 0;
    text-align: center;

    @include mq.desktop {
        padding: 50px 0;
    }
}
</style>