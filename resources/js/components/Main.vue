<template>
    <main>
        <div class="container">
            <ul class="list-style-none grid-10 gap-10">
                <card-vue v-for="post in mainParams.posts" :key="post.id" :post="post" />
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

    components: { CardVue }
}
</script>
