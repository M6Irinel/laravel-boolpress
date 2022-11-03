<template>
    <div class="flex f-column min-h-100vh bg-gray-3">
        <header-vue />
        <main class="grid grow">
            <div>
                <h1>Error: <strong>404</strong></h1>
                <p>La paggina cercata, NON è stata trovata.</p>
                <router-link class="fs-5" :to="{name: 'home'}">Ritorna al HOME</router-link>
            </div>
        </main>
    </div>
</template>


<script>
// @ts-nocheck
import HeaderVue from '../components/Header.vue';

export default {
    components: { HeaderVue },
}
</script>


<style scoped lang="scss">
main {
    place-items: center;
}
</style>
