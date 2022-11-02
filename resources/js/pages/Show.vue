<template>
    <div class="flex f-column min-h-100vh">
        <header-vue />
        <div class="container">
            <h1 class="py-3">{{  result.title  }}</h1>
            <h4 class="py-2">Slug: <strong>{{  this.$route.params.slug  }}</strong></h4>
            <p v-if="result.category">Category: <strong>{{  result.category.name  }}</strong></p>
            <h5 class="bold pb-1">Tags:</h5>
            <ul class="list-style-none bold ml-3">
                <li v-for="(el, i) in result.tags" :key="i">{{  el.name  }}</li>
            </ul>
            <h5 class="pt-3 bold">Description: </h5>
            <p class="py-1">{{  result.description  }}</p>
        </div>
        <footer-vue />
    </div>
</template>


<script>
// @ts-nocheck
import HeaderVue from '../components/Header.vue';
import FooterVue from '../components/Footer.vue';

export default {
    components: { HeaderVue, FooterVue },

    data () {
        return {
            result: {}
        }
    },

    methods: {
        fetchPost () {
            axios.get( `/api/posts/${ this.$route.params.slug }` )
                .then( j => {
                    this.result = j.data.result[ 0 ];
                    console.log( this.result );
                } )
        }
    },

    beforeMount () {
        this.fetchPost();
    }
}
</script>


<style lang="scss">

</style>
