<template>
    <div class="min-h-100vh flex f-column">
        <header-vue :headerParams="headerParams" />
        <main-vue :mainParams="mainParams" @page="fetchPosts" />
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
                last_page: 0,
                total: 0,
                current_page: 1
            }
        }
    },

    methods: {
        fetchPosts ( page = 1 ) {
            axios.get( '/api/posts', { params: { page: page } } )
                .then( r => {
                    const { data, last_page, total, current_page } = r.data.result;
                    this.mainParams.last_page = last_page;
                    this.mainParams.total = total;
                    this.mainParams.current_page = current_page;
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