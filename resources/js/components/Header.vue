<template>
    <header>
        <div v-html="headerParams.forLogin"></div>
        <div class="container flex gap-10 p-2 border-b">
            <router-link v-for="(router, i) in routes" :key="i" class="btn btn-primary px-2 py-1" :to="{name: router.name}">{{router.name}}</router-link>
        </div>
    </header>
</template>

<script>
// @ts-nocheck
import AppVue from '../views/App.vue';
import store from '../store/store';

export default {
    name: 'HeaderVue',

    data () {
        return {
            headerParams: AppVue.data().headerParams,
            routes: this.$router.options.routes
        }
    },

    created () {
        if ( store.one ) {
            this.routes.pop();
            this.routes.pop();
            store.one = false;
        }
    }
}
</script>
