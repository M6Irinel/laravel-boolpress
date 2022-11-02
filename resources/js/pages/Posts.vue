<template>
    <div class="flex f-column min-h-100vh">
        <header-vue />
        <main-vue />
        <footer-vue />
    </div>
</template>


<script>
// @ts-nocheck
import HeaderVue from '../components/Header.vue';
import MainVue from '../components/Main.vue';
import FooterVue from '../components/Footer.vue';

export default {
    name: 'PostsVue',

    components: { HeaderVue, MainVue, FooterVue },
}
</script>


<style lang="scss">

</style>
