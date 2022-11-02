<template>
    <div>
        <router-view />
    </div>
</template>


<script>
// @ts-nocheck
import store from '../store/store';

export default {
    data () {
        return {
            headerParams: {
                title: 'POSTS',
                adminPostsIndex: adminPostsIndex,
                forLogin: forLogin
            },
            // mainParams: {
            //     posts: [],
            //     last_page: 0,
            //     total: 0,
            //     current_page: 1
            // }
        }
    },

    methods: {
        fetchPosts ( page = 1 ) {
            axios.get( '/api/posts', { params: { page: page } } )
                .then( r => {
                    const { data, last_page, total, current_page } = r.data.result;
                    store.mainParams.last_page = last_page;
                    store.mainParams.total = total;
                    store.mainParams.current_page = current_page;
                    store.mainParams.posts = data;
                } );
        }
    },

    created () {
        this.fetchPosts();
    }
}
</script>


<style lang="scss">

</style>
