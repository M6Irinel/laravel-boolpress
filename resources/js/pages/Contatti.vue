<template>
    <div class="flex f-column min-h-100vh">
        <header-vue />
        <div class="container">
            <h1>Contatti</h1>
        </div>
        <footer-vue />
    </div>
</template>


<script>
import HeaderVue from '../components/Header.vue';
import FooterVue from '../components/Footer.vue';

export default {
    components: { HeaderVue, FooterVue }
}
</script>


<style lang="scss">

</style>
