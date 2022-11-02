<template>
    <main class="py-6 grow">
        <div class="container flex f-column h-100">
            <div class="list-style-none grid-12 gap-20">
                <router-link class="g-col-4 shadow-2-light" :to="{name: 'posts.show', params: {slug: post.slug}}" v-for="(post, i) in mainParams.posts" :key="post.id">
                    <card-vue :post="post" :id="i" />
                </router-link>
            </div>
            <ul class="mt-auto list-style-none flex gap-12 pt-5 pb-2 center">
                <li :class="{
                    'pointer bg-gray-3-H bg-gray-1 l': true,
                    'bg-orange': page == mainParams.current_page,
                }" v-for="page in mainParams.last_page" :key="page" @click="newPage(page)">{{ page }}</li>
            </ul>
        </div>
    </main>
</template>

<script>
// @ts-nocheck
import CardVue from './mini/card.vue';
import store from '../store/store';
import AppVue from '../views/App.vue';

export default {
    computed: {
        mainParams () {
            return store.mainParams;
        }
    },

    methods: {
        newPage ( post ) {
            AppVue.methods.fetchPosts( post );
        }
    },

    components: { CardVue },
}
</script>


<style scope lang="scss">
.l {
    width: 1.3rem;
    aspect-ratio: 1;
    border-radius: 50%;
    display: inline-block;
    text-align: center;
}
</style>
