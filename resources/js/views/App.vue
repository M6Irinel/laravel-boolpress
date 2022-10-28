<template>
    <div class="min-h-100vh flex f-column">
        <header-vue :headerParams="headerParams"  />
        <main-vue :mainParams="mainParams" />
        <footer-vue />
    </div>
</template>


<script>
// @ts-nocheck
import HeaderVue from '../components/Header.vue';
import MainVue from '../components/Main.vue';
import FooterVue from '../components/Footer.vue';

export default {
    name: 'AppVue',

    components: { HeaderVue, MainVue, FooterVue },

    data () {
        return {
            headerParams: {
                title: 'POSTS',
                adminPostsIndex: adminPostsIndex,
                forLogin: forLogin
            },
            mainParams: {
                posts: [],
            }
        }
    },

    methods: {
        fetchPosts ( page = 1 ) {
            axios.get( '/api/posts', { params: { page: page } } )
                .then( r => {
                    const { data } = r.data.result;
                    this.mainParams.posts = data;
                } )
        }
    },

    beforeMount () {
        this.fetchPosts();
    }
}
</script>


<style lang="scss">

</style>