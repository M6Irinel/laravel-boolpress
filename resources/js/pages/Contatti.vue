<template>
    <div class="flex f-column min-h-100vh">
        <header-vue />
        <div class="container flex f-column gap-20">
            <h1>Contatti</h1>
            <email-form />
        </div>
        <footer-vue />
    </div>
</template>


<script>
import HeaderVue from '../components/Header.vue';
import FooterVue from '../components/Footer.vue';
import EmailForm from '../components/EmailForm.vue';

export default {
    components: { HeaderVue, FooterVue, EmailForm }
}
</script>


<style lang="scss">

</style>
