<template>
    <main class="py-6 grow">
        <div class="container flex f-column h-100">
            <ul class="list-style-none grid-12 gap-20">
                <card-vue v-for="post in mainParams.posts" :key="post.id" :post="post" />
            </ul>
            <ul class="mt-auto list-style-none flex gap-12 pt-5 pb-2 center">
                <li :class="{
                    'pointer bg-gray-3-H bg-gray-1 l': true,
                    'bg-orange': page == mainParams.current_page,
                }" v-for="page in mainParams.last_page" :key="page" @click="$emit('page', page)">{{ page }}</li>
            </ul>
        </div>
    </main>
</template>

<script>
import CardVue from './mini/card.vue';

export default {
    props: {
        mainParams: Object
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